$(function($) {
	$('.owl_banner').owlCarousel({
		items: 1,
	    loop:true,
	    margin:0,
	    nav: false,
	    smartSpeed :900
	});

    $('.btnStart').click(function() {
        $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top - 50
	    }, 2000);
	    return false;
    });

    $('.btnStart').on('click', function (e) {
	    e.preventDefault();
	
	    var targetEle = this.hash;
	    var $targetEle = $(targetEle);
	 
	    $('html, body').stop().animate({
	        'scrollTop': $targetEle.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = targetEle;
	    });
	});

});