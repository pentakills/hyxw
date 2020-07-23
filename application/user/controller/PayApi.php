<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 陈风任 <491085389@qq.com>
 * Date: 2020-05-22
 */

namespace app\user\controller;

use think\Page;
use think\Db;
use think\Config;
use app\user\logic\PayApiLogic;

class PayApi extends Base {

    /**
     * 构造方法
     */
    public function __construct(){
        parent::__construct();
        // 支付API配置
        $this->pay_api_config_db = Db::name('pay_api_config');

        // 支付API逻辑层
        $this->PayApiLogic = new PayApiLogic();
    }

    // 支付接口列表
    public function select_pay_method()
    {
        $post = input('post.');

        /* 订单查询 */
        $Order = $this->PayApiLogic->GetFindOrderData($post, true);
        /* END */

        /* 支付API配置信息查询 */
        $Config  = $this->PayApiLogic->GetPayApiConfig($post);
        $PayInfo = $Config['pay_info'];
        /* END */

        if (!empty($Config) && 1 == $Config['pay_id'] && 'wechat' == $Config['pay_mark']) {
            /*系统内置的微信支付*/
            $this->PayApiLogic->UseWeChatPay($post, $Order, $PayInfo);
            /* END */

        } else if (!empty($Config) && 2 == $Config['pay_id'] && 'alipay' == $Config['pay_mark']) {
            /*系统内置的支付宝支付*/
            $this->PayApiLogic->UseAliPayPay($post, $Order, $PayInfo);
            /* END */

        } else if (!empty($Config) && !empty($Config['pay_mark']) && 0 == $Config['system_built']) {
            /*第三方插件*/
            $ControllerName  = "\weapp\\" . $Config['pay_mark']."\controller\\" . $Config['pay_mark'];
            $UnifyController = new $ControllerName;
            $ResultData = $UnifyController->UnifyGetPayAction($PayInfo, $Order);
            if (!empty($ResultData)) {
                $this->success('订单支付中', $ResultData['url'], $ResultData['data']);
            } else {
                $this->error('订单异常，刷新重试');
            }
            /* END */
        }
    }

    // 订单支付轮询
    public function order_pay_polling()
    {
        if (IS_AJAX_POST) {
            $post = input('post.');

            /* 订单查询 */
            $Order = $this->PayApiLogic->GetFindOrderData($post);
            /* END */

            /* 支付API配置信息查询 */
            $Config  = $this->PayApiLogic->GetPayApiConfig($post);
            $PayInfo = $Config['pay_info'];
            /* END */

            /* 根据所选的支付方式执行相应操作 */
            if (!empty($Config) && 1 == $Config['pay_id'] && 'wechat' == $Config['pay_mark']) {
                // 系统内置微信支付---微信支付订单处理
                $this->PayApiLogic->WeChatPayProcessing($post, $Order, $PayInfo, $Config);

            } else if (!empty($Config) && 2 == $Config['pay_id'] && 'alipay' == $Config['pay_mark']) {
                // 系统内置支付宝支付---支付宝支付订单处理
                $this->PayApiLogic->AliPayPayProcessing($post, $Order, $PayInfo, $Config);
                
            } else if (!empty($Config) && !empty($Config['pay_mark']) && 0 == $Config['system_built']) {
                // 第三方支付
                $ControllerName  = "\weapp\\" . $Config['pay_mark']."\controller\\" . $Config['pay_mark'];
                $UnifyController = new $ControllerName;
                $ResultData = $UnifyController->OtherPayProcessing($PayInfo, $post['unified_number']);
                if (is_array($ResultData)) {
                    // 订单数据更新处理
                    $this->PayApiLogic->OrderProcessing($post, $Order, $ResultData, $Config);
                } else {
                    $this->success($ResultData);
                }
            }
            /* END */
        }
    }

    // 购物余额支付(仅购物时使用)
    public function balance_payment()
    {
        if (IS_AJAX_POST) {
            $post = input('post.');
            if (empty($post['unified_id'])) $this->error('订单异常，刷新重试');
            $Data = Db::name('shop_order')->field('order_amount, order_id, order_status')->find($post['unified_id']);
            if (empty($Data)) $this->error('订单异常，刷新重试');
            
            //1已付款(待发货)，2已发货(待收货)，3已完成(确认收货)，-1订单取消(已关闭)，4订单过期
            $url = urldecode(url('user/Shop/shop_order_details', ['order_id' => $Data['order_id']]));
            if (in_array($Data['order_status'], [1, 2, 3])) {
                $this->success('订单已支付！即将跳转', $url);
            } else if ($Data['order_status'] == 4) {
                $this->success('订单已过期！即将跳转', $url);
            } else if ($Data['order_status'] == -1) {
                $this->success('订单已关闭！即将跳转', $url);
            }

            // 订单数据更新处理
            if ($this->users['users_money'] >= $Data['order_amount']) {
                $Where = [
                    'users_id' => $this->users_id,
                    'lang'     => $this->home_lang
                ];
                $post['payment_amount'] = $Data['order_amount'];
                $post['payment_type']   = '余额支付';
                $OrderData = [
                    'order_status' => 1,
                    'pay_name'     => 'balance',// 余额支付
                    'wechat_pay_type' => '',    // 余额支付则清空微信标志
                    'pay_details'  => serialize($post),
                    'pay_time'     => getTime(),
                    'update_time'  => getTime(),
                ];
                $OrderWhere = [
                    'order_id'   => $post['unified_id'],
                    'order_code' => $post['unified_number'],
                ];
                $OrderWhere = array_merge($Where, $OrderWhere);
                $return = Db::name('shop_order')->where($OrderWhere)->update($OrderData);

                if (!empty($return)) {
                    $DetailsWhere = [
                        'order_id'   => $post['unified_id'],
                    ];
                    $DetailsWhere = array_merge($Where, $DetailsWhere);
                    $DetailsData['update_time'] = getTime();
                    Db::name('shop_order_details')->where($DetailsWhere)->update($DetailsData);

                    $UsersData = [
                        'users_money' => $this->users['users_money'] - $Data['order_amount'],
                        'update_time' => getTime(),
                    ];
                    $users_id = Db::name('users')->where($Where)->update($UsersData);
                    if (!empty($users_id)) {
                        // 添加订单操作记录
                        AddOrderAction($post['unified_id'], $this->users_id, 0, 1, 0, 1, '支付成功！','会员使用余额完成支付！');

                        // 虚拟自动发货
                        model('Pay')->afterVirtualProductPay($DetailsWhere);

                        // 邮箱发送
                        $Result['email'] = GetEamilSendData(tpCache('smtp'), $this->users, $OrderWhere, 1, 'balance');

                        // 手机发送
                        $Result['mobile'] = GetMobileSendData(tpCache('sms'), $this->users, $OrderWhere, 1, 'balance');

                        // 订单操作完成，返回跳转
                        $url = url('user/Shop/shop_order_details', ['order_id' => $post['unified_id']]);
                        $this->success('支付成功，处理订单完成', $url, $Result);
                    }
                } else {
                    $this->error('订单支付异常，请刷新后再进行支付！');
                }
            } else {
                $url = urldecode(url('user/Pay/pay_account_recharge'));
                $this->error('余额不足，若要使用余额支付，请去充值！',$url);
            }
        }
    }

