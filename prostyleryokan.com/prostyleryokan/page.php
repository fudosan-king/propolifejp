<?php
get_header();
?>
    <div class="visWrap">
    </div>
    <div class="vis">
        <div class="vis_logo">
            <p class="gNav_logo"><img src="<?php echo TEMPLATE_ASSETS_PATH; ?>/img/home/PROSTYLERYOKAN_logo.png" width="200" height="148" alt=""></p>
        </div>
        <div id="js-vis_slide" class="vis_slide">
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no1"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no2"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no3"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no5"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no6"></div>
            </div>
        </div>
    </div>


    <section class="section_intro" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            the_content();
                        endwhile;
                    endif;
                   ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
