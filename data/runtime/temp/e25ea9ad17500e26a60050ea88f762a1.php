<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"./template/default/pc/index.htm";i:1595388611;s:63:"D:\phpStudy\PHPTutorial\WWW\hyxw\template\default\pc\header.htm";i:1595406472;s:63:"D:\phpStudy\PHPTutorial\WWW\hyxw\template\default\pc\footer.htm";i:1595388904;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/state.js","","",""); echo $__VALUE__; ?>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/global.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/widget.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/variouscomponents.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/images.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/theme.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/color_0.css">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/master.css" rel="stylesheet">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/you.css">
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/slick.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/style.css","","",""); echo $__VALUE__; ?>
<!-- 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery1.42.min.js"></script> -->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script>

<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/public.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/lightbox.min.css" rel="stylesheet"> 

<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/common.js"></script>  
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/theme.js"></script>  

<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/layer.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/language.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.formsvalidation.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/extend.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.nodecommon.js"></script>

<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/components.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.menu_style.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.init.js"></script>

 <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.SuperSlide.2.1.1.js"></script>
 <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.SuperSlide.2.1.3.js"></script>
<!-- 

 -->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/slick.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/bootstrap.min.js","","",""); echo $__VALUE__; ?>
<script type="text/javascript">
$(function(){
    dataAnimate();
    (function($,lanno){
        if(lanno === "" || lanno === "default"){
            return '';
        }
        $(".w-languege").each(function(){
            $(this).find("a").each(function(){
                if($(this).data("lanno") === lanno){
                    $(this).addClass("cur");
                }else{
                    if($(this).hasClass("cur")){
                        $(this).removeClass("cur");
                    }
                }
            });
        });
    })(jQuery,"cn");
});
</script>
<style type="text/css">
	.picFocus{ margin:0 auto;  width:1200px;  padding:5px;  position:relative;  overflow:hidden;  zoom:1;   }
	.picFocus .hd{ width:100%; padding-top:5px;  overflow:hidden; }
	.picFocus .hd ul{ margin-right:-5px;  overflow:hidden; zoom:1; }
	.picFocus .hd ul li{ padding-top:5px; float:left;  text-align:center;  width:295px; height:100px;  cursor:pointer;  }
	.picFocus .hd ul li b{ font-size: 20px;display:block;margin-bottom: 20px; }
	.picFocus .hd ul li span{ font-size: 24px;font-weight: 700; }
	.picFocus .hd ul li.on{ border-bottom:2px solid #047ac0;color: #047ac0;}
	.picFocus .bd li{ vertical-align:middle; }
	.picFocus .bd img{ width:1200px; height:px; display:block;  }
</style>
</head>
<body>
<div class="body"> 	<div class="top" style="height: 60px;line-height: 60px;overflow: hidden;background-color: #eeeeee;">
	    <div class="g_cw clearfix" style="width:100%;padding: 0 10px;margin: 0 auto;">
	       <!--   <p class="left" style="float: left;color: #0c50d7;font-weight: 700;font-size: 16px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></p> -->
		   <p class="left" style="float: left;margin-left: 8%;"><img src="template/default/pc/skin/img/wel.png" height="60px"  /></p> 
	          <p class="right" style="float: right;color: #047ac0;margin-right: 5%;"><!-- <a href="" target="_blank"><img src="template/default/pc/skin/img/alibb.png"   /></a> &nbsp;&nbsp; --><span style="color: #047ac0;font-weight: 700;font-size: 26px;"><b style="font-size: 28px;">TEL：</b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?></span></p>
	        </div>
	  </div>
<div class=" top-nav" style="background-color: #047ac0;max-height: 110px;">
  <div class="row clearfix">
    <div class="mobile-nav-toggle"><i class="fa fa-navicon fa-2x"></i></div>
    <div class="nav_right_mask"></div>
    <div class="col-logo">
      <div class="w-logo">
        <h1 style="display:none;"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"></a></h1>
        <a  href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"  class="w-logo-img"  > <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" style="display: inline-block; height: 110px;width: 600px;"/> </a> </div>
    </div>
    <div class="col-right clearfix">
      <div class="w-nav g-active-add" style="margin-right: 20px;float: left;">
        <div class="w-nav-in">
          <ul class="nav_inner clearfix" id="g-web-ul-menu" style="display:none;">
            <li  class=""><a href = "<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" style="font-size: 20px;">网站首页</a><i class="nav_simpline_cur"></i></li><!--<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>-->
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li  class="<?php echo $field['currentstyle']; ?>">
              <div class="li-parent-div li-parentOne-div"><a href = "<?php echo $field['typeurl']; ?>" style="font-size: 20px;"><?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa fa-plus"></i><?php endif; ?> </a></div>
              <i class="nav_simpline_cur"></i> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
              <div class="submenu">
                <div class="back-div"><i class="fa fa-angle-left"></i><span>返回</span></div>
                <ul>
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,20, true) : $field['children']->slice(0,20, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                  <li><a href = "<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
                  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                </ul>
              </div>
              <?php endif; ?> </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            <div class="nav_moveBox"></div>
          </ul>
        </div>
      </div>
      <div class="topLogBox">
        <div class="topLogBox-in">
          <div class="col-com"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(function(){
        var banOffTop=$(".top-nav").offset().top;//获取到距离顶部的垂直距离
        var scTop=0;//初始化垂直滚动的距离
        $(document).scroll(function(){
            scTop=$(this).scrollTop();//获取到滚动条拉动的距离
         //   console.log(scTop);//查看滚动时，垂直方向上，滚动条滚动的距离
            if(scTop>=banOffTop){
            //核心部分：当滚动条拉动的距离大于等于导航栏距离顶部的距离时，添加指定的样式
                $(".top-nav").addClass("navbar-fixed-top");
            }else{
                $(".top-nav").removeClass("navbar-fixed-top");
            }

        })
    })
</script>


  <section class="w-container bannerBox ">
    <div class="banner">
      <ul class="bxslider">
        <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li> <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" title="<?php echo $field['title']; ?>"
                             style=""  
                             /> <a href="javascript:void(0);" target="_self"><span  style="display:none;">none</span></a> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
      <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.bxslider.js"></script>
      <link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/jquery.bxslider.css">
      <script type="text/javascript">
            var scale = '';
            var speed = 500;
            var pause = 5;
            $(function () {
                $('.banner>ul').bxSlider({
                    mode: 'fade', /*滚动方式 fade、vertical、horizontal */
                    auto: true, /*自动滚动*/
                    autoControls: false, /*自动滚动按钮*/
                    infiniteLoop: true, /*循环滚动*/
                    hideControlOnEnd: true, /*无效按钮隐藏*/
                    adaptiveHeight: true, /*图片是否实际缩放比高度显示控制，图片比例不一样高度变化*/
                    minSlides: 1,
                    maxSlides: 2,
                    scale: scale,
                    speed: speed,
                    pause: pause * 1000
                });
            });
        </script> 
    </div>
  </section>
      <!--产品中心-->
    <!-- productCener_start -->
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	<div class="pro">
    <div class="w-section "> 
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in  ">
          <div class="li-div">
            <div class="not-animated w-text" data-animate="" style="">
              <div class="w-title w-title1">
                <div class="w-title-in">
                  <div class="w-title-inner">
                    <div class="title-h-in title-word">
                      <h1 class="color_main color_h">产品展示</h1>
                      <!--<span class="color_vice color_span"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>-->
                      <div class="title_line"></div>
					   <div class="title_eng">
						Products
					   </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
            </div>
          </div>
		    <div class="pro_lanfra "> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 7; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <span><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a> </span> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?><!-- <span><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" class="promore" title="查看更多">查看更多</a></span> --> </div>
		  <!--产品分类结束-->
		  <div class="view-port">
		    <ul class="slider-container" style="float: left;width: 1204px;">
		      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'row' => '8',
  'titlelen' => '30',
  'infolen' => '30',
  'flag' => 'c',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 30, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
		      <li class="item" style="float: left;width: 294px;height: 285px;display: inline;margin: 0 0 0 4px;"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="proimg"><img style="padding: 3px;background-color: #047ac0;" src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" width="273" height="248" />
		        <p class="proname1"><?php echo $field['title']; ?></p>
		       </a> </li>
		      <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
		    </ul>
		  </div>

	</div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <!-- productCener_end -->
	
	<!--公司简介-->
	 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	<div class="w-container w-main">
	  <div class="w-section company">
	    <div class="row" >
	      <div class="row-mask" ></div>
	      <div class="wrap-content-in  ">
	        <div class="li-div">
	          <div class="not-animated w-text" data-animate="" style="">
	            <div class="w-title w-title1">
	              <div class="w-title-in">
	                <div class="w-title-inner">
	                  <div class="title-h-in">
	                    <h1 class="color_main color_h"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h1>
	                    <!--<span class="color_vice color_span"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>-->
	                 <div class="title_line"></div>
	                  <div class="title_eng">
	                 		<?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?>
	                  </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      
	        <div class="li-div col-li-div">
	          <div class="col-table">
	            <table class="div-table div-table-first" width="100%" cellspacing="0" cellpadding="0" border="0">
	              <tbody>
	                <tr>
	                  <td class="td-w" width="50%"><div class="div-padding">
	                      <div class="li-div">
	                        <div class="not-animated w-simImg" data-animate="" style="cursor:pointer;text-align:center;padding-top:20px;">
	                          <div class="image-w"> <a title="" style="cursor:default;" href="javascript:void(0);" >
	                            <div class="img" > <img src="<?php  $__VALUE__ = isset($channelartlist["litpic"]) ? $channelartlist["litpic"] : "变量名不存在"; echo $__VALUE__; ?>"  /> </div>
	                            <div class="caption w-img-caption">
	                              <div class="captionbg"></div>
	                            </div>
	                            </a> </div>
	                        </div>
	                      </div>
	                    </div></td>
	                  
	                  <td class="td-w" width="50%"><div class="div-padding">
	                      <div class="li-div">
	                        <div class="not-animated w-text" data-animate="" style="">
	                          <p><span style="font-size:24px;font-weight:bold;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></span><br/>
	                            <span style="color:#a4a4a4;"></span></p>
	                          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", "single_content"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
	                          <?php echo html_msubstr($field['content'],0,255); ?>...
	                          <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
	                      </div>
	                      <div class="li-div">
	                        <div class="not-animated w-button" data-animate="" style="padding-top:20px;">
	                          <div style="background-color: #047ac0 ;border-radius: 5px;" class=" btn-default-w btn-large-w g-click-to-link" onclick="window.open('<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>','_self')"> <span class="btn-inner" style="color: #fff ;">查看更多</span> </div>
	                          <a style="display:none;" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" ><span ></span></a> 
						<!-- 	  <div style="background-color: #3b5d7f ;border-radius: 5px;margin-left: 20px;" class=" btn-default-w btn-large-w g-click-to-link" onclick="window.open('<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>','_self')"> <span class="btn-inner" style="color: #fff ;">发展历程</span> </div>
							  <a style="display:none;" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" ><span ></span></a> 
							  
							  </div> -->							  
	                      </div>
	                    </div></td>
	                   </tr>
	              </tbody>
	            </table>
	          </div>
	        </div>
	        <div class="li-div">
	          <div class="w-space space-b noChoose"  style="height:45px;">
	            <div class="stretch-b"></div>
	          </div>
	        </div>
	      </div>
	    </div>
	     </div>
	     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>

      <!--公司优势-->
<div style=" height: auto; margin: 0px auto;">
	<div class="li-div">
	  <div class="not-animated w-text" data-animate="" style="">
	    <div class="w-title w-title1">
	      <div class="w-title-in">
	        <div class="w-title-inner">
	          <div class="title-h-in">
	            <h1 class="color_main color_h">环亚新威优势</h1>
	            <!--<span class="color_vice color_span"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>-->
	         <div class="title_line"></div>
	          <div class="title_eng">
	         		HuanYaXinWei Advantage
	          </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
    </div>
	
	<div class="picFocus">
		<div class="bd">
			<ul>
				  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "18"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'typeid' => '18',
  'row' => '4',
  'titlelen' => '30',
  'infolen' => '30',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 30, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li><a target="_blank" href="###"><img src="<?php echo $field['litpic']; ?>" /></a></li>
				  <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
			</ul>
		</div>
	
		<div class="hd">
			<ul>
				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "18"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'typeid' => '18',
  'row' => '4',
  'titlelen' => '30',
  'infolen' => '30',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 30, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li><b>0<?php echo $i; ?></b><span><?php echo $field['title']; ?></span></li>
				 <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
			</ul>
		</div>
	
	</div>
	<script type="text/javascript">jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });</script>
	
	<!--新闻资讯-->
	 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	   <div class="w-section "> 
	     <div class="row" >
	       <div class="row-mask" ></div>
	       <div class="wrap-content-in  ">
	         <div class="li-div">
	           <div class="not-animated w-text" data-animate="" style="margin-top: 45px;">
	             <div class="w-title w-title1">
	               <div class="w-title-in">
	                 <div class="w-title-inner">
	                   <div class="title-h-in">
	                     <h1 class="color_main color_h"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h1>
	                     <!--<span class="color_vice color_span"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>-->
	                 <div class="title_line"></div>
	                  <div class="title_eng">
	                 	<?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?>
	                  </div>
	                   </div>
	                 </div>
	               </div>
	             </div>
	           </div>
	         </div>
	       <div id="new_box"> 
	       	<div class="new_con">
	       		<div class="newtel">
	       			<ul class="new_telst">
	       				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
	       				<li class="newon"><?php echo $field['typename']; ?></li>
	       				<?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
	       				<li class=""><?php echo $field['typename']; ?></li>
	       				<?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	       				<p style="">
	       				</p>
	       			</ul>
	       			<span style="color: #b1030a;position: absolute;bottom: 0;right: 0;"><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">MORE+</a></span>
	       			<div class="clear">
	       			</div>
	       		</div>
	       		<div class="new-wrap">
	       			<!--案例1-->
	       
	       			<div class="new_lst" style="display: block;">
	       				<ul class="new_lst_cn">
	       					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 1; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'limit' => '0,1',
  'typeid' => '10',
  'infolen' => '60',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	       					<li class="new_cnlf">
	       						<p class="newlf_img">
	       							<img src="<?php echo $field['litpic']; ?>" width="470" height="247">
	       						</p>
	       						<div class="newrf_lst">
	       							<dl>
	       								<dd style="width: 470px;margin-left: 0;">
	       									<p class="new_rq" style="width: 65px;">
	       										<span><?php echo MyDate('d',$field['add_time']); ?></span><?php echo MyDate('Y.m',$field['add_time']); ?>
	       									</p>
	       									<p class="newrf_tx" style="width: 370px;">
	       										<a href="<?php echo $field['arcurl']; ?>"> <?php echo $field['title']; ?> </a>
	       										<span> <?php echo html_msubstr($field['seo_description'],0,35,true); ?>...</span>
	       									</p>
	       								</dd>
	       							</dl>
	       						</div>
	       					</li>
	       					<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	       					<li class="new_cnrf">
	       						<div class="newrf_lst">
	       							<dl>
	       								<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 2; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'limit' => '1,2',
  'typeid' => '10',
  'infolen' => '60',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],1, $row, true) : $_result["list"]->slice(1, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	       								<dd>
	       									<p class="new_rq">
	       										<span><?php echo MyDate('d',$field['add_time']); ?></span><?php echo MyDate('Y.m',$field['add_time']); ?>
	       									</p>
	       									<p class="newrf_tx">
	       										<a href="<?php echo $field['arcurl']; ?>"> <?php echo $field['title']; ?> </a>
	       										<span> <?php echo html_msubstr($field['seo_description'],0,55,true); ?>...</span>
	       									</p>
	       								</dd>
	       								<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'limit' => '2,4',
  'typeid' => '10',
  'infolen' => '60',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],2, $row, true) : $_result["list"]->slice(2, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	       								<dd>
	       									<p class="new_rq">
	       										<span><?php echo MyDate('d',$field['add_time']); ?></span><?php echo MyDate('Y.m',$field['add_time']); ?>
	       									</p>
	       									<p class="newrf_tx">
	       										<a href="<?php echo $field['arcurl']; ?>"> <?php echo $field['title']; ?> </a>
	       										<span> <?php echo html_msubstr($field['seo_description'],0,55,true); ?>...</span>
	       									</p>
	       								</dd>
	       								<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	       							</dl>
	       						</div>
	       					</li>
	       					<div class="clear">
	       					</div>
	       				</ul>
	       			</div>
	       			<!--案例2-->
	       			<div class="new_lst" style="display: none;">
	       				<ul class="new_lst_cn">
	       					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 1; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'limit' => '0,1',
  'typeid' => '11',
  'infolen' => '60',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	       					<li class="new_cnlf">
	       						<p class="newlf_img">
	       							<img src="<?php echo $field['litpic']; ?>" width="470" height="247">
	       						</p>
	       						<div class="newrf_lst">
	       							<dl>
	       								<dd style="width: 470px;margin-left: 0;">
	       									<p class="new_rq" style="width: 65px;">
	       										<span><?php echo MyDate('d',$field['add_time']); ?></span><?php echo MyDate('Y.m',$field['add_time']); ?>
	       									</p>
	       									<p class="newrf_tx" style="width: 370px;">
	       										<a href="<?php echo $field['arcurl']; ?>"> <?php echo $field['title']; ?> </a>
	       										<span> <?php echo html_msubstr($field['seo_description'],0,35,true); ?>...</span>
	       									</p>
	       								</dd>
	       							</dl>
	       						</div>
	       					</li>
	       					<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	       					<li class="new_cnrf">
	       						<div class="newrf_lst">
	       							<dl>
	       								<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'limit' => '1,4',
  'typeid' => '11',
  'infolen' => '60',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],1, $row, true) : $_result["list"]->slice(1, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
	       								<dd>
	       									<p class="new_rq">
	       										<span><?php echo MyDate('d',$field['add_time']); ?></span><?php echo MyDate('Y.m',$field['add_time']); ?>
	       									</p>
	       									<p class="newrf_tx">
	       										<a href="<?php echo $field['arcurl']; ?>"> <?php echo $field['title']; ?> </a>
	       										<span> <?php echo html_msubstr($field['seo_description'],0,55,true); ?>...</span>
	       									</p>
	       								</dd>
	       								<?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	       							</dl>
	       						</div>
	       					</li>
	       					<div class="clear">
	       					</div>
	       				</ul>
	       			</div>
	       
	       		</div>
	       	</div>
	       
	       </div>
	       
	 
	     
	       </div>
	     </div>
	     </div>
	     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
	     
	 </div>
	 <script type="text/javascript">
	 	$(document).ready(function() {
	 		//设计案例切换
	 		$('.new_telst li').mouseover(function() {
	 			var liindex = $('.new_telst li').index(this);
	 			$(this).addClass('newon').siblings().removeClass('newon');
	 			$('.new-wrap div.new_lst').eq(liindex).fadeIn(150).siblings('div.new_lst').hide();
	 			var liWidth = $('.new_telst li').width();
	 			$('.newtel .new_telst p').stop(false, true).animate({
	 				'left': liindex * liWidth + 'px'
	 			}, 300);
	 		});
	 
	 	});
	 </script>
  
    <!--联系我们-->
  <div class="w-container w-main">
    <div class="w-section pdTop-default pdBottom-default" style="background:#047ac0;">
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in  pdTop-large pdBottom-large">
    
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>                    
                    <td class="td-w" width="89.466122014735774%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-text" data-animate="" style="">
                            <div style="color:#fff;">
                              <h3 style="font-size:110%;margin:0px 0px 10px 0px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h3> <!--margin:30px 0 40px; --> 
                              <p style="line-height:1.5; font-size:90%;">联系人：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?> &nbsp;&nbsp;手机：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?><br/>
                                邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_11"); echo $__VALUE__; ?>&nbsp;&nbsp;地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?><br/>
                                热线电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?><br/>
                            <?php echo htmlspecialchars_decode($global['web_copyright']); ?>--SEO技术支持：<a  href="http://www.0917bjms.com/" style="color: #fff;">麦思科技</a> &nbsp;&nbsp;
			<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?>  </p>
                            </div>
                          </div>
                        </div>
                      </div></td>
                      <td class="td-w" width="10.5040650406504%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-map" data-animate="" style="">
                            <div class="map">
                           <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_10"); echo $__VALUE__; ?>" width="100%"  height=" 100px">
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
  
  
  <div class="w-service-fixed">
    <div class="service-item bg_s_default color_s_default aHoverbg_deepen aHovercolor_deepen service-item-top"> <i class="fa fa-caret-up"></i>
      <div class="top" onclick="$('body,html').animate({scrollTop: 0}, 'normal');">TOP</div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    $('.w-service-fixed .service-item-top').show();
                } else {
                    $('.w-service-fixed .service-item-top').hide();
                }
            });
        });
    </script> 
  </div>
