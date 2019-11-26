			</main>

	      	<?php get_template_part('template-part/footer', 'content'); ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/tablesaw.stackonly.js"></script>
	<script src="<?php the_script_path(); ?>/jquery.yycountdown.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/flickity@2.2/dist/flickity.pkgd.js"></script>
	<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ja-jp.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/ja.js"></script>

	<script src="<?php the_script_path(); ?>/bsnav.min.js"></script>
	<script src="<?php the_script_path(); ?>/functions.js"></script>
	<script src="<?php the_booking_script_path(); ?>/script.js"></script>
	
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'irv6cvf',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>

    <script type="text/javascript">
	    $(document).ready(function() {
	    	if ($('#feature').length) {
	            $("#feature .feature-type").each(function (i) {

	                var _this = $(this);
	                var _allVillaBackground = $('.feature-bg-change');
	                var _villaBackground = _this.find('.feature-bg-change');

	                $(window).resize(function () {

	                    if ($(window).width() < 900) {

	                        _villaBackground.css({
	                            'background-image': "url(" + _villaBackground.attr('data-src') + ")",
	                        });

	                    }
	                });

	                _villaBackground.css({
	                    'background-repeat': "no-repeat",
	                    'background-size': _this.closest('.column').width() + "px " +  _this.closest('.column').height() + "px "
	                });


	                _this.hover(function () {

	                    if ($(window).width() > 900) {
	                        _allVillaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
	                    } else {
	                        _villaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
	                    }
	                    return false;
	                });

	            });
	        }
	    });
	</script>

	<?php wp_footer(); ?>
	<?php do_action('wp_footer_plus') ?>

</body>

</html>