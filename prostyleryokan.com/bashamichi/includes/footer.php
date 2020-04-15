<?php $footer = get_field('footer', 'option'); ?>
<footer>
    
    <div class="container">
        <div class="row">
            <?php
                $menuLocations = get_nav_menu_locations();
                $menuID = $menuLocations['bottom'];
                $footerMenu = wp_get_nav_menu_items($menuID);
                if (count($footerMenu)>0){

                    foreach ($footerMenu as $nav){
                    /* Action here */
                    
                    if ($nav->menu_item_parent == 0){
                        $childMenu = get_nav_child_menu($footerMenu, $nav->ID);
                        // $classOffset = $count == 0 ? 'offset-md-1' : '';
                        $col = !empty($nav->classes) && !empty(implode(" ", $nav->classes)) ? implode(" ", $nav->classes) : 'col-md-2';

                        echo '<div class="col-12 '.$col.'">
                                <div class="row">
                                    <div class="col-4 col-md-12">
                                        <h6>'.$nav->title.'</h6>
                                    </div>';
                        
                        if (count($childMenu)>0){
                            echo '<div class="col-8 col-md-12">
                                <ul class="list_footer_bottom">';
                                foreach($childMenu as $cmenu){
                                ?>
                                <li><a href="<?=$cmenu->url;?>" class="<?=implode(" ", $cmenu->classes);?>" target="<?=$cmenu->target;?>"><?=$cmenu->title;?></a></li>
                                <?php
                                }
                            echo '</ul>
                            </div>';
                        }
                        echo '  </div>
                            </div>';
                        }
                    }
                }
            ?>
            <div class="col-12 mt-3">
                <p class="copyright"><?php echo $footer['bottom_content']['company_copyright']; ?></p>
            </div>
        </div>
    </div>
</footer>
<div class="bsnav-mobile d-block d-md-none">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar">
        <button class="navbar-toggler toggler-spring navbar_toggler_custom"><span class="navbar-toggler-icon"></span></button>
    </div>
</div>