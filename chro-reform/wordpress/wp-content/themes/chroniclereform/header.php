<?php
if (!$_SERVER['HTTP_X_CUSTOM_REFERRER']) {
	// echo '<script>window.location = "http://www.chronicle-web.com/reform/";</script>';
}
?>
<header id="header">
<div class="boxInner">

<!--==== ▼サイトロゴ start ====-->
<h1 id="ttlSiteLogo">
<a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>/"><img src="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/images/logo_kensetsu.png" alt="クロニクルリフォーム"></a>
</h1>
<!--==== //サイトロゴ end ====-->

<!--== ▼グローバルナビ start ==-->
<nav id="boxGlobalNav" class="">
    <dl>
        <dt class="btnOpen">
            <img src="<?php bloginfo('template_directory'); ?>/commonfiles/img/common/btn-gnav-menu.png" alt="Menu">
        </dt>
        <dd class="boxMenu">
            <ul>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/#about">
                                      <span class="c3dbbcf">クロニクルリフォームとは</span>
                                      <span class="c5E5E5E">ABOUT</span>
                                    </a>
                </li>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/material/">
                                      <span class="c3dbbcf">自然素材</span>
                                      <span class="c5E5E5E">MATERIAL</span>
                                    </a>
                </li>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/service/">
                                      <span class="c3dbbcf">サービス紹介</span>
                                      <span class="c5E5E5E">SERVICE</span>
                                    </a>
                </li>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/event/">
                                      <span class="c3dbbcf">イベント・セミナー</span>
                                      <span class="c5E5E5E">EVENT</span>
                                    </a>
                </li>
                <!-- <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/voice/">
                                      <span class="c3dbbcf">お客様の声</span>
                                      <span class="c5E5E5E">VOICE</span>
                                    </a>
                </li>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/vr/">
                                      <span class="c3dbbcf">体感!VR</span>
                                      <span class="c5E5E5E">VIRTUAL REALITY</span>
                                    </a>
                </li> -->
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/works/">
                                      <span class="c3dbbcf">リノベーション実例</span>
                                      <span class="c5E5E5E">WORKS</span>
                                    </a>
                </li>
                <li>
                    <a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service01/">
                                      <span class="c3dbbcf">耐震・劣化診断/法定点検</span>
                                      <span class="c5E5E5E">INSPECTION</span>
                                    </a>
                    <ul>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service01/">建物劣化診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service09/">外壁・外装診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service02/">建物耐震診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service10/">設備診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service03/">劣化診断＋耐震診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service08/">防水診断</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service04/">ＤＤにおけるＥＲ作成</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service05/">PCB・アスベスト調査</a></li>
                        <li><a href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/service06/">法定点検</a></li>
                    </ul>
                </li>
            </ul>
            <p class="btnClose">CLOSE</p>
        </dd>
    </dl>
</nav>
<!--== //グローバルナビ end ==-->

</div>
</header>
