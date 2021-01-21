<header class="header_sub clearfix">
    <div class="navbar navbar-expand-lg">
        <div class="navbar-top">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/logo-y-en.png" alt="" class="img-fluid logo_white">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/en/logo-y-en.png" alt="" class="img-fluid logo_black">
            </a>
            
            <div class="btn-action">
                <a class="user-login" href="<?php echo wp_logout_url(home_url()); ?>"><span class="user-login_icon"></span></a>

                <button class="navbar-toggler toggler-spring menu">
                    <span class="menuLine"></span>
                    <span class="menuLine"></span>
                    <!-- <span class="menuLine"></span> -->
                </button>
            </div>
        </div>

        <div id="navbarSupportedContent" class="collapse navbar-collapse menu-list">
            <ul class="navbar-nav">
                <li class="<?= ( menu_active() === 'home' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url(); ?>"><?= _e('宮の森で暮らすということ','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'feature' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/feature/'); ?>"><?= _e('デザイン','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'plan' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/plan/'); ?> "><?= _e('プラン・眺望','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'equipment' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/equipment/'); ?>"><?= _e('設備仕様・構造','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'access' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>"><?= _e('アクセス','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'outline' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/outline/'); ?>"><?= _e('物件概要','miyanomori'); ?></a></li>
                <li class="<?= ( menu_active() === 'contactus' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/contactus/'); ?>"><?= _e('お問い合わせ','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="tel:0120853133">TEL.0120-853-133</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>"><span><?= _e('ログアウト','miyanomori'); ?></span></a></li>
                <li class="nav-item dropdown">
                    <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav lang menu-mobile">
                <li class="nav-item js-menuAnimation dropdown dropdown-right">
                <?php do_action('miyanomori_nav_language'); ?>
                </li>
            </ul>
            <ul class="navbar-nav menu-mobile">
                <li class="nav-item js-menuAnimation">
                    <a class="nav-link tel" href="tel:0120853133">
                        Tel.0120-853-133
                        <p><?= _e('受付時間 10:00 ～ 18:00','miyanomori'); ?></p>
                    </a>
                </li>
                <li class="nav-item js-menuAnimation">
                    <a class="nav-link zip-code" href="#">
                        〒060-0001
                        <p><?= _e('札幌市中央区北1条西4丁目','miyanomori'); ?><br>
                        <?= _e('札幌グランドホテル2階（グランビスタギャラリーサッポロ内','miyanomori'); ?></p>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav  menu-mobile">
                <li class="nav-item js-menuAnimation "><a class="nav-link" href="<?php echo home_url('/news/'); ?>"><?= _e('新着情報','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/aboutus/'); ?> "><?= _e('PROSTYLEについて','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/terms/"><?= _e('利用規約','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/antisocial/"><?= _e('反社会的勢力排除に関する基本方針','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/privacypolicy/'); ?>"><?= _e('プライバシーポリシー','miyanomori'); ?></a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/socialpolicy/"><?= _e('ソーシャルメディアポリシー','miyanomori'); ?></a></li>
            </ul>
        </div>

    </div>
</header>