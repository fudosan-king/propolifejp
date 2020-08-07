<?php
/*Template Name: Gallery - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<?php 
    $group = get_field('gallery_content');
    $photos_gallery = $group['photos_gallery'];
?>

<main>
    <section class="section_gallery">
        <div class="container-fluid">
            <div class="gallery">
                <?php 
                    if (!empty($photos_gallery) && count($photos_gallery)){
                        foreach($photos_gallery as $img){
                            $imgUrl = wp_get_attachment_image_url( $img['ID'], $size = 'large', $icon = false );
                            $imgFigcaption = !empty($img['caption']) ? '<figcaption><span>'.$img['caption'].'</span></figcaption>' : '';
                            echo '<a class="boxImgGallery" href="'.$img['url'].'" data-fancybox="images"><img src="'.$imgUrl.'" alt="" class="gallery-img">'.$imgFigcaption.'</a>';
                        }
                    }
                ?>
            </div> 
        </div>
    </section>

<?php get_footer(); ?>