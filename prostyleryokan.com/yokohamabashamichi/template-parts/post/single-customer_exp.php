<?php 
if (have_posts()):
    while(have_posts()): the_post();
        ?>
            <section class="section_experience section_experience_sub">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <h2 class="title">ロマンチックな港町・横浜には、開放的な雰囲気や素敵な夜景だけでなく、異国情緒あふれる馬車道という一角があります。今回はその馬車道で最も特徴的なホテルを体験しました。</h2> -->

                            <h2 class="title"><?php the_content(); ?></h2>

                            <?php
                                if (have_rows('block_content')):
                                    $index = 0;
                                    $total = count(get_field('block_content'));
                                    while (have_rows('block_content')): the_row();
                                        if ($index % 2 == 0){
                                            ?>

                                            <article class="expericence_content_item">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="expericence_content_item_img">
                                                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-5">
                                                        <div class="w_box_text">
                                                            <div class="box_text_right">
                                                                <h3><?php echo get_sub_field('title'); ?></h3>
                                                                <p><?php echo get_sub_field('description'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            
                                            <?php
                                        }else{
                                            ?>
                                            <article class="expericence_content_item">
                                                <div class="row flex-row-reverse">
                                                    <div class="col-12 col-md-7">
                                                        <div class="expericence_content_item_img">
                                                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                     <div class="col-12 col-md-5">
                                                        <div class="w_box_text">
                                                            <div class="box_text_left">
                                                                <h3><?php echo get_sub_field('title'); ?></h3>
                                                                <p><?php echo get_sub_field('description'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            
                                            <?php
                                        }
                                        $index++;
                                    endwhile;
                                endif;
                            ?>

                            

                        </div>
                    </div>
                </div>
            </section>
<?php
    endwhile;
endif;
?>