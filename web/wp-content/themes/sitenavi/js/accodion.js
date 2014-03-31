$(function(){
	$('[data-btn="accodion-trigger"]').bind('click', function(){
		
		//[data-receive="accodion-inner"]がある要素にclass="active"をつける
		$('[data-receive="accodion-inner"]').addClass('active');
		
		//クリックされたtriggerの次のclass="active"を開閉する。
		$(this).next('.active').slideToggle('fast');
		
		return false;
	});
});