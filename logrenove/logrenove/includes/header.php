<?php 
global $detect, $post;
$header_fixed = $detect->isMobile() && is_single() && get_post_type($post->ID) == 'post'?'position: fixed;':'';
?>
<header style="<?php echo $header_fixed; ?>">
    <div class="top_header">
        <div class="container">
            <div class="row no-gutters justify-content-between justify-content-md-center">
                <div class="col-3 col-md-3 align-self-center">
                    
                </div>
                <div class="col-4 col-md-4 align-self-center">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_md"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" alt="logrenove_logo" class="img-fluid" width="257"></a>
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_sm"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" alt="logrenove_logo" class="img-fluid" width="257"></a>
                </div>
                <!-- <div class="col-6 col-md-5 align-self-center">
                    <?php $service_url = ''; $service_text_sp = ''; $service_text_pc = ''; if (is_singular('post')) {
                        global $post;
                        $postCats = get_the_category($post->ID);
                        if ($postCats) {
                            foreach ($postCats as $cat) {
                                if (get_field('service_text_pc', $cat)) {
                                    $service_text_pc = get_field('service_text_pc', $cat);
                                    $service_text_sp = get_field('service_text_sp', $cat);
                                    $service_url = get_field('service_url', $cat);
                                    break;
                                }
                            }
                        }
                        if (!$service_text_pc) {
                            $service_text_pc = get_field('service_text_pc_homepage', 'option');
                            $service_text_sp = get_field('service_text_sp_homepage', 'option');
                            $service_url = get_field('service_url_homepage', 'option');
                        }
                    } else {
                        if (get_field('service_text_pc',get_queried_object())) {
                            $service_text_pc = get_field('service_text_pc', get_queried_object());
                            $service_text_sp = get_field('service_text_sp', get_queried_object());
                            $service_url = get_field('service_url', get_queried_object());
                        } else {
                            $service_text_pc = get_field('service_text_pc_homepage', 'option');
                            $service_text_sp = get_field('service_text_sp_homepage', 'option');
                            $service_url = get_field('service_url_homepage', 'option');
                        }
                    } ?>
                    <a target="_blank" rel="noopener noreferrer" href="<?php echo $service_url; ?>" class="btn-link btn btn_applyconsultation d-none d-lg-block"><?php echo $service_text_pc; ?></a>
                    <a target="_blank" rel="noopener noreferrer" href="<?php echo $service_url; ?>" class="btn-link btn btn_applyconsultation d-block d-lg-none"><?php echo $service_text_sp; ?></a>
                </div> -->
                <div class="col-3 col-md-3 align-self-center text-right">
                    <div class="box_top_menu">
                        <!-- <div class="box_top_user_md">
                            <a href="login.php" class="btn btnSignup float-right ml-2"><i class="fas fa-sign-in-alt"></i> <span>ログイン</span></a>
                            <a href="signin.php" class="btn btnSignup float-right"><i class="fas fa-user"></i> <span>新規登録</span></a>
                        </div> -->
                        <?php get_template_part( 'template-parts/login', 'header' ); ?>
                        <!-- <a href="<?php echo esc_url(network_site_url('mailmagazine')); ?>" class="btn btn_email">
                            <img src="<?=IMAGE_PATH;?>/mailmagazine/i_email.svg" alt="" class="img-fluid mr-0 mr-lg-2" width="20"><span class="d-none d-lg-inline-block">メルマガ登録</span>
                        </a> -->
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
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
            <?php // get_template_part( 'template-parts/searchform', 'sp' ); ?>

            <?php 
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['side'];
                $sideNav = wp_get_nav_menu_items($menuID);
                $category_show = ['0','4'];
                
                if (count($sideNav)>0){
                   
                    echo '<div class="accordion accordionNav" id="accordionNav">';
                    foreach ($sideNav as $index => $nav){
                        /* Action here */

                        if( in_array($index, $category_show)){
                            $firstExpand = 'true';
                            $firstShow = 'show';
                        }else{
                            $firstExpand = 'false';
                            $firstShow = '';
                        }

                        if ($nav->menu_item_parent == 0){
                            $childMenu = get_nav_child_menu($sideNav, $nav->ID);
                            $isCollapsed = count($childMenu)>0 ? 'collapsed' : '';
                            ?>

                                <div class="card">
                                    <div class="card-header" id="heading-<?php echo $index; ?>">
                                        <div class="card-wrapper mb-0">
                                            <a href="<?php echo $nav->url; ?>"><?php echo $nav->title; ?></a>
                                            <button class="btn btn-link <?php echo ($firstExpand=='false')?'collapsed':''; ?>" type="button" data-toggle="collapse" data-target="#collapse-sp-<?php echo $index; ?>" aria-expanded="<?php echo $firstExpand; ?>" aria-controls="collapse-sp-<?php echo $index; ?>"  data-child="<?php echo count($childMenu)>0 ? 'true' : 'false'; ?>"><?php if (count($childMenu)>0): ?><i class="fal fa-chevron-right"></i><?php endif; ?></button>
                                        </div>
                                    </div>
                                    
                                    <?php
                                        if (count($childMenu)>0){
                                    
                                            echo '<div id="collapse-sp-'.$index.'" class="collapse '.$firstShow.'" aria-labelledby="heading-'.$index.'" data-parent="#accordionNav_right">
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