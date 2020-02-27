<div class="btm_page_top">
<p class="btn_pagetop"><img src="<?php bloginfo('template_directory'); ?>/common/images/btn_pagetop.png" width="60" height="60" alt=""></p>
</div>
</div><!-- // #wrap -->

<footer id="footer">

        <div class="naviBox">
            <ul class="naviUl clearfix">
                <li class="heightLine-a" style="height: 372px;">
                    <p><a href="https://www.propolife.co.jp/">ホーム</a></p>
                </li>
                <li class="heightLine-a" style="height: 372px;">
                    <p><a href="https://www.propolife.co.jp/news/">ニュース</a></p>
                    <ul>
                        <li><a href="https://www.propolife.co.jp/news/information/">企業からのお知らせ</a></li>
                        <li><a href="https://www.propolife.co.jp/news/pressrelease/">プレスリリース</a></li>
                        <li><a href="https://www.propolife.co.jp/news/media/">メディア掲載情報</a></li>
                        <li><a href="https://www.propolife.co.jp/ir/">電子公告</a></li>
                        <li><a href="https://www.propolife.co.jp/group/ir/">グループ企業 電子公告</a></li>
                    </ul>
                </li>
                <li class="heightLine-a" style="height: 372px;">
                    <p><a href="https://www.propolife.co.jp/company/">企業情報</a></p>
                    <ul>
                        <li><a href="https://www.propolife.co.jp/company/president/">代表者挨拶</a></li>
                        <li><a href="https://www.propolife.co.jp/company/philosophy/">経営理念</a></li>
                        <li><a href="https://www.propolife.co.jp/company/">会社概要</a></li>
                        <li><a href="https://www.propolife.co.jp/company/history/">沿革</a></li>
                        <li><a href="https://www.propolife.co.jp/company/officer/">役員一覧</a></li>
                        <li><a href="https://www.propolife.co.jp/company/access/">アクセス</a></li>
                    </ul>
                </li>
                <li class="heightLine-a" style="height: 372px;">
                    <p><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></p>
                    <ul>
                        <li><a href="https://www.propolife.co.jp/recruit/newgraduate/">新卒採用</a></li>
                        <li><a href="https://www.propolife.co.jp/recruit/career/">中途採用</a></li>
                    </ul>
                </li>
                <li class="heightLine-a" style="height: 372px;">
                    <p><a href="https://www.propolife.co.jp/group/">グループ企業</a></p>
                    <ul>
                        <li><a href="https://www.chronicle-web.com/" target="_blank">株式会社クロニクル</a></li>
                        <li><a href="http://www.chronicle-kensetsu.co.jp/" target="_blank">株式会社クロニクル建設</a></li>
                        <li><a href="https://www.prostyle-residence.com/" target="_blank">株式会社プロスタイル</a></li>
                        <li><a href="https://www.chinokanri.co.jp/" target="_blank">千野建物管理株式会社</a></li>
                        <li><span>煙台提案生活木業有限公司</span></li>
                        <li><a href="https://www.propolifevietnam.com/" target="_blank">PROPOLIFE VIETNAM</a></li>
                        <li><a href="http://www.nikuan-kotakino.com/" target="_blank">株式会社小滝野</a></li>
<li><a href="https://www.propolifehotels.com">株式会社プロスタイル旅館</a></li>
<li><a href="https://www.oki-ig.com">株式会社沖縄イゲトー</a></li>
                    </ul>
                </li>
                <li class="sp">
                    <p><a href="https://www.propolife.co.jp/contact/">お問い合わせ</a></p>
                </li>
                <li class="sp">
                    <p><a href="https://www.propolife.co.jp/terms/">利用規約</a></p>
                </li>
                <li class="sp">
                    <p><a href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></p>
                </li>
                <li class="sp">
                    <p><a href="https://www.propolife.co.jp/privacypolicy/">プライバシーポリシー</a></p>
                </li>
                <li class="sp">
                    <p><a href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></p>
                </li>

            </ul>
        </div>
        <div class="fBox">
            <div class="subBox clearfix">
                <p>Copyright © PROPOLIFE GROUP INC. All Rights Reserved.</p>
                <ul class="clearfix">
                    <li><a href="https://www.propolife.co.jp/contact/">お問い合わせ</a></li>
                    <li><a href="https://www.propolife.co.jp/terms">利用規約</a></li>
                    <li><a href="https://www.propolife.co.jp/antisocial">反社会的勢力排除に関する基本方針</a></li>
                    <li><a href="https://www.propolife.co.jp/privacypolicy/">プライバシーポリシー</a></li>
                    <li><a href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></li>


                </ul>
            </div>
        </div>
    </footer>
<!-- /#gFooter -->

<ul id="side-dock">
    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/common/img/pagetop.png" alt="" class="pc" /><img src="<?php bloginfo('template_directory'); ?>/common/img/b_pagetop_sp.png" alt="" width="30" class="sp" /></a></li>
</ul>

<script src="<?php bloginfo('template_directory'); ?>/common/js/heightLine.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/common/js/jquery.matchHeight.js"></script>
<script type="text/javascript">
    $(function(){
        $('#main .linkBox .list li a').matchHeight();

    });
</script>
<?php
    if(is_page( 'contact' )):
        ?>
            <!-- <script src="<?php //bloginfo('template_directory'); ?>/common/js/contact/contact.js"></script> -->
        <?php
    endif;
 ?>
<?php wp_footer(); ?>
</body>
</html>
