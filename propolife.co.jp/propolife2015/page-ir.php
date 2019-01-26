<?php
$dir_name = 'ir';
// $dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
?>
<?php get_header(); ?>
<div id="contents">

    <?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/ir/img_title_h2.png" alt="IR"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
       <!--
        <table>
            <tr class="bg">
                <th>会社名</th>
                <td>株式会社プロポライフ</td>
            </tr>
            <tr class="bg">
                <th>所在地</th>
                <td>東京都千代田区丸の内２－３－２　郵船ビルディング２Ｆ </td>
            </tr>
        </table>
        -->

        <div class="p-box">
            <h3 class="p-title01">
                <?php if (qtrans_getLanguage() == 'ja'): ?>
                電子公告
                <?php elseif (qtrans_getLanguage() == 'en'): ?>
                Electronic public notice
                <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                电子公告
                <?php endif; ?>
            </h3>
            <div class="p-container">
                <table>
                    <tr>
                        <th>
                            <?php if (qtrans_getLanguage() == 'ja'): ?>
                            2017年2月27日
                            <?php elseif (qtrans_getLanguage() == 'en'): ?>
                            Feb. 27, 2017
                            <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                            2017年2月27日
                            <?php endif; ?>
                        </th>
                        <td><a href="https://www.propolife.co.jp/wordpress/wp-content/uploads/20170227.pdf" target="_blank">
                            <span class="p-text">
                                <?php if (qtrans_getLanguage() == 'ja'): ?>
                                吸収分割公告
                                <?php elseif (qtrans_getLanguage() == 'en'): ?>
                                Absorption division announcement
                                <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                                吸收式拆分公告
                                <?php endif; ?>
                            </span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF">（102KB）</a></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="p-box">
            <h3 class="p-title02">
                <?php if (qtrans_getLanguage() == 'ja'): ?>
                決算公告
                <?php elseif (qtrans_getLanguage() == 'en'): ?>
                Account settlement notice
                <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                截止公告
                <?php endif; ?>
            </h3>
            <div class="p-container">
                <p>
                    <a href="http://www.netkeisai.com/1001827/propolife.html" target="_blank">
                        <p class="p-text">
                            <?php if (qtrans_getLanguage() == 'ja'): ?>
                            決算公告はこちら
                            <?php elseif (qtrans_getLanguage() == 'en'): ?>
                            Here is the announcement of settlement account here
                            <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                            截止公告在这里
                            <?php endif; ?>
                        </p>
                    </a>
                </p>
            </div>
        </div>

    </div>

</div><!-- // #contents -->
<?php get_footer(); ?>