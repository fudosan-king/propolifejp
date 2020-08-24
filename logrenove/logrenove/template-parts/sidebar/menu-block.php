<div class="each_boxright box_categories">
    <h2>力テゴリー</h2>
    <div class="each_boxright_content">
        <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['side'];
            $sideNav = wp_get_nav_menu_items($menuID);
            
            if (count($sideNav)>0){
                $category_show = ['0','4'];
                echo '<div class="accordion accordionNav_right" id="accordionNav_right">';
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
                                        <button class="btn btn-link <?php echo ($firstExpand=='false')?'collapsed':''; ?>" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $index; ?>" aria-expanded="<?php echo $firstExpand; ?>" aria-controls="collapse-<?php echo $index; ?>" data-child="<?php echo count($childMenu)>0 ? 'true' : 'false'; ?>"><?php if (count($childMenu)>0): ?><i class="fal fa-chevron-right"></i><?php endif; ?></button>
                                    </div>


                                </div>
                                
                                <?php
                                 
                                    if (count($childMenu)>0){
                                
                                        echo '<div id="collapse-'.$index.'" class="collapse '.$firstShow.'" aria-labelledby="heading-'.$index.'" >
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
               
    </div>
</div>