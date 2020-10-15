<section class="section_otherlineup">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title">その他のラインナップ</h2>
                <div class="carousel carousel_otherlineup" data-flickity='{ "contain": true, "pageDots": false }'>
	                <?php $banners = get_banner_footer(); if ($banners) : foreach ($banners as $data) :?>
                        <div class="carousel-cell">
                            <div class="box_otherlineup_item">
                                <div class="box_otherlineup_item_img">
                                    <a href="<?php echo $data['link'] ?>"><img src="<?php echo $data['image']['url'] ?>" alt="" class="img-fluid"></a>
                                </div>
                                <h3><?php echo $data['text1'] ?></h3>
                                <p><?php echo $data['text2'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>