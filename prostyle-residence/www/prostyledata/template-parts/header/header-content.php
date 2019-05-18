<?php 
    $logoCompanyURL = wp_get_attachment_image_url( get_field('site_logo', 'option')['ID'], $size = 'origin', $icon = false );
?>

<div class="navbar navbar-expand-sm bsnav bsnav-sticky bsnav-sticky-slide">
    <a class="navbar-brand" href="/"><img src="<?php echo $logoCompanyURL; ?>" alt="" class="img-fluid" width="194px"></a>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-md-between">

        <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['top'];
            $topNav = wp_get_nav_menu_items($menuID);
            if (count($topNav)>0){
                $active = is_front_page() ? 'active' : "";

                echo '<ul class="navbar-nav navbar-mobile mr-0 main_nav">';
                echo ' <li class="nav-item '.$active.' d-none d-sm-block"><a class="nav-link" href="/">TOP</a></li>';
                foreach ($topNav as $nav){
                    /* Action here */

                    $active = $nav->object_id == $post->ID ? 'active' : "";

                    $hideOnSP = get_page($nav->object_id)->post_name == 'contact' ? 'd-none d-sm-block' : '';

                    echo ' <li class="nav-item '.$hideOnSP.' '.$active.'"><a class="nav-link" href="'.$nav->url.'" target="'.$nav->target.'">'.$nav->title.'</a></li>';
                }
                echo '</ul>';
            }
        ?>

        <ul class="navbar-nav navbar-mobile mr-0 navbar_custom">
             <li class="nav-item d-block d-sm-none">
                <?php 
                    $socialLinked = get_field('social_linked', 'option');
                    
                    if(!empty($socialLinked)):
                        echo '<div class="social-link">';
                        foreach($socialLinked as $name => $link){
                            ?>
                                <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo SGVinK::get_images_uri()."/social/icon-".$name.".png"; ?>" class="img-responsive" alt="<?php echo 'social-'.$name; ?>" width="40"></a>
                            <?php
                        }
                        echo '</div>';
                    endif; 
                ?>
            </li>
            
            <?php 
                /*WORKING HOUR PART*/
                $working_hour = get_field('working_hour', 'option');

                if (!empty(get_field('working_hour_define')) && get_field('working_hour_define') == 'custom'){
                    $working_hour = get_field('working_hour');
                }
            ?>
            <li class="nav-item">
                <p class="hourwoking mr-0 mr-sm-3"><?php echo  $working_hour; ?></p>
            </li>
            <li class="nav-item">
                <p class="freecall"><i class="i_phone"></i> <a href="tel:<?php echo get_field('phone_number', 'option') ?>"><?php echo get_field('phone_number', 'option') ?></a></p>
            </li>
            <li class="nav-item d-block d-sm-none mb-3">
                <?php 
                    $inquiryContact = get_field('inquiry_contact', 'option');
                    if(!empty($inquiryContact)):
                ?>
                    <a class="btn btnInquiries" href="<?php echo $inquiryContact['url']; ?>" target="<?php echo $inquiryContact['target']; ?>"><?php echo $inquiryContact['title']; ?></a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>

<div class="bsnav-mobile d-block d-sm-none">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
</div>

<?php if(is_home() || is_front_page()): ?>




<div id="modal_brands" class="modal fade bd-example-modal-lg modal_brands" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <h2><img src="<?php SGVinK::the_images_uri(); ?>/modal02.png" width="75%" class="img-responsive" alt="Image"></h2>
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
            <ul class="list_row">

                <?php 
                    if (have_rows('brands_control')):
                        while(have_rows('brands_control')): the_row();
                            $img = get_sub_field('brand_image');
                            $imgURL = wp_get_attachment_image_url( $img['ID'], $size = 'medium', $icon = false );
                            ?>

                            <li>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <a class="logo_brands" href="#"><img src="<?php echo $imgURL; ?>" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <h4><?php echo get_sub_field('title'); ?></h4>
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            </li>
                <?php
                        endwhile;
                    endif;
                ?>
            </ul>
            <a href="#" class="btn btnClose_footer" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
        </div>
    </div>
</div>

<div id="modal_commitment" class="modal fade bd-example-modal-lg modal_commitment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <h2><img src="<?php SGVinK::the_images_uri(); ?>/kodawari.png" height="35" class="img-responsive" alt="Image"></h2>
            <h3><img src="<?php SGVinK::the_images_uri(); ?>/mukuzai.png" height="25" class="img-responsive" alt="Image"></h3>
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
            <ul class="list_row">

                <?php 
                    if (have_rows('commitment_control')):
                        while(have_rows('commitment_control')): the_row();
                            $img = get_sub_field('feature_image');
                            $imgURL = wp_get_attachment_image_url( $img['ID'], $size = 'medium', $icon = false );
                            ?>

                            <li>
                                <div class="row flex-sm-row-reverse">
                                    <div class="col-12 col-sm-6">
                                        <h5 class="d-block d-sm-none"><?php echo get_sub_field('title'); ?></h5>
                                        <img src="<?php echo $imgURL; ?>" alt="" class="img-fluid img_row">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h5 class="d-none d-sm-block"><?php echo get_sub_field('title'); ?></h5>
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            </li>
                <?php
                        endwhile;
                    endif;
                ?>

            </ul>
            <a href="#" class="btn btnClose_footer" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
        </div>
    </div>
</div>

<div id="modal_video" class="modal fade bd-example-modal-lg modal_brands" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <h2>MOVIE</h2>
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe id="video" class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
            <a href="#" class="btn btnClose_footer" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
        </div>
    </div>
</div>
<?php endif; ?>