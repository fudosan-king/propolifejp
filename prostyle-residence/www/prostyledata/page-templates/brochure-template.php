<?php 
/* Template Name: Brochure - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page brochure">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );

                            $PDF = null;
                            $PDFLink = '';
                            $PDFFormat = '';
                            switch (get_field('pdf_type')) {
                                case 'upload': {
                                    if (!empty(get_field('pdf_file'))){
                                        $PDF = get_field('pdf_file');
                                        $PDFLink = $PDF["link"];
                                        $PDFFormat = sprintf("▶ %s【PDF：%s】", $PDF['title'], size_format($PDF['filesize']));
                                    }
                                }break;
                                
                                default:
                                    if (!empty(get_field('pdf_link'))){
                                        $PDF = get_field('pdf_link');
                                        $PDFLink = $PDFFormat = $PDF;
                                    }
                                    break;
                            }
                            ?>



                            <!-- <h2 class="sub_title"><?php //the_title(); ?></h2> -->
                            
                            <div id="main-content">
                                <?php the_content(); ?>

                                <section class="extra-content">
                                    <div id="section_title">
                                        <h2><?php the_title(); ?></h2>
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <!-- <p class="line"></p> -->
                                    </div>
                                    <div id="contents_inner">
                                        <div class="row">
                                            <div class="col col-sm-12 col-md-8 offset-md-2">
                                                <br><br>
                                                <section>
                                                    <div class="text-center">
                                                        <a href="<?php echo $PDFLink; ?>" target="_blank"><img src="<?php echo $thumnailImage; ?>" class="img-fluid featured-img" alt="Image"></a>
                                                    </div>
                                                    <br>
                                                    <a href="<?php echo $PDFLink; ?>" target="_blank"><?php echo $PDFFormat; ?></a>
                                                </section>
                                            </div>
                                        </div>
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