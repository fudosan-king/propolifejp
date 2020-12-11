<?php 
global $detect, $post;
$header_fixed = $detect->isMobile() && is_single() && get_post_type($post->ID) == 'post' ? 'style="position: fixed;"' : '';
?>
<header <?php echo $header_fixed; ?>>
    <div class="top_header">
        <div class="container">
            <div class="row no-gutters justify-content-between justify-content-md-center">
                <div class="col-6 col-md-6 align-self-center">
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_md"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" class="img-fluid" width="257"></a>
                    <a href="<?php echo get_home_url(); ?>" class="logo logo_sm"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" class="img-fluid" width="257"></a>
                </div>
                <!-- <div class="col-6 col-md-5 align-self-center">
                    <?php //$service_url = ''; $service_text_sp = ''; $service_text_pc = ''; if (is_singular('post')) {
                        /*global $post;
                        $postCats = get_the_category($post->ID);
                        if ($postCats) {
                            foreach ($postCats as $cat) {
                                if (get_field('service_text_pc', $cat)) {
                                    $service_text_pc = get_field('service_text_pc', $cat);
                                    $service_text_sp = get_field('service_text_sp', $cat);
                                    $service_url = get_field('service_url', $cat);
                                    break;
                                }
                            }
                        }
                        if (!$service_text_pc) {
                            $service_text_pc = get_field('service_text_pc_homepage', 'option');
                            $service_text_sp = get_field('service_text_sp_homepage', 'option');
                            $service_url = get_field('service_url_homepage', 'option');
                        }
                    } else {
                        if (get_field('service_text_pc',get_queried_object())) {
                            $service_text_pc = get_field('service_text_pc', get_queried_object());
                            $service_text_sp = get_field('service_text_sp', get_queried_object());
                            $service_url = get_field('service_url', get_queried_object());
                        } else {
                            $service_text_pc = get_field('service_text_pc_homepage', 'option');
                            $service_text_sp = get_field('service_text_sp_homepage', 'option');
                            $service_url = get_field('service_url_homepage', 'option');
                        }
                    }*/ ?>
                    <a target="_blank" rel="noopener noreferrer" href="<?php //echo $service_url; ?>" class="btn-link btn btn_applyconsultation d-none d-lg-block"><?php //echo $service_text_pc; ?></a>
                    <a target="_blank" rel="noopener noreferrer" href="<?php //echo $service_url; ?>" class="btn-link btn btn_applyconsultation d-block d-lg-none"><?php //echo $service_text_sp; ?></a>
                </div> -->

                <div class="col-6 col-md-6 align-self-center text-right">
                    <div class="box_top_menu">
                        <?php get_template_part( 'template-parts/login', 'header' ); ?>
                        <!-- <a href="<?php //echo esc_url(network_site_url('mailmagazine')); ?>" class="btn btn_email">
                            <img src="<?php //echo IMAGE_PATH;?>/mailmagazine/i_email.svg" alt="" class="img-fluid mr-0 mr-lg-2" width="20"><span class="d-none d-lg-inline-block">メルマガ登録</span>
                        </a> -->
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav_mobile navbar-mobile">
                <li><a href="<?php echo site_url('events'); ?>">セミナーを探す</a></li>
                <li><a href="<?php echo site_url('service'); ?>">LogRenoveを知る</a></li>
                <li><a href="<?php echo site_url('work'); ?>">施工事例を見る</a></li>
                <li><a href="<?php echo site_url('counter'); ?>">プランナーに相談する</a></li>
                <li><a href="<?php echo site_url('documents'); ?>">資料を探す</a></li>
                <li><a href="<?php echo site_url('signup'); ?>">リノベ情報を受け取る</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>

</header>

<div class="spacing_top d-block d-lg-none"></div>

<div class="nav_slider">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="box_nav_slider">
                    <div class="carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
                        <div class="carousel-cell"><a href="<?php echo site_url('events'); ?>">セミナーを探す</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('service'); ?>">LogRenoveを知る</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('work'); ?>">施工事例を見る</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('counter'); ?>">プランナーに相談する</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('documents'); ?>">資料を探す</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('signup'); ?>">リノベ情報を受け取る</a></div>
                        <div class="carousel-cell"><a href="<?php echo site_url('contact'); ?>">お問い合わせ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
