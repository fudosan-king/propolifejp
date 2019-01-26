<div class="se-pre-con"></div>
<div id="page">
	
		<?php 

		if( has_nav_menu( 'top' )):

			$menuLocations = get_nav_menu_locations();
			$menuID = $menuLocations['top'];
			$primaryNav = wp_get_nav_menu_items($menuID);

			
			?>

			<nav class="navbar navbar-expand-lg navbar-light bg-light nav_top">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <!-- <span class="navbar-toggler-icon my-toggler"></span> -->
			    <div class="wrapper-menu">
			      <div class="line-menu half start"></div>
			      <div class="line-menu"></div>
			      <div class="line-menu half end"></div>
			    </div>
			  </button>

			  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			    	<?php 

			    		foreach ($primaryNav as $nav){
							?>
								 <li class="nav-item <?php echo $nav->object_id == get_option( 'page_on_front' ) ? 'active' : ''; ?>">
							        <a class="nav-link" href="<?php echo $nav->url; ?>"><?php 
							        echo $nav->title;
							        echo $nav->object_id == get_option( 'page_on_front' ) ? '<span class="sr-only">(current)</span>' : '';
							        ?></a>
							      </li>
							<?php
						}

			    	 ?>
			      
			    </ul>
			  </div>
			  	<?php


			  // 		wp_nav_menu(
					// 	array(
					// 		'theme_location' => 'top',
					// 		'container_class' => 'collapse navbar-collapse justify-content-center',
					// 		'container_id' => 'navbarSupportedContent',
					// 		'menu_class' => 'navbar-nav'
					// 	)
					// );

			  	 ?>
			</nav>

			<?php
		endif;

		?>
		
