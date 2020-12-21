<header>
    <div class="navbar navbar-expand-md bsnav bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand" href="<?=home_url();?>/">
            <img src="<?php the_img_path(); ?>/1x/asakusa-wide_logo_white@2x@2x.png" alt="" class="img-fluid d-none d-md-block" width="186">
            <img src="<?php the_img_path(); ?>/1x/asakusa-wide_logo_white@2x@2x.png" alt="" class="img-fluld d-block d-md-none" width="186">
        </a>
        <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-md-end">
            <?php do_action('nav_generate_top'); ?>
        </div>
    </div>
</header>