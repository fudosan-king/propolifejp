jQuery(function($) {
	$url_base = $('#url_base').val();
	$(".back-top").hide();
	$(".back-top").css({'position': 'fixed','bottom': '0px','right': '0px','z-index': '2'});
	$(".back-top").append('<a href="#"><img src="images/penguin_top.png"></a>');
	$(".back-top a").css({'font-size':'55px','color': 'rgba(33, 39, 39, 0.41)','background': 'none','position': 'relative'});
	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.back-top').fadeIn();
		} else {
			$('.back-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('.back-top a').click(function () {
		$('body,html').animate({
			scrollTop:$('#top').innerHeight()
		}, 400);
		return false;
	});
	//---------------------------------------------------
	$('#contactForm').submit(function(){
		if($('input[name="sendmail"]').hasClass('disabled')){
			return false;
		}
		else{
		var username = $('#fullname').val();
		var m = $('#message').val();
		var address = $('#address').val();
		var p = $('#phonenumber').val();
		var email = $('#mailaddress').val();
		var data={
			action:"sendmailContact",
			user:username,
			mail:email,
			add:address,
			phone:p,
			message:m
		};
		$.post(ajaxurl,data,function(rdata){
				//if(rdata==1)
				$('#messageDialog').modal('show').html(rdata);
			});
			return false;
		}
	});
	//---------------------------------------------------
});