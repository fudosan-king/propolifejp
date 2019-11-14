<?php 
/* Template Name: Award - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page award">
        <div class="container">
<!--             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php //if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                </div>
                
            </div> -->
            <div class="row">
                <div class="col col-12">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
                            ?>

                            <!-- <h2 class="sub_title"><?php //the_title(); ?></h2> -->
                            
                            <div id="main-content">
                                <?php the_content(); ?>

                                <section class="extra-content">
                                    <div id="section_title">
                                        <h2><?php the_title(); ?></h2>
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <p class="line"></p>
                                    </div>
                                    <div id="contents_inner">
                                        <section class="award-content">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 d-flex align-items-start">
                                                    <img src="<?php echo SGVinK::get_images_uri();?>1x/g_type2019_f@2x_b.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                                                    <h3>2019年度グッドデザイン賞</h3>
                                                    <p>「プロスタイル旅館 横浜馬車道」は、数多くの歴史的様式建造物が現存する横浜馬車道で「まちなか旅館」をテーマに、 畳や格子・障子といった日本的文化とノスタルジックな雰囲気漂う瀟洒な西洋の街並み、過去と現代、西洋と日本の和 洋折衷を「心地よい」と感じさせる宿泊施設として宿泊者の体験を印象深いものにする意匠的配慮が高く評価され、 2019年度のグッドデザイン賞を受賞しました。
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php 
                                                        $newGoodPost = get_post('718');
                                                        if (isset($newGoodPost)):
                                                            ?>
                                                                <div class="btn-link">
                                                                    <a class="btn" href="<?php echo get_the_permalink($newGoodPost); ?>" target="_blank" >詳しくはこちら(プレスリリース) <i class="i_right_white"></i></a>
                                                                </div>
                                                            <?php
                                                        endif;
                                                    ?>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                 </section>
                                
                            </div>

                            <?php
                        endwhile;
                    else:
                        ?>
                            <p align="center">404 Page not found.</p>
                        <?php
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    
</main>


<?php get_footer();?>