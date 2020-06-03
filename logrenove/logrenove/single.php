<?php get_header(); ?>

<?php global $detect; ?>

    <main class="sub_page">
        <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>
        <section class="section_main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="main_left">
                            <?php get_template_part( 'template-parts/single', 'default' ); ?>
                            <?php //require 'includes/box_search_serminar.php'; ?>

                            <?php get_template_part( 'template-parts/form', 'consult' ); ?>
                            <?php get_template_part( 'template-parts/posts', 'relate' ); ?>
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