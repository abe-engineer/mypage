$(function() {
	var $winWidth = $(window).width(),
		$winHeight = $(window).height();

	$('body, .menu_overlay').css({
		//width: $winWidth,
		width: '100%',
		height: $winHeight
	});

	$('.menu_btn').click(function() {
		if (!$('.btn_wrapper').hasClass('clicked')) {
			$('.btn_wrapper').addClass('clicked');
			$('nav').addClass('navOn').removeClass('navOff');
			$('nav').stop(true).fadeIn(800);
		} else {
			$('.btn_wrapper').removeClass('clicked');
			$('nav').removeClass('navOn').addClass('navOff');
			$('nav').stop(true).fadeOut(800);
		}
	});

	$('nav ul li a').click(function() {
		$('.btn_wrapper').removeClass('clicked');
		$('nav').stop(true).fadeOut(800);
	});

	//$('nav ul li a').click(function(event) {
		//event.preventDefault();
	//});

	$.backstretch("img/01_bg.jpg");
});
