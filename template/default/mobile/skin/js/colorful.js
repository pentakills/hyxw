var saved;  //�������window.onload���µĳ�ͻ����
if (typeof window.onload == 'function') {  
    saved = window.onload;  
}

(function(){
	
	function colorful() {		

		//��ʱ
		
		setTimeout(function(){document.getElementById("over").style.display = "none";document.getElementById("layout").style.display = "none";},800);
	}

	
	colorful();

	//���������ط���window.onload
	if (saved) saved(); 
})();