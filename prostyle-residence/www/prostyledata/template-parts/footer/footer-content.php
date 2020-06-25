<?php 
	$logoCompanyURL = wp_get_attachment_image_url( get_field('site_logo', 'option')['ID'], $size = 'medium', $icon = false );
?>
	<footer id="footer">

        <div class="social-banner">
            <div class="container box_changelife">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box_changelife_body">
                            <div class="row no-gutters">
                                <div class="col-6 col-md-7 align-self-center">
                                    <a href="/sumikae/"><img src="<?php SGVinK::the_images_uri(); ?>/1x/logo_footer_sumikae.svg" alt="" class="img-fluid" width="180"></a>
                                </div>
                                <div class="col-6 col-md-5 align-self-center">
                                    <p class="mb-0">住み替えを<span>ご希望の方</span></p>
                                </div>
                            </div>
                            <a href="https://www.prostyle-residence.com/sumikae/" class="btn btn_clickHere">&gt;&gt; 詳細はコチラ</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box_changelife_body">
                            <div class="row no-gutters">
                                <div class="col-5 col-md-5 align-self-center">
                                    <img src="<?php SGVinK::the_images_uri(); ?>/1x/i_search.png" alt="" class="img-fluid float-right i_search_sp" width="108">
                                </div>
                                <div class="col-7 col-md-7 align-self-center">
                                    <p class="pl-3 mb-0 assessment_property">物件の無料査定<span>承ります</span></p>
                                </div>
                            </div>
                            <a href="/sell/" class="btn btn_clickHere">&gt;&gt; 詳細はコチラ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

		<div class="w_footer_sns">
			<div class="container">
				<div class="footer_sns d-none d-md-block">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6 mx-auto">
							<div class="row text-center">
								<div class="col-md-6 align-self-center">
									<a href="https://www.instagram.com/prostyle20170217/" target="_blank"> <img width="54" src="<?php SGVinK::the_images_uri(); ?>/1x/i_instagram.png" alt=""> <span class="ml-1">公式Instagram</span></a>
								</div>
								<!-- <div class="col-md-6 align-self-center">
									<a href="http://line.me/R/ti/p/@vqs2771x" target="_blank"> <img width="54" src="<?php //SGVinK::the_images_uri(); ?>/1x/LINE_APP@2x.png" alt=""> <span class="ml-1">公式LINE</span></a>
								</div> -->
								<div class="col-md-6 align-self-center">
									<a href="https://www.facebook.com/prostyleresidence/" target="_blank"> <img width="54" src="<?php SGVinK::the_images_uri(); ?>/1x/f_logo_RGB-Blue_58@2x.png" alt=""> <span class="ml-1">公式FACEBOOK</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer_sns d-block d-md-none">
					<div class="row">
						<div class="col-7 align-self-center">
							<p class="mb-0 text-left">株式会社プロスタイル公式SNS</p>
						</div>
						<div class="col-2 align-self-center">
							<a href="https://www.instagram.com/prostyle20170217/" target="_blank"> <img width="39" src="<?php SGVinK::the_images_uri(); ?>/1x/i_instagram.png" alt=""></a>
						</div>
						<!-- <div class="col-2 align-self-center">
							<a href="http://line.me/R/ti/p/@vqs2771x" target="_blank"> <img width="39" src="<?php //SGVinK::the_images_uri(); ?>/1x/LINE_APP@2x.png" alt=""></a>
						</div> -->
						<div class="col-2 align-self-center">
							<a href="https://www.facebook.com/prostyleresidence/" target="_blank"> <img width="39" src="<?php SGVinK::the_images_uri(); ?>/1x/f_logo_RGB-Blue_58@2x.png" alt=""></a>
						</div>
					</div>
				</div>

			</div>
		</div>

	    <?php 
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['footer'];
            $footerNav = wp_get_nav_menu_items($menuID);
            if (count($footerNav)>0){
                $active = is_front_page() ? 'active' : "";

                echo '<div class="naviBox">';
	            echo '<ul class="naviUl clearfix">';
                foreach ($footerNav as $nav){
                    /* Action here */
                    $active = $nav->object_id == $post->ID ? 'active' : "";

                    if ($nav->menu_item_parent == 0){
                        $childMenu = get_nav_child_menu($footerNav, $nav->ID);
                        $slug = get_post($nav->object_id)->post_name;

                        $isDropdown = (count($childMenu)>0) ? 'dropdown': '';
                        $signDropdown = (count($childMenu)>0)  ? 'dropdown-toggle': '';
                        ?>
                        	<li class="heightLine-a <?php echo $isDropdown; ?>">
								<p><a href="<?php echo $nav->url; ?>" target="<?php echo $nav->target; ?>"><?php echo $nav->title; ?></a></p>
                                <?php 
                                    if (count($childMenu)>0){
                                        echo '<ul>';
                                            foreach($childMenu as $cmenu){
                                            	if ($cmenu->url!="#"):
                                                ?>
                                                	<li><a href="<?php echo $cmenu->url; ?>" target="<?php echo $cmenu->target; ?>"><?php echo $cmenu->title; ?></a></li>
                                                <?php
                                                else:
                                                ?>
													<li><a class="none-href"><?php echo $cmenu->title; ?></a></li>
                                                <?php
                                                endif;
                                            }
                                        echo '</ul>';
                                    }
                                    if ($slug == 'contact'){
                                        $working_hour = get_field('working_hour', 'option');
                                        $phone_number = get_field('phone_number', 'option')
                                        ?>
                                            <address>
                                                <a href="tel:<?=$phone_number;?>"><?=$phone_number;?></a><span>（無料）</span><br>
                                                <?=$working_hour;?>
                                            </address>
                                        <?php
                                    }
                                ?>
                            </li>
                        <?php
                    }                 
                    
                }


                $menuLocations_sp = get_nav_menu_locations();
	            $menuID_sp = $menuLocations_sp['bottom'];
	            $bottomNav_sp = wp_get_nav_menu_items($menuID_sp);
	            if (count($bottomNav_sp)>0){
	                $active = is_front_page() ? 'active' : "";
	                foreach ($bottomNav_sp as $nav){
	                    /* Action here */
	                    $active = $nav->object_id == $post->ID ? 'active' : "";
	                    echo '<li class="sp"><p><a href="'.$nav->url.'" target="'.$nav->target.'">'.$nav->title.'</a></p></li>';
	                }
	            }

                echo '</ul>';
	            echo '</div>';
            }
        ?>

		<!-- <div class="naviBox">
			<ul class="naviUl clearfix">
				<li class="heightLine-a" style="height: 372px;">
					<p><a href="https://www.propolife.co.jp/">TOP</a></p>
				</li>
				
				<li class="heightLine-a" style="height: 372px;">
					<p><a href="https://www.propolife.co.jp/company/">企業情報</a></p>
					<ul>
						<li><a href="https://www.propolife.co.jp/company/president/">会社概要</a></li>
						<li><a href="https://www.propolife.co.jp/company/philosophy/">沿革</a></li>
						<li><a href="https://www.propolife.co.jp/company/">アクセス</a></li>
						<li><a href="https://www.propolife.co.jp/company/history/">NEWS</a></li>
						<li><a href="https://www.propolife.co.jp/company/officer/">採用情報</a></li>
					</ul>
				</li>
				<li class="heightLine-a" style="height: 372px;">
					<p><a href="https://www.propolife.co.jp/news/">分譲実績</a></p>
				</li>
				<li class="heightLine-a" style="height: 372px;">
					<p><a href="https://www.propolife.co.jp/recruit/" target="_blank">事業用地募集</a></p>
				</li>
				<li class="heightLine-a" style="height: 372px;">
					<p><a href="https://www.propolife.co.jp/group/">グループ企業</a></p>
					<ul>
						<li><a href="https://www.chronicle-web.com/" target="_blank">株式会社クロニクル</a></li>
						<li><a href="http://www.chronicle-kensetsu.co.jp/" target="_blank">株式会社クロニクル建設</a></li>
						<li><a href="https://www.prostyle-residence.com/" target="_blank">株式会社プロスタイル</a></li>
						<li><span>株式会社プロスタイル横浜</span></li>
						<li><a href="http://chinokanri.co.jp/" target="_blank">千野建物管理株式会社</a></li>
						<li><span>煙台提案生活木業有限公司</span></li>
						<li><a href="http://www.propolifevietnam.com/" target="_blank">PROPOLIFE VIETNAM</a></li>
						<li><a href="http://nikuan-kotakino.com/" target="_blank">株式会社小滝野</a></li>
						<li><a href="http://www.propolifehotels.com">株式会社プロスタイル旅館</a></li>
						<li><a href="https://www.oki-ig.com">株式会社沖縄イゲトー</a></li>
					</ul>
				</li>
				<li class="sp">
					<p><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab&amp;_ga=1.142172282.970461997.1490778452">お問い合わせ</a></p>
				</li>
				<li class="sp">
					<p><a href="https://www.propolife.co.jp/terms/">利用規約</a></p>
				</li>
				<li class="sp">
					<p><a href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></p>
				</li>
				<li class="sp">
					<p><a href="https://www.propolife.co.jp/privacypolicy/">プライバシーポリシー</a></p>
				</li>
				<li class="sp">
					<p><a href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></p>
				</li>

			</ul>
		</div> -->
		<div class="fBox">
			<div class="subBox clearfix">
				<?php echo get_field('copyright_content', 'option'); ?>
				<?php 
		            $menuLocations = get_nav_menu_locations();
		            $menuID = $menuLocations['bottom'];
		            $bottomNav = wp_get_nav_menu_items($menuID);
		            if (count($bottomNav)>0){
		                $active = is_front_page() ? 'active' : "";
		                echo '<ul class="clearfix">';
		                foreach ($bottomNav as $nav){
		                    /* Action here */
		                    $active = $nav->object_id == $post->ID ? 'active' : "";
		                    echo '<li><a href="'.$nav->url.'" target="'.$nav->target.'">'.$nav->title.'</a></li>';
		                }
		                echo '</ul>';
		            }
		        ?>
			</div>
		</div>
	</footer>

	<div class='back-to-top' id='back-to-top' title='Back to top'>
		<img src="<?php SGVinK::the_images_uri(); ?>/1x/i_top.png" alt="" class="img-fluid">
	</div>