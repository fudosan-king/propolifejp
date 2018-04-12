
<?php
    /*
        Template Name: Content - Buy Page
    */
?>

<?php get_header(); ?>

<div class="page_content">
    <h2><?php the_title(); ?></h2>
    <div class="content buy">
        <?php
            // $args = array(
            //     'orderby' => 'ID',
            //     'order' => 'ASC',
            //     'post_type' => 'abouts',
            // );
            // query_posts($args);

            // if ( have_posts() ) : while ( have_posts() ) : the_post();
            //     get_template_part('/content', 'about');
            //     endwhile;
            // endif;
        ?>

        <div id="topic_path">&nbsp;</div>

        <div id="section_title">
            <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_title_h2.png" alt="仕入不動産募集"></h2>
            <p class="ruby">PURCHASE</p>
            <p class="line"></p>
        </div>

        <div id="contents_inner">
            <div class="section_telephone">
                <h3>まずはお電話ください(法人専用)</h3>
                <div class="telephone_list">
                    <ul>
                                            <li>
                            <h4>東　京：</h4>
                            <p>03-6854-3680</p>
                        </li>
                                            <li>
                            <h4>横　浜：</h4>
                            <p>045-279-2680</p>
                        </li>
                                            <li>
                            <h4>名古屋：</h4>
                            <p>052-857-6090</p>
                        </li>
                                            <li>
                            <h4>大　阪：</h4>
                            <p>06-7669-9680</p>
                        </li>
                                        </ul>
                </div><!-- // .telephone_list -->
                <p class="hours">営業時間 10：00〜19：00　定休日/水曜日 ※祝日を除く</p>
                <p class="btn_request"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-pbpcn-caaa2de9b6ea9e1dabd734c14a801b6a" target="_blank">WEBでの査定依頼はこちら</a></p>
            </div><!-- // .section_telephone -->

                    <div id="section_buy">
                <div id="purchase_list">
                    <ul>
                        <li>
                            <div class="bg01">
                                <h3><span>中古マンション</span></h3>
                                <p><span>旧耐震や100m2以上の<br>
    物件も募集しております。</span></p>
                            </div>
                        </li>
                        <li class="sp_border_none">
                            <div class="bg02">
                                <h3><span>マンション用地</span></h3>
                                <p><span>プランが入れば規模に関わらず<br>
    募集しております。</span></p>
                            </div>
                        </li>
                        <li class="border_none">
                            <div class="bg01 sp_bg">
                                <h3><span>戸建用地</span></h3>
                                <p><span>1棟～多棟まで。<br>
    開発の必要な大型の土地も<br>
    募集しております。</span></p>
                            </div>
                        </li>
                        <li class="sp_border_none">
                            <div class="bg02 sp_bg">
                                <h3><span>中古戸建て</span></h3>
                                <p><span>築後20年以内の物件</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="bg01">
                                <h3><span>新築未入居<br>
    分譲マンション</span></h3>
                                <p><span>1戸～<br>
    デベロッパー様、ゼネコン様の<br>
    所有物件も募集しております。</span></p>
                            </div>
                        </li>
                        <li class="border_none sp_border_none">
                            <div class="bg02">
                                <h3><span>企業・個人様保有の<br>
    社宅・寮</span></h3>
                                <p><span>弊社でリノベーションを施し、<br>
    その後分譲致します。</span></p>
                            </div>
                        </li>
                    </ul>
                </div><!-- // #purchase_list -->

                            <div id="point">
                    <h3>最短1日で査定！迅速決済</h3>
                    <ul>
                                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_point_circle01.png" width="190" alt="POINT1 正規手数料をお支払いしています"></li>
                                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_point_circle02.png" width="190" alt="POINT2 最短１日でスピーディに査定いたしております"></li>
                                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_point_circle03.png" width="190" alt="POINT3 決済も迅速に行います"></li>
                                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_point_circle04.png" width="190" alt="POINT4 物件種別や規模に関わらずしっかり査定いたします"></li>
                                        </ul>
                </div><!-- // #point -->

                <div id="purchase_area">
                                    <h3>応募対象エリア</h3>
                    <p class="area">東京都/埼玉県/千葉県/神奈川県/愛知県/大阪府</p>
                    <p class="map">
                        <span class="pc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_buy_map_pc.png" alt=""></span>
                        <span class="sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/img_buy_map_sp.png" alt=""></span>
                    </p>
                </div><!-- // #purchase_area -->

                <div id="estate_list">
                    <h3>仕入開発実績</h3>
                    <ul>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/011.jpg" width="205" alt="シャトー赤坂"></p>
                            <h4><span>シャトー赤坂</span></h4>
                            <p>東京都港区赤坂<br>
    （リノベーションマンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/021.jpg" width="205" alt="シーアイマンション白金"></p>
                            <h4><span>シーアイマンション白金</span></h4>
                            <p>東京都目黒区上大崎<br>
    （リノベーションマンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/031.jpg" width="205" alt="桜木町スカイハイツ"></p>
                            <h4><span>桜木町スカイハイツ</span></h4>
                            <p>神奈川県横浜市中区野毛町<br>
    （リノベーションマンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/041.jpg" width="205" alt="クロニクルレジデンス<br />
    横浜青葉台"></p>
                            <h4><span>クロニクルレジデンス<br>
    横浜青葉台</span></h4>
                            <p>神奈川県青葉区すみよし台<br>
    (1棟リノベーション)</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/051.jpg" width="205" alt="プロスタイル横浜馬車道"></p>
                            <h4><span>プロスタイル横浜馬車道</span></h4>
                            <p>神奈川県横浜市中区元浜町<br>
    （新築マンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/061.jpg" width="205" alt="プロスタイル元住吉"></p>
                            <h4><span>プロスタイル元住吉</span></h4>
                            <p>神奈川県川崎市中原区木月住吉町<br>
    （新築マンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/071.jpg" width="205" alt="プロスタイル長津田"></p>
                            <h4><span>プロスタイル長津田</span></h4>
                            <p>神奈川県横浜市緑区長津田町<br>
    （新築マンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/081.jpg" width="205" alt="プロスタイルウェルス<br />
    関内住吉町"></p>
                            <h4><span>プロスタイルウェルス<br>
    関内住吉町</span></h4>
                            <p>神奈川県横浜市中区住吉町<br>
    （新築マンション）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/091.jpg" width="205" alt=""></p>

                            <p>東京都品川区平塚1丁目<br>
    （新築戸建）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/101.jpg" width="205" alt=""></p>

                            <p>東京都世田谷区野毛1丁目<br>
    （新築戸建）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/111.jpg" width="205" alt=""></p>

                            <p>東京都台東区東浅草2丁目<br>
    （新築戸建）</p>
                        </li>
                                            <li>
                            <p class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buy/121.jpg" width="205" alt=""></p>

                            <p>神奈川県横浜市南区永田南1丁目<br>
    （新築戸建）</p>
                        </li>
                                        </ul>
                </div><!-- // #estate_list -->
            </div><!-- // #section_buy -->


            <div class="section_telephone btm">
                <h3>まずはお電話ください(法人専用)</h3>
                <div class="telephone_list">
                    <ul>
                                            <li>
                            <h4>東　京：</h4>
                            <p>03-6854-3680</p>
                        </li>
                                            <li>
                            <h4>横　浜：</h4>
                            <p>045-279-2680</p>
                        </li>
                                            <li>
                            <h4>名古屋：</h4>
                            <p>052-857-6090</p>
                        </li>
                                            <li>
                            <h4>大　阪：</h4>
                            <p>06-7669-9680</p>
                        </li>
                                        </ul>
                </div><!-- // .telephone_list -->
                <p class="hours">営業時間 10：00〜19：00　定休日/水曜日 ※祝日を除く</p>
                <p class="btn_request"><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-pbpcn-caaa2de9b6ea9e1dabd734c14a801b6a" target="_blank">WEBでの査定依頼はこちら</a></p>
                <p class="txt">査定のご依頼お待ち申し上げております。</p>
            </div><!-- // .section_telephone -->

        </div>


    </div>
</div>


<?php get_footer(); ?>
