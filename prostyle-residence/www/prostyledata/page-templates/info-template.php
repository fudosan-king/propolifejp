<?php 
/* Template Name: Info - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page info">
        <div class="container">
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
                                        <h2>
							            	<?php if (file_exists(SGVinK::get_images_path().'/page/'.$post->post_name.'.png')): ?>
												<img src="<?php echo SGVinK::get_images_uri().'/page/'.$post->post_name.'.png'; ?>">
											<?php endif; ?>

							            	<?php if (file_exists(SGVinK::get_images_path().'/page/'.$post->post_name.'-long.png')): ?>
												<img class="spec" src="<?php echo SGVinK::get_images_uri().'/page/'.$post->post_name.'-long.png'; ?>">
							            	<?php endif; ?>
							            </h2></h2>
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <!-- <p class="line"></p> -->
                                    </div>
                                    <div id="contents_inner">
                                    <?php
                                        if (isset($_COOKIE['passcode_secret_info']) && $_COOKIE['passcode_secret_info'] == get_field('access_password')){
                                            get_template_part('template-parts/info/content', 'listdoc');
                                        }else{

                                            /* INPUT PASSCODE ACCESS LOGIN */
                                           ?>
                                                <section class="loginRequire">
                                                    <form class="form-inline info" name="infoAuth" method="POST" action="">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="passcode_secret_info" required placeholder="">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">ログイン</button>
                                                    </form>
                                                    <div class="txt">パスワードを入力し、ログインしてください</div>
                                                </section>
                                           <?php
                                        }
                                    ?>
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