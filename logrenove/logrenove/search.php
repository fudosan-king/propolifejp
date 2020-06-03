<?php get_header(); ?>

    <main class="sub_page">
        <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>
        <section class="section_main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="main_left">
                            <?php get_template_part( 'template-parts/search', 'default' ); ?>
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