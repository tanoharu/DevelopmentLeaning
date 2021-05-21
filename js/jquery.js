$(function(){

	//※複数指定はclick()ではなくon('click',function())を使う
	$(".menu").on("click", function () {
		$(".l-aside-wrap").fadeIn("fast"); //サイドメニューをフェードイン
		$("body").css('overflow', 'hidden'); //全体（サイドメニュー以外）は固定←スクロールバーを非表示にして動かせないようにする
	});

	// if (window.matchMedia (' (max-width: 1552px) ').matches) {
	$(".c-toggle").on("click", function () {
		$(".l-aside-wrap").fadeOut("fast"); //サイドメニューをフェードアウト
		$("body").css('overflow', 'auto'); //スクロールバーを表示
	});

});


$(function (){

	$('::-webkit-scrollbar').mouseover(function () {
		$(this).addClass("scroll-defalt");
	});
	
	$('::-webkit-scrollbar').mouseover(function () {
		$('::-webkit-scrollbar-track').addClass("scroll-defalt");
	});

	$('::-webkit-scrollbar').mouseover(function () {
		$('::-webkit-scrollbar-thumb').addClass("scroll-defalt");
	});

});