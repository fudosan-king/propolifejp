<?php
	global $detect;
?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" async></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" defer></script>

<?php 
    if(is_single()):
        ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" async></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" async></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" ></script>
            <script src="<?=SCRIPT_PATH;?>/form.js" async></script>

        <?php
    endif;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.0/flickity.pkgd.min.js" async></script>
<?php 
    if (!$detect->isMobile()):
        ?>
        	
			<script src="<?=SCRIPT_PATH;?>/bsnav.min.js" async></script>
        <?php
    endif;
?>

<script src="<?=SCRIPT_PATH;?>/functions.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" async></script>