<?php get_header(); ?>
<?php 
    $post_type = get_post_type();
    if($post_type == 'events'):
        require( dirname( __FILE__ ) . '/template-pages/events.php' );
    else:
        $taxonomyObj = get_queried_object();
        $bg = get_field('background_image',  $taxonomyObj);
 ?>
        <main class="sub_page">
            <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>

            <section class="section_subbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box_subbanner">
                                <?php if(isset($bg) && !empty($bg)): ?>
                                    <img src="<?php echo $bg['url']; ?>" alt="<?php echo $bg['alt']; ?>" title="<?php echo $bg['title']; ?>" class="img-fluid">
                                <?php endif; ?>
                                <h2><?php echo $taxonomyObj->name; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_main mt-0 mt-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="main_left">
                                <?php get_template_part( 'template-parts/archive', 'default' ); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="main_right">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php endif;get_footer(); ?>