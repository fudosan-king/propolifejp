<?php get_header(); ?>

<!-- <div id="main">
	<div class="wrap">
		<h2><a href="<?php //echo esc_url( home_url('/') ); ?>event/">イベント・セミナー情報<span>EVENT &amp; SEMINAR</span></a></h2>
	</div>
</div> -->
<!-- #main -->

<?php 
	if(isset($_GET['display']) && $_GET['display'] == 'combined' ){
		get_template_part( 'template-parts/archive/event', $_GET['display'] );	
	}else{
		get_template_part( 'template-parts/archive/event', 'default' );	
	}
	
?>

<?php get_footer(); ?>
