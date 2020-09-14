<?php get_header(); ?>
<?php 
    $taxonomyObj = get_queried_object();
    $bg = get_field('background_image',  $taxonomyObj);
    // print_r($bg);
 ?>
    <main class="sub_page">
        <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>

        <section class="section_subbanner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box_subbanner">
                            <img data-src="<?php echo $bg['url']; ?>" alt="<?php echo $bg['alt']; ?>" title="<?php echo $bg['title']; ?>" class="img-fluid">
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

<?php get_footer(); ?>