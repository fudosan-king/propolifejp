<header>
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-4 align-self-center">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_md"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" alt="logrenove_logo" class="img-fluid" width="257"></a>
                </div>
                <div class="col-8 col-md-4 align-self-center">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_sm"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" alt="logrenove_logo" class="img-fluid" width="257"></a>
                    <?php get_search_form(); ?>
                </div>
                <div class="col-2 col-md-4 align-self-center text-right">
                    <!-- <div class="box_top_user_md">
                        <a href="login.php" class="btn btnSignup float-right ml-2"><i class="fas fa-sign-in-alt"></i> <span>ログイン</span></a>
                        <a href="signin.php" class="btn btnSignup float-right"><i class="fas fa-user"></i> <span>新規登録</span></a>
                    </div> -->
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <div class="box_top_user_sm d-flex">
                <a href="signin.php" class="btn btnSignup flex-fill"><i class="fas fa-user"></i> <span>新規登録</span></a>
                <a href="login.php" class="btn btnSignup flex-fill"><i class="fas fa-sign-in-alt"></i> <span>ログイン</span></a>
            </div> -->
            <?php get_template_part( 'template-parts/searchform', 'sp' ); ?>

            <?php 
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['side'];
                $sideNav = wp_get_nav_menu_items($menuID);
                
                if (count($sideNav)>0){
                   
                    echo '<div class="accordion accordionNav" id="accordionNav">';
                    foreach ($sideNav as $index => $nav){
                        /* Action here */

                        if ($nav->menu_item_parent == 0){
                            $childMenu = get_nav_child_menu($sideNav, $nav->ID);
                            $isCollapsed = count($childMenu)>0 ? 'collapsed' : '';
                            ?>

                                <div class="card">
                                    <div class="card-header" id="heading-<?php echo $index; ?>">
                                        <div class="card-wrapper mb-0">
                                            <a href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
                                            <button class="btn btn-link <?php //echo $isCollapsed; ?>" type="button" data-toggle="collapse" data-target="#collapse-sp-<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse-sp-<?php echo $index; ?>"  data-child="<?php echo count($childMenu)>0 ? 'true' : 'false'; ?>"><?php if (count($childMenu)>0): ?><i class="fal fa-chevron-right"></i><?php endif; ?></button>
                                        </div>
                                    </div>
                                    
                                    <?php
                                        if (count($childMenu)>0){
                                    
                                            echo '<div id="collapse-sp-'.$index.'" class="collapse show" aria-labelledby="heading-'.$index.'" data-parent="#accordionNav_right">
                                                    <div class="card-body">
                                                        <ul>';
                                                foreach($childMenu as $jndex => $cmenu){
                                                    ?>
                                                    <li><a href="<?php echo $cmenu->url; ?>"><?php echo $cmenu->title; ?></a></li>
                                                    <?php
                                                }
                                            echo '      </ul>
                                                    </div>
                                                </div>';
                                        }
                                    ?>
                                </div>
                            <?php
                        }else{
                            
                        }                    
                    }
                    echo '</div>';
                }
            ?>
    </nav>

</header>