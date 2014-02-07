$(function() {
	var topBtn = $('.backtotop'); 

	//300までスクロールしたらボタンを表示させる
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//トップに戻す
	topBtn.click(function () {
		$('body,html').animate({
		scrollTop: 0
		}, 500);
	return false;
	});
});