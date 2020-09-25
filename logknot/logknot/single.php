<?php get_header(); ?>

<?php global $detect; ?>
    <div class="box_underpage">
        <section class="section_news bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">NEWS</h2>
                        <p class="sub_title">お知らせ</p>
                        <div class="news_content">
                            <?php get_template_part( 'template-parts/single', 'default' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>