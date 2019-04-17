<?php 
$location = get_nav_menu_locations();
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?>

<div class="nav">
    <a href="/" class="logo_gray d-none d-md-block"><img class="img-fluid" src="<?php echo $image; ?>" width="150"></img></a>
    <div class="nav__content">

        <?php 
        $menuId = wp_get_nav_menu_object( $location['top'] );
        $menuTop = wp_get_nav_menu_items( $menuId );

        if (!empty($menuTop)):
            echo '<ul class="nav__list">';
            foreach($menuTop as $menu){
                if ($menu->menu_item_parent == 0){
                    $childMenu = get_nav_child_menu($menuTop, $menu->ID);
                    ?>
                    <li class="nav__list-item">
                        <a href="<?php echo $menu->url; ?>" target="<?php echo $menu->target; ?>" data-prevent="<?php echo $menu->url == "#" ? "yes" : "no"; ?>"><?php echo $menu->title; ?></a>
                        <?php 
                        if (count($childMenu)>0){
                            echo '<ul class="nav_sub">';
                            foreach($childMenu as $cmenu){
                                ?>
                                <li><a href="<?php echo $cmenu->url; ?>" target="<?php echo $cmenu->target; ?>"><?php echo $cmenu->title; ?></a></li>
                                <?php
                            }
                            echo '</ul>';
                        }
                        ?>
                    </li>
                    <?php
                }
            }
            echo '</ul>';
        endif;
        ?>

    </div>

    <!-- <ul class="nav_left">
        <li><a href="">English</a></li>
        <li><a href="">日本語</a></li>
        <li><a href="">中国語</a></li>
        <li><a href="">中国語</a></li>
    </ul> -->
    <!-- nav_left -->

    <?php
      qtranxf_generateLanguageSelectCode(array('type' => 'text'), 'nav_lang');
    ?>

    <!-- nav_bottom -->
    <?php 
    $menuId = wp_get_nav_menu_object( $location['top-support'] );
    $menuTopSupport = wp_get_nav_menu_items( $menuId );

    if (!empty($menuTopSupport)):
        echo '<ul class="nav_bottom">';
        foreach ($menuTopSupport as $menu){
            echo '<li><a href="'.$menu->url.'" target="'.$menu->target.'">'.$menu->title.'</a></li>';
        }
        echo '</ul>';
    endif;
    ?>

    </div><!-- nav main -->