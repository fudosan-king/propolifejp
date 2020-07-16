<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/tablesaw.stackonly.js"></script>

<script src="<?php SGVinK::the_js_uri(); ?>/bsnav.min.js"></script>
<script src="<?php SGVinK::the_js_uri(); ?>/functions.js"></script>

<script>
      (function(d) {
        var config = {
          kitId: 'gih2che',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
</script>

<?php 

if(is_page( 'contact' ) || is_page( 'contact-purchase' ) || is_page( 'sell' ) || is_page( 'unsubscribe' ) || is_page( 'inquiry' )):
  ?>
    <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <?php
endif;

if(is_page( 'contact' )):
	?>
		<script src="<?php SGVinK::the_js_uri(); ?>/contact/contact.js"></script>
	<?php
endif;

if(is_page( 'contact-purchase' )):
    ?>
        <script src="<?php SGVinK::the_js_uri(); ?>/contact/contact-purchase.js"></script>
    <?php
endif;

if(is_page( 'sell' )):
    ?>
        <script src="<?php SGVinK::the_js_uri(); ?>/contact/contact-sell.js"></script>
    <?php
endif;

if(is_page( 'unsubscribe' )):
    ?>
        <script src="<?php SGVinK::the_js_uri(); ?>/contact/contact-unsubscribe.js"></script>
    <?php
endif;

if(is_page( 'inquiry' )):
    ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
        <script src="<?php SGVinK::the_js_uri(); ?>/contact/contact-inquiry.js"></script>
    <?php
endif;

if(is_page('kaitori') || is_page('kaitori-demo')):
    ?>
        <script src='https://unpkg.com/packery@2/dist/packery.pkgd.js'></script>
        <script>
            $('.grid').packery({
              itemSelector: '.grid-item',
              percentPosition: true
            });
        </script>
    <?php
endif;
?>
