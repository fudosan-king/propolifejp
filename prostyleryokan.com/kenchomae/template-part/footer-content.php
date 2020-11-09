<footer>
    <!-- <section class="section_footer_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="<?php //echo home_url();?>">
                        <img src="<?php //the_img_path(); ?>/1x/asakusa-wide_logo_white@2x@2x.png" alt="" class="img-fluld" width="186">
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <section class="section_footer_bottom">
        <div class="container-fluid">
            <?php do_action( 'footer_generate_menus' ); ?>
        </div>
    </section>
    <p class="copyright"><?php _echo(get_field('copyright', 'option')); ?></p>
</footer>
<div class="bsnav-mobile">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar">
        <button class="navbar-toggler toggler-spring navbar_toggler_custom"><span class="navbar-toggler-icon"></span></button>
    </div>
</div>