</div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<div id='cs_box'>
   	<span class='cs_title'>在线咨询</span>
   	<span class='cs_close'>x</span>
   	<div class='cs_img'></div>
   	<span class='cs_info'>有什么可以帮到你</span>
   	<div class='cs_btn'>点击咨询</div>
   </div>
   <style>
   	#cs_box {width:120px; height:220px; background:#1692d6; position:fixed; right:10px; top:500px; border-radius:10px; z-index:1000}
   	#cs_box span {color:#fff; height:20px; line-height:20px; font-family:'Arial'; display:block;}
   	.cs_close {position:absolute; right:10px; top:10px; cursor:pointer; font-size:12px;}
   	.cs_title {font-size:14px; margin:10px; font-weight:bold;}
   	.cs_img {width:100px; height:100px; background:#fff; margin:10px;}
   	.cs_info {font-size:12px; margin:0px 10px; overflow:hidden; text-align:center;}
   	.cs_btn {width:100px; height:25px; border: 1px solid #ccc; margin:5px 10px; border-radius:5px; font-size:12px; line-height:25px; color:#fff; text-align:center; cursor:pointer;}
   	.cs_btn:hover{background: #fff;color: #1692d6;}
   </style>
   <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/kf.js","","",""); echo $__VALUE__; ?>
   <script type="text/javascript">
   	myEvent(window,'load',function(){
   		cs_box.set({
   			img_path : '/template/default/pc/skin/img/kf.jpg',		//设置图片路径
   			qq : '<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>',		//设置QQ号码
   		});
   	});
	
   </script>
<!--   <script language="Javascript">
	   //禁止右键
   document.oncontextmenu=new Function("event.returnValue=false");
   document.onselectstart=new Function("event.returnValue=false");
  // 禁止F12
           document.onkeydown = function () {
               if (window.event && window.event.keyCode == 123) {
                   event.keyCode = 0;
                   event.returnValue = false;
                   return false;
               }
           };
   </script> --> </div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.custom.js"></script>
</body>
</html>
