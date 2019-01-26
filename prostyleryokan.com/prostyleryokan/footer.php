        
        

        <!-- Footer -->
        <?php get_template_part( 'template-parts/footer/main', 'footer' ); ?>

        </div>
         <!-- END  <div id="page" class=""> -->

        <!-- JS FOOTER -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.0/anime.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.4/dist/scrollreveal.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.0/smooth-scrollbar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/0.3.6/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://unpkg.com/jarallax@1.10.5/dist/jarallax.min.js"></script>
        <script src="https://unpkg.com/jarallax@1.10.5/dist/jarallax-element.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.2/aos.js"></script>

        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.js"></script>
        <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.js"></script>

        <script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/inc/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- <script src="<?php echo TEMPLATE_DIR; ?>/js/jquery.ui.datepicker-ja.js"></script> -->
        <!-- <script src="<?php echo TEMPLATE_DIR; ?>/js/gcalendar-holidays_opt.js"></script> -->
        <!-- <script src="<?php echo TEMPLATE_DIR; ?>/js/smart_form_opt.js"></script> -->
        <script src="<?php echo TEMPLATE_DIR; ?>/js/functions.js"></script>
        <script src="<?php echo TEMPLATE_DIR; ?>/js_ex/script_ex.js"></script>

        <script>
            $(function(){
                $(".box_services_content").mCustomScrollbar({
                    // alwaysShowScrollbar: integer,
                    autoHideScrollbar: true,
                    // autoExpandScrollbar: true,
                });
            });
        </script>


        <script type="text/javascript">
            window.sr = ScrollReveal({
                duration: 2000,
                scale: 1,
                distance: '50px',
                easeInOutBack: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
            });
            
            sr.reveal('.section_concept');
            sr.reveal('.section_services');

            sr.reveal('.box_horizontal', {
                origin: 'left',
            });
            sr.reveal('.box_horizontal_2', {
                origin: 'right',
            });  
        </script>

        <script>
            $( document ).ready(function() {
                // new WOW().init();

                // imagesLoaded('.js-images-loaded', () => {
                //   new Masonry(document.querySelector('.js-masonry'), {
                //     itemSelector: '.js-masonry-item'
                //   });
                // });

                $("figure").mouseleave(
                function() {
                  $(this).removeClass("hover");
                });

            });
        </script>

        <script type="text/javascript">
            // $(document).ready(function(){
            //      jQuery.scrollSpeed(200, 800, 'easeOutCubic');
            // });

            // (function($) {
                
            //     jQuery.scrollSpeed = function(step, speed, easing) {
                    
            //         var $document = $(document),
            //             $window = $(window),
            //             $body = $('html, body'),
            //             option = easing || 'default',
            //             root = 0,
            //             scroll = false,
            //             scrollY,
            //             scrollX,
            //             view;
                        
            //         if (window.navigator.msPointerEnabled)
                    
            //             return false;
                        
            //         $window.on('mousewheel DOMMouseScroll', function(e) {
                        
            //             var deltaY = e.originalEvent.wheelDeltaY,
            //                 detail = e.originalEvent.detail;
            //                 scrollY = $document.height() > $window.height();
            //                 scrollX = $document.width() > $window.width();
            //                 scroll = true;
                        
            //             if (scrollY) {
                            
            //                 view = $window.height();
                                
            //                 if (deltaY < 0 || detail > 0)
                        
            //                     root = (root + view) >= $document.height() ? root : root += step;
                            
            //                 if (deltaY > 0 || detail < 0)
                        
            //                     root = root <= 0 ? 0 : root -= step;
                            
            //                 $body.stop().animate({
                        
            //                     scrollTop: root
                            
            //                 }, speed, option, function() {
                        
            //                     scroll = false;
                            
            //                 });
            //             }
                        
            //             if (scrollX) {
                            
            //                 view = $window.width();
                                
            //                 if (deltaY < 0 || detail > 0)
                        
            //                     root = (root + view) >= $document.width() ? root : root += step;
                            
            //                 if (deltaY > 0 || detail < 0)
                        
            //                     root = root <= 0 ? 0 : root -= step;
                            
            //                 $body.stop().animate({
                        
            //                     scrollLeft: root
                            
            //                 }, speed, option, function() {
                        
            //                     scroll = false;
                            
            //                 });
            //             }
                        
            //             return false;
                        
            //         }).on('scroll', function() {
                        
            //             if (scrollY && !scroll) root = $window.scrollTop();
            //             if (scrollX && !scroll) root = $window.scrollLeft();
                        
            //         }).on('resize', function() {
                        
            //             if (scrollY && !scroll) view = $window.height();
            //             if (scrollX && !scroll) view = $window.width();
                        
            //         });       
            //     };
                
            //     jQuery.easing.default = function (x,t,b,c,d) {
                
            //         return -c * ((t=t/d-1)*t*t*t - 1) + b;
            //     };
                
            // })(jQuery);

        </script>


        <!-- END JS FOOTER -->

        <?php wp_footer(); ?>

        <?php print_r($footer_extra_scripts); ?>

    </body>

</html>
