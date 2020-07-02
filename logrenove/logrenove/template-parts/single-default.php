<?php 
if(have_posts()):
    while(have_posts()): the_post();
        $thumbnails = new ThumbnailItem(get_post_thumbnail_id());
        $caption = wp_get_attachment_caption( get_post_thumbnail_id() );
    ?>

        <div class="box_article_detail">
            <h1 class="d-md-block"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-12">
                    <div class="box_article_main_img">
                        <?php 
                            if(!empty($thumbnails)){
                                ?>
                                    <div class="thumbnail-wrapper">
                                        <img data-src="<?php echo $thumbnails->url;?>" alt="<?php the_title(); //alt but get post title?>" title="<?php the_title(); //alt but get post title?>" class="img-fluid">
                                    </div>
                                <?php
                            }

                            if(!empty($caption) && $caption != ""){
                                echo '<p class="d-none d-md-block"><small>'.$caption.'</small></p>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box_info">
                        <!-- <a class="avatar" href="<?php //echo get_avatar_url( get_the_author_ID()); ?>" target="_blank">
                            <span class="avatar_img"><?php //echo get_avatar( get_the_author_ID(), $size = 96, $default = '', $alt = '', $args = null ); ?></span>
                        </a>
                        <div class="avatar_info">
                            <span>沿って <strong><?php //the_author(); ?></strong></span> - <span><?php //the_date(); ?></span>
                        </div> -->
                        <!-- <div class="avatar_info">
                           <span><?php //the_date(); ?></span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php the_content(); ?>                    
                </div>
            </div>
            
            <p class="update_date">
                公開日 <?php the_date(); ?> <br>
                更新日 <?php the_modified_date(); ?></p>
            <div class="box_tags">
                <?php
                    $tagsHTML = '<p class="mb-1">';
                    $postTags = get_the_tags();
                    if(!empty($postTags)):
                        foreach ($postTags as $key => $tag) {
                            $determine = $key < (count(get_the_tags())-1) ? ', ' : '';
                            $tagsHTML .= '<a href="'.get_tag_link( $tag ).'">#'.$tag->name.'</a>' . $determine;     
                        }
                    endif;
                    $tagsHTML .= '</p>';
                    echo $tagsHTML;
                 ?>
                 <div class="box_shared">
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-center text-center">
                            <p class="mb-0">この記事をシェアする</p>
                            <img style="cursor: pointer;padding: 3px;" src="/wp-content/themes/logrenove/assets/images/i_twitter.png" alt="Share on Twitter" onclick="window.open('https://twitter.com/share?text=<?php wp_title(); ?>&amp;url=<?php the_permalink(); ?>','_blank'); return false;" width="60">
                            <img style="cursor: pointer;padding: 3px;" src="/wp-content/themes/logrenove/assets/images/i_face_book.png" alt="<?php the_title(); ?>" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('<?php the_permalink(); ?>'),'facebook-share-dialog','width=626,height=436'); return false;" width="60">
                            <img style="cursor: pointer;padding: 3px;" src="/wp-content/themes/logrenove/assets/images/i_line.png" alt="<?php the_title(); ?>" onclick="window.open('https://social-plugins.line.me/lineit/share?url='+encodeURIComponent('<?php the_permalink(); ?>'),'line-share-dialog','width=626,height=436'); return false;" width="60">
                        </div>
                        <div class="col-12 col-md-6 align-self-center text-center">
                            <div class="box_follow mt-4 mt-md-0">
                                <p class="mb-2">LogRenoveをフォローする</p>
                                <ul class="list_shared mb-0 justify-content-center">
                                <li><a class="twitter-follow-button" href="<?php echo get_field('twitter_url', 'option')?>" data-show-count="false" data-show-screen-name="false" data-lang="ja">フォロー</a></li>
                                <li><div style="width: 80px;" class="fb-like" data-href="<?php echo get_field('facebook_url', 'option')?>" data-width="" data-layout="button" data-action="like" data-share="false"></div></li>
                                <li><div class="line-it-button" data-lang="ja" data-type="friend" data-lineid="<?php echo get_field('line_id', 'option')?>" style="display: none;"></div></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
endif;
?>