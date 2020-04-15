<header>
    <div class="navbar navbar-expand-md bsnav bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand ml-3" href="<?php echo get_home_url(); ?>"><img src="<?php echo IMAGES_PATH; ?>/1x/logo.png" alt="" class="img-fluid" width="180"></a>
        <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-md-end">

            <?php 
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['top'];
                $sideNav = wp_get_nav_menu_items($menuID);
                
                if (count($sideNav)>0){

                    echo '<ul class="navbar-nav navbar-mobile mr-0">
                        <li class="nav-item box_logo_sm">
                            <a class="logo_sm" href="'.get_home_url().'"><img src="'.IMAGES_PATH.'/1x/logo.png" alt="" class="img-responsive" width="180"></a>
                        </li>';
                    foreach ($sideNav as $index => $nav){
                        /* Action here */

                        if ($nav->menu_item_parent == 0){
                            $childMenu = get_nav_child_menu($sideNav, $nav->ID);
                            ?>
                                <li class="nav-item <?php echo count($childMenu)>0 ? 'dropdown fadeup' : ''; ?>">
                                    <a class="nav-link" href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?><?php echo count($childMenu)>0 ? '  <i class="fal fa-angle-down fa-lg"></i>' : ''; ?></a>
                                    <?php
                                        if (count($childMenu)>0){
                                    
                                            echo '<ul class="navbar-nav">';
                                                $firstShow = '';
                                                foreach($childMenu as $jndex => $cmenu){
                                                    ?>
                                                    <li class="nav-item"><a class="nav-link" href="<?php echo $cmenu->url; ?>"><?php echo $cmenu->title; ?></a></li>
                                                    <?php
                                                }
                                            echo '</ul>';
                                        }
                                    ?>

                                </li>

                            <?php
                        }else{
                            
                        }                    
                    }
                    get_nav_lang();
                    echo '<li class="nav-item"><a class="nav-link btnBooking" href="#">Booking <i class="fal fa-angle-right fa-lg"></i></a></li>';
                    get_nav_lang(true);
                    echo '</ul>';
                }
            ?>

            <!-- <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item box_logo_sm">
                    <a class="logo_sm" href="<?php echo get_home_url(); ?>"><img src="<?php echo IMAGES_PATH; ?>/1x/logo.png" alt="" class="img-responsive" width="180"></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="concept.php">Concept</a></li>
                <li class="nav-item dropdown fadeup">
                    <a class="nav-link" href="#">Experience  <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="experience1.php">Experience1</a></li>
                        <li class="nav-item"><a class="nav-link" href="experience2.php">Experience2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fadeup">
                    <a class="nav-link" href="#">Rooms  <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="premium_floor.php">Premium floor</a></li>
                        <li class="nav-item"><a class="nav-link" href="regular_floor.php">Regular floor</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurant.php">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Access</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="plan.php">Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQs</a>
                </li>
                <li class="nav-item dropdown fadeup box_lang">
                    <a class="nav-link" href="#">Language <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">JAPANESE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ENGLISH</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link btnBooking" href="#">Booking <i class="fal fa-angle-right fa-lg"></i></a></li>
                <li class="nav-item dropdown fadeup box_lang box_lang_sm">
                    <a class="nav-link" href="#">Language <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">JAPANESE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ENGLISH</a></li>
                    </ul>
                </li>
            </ul> -->

        </div>
    </div>
</header>