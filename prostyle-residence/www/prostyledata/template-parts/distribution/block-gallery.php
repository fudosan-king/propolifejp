<?php 

function _generate_boxImage_content($img){
    $html='';

    if(!empty($img) && isset($img)){
        $html = '
            <h2>'.$img['title'].'</h2>
            <h3>'.$img['caption'].'</h3>
            <p>'.$img['description'].'</p>
        ';
    }

    return $html;
}

function loadGallerySlider($isDesktop = true) {

    $maxImage = $isDesktop ? 6 : 4;
    $galleryControl = $isDesktop ? 'slider_gallery_control' : 'slider_gallery_control_sp';
    $fancyClass = $isDesktop ? 'gallery-pc' : 'gallery-sp';

    if (have_rows($galleryControl)):

        // GALLERY PC VERSION
        $flag = 1;
        echo '<div class="box_gallerys">';
        while(have_rows($galleryControl)): the_row();

            if ($flag == 1){
                echo '  
                    <div class="row no-gutters">';
            }

            switch (get_row_layout()) {
                case 'group_image_1':
                    # code...
                    break;

                case 'group_image_2': {
                    $imgBigURL1 = wp_get_attachment_image_url( get_sub_field('group_2_img_1')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL2 = wp_get_attachment_image_url( get_sub_field('group_2_img_2')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL3 = wp_get_attachment_image_url( get_sub_field('group_2_img_3')['ID'], $size = 'large', $icon = false);

                    echo '
                    <div class="col col-6 col-sm-4">
                        <figure class="photo orange">
                            <img src="'.$imgBigURL1.'" alt="" class="img-fluid">
                            <i class="ion-search"></i>
                            <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_2_img_1')).'" href="'.$imgBigURL1.'"></a>
                        </figure>
                        <div class="row no-gutters">
                            <div class="col col-6 col-sm-6">
                                <figure class="photo orange">
                                    <img src="'.$imgSmallURL2.'" alt="" class="img-fluid">
                                    <i class="ion-search"></i>
                                    <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_2_img_2')).'" href="'.$imgSmallURL2.'"></a>
                                </figure>
                            </div>
                            <div class="col col-6 col-sm-6">
                                <figure class="photo orange">
                                    <img src="'.$imgSmallURL3.'" alt="" class="img-fluid">
                                    <i class="ion-search"></i>
                                    <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_2_img_3')).'" href="'.$imgSmallURL3.'"></a>
                                </figure>
                            </div>
                        </div>
                    </div>';
                }break;

                case 'group_image_3': {
                    $imgBigURL3 = wp_get_attachment_image_url( get_sub_field('group_3_img_3')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL1 = wp_get_attachment_image_url( get_sub_field('group_3_img_1')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL2 = wp_get_attachment_image_url( get_sub_field('group_3_img_2')['ID'], $size = 'large', $icon = false);
                    echo '
                    <div class="col col-6 col-sm-4">
                        <div class="row no-gutters">
                            <div class="col col-6 col-sm-6">
                                <figure class="photo orange">
                                    <img src="'.$imgSmallURL1.'" alt="" class="img-fluid">
                                    <i class="ion-search"></i>
                                    <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_3_img_1')).'" href="'.$imgSmallURL1.'"></a>
                                </figure>
                            </div>
                            <div class="col col-6 col-sm-6">
                                <figure class="photo orange">
                                    <img src="'.$imgSmallURL2.'" alt="" class="img-fluid">
                                    <i class="ion-search"></i>
                                    <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_3_img_2')).'" href="'.$imgSmallURL2.'"></a>
                                </figure>
                            </div>
                        </div>
                        <figure class="photo orange">
                            <img src="'.$imgBigURL3.'" alt="" class="img-fluid">
                            <i class="ion-search"></i>
                            <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_3_img_3')).'" href="'.$imgBigURL3.'"></a>
                        </figure>
                    </div>';
                }break;

                case 'group_image_4':
                    # code...
                    break;

                case 'group_image_5': {
                    $imgBigURL3 = wp_get_attachment_image_url( get_sub_field('group_5_img_3')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL1 = wp_get_attachment_image_url( get_sub_field('group_5_img_1')['ID'], $size = 'large', $icon = false);
                    $imgSmallURL2 = wp_get_attachment_image_url( get_sub_field('group_5_img_2')['ID'], $size = 'large', $icon = false);
                    echo '
                    <div class="col col-12 col-sm-4">
                        <div class="row no-gutters">
                            <div class="col col-6 col-sm-6">
                                <div class="row no-gutters">
                                    <div class="col col-12">
                                        <figure class="photo orange">
                                            <img src="'.$imgSmallURL1.'" alt="" class="img-fluid">
                                            <i class="ion-search"></i>
                                            <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_5_img_1')).'" href="'.$imgSmallURL1.'"></a>
                                        </figure>
                                    </div>
                                    <div class="col col-12">
                                        <figure class="photo orange">
                                            <img src="'.$imgSmallURL2.'" alt="" class="img-fluid">
                                            <i class="ion-search"></i>
                                            <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_5_img_2')).'" href="'.$imgSmallURL2.'"></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-6 col-sm-6">
                                <figure class="photo photo_larg orange">
                                    <img src="'.$imgBigURL3.'" alt="" class="img-fluid">
                                    <i class="ion-search"></i>
                                    <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('group_5_img_3')).'" href="'.$imgBigURL3.'"></a>
                                </figure>
                            </div>
                        </div>
                    </div>';
                }break;
                
                default: {
                    $imgURL = wp_get_attachment_image_url( get_sub_field('single_main_img')['ID'], $size = 'large', $icon = false);
                    echo '
                    <div class="col col-6 col-sm-4">
                        <figure class="photo photo_larg orange">
                            <img src="'.$imgURL.'" alt="" class="img-fluid">
                            <i class="ion-search"></i>
                            <a data-fancybox="'.$fancyClass.'" data-caption="'._generate_boxImage_content(get_sub_field('single_main_img')).'" href="'.$imgURL.'"></a>
                        </figure>
                    </div>';
                }break;
            }

            // HERE

            if ($flag == $maxImage || $flag == count(get_field($galleryControl)) ){
                echo '
                </div>';
                $flag = 0;
            }

            $flag++;
        endwhile;
        echo '</div>';
    endif;
}
?>

<section class="section_gallerys project d-none d-sm-block">
    <div class="w_section_gallerys">
        <div class="container">
            <div class="row">
                <div class="col col-sm-12">
                    <?php loadGallerySlider(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_gallerys project d-block d-sm-none">
    <div class="w_section_gallerys">
        <div class="container">
            <div class="row">
                <div class="col col-sm-12">
                    <?php loadGallerySlider(false); ?>

                </div>
            </div>
        </div>
    </div>
</section>
