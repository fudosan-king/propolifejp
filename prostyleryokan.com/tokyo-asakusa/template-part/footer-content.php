<footer>
    <section class="section_footer_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="<?=home_url();?>">
                        <img src="<?php the_img_path(); ?>/1x/asakusa-wide_logo_white@2x@2x.png" alt="" class="img-fluld" width="186">
                    </a>
                </div>
            </div>
        </div>
    </section>
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
<div class="modal fade" id="modal_concept" tabindex="-1" role="dialog" aria-labelledby="modal_concepttitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_concepttitle">Concept</h5>
            </div>
            <div class="modal-body">
                <p>ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。ここには文章が入ります。</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="modal_forgotpasstitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mb-5" id="modal_forgotpasstitle">FORGOT PASS</h5>
            </div>
            <div class="modal-body">
                <form action="" class="frm_signin">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail your e-mail addrees">
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn btnlogin btncancel" data-dismiss="modal">cancel</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn btn_createacc">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>