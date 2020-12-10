<?php
    global $detect, $post;
?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" async></script>

<?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )): ?>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" defer></script>
<?php endif; ?>

<?php 
    if(is_single()):
        ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" async></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" async></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" ></script>

            <?php 
                wp_enqueue_script( 'form-script', SCRIPT_PATH.'/form.js');
                if(get_post_type($post->ID) == 'events'){
                    wp_enqueue_script( 'form-events-script', SCRIPT_PATH.'/form/events.js');
                }
            ?>
            
        <?php
    endif;


    if(is_page('contact')) {
        wp_enqueue_script( 'form-contact-script', SCRIPT_PATH.'/form/contact.js');
    }

    if(is_page( 'mailmagazine' )){
        wp_enqueue_script( 'form-mailmagazine-script', SCRIPT_PATH.'/form/mailmagazine.js');
    }
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.pkgd.min.js"></script>
<?php 
    if (!$detect->isMobile()):
        wp_enqueue_script( 'bsnav-script', SCRIPT_PATH.'/bsnav.min.js');
    endif;

    wp_enqueue_script( 'main-script', SCRIPT_PATH.'/functions.js');
    if($detect->isMobile() && is_single() && get_post_type($post->ID) == 'post') {
        wp_enqueue_script( 'header-scroll-script', SCRIPT_PATH.'/header-scroll.js');
    }
?>

<?php if(is_page( 'contact' )): ?>
    <?php wp_enqueue_script( 'sanitize-script', SCRIPT_PATH.'/sanitize.min.js'); ?>
<?php endif; ?>

<?php if (!preg_match( '/Lighthouse/', $_SERVER['HTTP_USER_AGENT'], $matches )): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"></script>
<?php endif; ?>
