<?php 
    $logoCompanyURL = wp_get_attachment_image_url( get_field('site_logo', 'option')['ID'], $size = 'origin', $icon = false );
?>

<div class="navbar navbar-expand-sm bsnav bsnav-sticky">
    <a class="navbar-brand" href="/"><img src="<?php echo $logoCompanyURL; ?>" alt="" class="img-fluid" width="194px"></a>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-md-between">

        <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['top'];
            $topNav = wp_get_nav_menu_items($menuID);
            if (count($topNav)>0){
                $active = is_front_page() ? 'active' : "";

                echo '<ul class="navbar-nav navbar-mobile mr-0 main_nav pc_menu">';
                echo ' <li class="nav-item '.$active.' d-none d-sm-block"><a class="nav-link" href="/">TOP</a></li>';
                foreach ($topNav as $nav){
                    /* Action here */
                    $active = $nav->object_id == $post->ID ? 'active' : "";
                    $hideOnSP = get_page($nav->object_id)->post_name == 'contact' ? 'd-none d-sm-block' : '';

                    if ($nav->menu_item_parent == 0){
                        $childMenu = get_nav_child_menu($topNav, $nav->ID);

                        $isDropdown = (count($childMenu)>0) ? 'dropdown': '';
                        $signDropdown = (count($childMenu)>0) ? 'dropdown-toggle': '';
                        ?>
                            <li class="nav-item <?php echo $hideOnSP.' '.$active.' '.$isDropdown; ?>" >
                                <a class="nav-link <?php echo $signDropdown; ?>" href="<?php echo $nav->url; ?>" target="<?php echo $nav->target; ?>" id="navbarDropdown-<?php echo $nav->ID; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nav->title; ?></a>
                                <?php 
                                    if (count($childMenu)>0){
                                

                                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown-'.$nav->ID.'">';
                                            foreach($childMenu as $cmenu){
                                                ?>
                                                <a class="dropdown-item" href="<?php echo $cmenu->url; ?>" target="<?php echo $cmenu->target; ?>"><?php echo $cmenu->title; ?></a>
                                                <?php
                                            }
                                        echo '</div>';
                                    }
                                ?>
                            </li>
                        <?php
                    }else{
                        
                    }                    
                    
                }
                echo '</ul>';
            }
        ?>
        <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['top-mobile'];
            $topNav = wp_get_nav_menu_items($menuID);
            if (count($topNav)>0){
                $active = is_front_page() ? 'active' : "";

                echo '<ul class="navbar-nav navbar-mobile mr-0 main_nav sp_menu">';
                echo ' <li class="nav-item '.$active.'"><a class="nav-link" href="/">TOP</a></li>';
                foreach ($topNav as $nav){
                    /* Action here */
                    $active = $nav->object_id == $post->ID ? 'active' : "";

                    if ($nav->menu_item_parent == 0){
                        $childMenu = get_nav_child_menu($topNav, $nav->ID);

                        $isDropdown = (count($childMenu)>0) ? 'dropdown': '';
                        $signDropdown = (count($childMenu)>0) ? 'dropdown-toggle': '';
                        ?>
                            <li class="nav-item <?php echo $active.' '.$isDropdown; ?>" >
                                <a class="nav-link <?php echo $signDropdown; ?>" href="<?php echo $nav->url; ?>" target="<?php echo $nav->target; ?>" id="navbarDropdown-<?php echo $nav->ID; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nav->title; ?></a>
                                <?php 
                                    if (count($childMenu)>0){
                                

                                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown-'.$nav->ID.'">';
                                            foreach($childMenu as $cmenu){
                                                ?>
                                                <a class="dropdown-item" href="<?php echo $cmenu->url; ?>" target="<?php echo $cmenu->target; ?>"><?php echo $cmenu->title; ?></a>
                                                <?php
                                            }
                                        echo '</div>';
                                    }
                                ?>
                            </li>
                        <?php
                    }                    
                    
                }
                ?>
                
                <li class="nav-item d-block d-sm-none" style="margin-top: 20px;">
                    <?php 
                        $socialLinked = get_field('social_linked', 'option');
                        
                        if(!empty($socialLinked)):
                            echo '<div class="social-link">';
                            foreach($socialLinked as $name => $link){
                                if(!empty($link)):
                                ?>
                                    <a href="<?php echo $link; ?>"><img src="<?php echo SGVinK::get_images_uri()."/social/icon-".$name.".png"; ?>" class="img-responsive" alt="<?php echo 'social-'.$name; ?>" width="40"></a>
                                <?php
                                endif;
                            }
                            echo '</div>';
                        endif; 
                    ?>
                </li>
                <?php
                echo '</ul>';
            }
        ?>
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
            <h2>
                <!-- <img src="<?php //SGVinK::the_images_uri(); ?>/modal02.png" width="75%" class="img-responsive" alt="Image"> -->
                プロスタイルのブランド展開
            </h2>
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close_white.png" alt=""></a>
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
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close_white.png" alt=""></a>
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
            <a href="#" class="btn btnClose" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close_white.png" alt=""></a>
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe id="video" class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
            <a href="#" class="btn btnClose_footer" data-dismiss="modal" aria-label="Close"><img src="<?php SGVinK::the_images_uri(); ?>/1x/i_close.png" alt=""></a>
        </div>
    </div>
</div>
<?php endif; ?>