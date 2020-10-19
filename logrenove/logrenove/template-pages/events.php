<?php 
/*
    Template Name: Events
*/
?>

<?php get_header(); ?>
<main class="bg-white pb-0">
    <?php get_template_part('template-parts/events/breadcrumb','event') ?>
    <section class="section_events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3> <!-- <img class="img-fluid mr-1" src="<?=IMAGE_PATH;?>/1x/i_event.svg" width="24"> --> イベント内容</h3>
                    <ul class="list_event">
                        <?php $args = array(
                                    'taxonomy' => 'event_category',
                                    'hide_empty' => false,
                                );
                            $categories = get_terms($args);
                            $current_term = get_queried_object();
                            // $d = isset($_GET['d'])?$_GET['d']:'';
                            foreach ($categories as $key => $cat) {
                                if($cat->count > 0) {
                                $cat_link = get_tag_link( $cat->term_id );
                        ?>
                            <li <?php echo ($current_term->term_id == $cat->term_id)?'class="active"':''; ?>><a href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></li>
                        <?php }} ?>
                        <!-- <li><a class="disabled" href="#" tabindex="-1" role="button" aria-disabled="true">◯◯◯◯◯</a></li>
                        <li><a class="disabled" href="#">◯◯◯◯◯</a></li> -->
                        <li <?php echo (is_term($current_term->term_id) == NULL)?'class="active"':''; ?> ><a href="<?php echo esc_url(network_site_url('events'));?>">すべて</a></li>
                    </ul>
                    <!-- <h3><img class="img-fluid mr-1" src="<?=IMAGE_PATH;?>/1x/i_date.svg" width="20"> 開催曜日</h3>
                    <ul class="list_event">
                        <li <?php //echo $d=='sat' ?'class="active"':''?>><a href="?d=sat">土曜日</a></li>
                        <li <?php //echo $d=='sun' ?'class="active"':''?>><a href="?d=sun">日曜日</a></li>
                        <li <?php //echo $d=='week' ?'class="active"':''?>><a href="?d=week">平日</a></li>
                        <li <?php //echo empty($d)?'class="active"':''?>><a href="<?php //echo esc_url(network_site_url('events'));?>">すべて</a></li>
                    </ul> -->

                    <?php get_template_part( 'template-parts/events/archive', 'default' ); ?>

                    <div class="banner_online">
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img data-src="<?=IMAGE_PATH;?>/1x/online_consultation.png" alt="" class="img-fluid d-none d-lg-block"></a>
                        <a href="https://www.logrenove.jp/service/" target="_tbank"><img data-src="<?=IMAGE_PATH;?>/1x/online_consultation_sp.png" alt="" class="img-fluid d-block d-lg-none"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
