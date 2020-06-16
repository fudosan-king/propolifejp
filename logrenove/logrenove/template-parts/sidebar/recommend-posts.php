<?php
    global $detect;
?>

<div class="each_boxright">
    <h2>おすすめ記事</h2>
    <div class="each_boxright_content">
        <?php
            $recomment_posts = get_recommend_posts();
            if($recomment_posts):
                foreach ($recomment_posts as $key => $post):
        ?>
                        <article class="article_items">
                            <div class="row no-gutters">
                                <div class="col-6 align-self-center">
                                    <a href="<?php echo $post->permalink; ?>" class="article_items_img">
                                        <img data-src="<?php echo $post->thumbails_url;?>" alt="<?php echo $post->title; //alt but get post title?>" title="<?php echo $post->title; //alt but get post title?>" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6 align-self-center">
                                    <div class="article_items_content">
                                        <p class="article_items_name"><a href="<?php echo $post->permalink; ?>" ><?php echo $post->title; ?></a></p>
                                        <span class="badge badge-secondary badge_cate"><?php echo $post->firstCat;?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php
                endforeach;
            endif;
        ?>
    </div>
    <!-- <div class="each_boxright_footer">
        <a href="#" class="btn btnMore">もっと見る <i class="fal fa-long-arrow-right"></i></a>
    </div> -->
</div>