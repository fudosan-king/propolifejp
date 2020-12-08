<?php 
if(have_posts()):
    while(have_posts()): the_post();
        $thumbnails = MultiPostThumbnails::get_the_post_thumbnail(get_post_type(), 'secondary-image', get_the_ID(),  'secondary-featured-thumbnail');
        //$thumbnails = new ThumbnailItem(get_post_thumbnail_id());
        $tags = get_the_terms(get_the_ID(), 'event_tags');
?>
<div class="services_detail_banner">
    <?php echo $thumbnails;?>
    <!-- <img src="<?php //echo $thumbnails;?>" alt="" class="img-fluid"> -->
</div>
<ul>
    <?php 
    foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
    ?>
        <li><a href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a></li>
    <?php } ?>
</ul>
<div class="box_online_seminar">
    <div class="row">
        <div class="col-12 col-lg-9 align-self-center">
            <!-- <p class="online_seminar">オンラインリノベセミナー</p> -->
            <h1 class="mb-3 mb-lg-0"><?php echo the_title(); ?></h1>
        </div>
        <div class="col-12 col-lg-3 align-self-center">
           <a class="btn btn_reservation" href="<?php the_permalink(); ?>#frm_services">参加予約する</a>
        </div>
    </div>
</div>
<div class="services_detail_content">
    <?php the_content(); ?>
</div>
<section class="section_cookie">
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 col-md-7 align-self-center">
                <p class="d-none d-md-block">リフォームとリノベーションは似てるけど全然別物！？<br>LogRenoveのオンラインセミナーで、リノベーションを学ぼう</p>
            </div> -->
            <div class="col-12 col-md-12 align-self-center">
                <p class="text-center">
                    <a class="btn btn_online" rel="noopener noreferrer" href="<?php the_permalink(); ?>#eventinfo">開催情報をみる</a>
                    <a class="btn btn_online" rel="noopener noreferrer" href="<?php the_permalink(); ?>#frm_services">参加予約をする</a>
                </p>
            </div>
        </div>
    </div>
</section>  
<?php
    endwhile;
endif;
?>