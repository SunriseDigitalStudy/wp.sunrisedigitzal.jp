$(function(){
	$('[data-btn="trigger"]').bind('click', function(){
		//クリックでクラス名をトグルさせる
		setAttachClass(this, 'active', 'click');

		return false;
	})
	.hover(function(){     
		//マウスホバーでクラス名を付ける
		setAttachClass(this, 'hover', 'mouseOn');
	}, function(){
		//マウスアウトでクラス名を消す
		setAttachClass(this, 'hover', 'mouseOut');
	});

	$('body').bind('click', function(){
		var sync = $('[data-btn="trigger"]').attr('data-sync');

		//枠外をクリックで、クラス名を消す
		$('[data-btn="trigger"]').not(".hover").removeClass('active');
		$('[data-sync-receive="' + sync + '"]').not(".hover").removeClass('active');
	});         
		 
	//共通部分の関数
	 function setAttachClass(elem, class_name, flag){
		//ホバー・クリックした部分の'sync'を取得
		var sync = $(elem).attr('data-sync');

		switch (flag) {
			case 'click' :
				$(elem).toggleClass(class_name);
				$('[data-sync-receive="' + sync + '"]').toggleClass(class_name);
			break;
			case 'mouseOn' :
				$(elem).addClass(class_name);
				$('[data-sync-receive="' + sync + '"]').addClass(class_name);
			break;
			case 'mouseOut' :
				$(elem).removeClass(class_name);
				$('[data-sync-receive="' + sync + '"]').removeClass(class_name);	
			break;
		}
	 };
});