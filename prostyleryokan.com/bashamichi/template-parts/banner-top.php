<?php if(is_front_page()): ?>
    <section class="section_banner p-0">
        <div id="P_masterslider" class="master-slider-parent ms-parent-id-27" >
            <div id="masterslider" class="master-slider ms-skin-default" >
                <div class="ms-overlay-layers" data-delay="5" data-fill-mode="fill" >
                    <img class="ms-layer d-none d-md-block" width="214"
                    src="<?php echo IMAGES_PATH; ?>/1x/blank.gif"
                    data-src="<?php echo IMAGES_PATH; ?>/1x/logo_banner.png"
                    alt=""
                    style=""
                    data-effect="t(true,n,90,n,n,n,n,n,0.5,0.5,n,n,n,n,n)"
                    data-duration="2000"
                    data-delay="200"
                    data-ease="easeOutQuint"
                    data-type="image"
                    data-masked="true"
                    data-offset-x="0"
                    data-offset-y="-100"
                    data-origin="mc"
                    data-position="normal"
                    >
                    <h2 class="ms-layer msp-cn-136-5"
                    style=""
                    data-effect="t(true,n,30,n,n,n,n,n,n,n,n,n,n,n,n)"
                    data-duration="4000"
                    data-delay="400"
                    data-ease="easeOutQuint"
                    data-offset-x="-3"
                    data-offset-y="50"
                    data-origin="mc"
                    data-position="normal"
                    data-masked="true"
                    data-mask-width="1300">文明開化の地で心地よい安らぎを
                    </h2>
                </div>

                <?php
                    $banner_gallery = get_field('banner_gallery');
                    if(!empty($banner_gallery)){
                        foreach($banner_gallery as $banner){
                            ?>
                                <div class="ms-slide" data-delay="5" data-fill-mode="fill" >
                                    <img src="<?php echo IMAGES_PATH; ?>/1x/blank.gif" alt="" title="" data-src="<?php echo $banner['url']; ?>">
                                </div>
                            <?php
                        }
                    } 
                ?>
            </div>
        </div>
    </section>
<?php else:
    $featureImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );

    $extraClass = '';
    if(is_page_template( 'default' ) || is_page( 'faqs' )){
        $extraClass = 'section_subbanner_article';
    }
?>
    <section class="section_subbanner p-0 <?php echo $extraClass; ?>">
        <img src="<?php echo $featureImage; ?>" alt="" class="img-fluid">
        <h2><?php the_title(); ?></h2>
    </section>
<?php endif; ?>
