
<?php
    $news_date = get_post_meta($post->ID, 'news_date', true);
    $news_link = get_post_meta($post->ID, 'news_link', true);
    $news_text_link = get_post_meta($post->ID, 'news_text_link', true);
?>

<dt><?php echo $news_date; ?></dt>

<dd>
    <div style="font-weight: bold;"><?php the_title(); ?></div>
    <?php
        if(!empty($news_link) || !empty($news_text_link)){
            ?>
                <a href="<?php echo $news_link ?>" target="_blank"><?php echo $news_text_link ?></a>
            <?php
        }
        the_content();
     ?>
</dd>

