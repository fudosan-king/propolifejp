<?php 
	$logoCompanyURL = wp_get_attachment_image_url( get_field('site_logo', 'option')['ID'], $size = 'medium', $icon = false );
?>
	<footer>
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col col-12 col-sm-12 col-md-2">
						<?php 
							$inquiryContact = get_field('inquiry_contact', 'option');
							if(!empty($inquiryContact)):
						?>
							<a class="btn btnInquiries" href="<?php echo $inquiryContact['url']; ?>" target="<?php echo $inquiryContact['target']; ?>"><?php echo $inquiryContact['title']; ?></a>
						<?php endif; ?>
					</div>
					<div class="col col-12 col-sm-12 col-md-2">
						<?php 
							$socialLinked = get_field('social_linked', 'option');
							
							if(!empty($socialLinked)):
								echo '<div class="social-link">';
								foreach($socialLinked as $name => $link){
									?>
										<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo SGVinK::get_images_uri()."/social/icon-".$name.".png"; ?>" class="img-responsive" alt="<?php echo 'social-'.$name; ?>" width="40"></a>
									<?php
								}
								echo '</div>';
							endif; 
						?>
					</div>

					<?php 
		                /*WORKING HOUR PART*/
		                $working_hour = get_field('working_hour', 'option');

		                if (!empty(get_field('working_hour_define')) && get_field('working_hour_define') == 'custom'){
		                    $working_hour = get_field('working_hour');
		                }
		            ?>
					<div class="col col-12 col-sm-12 col-md-4">
						<p class="hourwoking"><?php echo $working_hour; ?></p>
					</div>
					<div class="col col-12 col-sm-12 col-md-4">
						<p class="freecall"><i class="i_phone"></i> <a href="tel:<?php echo get_field('phone_number', 'option') ?>"><?php echo get_field('phone_number', 'option') ?></a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="footer_mid">
			<div class="container">
				<div class="row">
					<div class="col col-12 col-sm-8 offset-sm-2 offset-0">
						<div class="row">
							<div class="col col-12 col-sm-12 col-md-3">
								<a href="index.php" class="logo_footer"><img src="<?php echo $logoCompanyURL; ?>" alt="" class="img-fluid" width="194px"></a>
							</div>
							<div class="col col-12 col-sm-12 col-md-9">
								<?php 
						            $menuLocations = get_nav_menu_locations();
						            $menuID = $menuLocations['bottom'];
						            $bottomNav = wp_get_nav_menu_items($menuID);
						            if (count($bottomNav)>0){
						                $active = is_front_page() ? 'active' : "";
						                echo '<ul class="menu_footer">';
						                foreach ($bottomNav as $nav){
						                    /* Action here */
						                    $active = $nav->object_id == $post->ID ? 'active' : "";
						                    echo '<li><a href="'.$nav->url.'" target="'.$nav->target.'">'.$nav->title.'</a></li>';
						                }
						                echo '</ul>';
						            }
						        ?>
								<!-- <ul class="menu_footer">
									<li><a href="">グループ会社</a></li>
									<li><a href="">採用情報 </a></li>
									<li><a href="">プライバシーポリシー </a></li>
									<li><a href="">ソーシャルメディアポリシー</a></li>
									<li><a href="">利用規約</a></li>
									<li><a href="">反社会性威力排除に関する基本方針</a></li>
									<li><a href="">お問い合わせ</a></li>
									<li><a href="">仕入れ不動産募集</a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="footer_bottom">
			<div class="container">
				<div class="row">
					<div class="col col-12 col-sm-12">
						<?php echo get_field('copyright_content', 'option'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class='back-to-top' id='back-to-top' title='Back to top'>
		<img src="<?php SGVinK::the_images_uri(); ?>/1x/i_top.png" alt="" class="img-fluid">
	</div>