<?php
global $temp_dir;
$dir_name = 'point';
?>
<?php
    $page_title = get_the_title();
    $point_top_text = get_field('point_top_text');
    $point_page = array();
    $point_id = array();
    for($i = 0; $i < 5; $i ++){
        $point_page[] = get_page_by_path('point/point' . ($i + 1));
        $point_id[] = $point_page[$i]->ID;
    }
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_h2.png" alt="POINTS" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/point/img_title_h2_sp.png" alt="POINTS" class="sp"></h2>
        <p class="title_sub"><?php echo $page_title; ?><span class="line"></span></p>
        <div class="title_copy">
            <p><?php echo $point_top_text; ?></p>
        </div>
    </div>
    
    <div id="page_point">


<?php include_once('page-point1.php'); ?>
<?php // include_once('page-point2.php'); ?>
<?php // include_once('page-point3.php'); ?>
<?php // include_once('page-point4.php'); ?>
<?php // include_once('page-point5.php'); ?>


    </div><!-- // #page_point -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->

<p class="img_btm_animal"></p>
<?php get_footer(); ?>