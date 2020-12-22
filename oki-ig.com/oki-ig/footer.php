<footer>

  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12">
          
          <ul class="naviBox">
          <?php 
            
            $menuId = get_nav_menu_locations()['bottom'];
            $bottomMenu = wp_get_nav_menu_items( $menuId );
            foreach($bottomMenu as $menu){
              if ( $menu->menu_item_parent == 0){

                $child_menu_lv1 = get_nav_child_menu($bottomMenu, $menu->ID);
                ?>
                <li class="col_custom">
                  <h4><a href="<?php echo $menu->url; ?>" target="<?php echo $menu->target; ?>"><?php echo  $menu->title; ?></a></h4>
                  <?php 
                    if (count($child_menu_lv1)>0){
                      echo '<ul>';
                      foreach($child_menu_lv1 as $child){
                        if(!empty( $child->url)):
                        ?>
                          <li><a href="<?php echo $child->url; ?>" target="<?php echo $child->target; ?>"><?php echo $child->title; ?></a></li>
                        <?php
                        else:
                          ?>
                          <li><span><?php echo $child->title; ?></span></li>
                          <?php
                        endif;
                      }
                      echo '</ul>';
                    }
                  ?>
                </li>
                <?php
              }
            }
          ?>
          </ul>

          
        </div>
      </div>
    </div>
  </div>

  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12">
        	<?php 

        		$frontPageID = get_option('page_on_front');
        		print_r(get_field('footer_content', $frontPageID));

        	 ?>
          <?php 
            wp_nav_menu( array(
              'theme_location'  => 'footer',
              'menu_class'      => 'list_menu_footer',
            ) );
          ?>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- <ul id="side-dock">
  <li>
    <a href="#">
      <img src="<?php //echo TEMPLATE_DIR; ?>/images/1x/pagetop.png" alt="" class="img-fluid">
    </a>
  </li>
</ul> -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.1.0/jquery.smartmenus.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>


	<script src="<?php echo TEMPLATE_DIR; ?>/js/functions.js"></script>

  <?php if(is_page( 'contact' )): ?>
    <script src="<?php echo TEMPLATE_DIR; ?>/js/contact.js"></script>    
  <?php endif; ?>

	<script type="text/javascript">
		$(window).on('load', function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");
      var is_iPad = navigator.userAgent.match(/iPad/i) != null;

      if (is_iPad || $(window).width() < 1170){
        $('.main-nav.fixed-top.other').removeClass('other');
      }
		});

    $( window ).resize(function() {
      if ($(window).width() < 1170){
        $('.main-nav.fixed-top.other').removeClass('other');
      }else{
        $('.main-nav.fixed-top').addClass('other');
      }
    });
    

		

		//header scroll
		// $(window).scroll(function(){
		// 	if($(window).scrollTop() > 80){
		// 		$('#header .header').fadeIn();
		// 	}else{
		// 		$('#header .header').fadeOut();
		// 	}
		// });

		// // SmartMenus init
		// $(function() {
		//   $('#main-menu').smartmenus({
		//     subMenusSubOffsetX: 1,
		//     subMenusSubOffsetY: -8
		//   });
		// });

		// // SmartMenus mobile menu toggle button
		// $(function() {
		//   var $mainMenuState = $('#main-menu-state');
		//   if ($mainMenuState.length) {
		//     // animate mobile menu
		//     $mainMenuState.change(function(e) {
		//       var $menu = $('#main-menu');
		//       if (this.checked) {
		//         $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
		//       } else {
		//         $menu.show().slideUp(250, function() { $menu.css('display', ''); });
		//       }
		//     });
		//     // hide mobile menu beforeunload
		//     $(window).bind('beforeunload unload', function() {
		//       if ($mainMenuState[0].checked) {
		//         $mainMenuState[0].click();
		//       }
		//     });
		//   }
		// });
	</script>

	<script>
      var swiper_orderMade = new Swiper('.swiper-container', {
        loop: true,
        effect: 'fade',
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        }

      });
    </script>

	<!--Start of Tawk.to Script-->
	<!-- <script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5b06731210b99c7b36d441b9/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script> -->
	<!-- <script src="<?php //echo TEMPLATE_DIR; ?>/js/tawk.js"></script> -->
	<!--End of Tawk.to Script-->

	<?php wp_footer(); ?>
</body>
</html>