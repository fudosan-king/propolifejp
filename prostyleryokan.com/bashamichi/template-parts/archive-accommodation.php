<?php 
$taxonomyObj = get_queried_object();
$bg = get_field('banner',  $taxonomyObj);
?>
<section class="section_subbanner p-0">
    <?php if(!empty($bg)): ?>
        <img src="<?php echo $bg['url']; ?>" alt="" class="img-fluid">
    <?php endif; ?>
    <h2><?php echo $taxonomyObj->name; ?></h2>
</section>

<!--  -->

<main>
    <section class="section_floor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
                        if (have_posts()):
                            while(have_posts()): the_post();
                                $featureImgUrl = get_the_post_thumbnail_url( null, 'large' );
                                ?>
                                    <div class="box_each_room">
                                        <div class="row no-gutters">
                                            <div class="col-12 col-md-5">
                                                <div class="box_info_room">
                                                    <h3><?php the_title(); ?></h3>
                                                    <?php the_content(); ?>

                                                    <?php 
                                                        if (have_rows('attributes_list')):
                                                            echo '<p>';
                                                            while (have_rows('attributes_list')): the_row();
                                                                $arrInline = !empty(get_sub_field('inline')) ? get_sub_field('inline')[0] : 'none';
                                                                
                                                                $inline =  $arrInline != 'none' ? '&nbsp;&nbsp;' : '<br>';
                                                                echo '<span>'.get_sub_field('name').'：'.get_sub_field('value').'</span>'.$inline;
                                                            endwhile;
                                                            echo '</p>';
                                                        endif;
                                                    ?>

                                                    <div class="row">
                                                        <div class="col-12 col-md-6"></div>
                                                        <div class="col-12 col-md-6">
                                                            <a class="btnMore" href="<?php the_permalink(); ?>">
                                                                <span class="more">
                                                                    <p class="more_text">More<span class="line more_loop no_width"></span></p>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <div class="box_room_img">
                                                    <?php if(!empty($featureImgUrl)): ?>
                                                        <img src="<?php echo $featureImgUrl; ?>" alt="" class="img-fluid">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
