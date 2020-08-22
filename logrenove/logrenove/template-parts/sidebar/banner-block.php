<?php 
    if(is_single()): 
        $sidebar_banner = get_sidebar_banner();
        $url = $sidebar_banner['url'];
        $banner = $sidebar_banner['banner'];
        if(!empty($banner) && count($banner) > 0):
?>			<div class="sidebar_banner">
				<a href="<?php echo $url['url'] ?>" target="<?php echo $url['target'] ?>">
	                <img src="<?php echo $banner['url']; ?>" class="img-fluid" alt="Responsive image" style="width: 100%">
	            </a>
			</div>
<?php endif;endif; ?>