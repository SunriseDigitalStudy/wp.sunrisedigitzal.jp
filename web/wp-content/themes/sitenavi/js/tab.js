$(function(){
	$('[data-btn="tab-trigger"] > li').bind('click', function(){
		//変数activeに、クリックしたliの番号を代入
		var active = $('[data-btn="tab-trigger"] > li').index(this);
		
		//全ての[data-receive="tab-inner"]にクラス名hiddeをつける
		$('[data-receive="tab-inner"]').addClass('hidden');
		
		//liの番号とおなじ番号の[data-receive="tab-inner"]からクラス名hiddenを取り除く
		$('[data-receive="tab-inner"]').eq(active).removeClass('hidden');
		
		//全てのliからクラス名selsctを取り除く
		$('[data-btn="tab-trigger"] > li').removeClass('select');
		
		//クリックしたliにだけクラス名selsctをつける
		$(this).addClass('select')
	});
});