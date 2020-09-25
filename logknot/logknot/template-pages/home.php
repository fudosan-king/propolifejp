<?php
/*Template Name: Home - Page Template*/
?>
<?php get_header(); ?>
    <section class="section_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner_content">
                            <h1 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <img src="<?=IMAGE_PATH?>/SVG/logo_horizontal.svg" alt="" class="img-fluid" width="860">
                            </h1>
                            <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">TECH×RENOVATION <img src="<?=IMAGE_PATH?>/SVG/i_arrow_duplicate.svg" alt="" class="imgfluid" width="45"> LogKnot</h2>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <main>
         <section id="section_news" class="section_news">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">NEWS</h2>
                        <p class="sub_title">お知らせ</p>
                        <ul class="list_news">
                            <?php 
                                $args = array(
                                    'posts_per_page'         => 3,
                                    // Parameters relating to caching
                                    'no_found_rows'          => false,
                                    'cache_results'          => true,
                                    'update_post_term_cache' => true,
                                    'update_post_meta_cache' => true,
                                );
                                
                                $query = new WP_Query( $args );

                                if($query->have_posts()):
                                    while($query->have_posts()): $query->the_post();
                                        ?> 
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <p class="date"><?php the_date(); ?></p>
                                                    <h4><?php the_title();?></h4>
                                                    <p><span>お知らせ</span></p>
                                                </a>
                                            </li>
                                                                                 
                                        <?php
                                    endwhile;
                                    wp_reset_query();
                                    wp_reset_postdata();
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>               
       
    <?php $sections = ['section_mission', 'section_aboutus', 'section_works', 'section_recruit', 'section_company']; ?>
    <?php foreach ($sections as $section) { ?>
        <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <?php echo get_field($section); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>            
</main>

<?php get_footer(); ?>