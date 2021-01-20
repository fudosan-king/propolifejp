<?php
/* 
Template Name: Interview Kengo Kuma
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template/home/header'); ?>
<section class="section_subbanner">
    <div class="subbanner_img itv-mr-kengokuma"></div>
    <div class="row no-gutters">
        <div class="col-12 col-lg-3"></div>
        <div class="col-12 col-lg-9">
            <div class="itv-img">
                <img src="<?php bloginfo('template_directory');?>/assets/images/main/itv-kengo-kuma-txt.png" class="img-fluid hide-pc show-mobile" alt="" title="" >
                <img src="<?php bloginfo('template_directory');?>/assets/images/1x/itv-mr-kengo-pc.png" class="img-fluid hide-mobile" alt="" title="" >
            </div> 
            <div class="itv-img-txt">
                <img src="<?php bloginfo('template_directory');?>/assets/images/main/itv-txt.png" class="img-fluid" alt="" alt="" title="" >
            </div>
        </div>
    </div>
</section>
<main>
    <section class="section_interview section_kengokuma_architect bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                </div>
                <div class="col-12 col-lg-9">
                    <div class="interview_content bg-white">
                        <?php $msg_section_1 = get_field('msg_section_1'); ?>
                        <ul class="list_global">
                            <li><span>PROSTYLE</span></li>
                            <li><span>MIYANOMORI</span></li>
                            <li class="active"><span>INTERVIEW/ KENGO KUMA</span></li>
                        </ul>
                        <!-- <h2 class="title mb-3">『home』としての<span>実感を得られる<span>
                        <span class="block-pc">木と寄り添う上質な暮らし</span></h2> -->
                        <h2 class="title mb-3"><?php echo $msg_section_1['title']; ?></h2>
                        <?php echo $msg_section_1['content']; ?>
                    </div>
                    <div class="architecturaldesign_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/img_view.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_itv_born">
        <div class="container-fluid">
            <div class="row">
                <?php $msg_section_2 = get_field('msg_section_2'); ?>
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="box_born_img">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1x/mr_kengo.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-5 align-self-center">
                    <div class="box_born">
                        <h2 class="title"><?php echo $msg_section_2['title']; ?></h2>
                        <?php echo $msg_section_2['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_places">
        <div class="places_img">
            <img src="<?php bloginfo('template_directory');?>/assets/images/1x/places.jpg" alt="" class="img-fluid hide-md-mobile">
            <img src="<?php bloginfo('template_directory');?>/assets/images/main/sp/places-3x.jpg" alt="" class="img-fluid hide-md-pc show-md-mobile">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 offset-lg-2">
                    <?php $msg_section_3 = get_field('msg_section_3'); ?>
                    <div class="box_born">
                        <!-- <h2 class="title">我が“家”の<br>実感を得られる集合邸宅</h2> -->
                        <h2 class="title"><?php echo $msg_section_3['title']; ?></h2>
                        <?php echo $msg_section_3['content']; ?>
                    </div>
                    <div class="box_born">
                        <?php $msg_section_4 = get_field('msg_section_4'); ?>
                        <h2 class="title"><?php echo $msg_section_3['title']; ?></h2>
                        <?php echo $msg_section_3['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part( 'template/home/footer'); ?>
<?php get_footer(); ?>