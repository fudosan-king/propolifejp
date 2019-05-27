<?php
$dir_name = 'perspective';
// $current_lang = qtrans_getLanguage();
// if($current_lang != 'ja'){ header('location: /'); exit();}
$interior_width = '2000px'; 
$interior_height ='950px'; 
?>
<?php get_header(); ?>

<div class="content">
<?php 
    if(have_posts()):
        while(have_posts()): the_post();
            include 'include/perspective/slider.php';
            include 'include/perspective/estates_product.php';
            the_content();
            include 'include/perspective/other_content.php';
        endwhile;
    endif;
?>

</div>

<?php get_footer(); ?>
