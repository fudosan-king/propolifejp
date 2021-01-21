<?php get_header(); ?>
<div class="visWrap">
    </div>
    <div class="vis">
        <div class="vis_logo">
            <p class="gNav_logo"><img src="<?php echo TEMPLATE_ASSETS_PATH; ?>/img/home/PROSTYLERYOKAN_logo.png" width="200" height="148" alt=""></p>
        </div>
        <div id="js-vis_slide" class="vis_slide">
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no1"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no2"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no3"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no5"></div>
            </div>
            <div class="vis_imageWrap">
                <div class="vis_image vis_image-no6"></div>
            </div>
        </div>
    </div>

<!-- <div id="pagePath">
<div class="inner">
<?php if(function_exists('bcn_display')) { bcn_display();} ?>
</div>
</div> -->
	<div id="main">
<section id="pressrelease">
		<h3 class="headLine02"><?php single_term_title(); ?></h3>

<?php
    function archiveFunc($year){
        query_posts('category_name=ir&posts_per_page=-1&year='.$year.'&order=DESC');
        if(have_posts()) : 
?>

<h4 class="h4Ttl"><?php echo $year; ?>年</h4>
<?php while(have_posts()) : the_post(); ?>
<dl class="clearfix">
<dt><span><?php the_time('Y/m/d'); ?></span> <span class="cat_name_dt">IRニュース</span></dt>
<dd>
<a href="<?php echo wp_get_attachment_url(post_custom('pdf'),'originalImage'); ?>" target="_blank" class="pdf_ico">
<?php the_title(''); ?>
</a>

</dd>
</dl>
<?php endwhile; ?>

<?php   endif;
        wp_reset_query();
}
    $thisyear = date('Y'); // 現在の西暦年を取得
    for ($year=$thisyear; $year >= 2000; $year--) { 
        // $year >= で指定した年から現在の年までの記事を出力（例では2000年から現在まで）
        archiveFunc($year);
    }
?>


</section>
		</div>
	<!-- /#main -->
<?php get_footer(); ?>