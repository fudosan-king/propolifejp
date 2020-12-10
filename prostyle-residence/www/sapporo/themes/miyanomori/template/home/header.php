<header class="header_afterlogin clearfix">
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">

        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="" class="img-fluid logo_white" width="246">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_black.svg" alt="" class="img-fluid logo_black" width="246">
        </a>

        <div class="btn-action">
            <button class="user-login">
                <span class="user-login_icon"></span>
            </button>

            <button class="navbar-toggler toggler-spring menu">
                <span class="menuLine"></span>
                <span class="menuLine"></span>
                <!-- <span class="menuLine"></span> -->
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url(); ?>">宮の森で暮らすということ</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/equipment/'); ?>">デザイン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/outline/'); ?>">アウトライン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/plan/'); ?> ">プラン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/contactus/'); ?>">お問い合わせ</a></li>
                <li class="nav-item js-menuAnimation hide-mobile"><a class="nav-link" href="tel:0120853133">TEL.0120-853-133</a></li>
                <li class="nav-item js-menuAnimation hide-mobile"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>">ログアウト</a></li>
                <li class="nav-item js-menuAnimation dropdown dropdown-right hide-mobile fade">
                    <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0 lang hide-pc show-mobile">
                <li class="nav-item js-menuAnimation dropdown dropdown-right fade">
                <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0 hide-pc show-mobile">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>">ログアウト</a></li>
                <li class="nav-item js-menuAnimation">
                    <a class="nav-link tel" href="tel:0120853133">
                        Tel.0120-853-133
                        <p>受付時間 9:00 ～ 20:00</p>
                    </a>
                </li>
                <li class="nav-item js-menuAnimation">
                    <a class="nav-link zip-code" href="#">
                        〒869-2402
                        <p>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</p>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-mobile mr-0  hide-pc show-mobile">
                <!-- <li class="nav-item js-menuAnimation "><a class="nav-link" href="<?php //echo home_url('/whatsnews/'); ?>">新着情報</a></li> -->
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/about/'); ?> ">PROSTYLEについて</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="">利用規約</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="">反社会的勢力排除に関する基本方針</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/privacy-policy/'); ?>">プライバシーポリシー</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="">ソーシャルメディアポリシー</a></li>
            </ul>
        </div>
    </div>
</header>