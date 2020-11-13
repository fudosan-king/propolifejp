<header class="header_afterlogin clearfix">
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">
        <button class="navbar-toggler toggler-spring menu">
            <span class="menuLine"></span>
            <span class="menuLine"></span>
            <span class="menuLine"></span>
        </button>
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="" class="img-fluid logo_white" width="246">
            <img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo_black.svg" alt="" class="img-fluid logo_black" width="246">
        </a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url(); ?>">宮の森で暮らすということ</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/equipment/'); ?>">デザイン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/outline/'); ?>">アウトライン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/plan/'); ?> ">プラン</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/contactus/'); ?>">お問い合わせ</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="tel:00000000000">TEL.000-0000-0000</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>">ログアウト</a></li>
                <?php do_action('miyanomori_nav_language'); ?>
               
            </ul>
        </div>
    </div>
</header>