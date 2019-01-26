jQuery(document).ready(function($) {
	$(window).on('load', function(){
		$('#slider ul').bxSlider({
			auto: false,
			pause: 5000,
			speed: 1000,
			mode: 'horizontal',
			pager: true,
			pagerCustom: '#thumbs'
		});
	});
});