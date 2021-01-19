<header class="header_afterlogin clearfix">
    <div class="navbar navbar-expand-lg ">
        
        <?php  
            $lang = qtranxf_getLanguage(); 
            if($lang === 'en') :            
        ?>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/logo-y-en.png" alt="" class="img-fluid logo_white">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/logo-b-en.png" alt="" class="img-fluid logo_black">
            </a>
        <?php elseif ($lang === 'jp' || $lang === 'tw' || $lang === 'zh') : ?>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/logo-y.png" alt="" class="img-fluid logo_white">
                <img src="<?php bloginfo('template_directory');?>/assets/images/lang/logo-b.png" alt="" class="img-fluid logo_black">
            </a>
        <?php endif; ?>
       

        <div class="btn-action">
            <a class="user-login" href="<?php echo wp_logout_url(home_url()); ?>"><span class="user-login_icon"></span></a>

            <button class="navbar-toggler toggler-spring menu">
                <span class="menuLine"></span>
                <span class="menuLine"></span>
                <!-- <span class="menuLine"></span> -->
            </button>
        </div>
        <div id="navbarSupportedContent" class="collapse navbar-collapse menu-list">
            <ul class="navbar-nav">
                <li class="<?= ( menu_active() === 'home' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url(); ?>">宮の森で暮らすということ</a></li>
                <li class="<?= ( menu_active() === 'feature' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/feature/'); ?>">デザイン</a></li>
                <li class="<?= ( menu_active() === 'plan' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/plan/'); ?> ">プラン・眺望</a></li>
                <li class="<?= ( menu_active() === 'equipment' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/equipment/'); ?>">設備仕様・構造</a></li>
                <li class="<?= ( menu_active() === 'access' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                <li class="<?= ( menu_active() === 'outline' )?'active':''; ?> nav-item  js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/outline/'); ?>">アウトライン</a></li>
                <li class="<?= ( menu_active() === 'contactus' )?'active':''; ?> nav-item js-menuAnimation"><a class="nav-link" href="<?php echo home_url('/contactus/'); ?>">お問い合わせ</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="tel:0120853133">TEL.0120-853-133</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>"><span>ログアウト</span></a></li>
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
                        <p>受付時間 10:00 ～ 18:00</p>
                    </a>
                </li>
<!--                 <li class="nav-item js-menuAnimation">
                    <a class="nav-link zip-code" href="#">
                        〒869-2402
                        <p>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</p>
                    </a>
                </li> -->
            </ul>
            <ul class="navbar-nav  menu-mobile">
                <li class="nav-item js-menuAnimation "><a class="nav-link" href="<?php echo home_url('/news/'); ?>">新着情報</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/aboutus/'); ?> ">PROSTYLEについて</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/terms/">利用規約</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" href="<?= home_url('/privacypolicy/'); ?>">プライバシーポリシー</a></li>
                <li class="nav-item js-menuAnimation"><a class="nav-link" target="_blank" href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></li>
            </ul>
        </div>
        
    </div>
</header>