<?php get_header(); ?>
        <main style="padding-top: unset;">

            <section class="section_intro">
                <p class="mb-0 text-center"><a href="<?php echo site_url('branding'); ?>" class="btn btn_detail">詳しく見る</a></p>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="box_intro">
                                <h1><img src="<?php echo IMAGE_PATH; ?>/h1.png" alt="" class="img-fluid"></h1>
                                <p>私たちLogRenoveは<span class="d-block d-lg-inline-block">無垢材の製材からデザイン、施工まで</span>
                                すべてプライベートレーベルでカバーする<br>
                                唯一無二のリノベーションブランドです。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section_main">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="main_left">
                                <div class="box_video">
                                    <h2>LogRenoveとは？</h2>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://player.riclink.biz/watch?id=742023e0870828cc9e48_37j4by9r&guide=1&share=1"></iframe>
                                    </div>
                                    <h2>お客様の声</h2>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://player.riclink.biz/watch?id=b479f42971f6bebc16e5&guide=1&share=0%E3%80%80"></iframe>
                                    </div>
                                </div>

                                <div class="box_constructionexample">
                                    <?php get_template_part('template-parts/post', 'constructionexample'); ?>
                                </div>
                                <div class="box_seminar_event">
                                    <?php get_template_part('template-parts/post', 'event'); ?>
                                </div>
                                <div class="d-block d-lg-none mb-5">
                                    <div class="box_banner">
                                        <a target="_blank" href="<?php echo site_url('counter'); ?>"><img src="<?php echo IMAGE_PATH; ?>/banner/banner_smartrenovation2x.png" alt="" class="img-fluid"></a>
                                    </div>

                                    <div class="box_merit">
                                        <h2><img src="<?php echo IMAGE_PATH; ?>/label.svg" alt="" class="img-fluid" width="190"></h2>
                                        <ul>
                                            <li>
                                                <img src="<?php echo IMAGE_PATH; ?>/01.svg" alt="" class="img-fluid" width="92">
                                                <span>リノベ完成物件<br>限定イベントのご案内</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo IMAGE_PATH; ?>/02.svg" alt="" class="img-fluid" width="92">
                                                <span>非公開物件情報・地域<br>情報をお届け</span>
                                            </li>
                                            <li>
                                                <img src="<?php echo IMAGE_PATH; ?>/03.svg" alt="" class="img-fluid" width="92">
                                                <span>リノベ相談・リノベ設計<br>費用が完全無料</span>
                                            </li>
                                        </ul>
                                        <a target="_blank" href="<?php echo site_url('signup'); ?>" class="btn btn_registermember">会員登録する</a>
                                        <a target="_blank" href="<?php echo site_url('signup'); ?>#detail" class="btn btn_detail">詳しく見る</a>
                                    </div>
                                </div>
                                <div class="box_usefulmaterials">
                                    <?php get_template_part('template-parts/post', 'usefulmaterials'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="main_right">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
