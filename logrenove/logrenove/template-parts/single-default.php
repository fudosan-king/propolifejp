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
                <ul class="list_shared">
                    <li><div class="tw-share-button"><a class="twitter-share-button" href="<?php the_permalink(); ?>" data-size="large" data-lang="ja">Tweet</a></div></li>
                    <li><div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div></li>
                </ul>
            </div>
        </div>
    <?php
    endwhile;
endif;
?>