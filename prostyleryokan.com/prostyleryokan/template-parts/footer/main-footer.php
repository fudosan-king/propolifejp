<?php 
$page_info = get_page_by_path('general-addition-info');
$company_profile = get_field('company_profile', $page_info);
$footer_info = get_field('footer', $page_info);
$top_extra_content = $footer_info['top_extra_content'];
$footer_above = $footer_info['above_content'];
$footer_bottom = $footer_info['bottom_content'];

$footer_extra_scripts = $footer_info['extra_scripts'];
?>



<!-- FOOTER -->
<footer>
    <!-- <section class="advisor">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="https://www.facebook.com/ProstyleRyokanYokohamaBashamichi/" target="_blank">
                    <img class="fb-banner" src="https://prostyleryokan.test/yokohamabashamichi/wp-content/uploads/2018/09/fb-banner.png" alt="">
                </a>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div id="TA_cdsratingsonlywide312" class="TA_cdsratingsonlywide">
                    <ul id="UpxQtD" class="TA_links bG3iHwi">
                        <li id="EuFhfKT" class="3ijTJl9i7cj">
                            <a target="_blank" href="https://www.tripadvisor.jp/"><img src="https://www.tripadvisor.jp/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
                        </li>
                    </ul>
                </div>
                <script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlywide&amp;uniq=312&amp;locationId=14888230&amp;lang=ja&amp;border=true&amp;display_version=2"></script>
            </div>
        </div>
       
    </section> -->

    <?php 
        if (!empty($footer_above))
            echo $footer_above;
    ?>

	<div class="container">
		<div class="row">
			<div class="col col-12">
				<a href="/" class="logo_footer">
          <img src="<?php echo $footer_info['bottom_content']['logo_image']['url']; ?>" width="150" alt="" class="img-fluid">
        </a>
        
        <?php 
            $location = get_nav_menu_locations();
            $menuId = wp_get_nav_menu_object( $location['bottom'] );
            $menuBotoom = wp_get_nav_menu_items( $menuId );

            if (!empty($menuBotoom)):
                echo '<ul class="menu_footer">';
                foreach ($menuBotoom as $menu){
                   echo '<li><a href="'.$menu->url.'" target="'.$menu->target.'">'.$menu->title.'</a></li>';
                }
                echo '</ul>';
            endif;
        
            // Phone Mapped
            if (!empty($footer_bottom['map_phone_list'])):
                foreach ($footer_bottom['map_phone_list'] as $field){
                    ?>
                    <a class="fone" href="tel:<?php echo phone_title_map($field['phone_title_map']); ?>" class="d-inline-block" title="">
                      <i class="fas fa-phone-volume"></i> 
                      <span><?php echo phone_title_map($field['phone_title_map']); ?></span>
                    </a>
                    <?php
                }
            endif;

            // Email Mapped
            if (!empty($footer_bottom['map_email_list'])):
                foreach ($footer_bottom['map_email_list'] as $field){
                    ?>
                    <a class="email d-inline-block" href="mailto:<?php echo email_title_map($field['email_title_map']); ?>" title="">
                      <i class="far fa-envelope"></i> 
                      <span><?php echo email_title_map($field['email_title_map']); ?></span>
                  </a>
                    <?php
                }
            endif;
        ?>
				
				
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<p class="copyright">
			<a href="#" title=""><?php echo $footer_info['bottom_content']['company_copyright']; ?></a>
		</p>
	</div>
</footer>
<!-- END FOOTER -->