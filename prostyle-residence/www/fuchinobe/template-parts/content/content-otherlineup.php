<section class="section_otherlineup">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title">その他のラインナップ</h2>
                <div class="carousel carousel_otherlineup" data-flickity='{ "contain": true, "pageDots": false }'>
                    <?php wp_reset_postdata(); wp_reset_query(); foreach (get_categories() as $cat) : ?>
                        <div class="carousel-cell">
                            <div class="box_otherlineup_item">
                                <div class="box_otherlineup_item_img">
                                    <a href="#"><img src="<?php echo get_field('category_thumbnail', $cat)['sizes']['category-thumbnails'] ?>" alt="" class="img-fluid"></a>
                                </div>
                                <h3><?php echo $cat->name ?></h3>
                                <p><?php echo $cat->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>