<footer class="text-center">
  <section class="footer_top">
      <h4><a class="logo_footer" href="<?php echo get_home_url(); ?>"><img src="<?=IMAGE_PATH;?>/1x/logo-white.svg" alt="logrenove_logo" class="img-fluid" width="257"></a></h4>
      <ul class="list_social">
        <?php 
          if(!empty(get_field('facebook_url', 'option')))
            echo '<li><a href="'.get_field('facebook_url', 'option').'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
          if(!empty(get_field('twitter_url', 'option')))
            echo '<li><a href="'.get_field('twitter_url', 'option').'" target="_blank"><i class="fab fa-twitter"></i></a></li>';
          if(!empty(get_field('instagram_url', 'option')))
            echo '<li><a href="'.get_field('instagram_url', 'option').'" target="_blank"><i class="fab fa-instagram"></i></a></li>';
        ?>
      </ul>

      <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['bottom'];
            $sideNav = wp_get_nav_menu_items($menuID);
            
            if (count($sideNav)>0){

                echo '<ul class="list_menufooter">';
                foreach ($sideNav as $index => $nav){
                    /* Action here */

                    if ($nav->menu_item_parent == 0){
                        ?>
                          <li><a href="<?php echo $nav->url; ?>" target="<?php echo $nav->target; ?>"><?php echo $nav->title; ?></a></li>
                        <?php
                    }else{
                        
                    }                    
                }
                echo '</ul>';
            }
        ?>
      
  </section>

  <section class="footer_bottom">
    <p><?php echo get_field('footer_copyright', 'option'); ?></p>
  </section>
</footer>