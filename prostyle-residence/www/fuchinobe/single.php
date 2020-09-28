<?php get_header() ?>
    <?php get_template_part('template-parts/content/content', 'breadcrumbs') ?>
    <main>
        <section class="section_content">
            <div class="container">
                <div class="row">
                    <?php get_template_part('template-parts/content/content') ?>
                    <?php get_sidebar() ?>
                </div>
            </div>
        </section>
<?php get_footer() ?>