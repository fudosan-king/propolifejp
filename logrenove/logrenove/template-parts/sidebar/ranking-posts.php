<div class="each_boxright">
    <h2>人気記事ランキング</h2>
    <div class="each_boxright_content">
        <?php
            $ranking_posts = get_ranking_posts();
            if($ranking_posts):
                foreach ($ranking_posts as $key => $post):
        ?>
                        <article class="article_items">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <a href="<?php echo $post->permalink; ?>" class="article_items_img">
                                        <img data-src="<?php echo $post->thumbails_url;?>" alt="<?php echo $post->title;?>" title="<?php echo $post->title;?>" class="img-fluid">
                                    </a>
                                    <span class="article_ranking ranking-<?php echo $post->rank;?>"><?php echo $post->rank;?></span>
                                </div>
                                <div class="col-8">
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
</div>