    // 微信支付，获取订单信息并调用微信接口，生成二维码用于扫码支付
    public function pay_wechat_png() {
        if (!empty($this->users_id)) {
            $unified_number   = input('param.unified_number/s');
            $transaction_type = input('param.transaction_type/d');
            if (1 == $transaction_type) {
                // 充值订单
                $where  = array(
                    'users_id'     => $this->users_id,
                    'order_number' => $unified_number
                );
                $data  = Db::name('users_money')->where($where)->find();
                $out_trade_no = $data['order_number'];
                $total_fee    = $data['money'];

            } else if (2 == $transaction_type) {
                // 购买订单
                $where  = array(
                    'users_id'   => $this->users_id,
                    'order_code' => $unified_number
                );
                $data  = Db::name('shop_order')->where($where)->find();
                $out_trade_no = $data['order_code'];
                $total_fee    = $data['order_amount'];
            } else if (3 == $transaction_type) {
                // 会员升级订单
                $where  = array(
                    'users_id'     => $this->users_id,
                    'order_number' => $unified_number
                );
                $data  = Db::name('users_money')->where($where)->find();
                $out_trade_no = $data['order_number'];
                $total_fee    = $data['money'];
            }

            // 调取微信支付链接
            $payUrl = model('PayApi')->payForQrcode($out_trade_no, $total_fee);

            // 生成二维码加载在页面上
            vendor('wechatpay.phpqrcode.phpqrcode');
            $qrcode = new \QRcode;
            $pngurl = $payUrl;
            $qrcode->png($pngurl);
            exit();
        } else {
            $this->redirect('user/Users/login');
        }
    }

    // 会员升级支付处理
    public function users_upgrade_pay()
    {
        if (IS_AJAX_POST) {
            $post = input('post.');

            // 处理API标识
            $post['pay_mark'] = $post['pay_mark'][$post['pay_id']];

            // 是否选择产品
            if (empty($post['type_id'])) $this->error('请选择购买产品！');

            /* 判断是否可以升级 */
            $this->PayApiLogic->IsAllowUpgrade($post);
            /* END */

            if (isset($post['pay_id']) && 0 == $post['pay_id']) {
                // 余额支付
                $this->PayApiLogic->BalancePayment($post['order_number']);
            } else {
                /* 支付API配置信息查询 */
                $Config  = $this->PayApiLogic->GetPayApiConfig($post);
                $PayInfo = $Config['pay_info'];
                /* END */

                if (!empty($Config) && 1 == $Config['pay_id'] && 'wechat' == $Config['pay_mark']) {
                    /*系统内置的微信支付*/
                    $this->PayApiLogic->WeChatPayment($post, $PayInfo);
                    /* END */

                } else if (!empty($Config) && 2 == $Config['pay_id'] && 'alipay' == $Config['pay_mark']) {
                    /*系统内置的支付宝支付*/
                    $this->PayApiLogic->AliPayPayment($post, $PayInfo);
                    /* END */

                } else if (!empty($Config) && !empty($Config['pay_mark']) && 0 == $Config['system_built']) {
                    /* 订单查询 */
                    $Order = $this->PayApiLogic->GetPayOrderData($post, $PayInfo, $Config['pay_mark']);
                    $Order['unified_amount'] = $Order['money'];
                    $Order['unified_number'] = $Order['order_number'];
                    /* END */
                    
                    /*第三方插件*/
                    $ControllerName  = "\weapp\\" . $Config['pay_mark']."\controller\\" . $Config['pay_mark'];
                    $UnifyController = new $ControllerName;
                    $ResultData = $UnifyController->UnifyGetPayAction($PayInfo, $Order);
                    if (!empty($ResultData)) {
                        $ResultData['data']['pay_id'] = $Config['pay_id'];
                        $ResultData['data']['pay_mark'] = $Config['pay_mark'];
                        $ResultData['data']['unified_id'] = $Order['moneyid'];
                        $ResultData['data']['unified_number'] = $Order['unified_number'];
                        $this->success('订单支付中', $ResultData['url'], $ResultData['data']);
                    } else {
                        $this->error('订单异常，刷新重试');
                    }
                    /* END */
                }
            }
        }
    }
}