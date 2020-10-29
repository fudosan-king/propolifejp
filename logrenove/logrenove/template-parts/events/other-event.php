<div class="box_otherevents">
    <h2>その他のイベント</h2>
    <div class="carousel" data-flickity='{ "pageDots": false, "contain": true }'>
        <?php $recommend_posts = get_recommend_posts($post_type='events'); 
        if($recommend_posts):
            foreach ($recommend_posts as $key => $post):
        ?>
        <div class="carousel-cell">
            <div class="box_otherevents_item">
                <div class="box_otherevents_item_img">
                    <a href="<?php echo $post->permalink; ?>"><img data-src="<?php echo $post->thumbails_url;?>" alt="<?php echo $post->title;?>" class="img-fluid"></a>
                </div>
                <h3><?php echo $post->title;?></h3>
            </div>
        </div>
        <?php endforeach;endif; ?>
    </div>
</div>
