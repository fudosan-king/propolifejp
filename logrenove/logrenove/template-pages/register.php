<?php
/*
    Template Name: Register
*/
?>
<?php get_header(); ?>
<?php
    $action = isset($_GET['action'])?$_GET['action']:'';
    $invalid = true;
    $msg = '';
    $user_email = '';
    if ( isset( $_POST['user_email'] ) && is_string( $_POST['user_email'] ) ) {
        $user_email = wp_unslash( $_POST['user_email'] );
    }
    $user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '' ;
    $user_password2 = isset($_POST['user_password2']) ? $_POST['user_password2'] : '' ;
    $home_url = get_home_url();
    if($action=='' && !empty($_GET['redirect_to'])) {
        set_cookie_redirect_post_url();
    }
    if(isset($_POST['login_register'])) {
        $result = signup_user($user_email, $user_password, $user_password2);
        $invalid = $result['invalid'];
        $msg = $result['msg'];
    } elseif($action=='active') {
        $signup_redirect_to = active_user();
    }

    if(is_user_logged_in() && $action!='active') {
        wp_redirect($home_url);
        exit;
    }
?>
<div class="login_page">
    <div class="login_header">
        <a href="<?php echo $home_url; ?>" class="logo logo_md"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" class="img-fluid" width="250"></a>
        <a href="<?php echo $home_url; ?>" class="logo logo_sm"><img src="<?=IMAGE_PATH;?>/1x/logo_.svg" class="img-fluid" width="250"></a>
        <div class="gap-small d-none d-lg-block"></div>
        <div class="top_signup">
            <p class="d-block d-lg-none"><a class="btn_viewmember" href="#detail">メンバーズ会員特典を見る</a></p>
        </div>
        <div class="container">
            <div id="detail-pc" class="login-detail d-none d-lg-flex">
                <div class="col-12 col-lg-12">
                    <div class="box_benefit_smember">
                        <h3 id="detail"><span>メンバーズ会員特典</span></h3>
                        <div class="box_benefit_smember_main">
                            <ul>
                                <li class="flex-fill">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-lg-12">
                                            <a href="#">
                                                <img src="<?php echo IMAGE_PATH.'/i_01.svg' ?>" alt="" class="img-fluid" width="100">
                                            </a>
                                        </div>
                                        <div class="col-9 col-lg-12">
                                            <div class="benefit_smember_content">
                                                <span href="#" class="btn btn_benefit">特典1</span>
                                                <p>専任のプランナーがあなたの<br>
                                                リノベーションをサポート</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-fill">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-lg-12">
                                            <a href="#">
                                                <img src="<?php echo IMAGE_PATH.'/i_02.svg' ?>" alt="" class="img-fluid d-none d-lg-block" width="100">
                                                <img src="<?php echo IMAGE_PATH.'/i_02_sp.svg' ?>" alt="" class="img-fluid d-block d-lg-none" width="100">
                                            </a>
                                        </div>
                                        <div class="col-9 col-lg-12">
                                            <div class="benefit_smember_content">
                                                <span href="#" class="btn btn_benefit">特典2</span>
                                                <p>リノベーション設計料<br>
                                                完全無料</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-fill">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-lg-12">
                                            <a href="#">
                                                <img src="<?php echo IMAGE_PATH.'/i_03.svg' ?>" alt="" class="img-fluid" width="100">
                                            </a>
                                        </div>
                                        <div class="col-9 col-lg-12">
                                            <div class="benefit_smember_content">
                                                <span href="#" class="btn btn_benefit">特典3</span>
                                                <p>物件探しやリノベーションの<br>コツがわかるセミナー勉強会</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-fill">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-lg-12">
                                            <a href="#">
                                            <img src="<?php echo IMAGE_PATH.'/i_04.svg' ?>" alt="" class="img-fluid" width="100"></a>
                                        </div>
                                        <div class="col-9 col-lg-12">
                                            <div class="benefit_smember_content">
                                                <span href="#" class="btn btn_benefit">特典4</span>
                                                <p>施工事例をはじめ、<br>お役立ち資料をプレゼント</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-fill">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-lg-12">
                                            <a href="#"><img src="<?php echo IMAGE_PATH.'/i_05.svg' ?>" alt="" class="img-fluid" width="100"></a>
                                        </div>
                                        <div class="col-9 col-lg-12">
                                            <div class="benefit_smember_content">
                                                <span href="#" class="btn btn_benefit">特典5</span>
                                                <p>会員限定のリノベーション<br>物件情報の公開</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="#frm_signup" class="btn btn_registermember d-block d-lg-none">会員登録する</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-12">
        <div id="LoginForm" class="row m-md-0">
            
            <div class="login_body">
                <form method="post" id="frm_signup" class="frm_main_login" action="<?php echo esc_url(network_site_url(add_query_arg('action', $action))); ?>">
                    <?php if($action=='confirm') { ?>
                    <div class="login_body_top">
                        <h2>メールアドレスの確認</h2>
                        <p class="cf-head">ご入力メールアドレスに、本登録の方法を記載したメールを送信しました。メールを確認し、本登録を完了させてください。</p>
                        <p class="cf-note">※メールが届くまで、数分かかる場合がございます。<br>
                        ※また、メールソフトの迷惑メール機能により、登録確認メールが迷惑メールに分類されてしまうことがございます。</p>
                    </div>
                    <div class="login_body_bottom">
                        <div class="form-group">
                            <a href="<?php echo $home_url; ?>" class="btn btn_social btn_member mb-0">ログリノベTOPへ戻る</a>
                        </div>
                    </div>
                    <?php } elseif($action=='active') { ?>
                    <div class="login_body_top">
                        <h2>会員登録が完了しました</h2>
                        <p class="cf-head">ご登録メールアドレス宛に「会員登録完了のお知らせ」をお送りしました。</p>
                        <p class="cf-note">※メールが届くまで、数分かかる場合がございます。<br>
                        ※また、メールソフトの迷惑メール機能により、登録確認メールが迷惑メールに分類されてしまうことがございます。</p>
                    </div>
                    <div class="login_body_bottom">
                        <div class="form-group">
                            <?php if(!in_array($signup_redirect_to, array($home_url, ''))) { ?>
                            <a href="<?php echo $signup_redirect_to; ?>" class="btn btn_comeback">読んでいたページに戻る</a>
                            <?php } ?>
                            <a href="<?php echo $home_url; ?>" class="btn btn_social btn_member mb-0">ログリノベTOPへ戻る</a>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="register-page">
                        <div class="login_body_top">
                            <h3>新規会員登録</h3>
                            <!-- <a href="#" class="btn btn_social btnlogin_google">Googleでログイン</a>
                            <a href="#" class="btn btn_social btnlogin_yahoo">Yahoo!JAPANでログイン</a>
                            <a href="#" class="btn btn_social btnlogin_facebook mb-0">Facebookでログイン</a> -->
                            <?php // echo get_social_login_button(); ?>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="メールアドレス" name="user_email" value="<?php echo esc_attr($user_email); ?>" size="20" autocapitalize="off">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="パスワード（半角英数6文字以上）" name="user_password" value="<?php echo esc_attr($user_password); ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="パスワード確認（半角英字6文字以上）" name="user_password2" value="<?php echo esc_attr($user_password2); ?>">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="keeplogin" name="mail_magazine" value="1" checked>
                                <label class="custom-control-label" for="keeplogin">週刊ログリノベを受け取る</label>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn_login" name="login_register" value="register">登録</button>
                            </div>
                            <?php if ($invalid && isset($_POST['login_register'])): ?>
                            <div class="form-group">
                                <label class="login_error"><?php echo $msg; ?></label>
                            </div>
                            <?php endif; ?>
                            <p class="mb-0 termofuse">登録することで、<a href="https://www.propolife.co.jp/terms/" target="_tbank">利用規約</a>と<a href="https://www.propolife.co.jp/privacypolicy/" target="_tbank">プライバシーポリシー</a>に同意したものとみなされます。</p>
                        </div>
                        <div class="login_body_bottom">
                            <p class="text-center mb-2">登録済みの方はこちら</p>
                            <a href="<?php echo site_url('login');?>" class="btn btn_login">ログイン</a>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="gap-small"></div>

<div id="detail-mb" class="login-detail d-flex d-lg-none">
    <div class="col-12 col-lg-12">
        <div class="box_benefit_smember">
            <h3 id="detail" class="detail-mBB"><span>メンバーズ会員特典</span></h3>
            <div class="box_benefit_smember_main">
                <ul>
                    <li class="flex-fill">
                        <div class="row no-gutters">
                            <div class="col-3 col-lg-12">
                                <a href="#">
                                    <img src="<?php echo IMAGE_PATH.'/i_01.svg' ?>" alt="" class="img-fluid" width="100">
                                </a>
                            </div>
                            <div class="col-9 col-lg-12">
                                <div class="benefit_smember_content">
                                    <a href="#" class="btn btn_benefit">特典1</a>
                                    <p>専任のプランナーがあなたの<br>
                                    リノベーションをサポート</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex-fill">
                        <div class="row no-gutters">
                            <div class="col-3 col-lg-12">
                                <a href="#">
                                    <img src="<?php echo IMAGE_PATH.'/i_02.svg' ?>" alt="" class="img-fluid d-none d-lg-block" width="100">
                                    <img src="<?php echo IMAGE_PATH.'/i_02_sp.svg' ?>" alt="" class="img-fluid d-block d-lg-none" width="100">
                                </a>
                            </div>
                            <div class="col-9 col-lg-12">
                                <div class="benefit_smember_content">
                                    <a href="#" class="btn btn_benefit">特典2</a>
                                    <p>リノベーション設計料<br>
                                    完全無料</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex-fill">
                        <div class="row no-gutters">
                            <div class="col-3 col-lg-12">
                                <a href="#">
                                    <img src="<?php echo IMAGE_PATH.'/i_03.svg' ?>" alt="" class="img-fluid" width="100">
                                </a>
                            </div>
                            <div class="col-9 col-lg-12">
                                <div class="benefit_smember_content">
                                    <a href="#" class="btn btn_benefit">特典3</a>
                                    <p>物件探しやリノベーションの<br>コツがわかるセミナー勉強会</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex-fill">
                        <div class="row no-gutters">
                            <div class="col-3 col-lg-12">
                                <a href="#">
                                <img src="<?php echo IMAGE_PATH.'/i_04.svg' ?>" alt="" class="img-fluid" width="100"></a>
                            </div>
                            <div class="col-9 col-lg-12">
                                <div class="benefit_smember_content">
                                    <a href="#" class="btn btn_benefit">特典4</a>
                                    <p>施工事例をはじめ、<br>お役立ち資料をプレゼント</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex-fill">
                        <div class="row no-gutters">
                            <div class="col-3 col-lg-12">
                                <a href="#"><img src="<?php echo IMAGE_PATH.'/i_05.svg' ?>" alt="" class="img-fluid" width="100"></a>
                            </div>
                            <div class="col-9 col-lg-12">
                                <div class="benefit_smember_content">
                                    <a href="#" class="btn btn_benefit">特典5</a>
                                    <p>会員限定のリノベーション<br>物件情報の公開</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#frm_signup" class="btn btn_registermember d-block d-lg-none">会員登録する</a>
            </div>
        </div>
    </div>
</div>
<section class="section_main">
    <div class="container">
        <div class="box_constructionexample col">
            <?php $construction_examples = get_homepage_posts('construction_example'); ?>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2>施工事例</h2>
                </div>
                <div class="col-12 col-lg-6">
                    <a href="<?php echo site_url('work'); ?>" class="btn btn_seeall d-none d-lg-block">施工事例をすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
                </div>
            </div>
            <p class="sub_title">LogRenoveならではの無垢材を使ったリノベーション事例をご覧いただけます</p>
            <div class="row d-lg-flex d-none">
                <?php
                if ( $construction_examples ) {
                    foreach ($construction_examples as $key => $construction_example) {
                    ?>
                    <div class="col-4 mb-4">
                        <div class="construction_item">
                            <a href="<?php echo $construction_example->permalink; ?>">
                                <div class="construction_item_img">
                                    <img src="<?php echo $construction_example->thumbails_url; ?>" alt="" class="img-fluid">
                                </div>
                                <h3><span><?php echo $construction_example->title; ?></span></h3>
                            </a>
                        </div>
                        
                    </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="carousel d-block d-lg-none"
                data-flickity='{ "wrapAround": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false, "autoPlay": 3000 }'>
                <?php
                if($construction_examples):
                foreach ($construction_examples as $key => $construction_example):
                ?>
                <div class="carousel-cell">
                    <div class="construction_item">
                        <a href="<?php echo $construction_example->permalink; ?>">
                            <div class="construction_item_img">
                                <img src="<?php echo $construction_example->thumbails_url; ?>" alt="" class="img-fluid">
                            </div>
                            <h3><span><?php echo $construction_example->title; ?>!?</span></h3>
                        </a>
                    </div>
                </div>
                <?php endforeach;endif; ?>
            </div>
            <a href="<?php echo site_url('work'); ?>" class="btn btn_seeall d-block d-lg-none">施工事例をすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>
