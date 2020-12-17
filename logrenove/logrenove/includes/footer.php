<footer class="text-center">
  <section class="footer_top">
      <h2><a class="logo_footer" href="<?php echo get_home_url(); ?>"><img src="<?=IMAGE_PATH;?>/1x/logo-white.svg" alt="logrenove_logo" class="img-fluid" width="257"></a></h2>
      <ul class="list_social">
        <?php 
          if(!empty(get_field('facebook_url', 'option')))
            echo '<li><a href="'.get_field('facebook_url', 'option').'" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>';
          if(!empty(get_field('twitter_url', 'option')))
            echo '<li><a href="'.get_field('twitter_url', 'option').'" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>';
          if(!empty(get_field('instagram_url', 'option')))
            echo '<li><a href="'.get_field('instagram_url', 'option').'" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>';
          if(!empty(get_field('line_id', 'option')))
          {
            $line_id = get_field('line_id', 'option');
            $line_url = 'https://page.line.me/'.explode('@', $line_id, 2)[1];
            echo '<li><a href="'.$line_url.'" target="_blank" rel="noopener noreferrer"><i class="fab fa-line"></i></a></li>';
          }
        ?>
        <li>
          <a href="<?php echo esc_url(network_site_url('mailmagazine')); ?>" class="btn" rel="noopener noreferrer">
              <img src="<?=IMAGE_PATH;?>/mailmagazine/i_email_footer.svg" width="15">
          </a>
        </li>
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
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg-7 align-self-center text-center">
                        <p><?php echo get_field('footer_copyright', 'option'); ?></p>
                    </div>
                    <div class="col-12 col-lg-2 align-self-center">
                        <p class="mb-2 mb-lg-0">関連サイト</p>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center">
                        <a target="_blank" href="https://www.chronicle-web.com/plus/" rel="noopener noreferrer"><img src="<?=IMAGE_PATH;?>/chro_plus_white.png" alt="" class="img-fluid" width="200"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <div class="footer_contact d-flex d-lg-none <?=is_home()?'fixed_bottom':''?>">
      <a href="<?php echo site_url('contact'); ?>" class="flex-fill">
          <img src="<?php echo IMAGE_PATH; ?>/i_mail.svg" alt="" class="img-fluid" width="20">
          <span>お問い合わせ</span>
      </a>
      <!-- <a href="tel:0000000" class="flex-fill">
          <img src="<?php echo IMAGE_PATH; ?>/i_phone.svg" alt="" class="img-fluid" width="20">
          <span>相談する</span>
      </a> -->
      <a href="<?php echo site_url('document'); ?>" class="flex-fill">
          <img src="<?php echo IMAGE_PATH; ?>/i_book.svg" alt="" class="img-fluid" width="20">
          <span>資料請求</span>
      </a>
  </div>
</footer>
