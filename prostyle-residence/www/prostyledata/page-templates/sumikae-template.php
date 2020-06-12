<?php 
/* Template Name: Sumikae - Page Template */
?>

<?php get_header();?>

<main>
    <section class="content-page sumikae">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $thumnailImage = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'large', $icon = false );
                            ?>
                            
                            <div id="main-content">
                                <?php the_content(); ?>

                                <section class="extra-content">
                                    <!-- <div id="section_title"> -->
                                        <!-- <h2><?php //the_title(); ?></h2> -->
                                        <!-- <p class="ruby"><?php //the_title(); ?></p> -->
                                        <!-- <p class="line"></p> -->
                                    <!-- </div> -->
                                    <div id="contents_inner">
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="txtC image-header">
                                                        <img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image01.jpg">
                                                    </div>
                                                <div class="catch">
                                                    プロスタイルは住み替えに強い！！
                                                </div>
                                                <div class="catch-txt">
                                                    お客様にあったプランがきっと見つかります。
                                                </div>
                                                <div class="col-images">
                                                    <ul class="d-flex justify-content-center">
                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image02.jpg" alt="買ったあと安心売却"></li>
                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image03.jpg" alt="買取保証制度"></li>
                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image04.jpg" alt="買取り"></li>
                                                    </ul>
                                                </div>
                                                <article class="content">
                                                    <div class="main">
                                                        <div class="wrap">
                                                            <div class="sumikae-sec">
                                                                <ul class="sec-top clearfix">
                                                                    <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image05.jpg" alt="買ったあと安心売却"></li>
                                                                    <li class="border01">買ったあと安心売却</li>
                                                                    <li><p>売るときはトコトン考えて納得したい、買うときはストレスなくスムーズにしたい、<br>
                                                                    売る・買うのどちらも妥協したくない。そんなお客さまには「買ったあと安心売却」がおすすめです。<br>
                                                                    従来の住まいの買い替えは新居を購入するか、現居を売却するかの二者択一でどちらを優先するか選ぶ必要がありました。<br>
                                                                    そこでプロスタイルは、お客さまの気持ちに寄り添ってどちらも妥協しない「買ったあと安心売却」をご用意しました。</p></li>
                                                                </ul>
                                                            <div id="sec-loan">
                                                                <div class="kids">
                                                                    <div class="sec-loantitle">現居のローンがあっても新居のローンが組める！</div>
                                                                    <ul class="clearfix">
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image06.jpg" alt="一般的な買い替え"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image07.jpg" alt="買ったあと安心売却なら"></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="kids">
                                                                    <div class="sec-loantitle">売却時の案内対応や仮住まいが不要！</div>
                                                                    <ul>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image08.jpg" alt="一般的な買い替え"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image09.jpg" alt="買ったあと安心売却なら"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="merit">
                                                            <ul>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image10.jpg" alt="メリット1 仮住まいを探す必要がない"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image11.jpg" alt="メリット2 買手とのやり取りは不必要"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image12.jpg" alt="メリット3 現居の残債があっても新居のローンが組める"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image13.jpg" alt="メリット4 引越し時期が選べる"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sumikae-sec">
                                                            <ul class="sec-top clearfix">
                                                                    <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image14.jpg" alt="買ったあと安心売却"></li>
                                                                    <li class="border02">買取保証制度</li>
                                                                    <li><p>プロスタイルと専任媒介・専属専任媒介の契約を締結し、<br>
                                                                        一定期間内（3ヶ月以上）に売却ができなかった場合に、<br>
                                                                        あらかじめお約束した価格での買取りを保証する制度です。</p></li>
                                                                </ul>
                                                            <div id="sec-merit">
                                                                <p class="sec-merittop">安心の買取保証制度のメリット</p>
                                                                <!--<p id="kaiketsu"><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image18.png" alt="買取保証制度なら解決できます"/></p>-->
                                                                    <ul class="illust clearfix">
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image15.jpg" alt="イラスト1"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/arrow.jpg" alt="右矢印"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image16.jpg" alt="イラスト2"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/arrow.jpg" alt="右矢印"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image17.jpg" alt="イラスト3"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/arrow.jpg" alt="右矢印"></li>
                                                                        <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image18.png" alt="イラスト4"></li>
                                                                    </ul>
                                                                    <ul class="text text01">
                                                                        <li>確実な住み替え</li>
                                                                        <li>あらかじめ買取り保証額が決まるので、資金プランの予定が立ち、確実な住み替えが可能です。</li>
                                                                    </ul>
                                                                    <ul class="text text02">
                                                                        <li>スケジュール調整</li>
                                                                        <li>当社が買主となるため、買い替えの場合、購入物件とのスケジュール調整がしやすくなります。</li>
                                                                    </ul>
                                                                    <ul class="text text03">
                                                                        <li>住み替えローン</li>
                                                                        <li>住み替えローンが利用しやくすなります。</li>
                                                                    </ul>
                                                            </div>
                                                        </div>
                                                        <div class="sumikae-sec">
                                                            <ul class="sec-top clearfix">
                                                                    <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image19.jpg" alt="買ったあと安心売却"></li>
                                                                    <li class="border03">買取り</li>
                                                                    <li><p>プロスタイルの買取りサービスには、5つのメリットがあります。<br>
                                                                    「事情があって、急いで自宅を売却したい」そんなご希望にもお応えします。<br>
                                                                    不動産のご売却には、手間とリスクが少なからずかかります。<br>
                                                                    プロスタイルの買取りサービスでは、それらを最小限に抑えることが可能です。<br>
                                                                    選択肢のひとつとして、ぜひご検討ください。</p></li>
                                                                </ul>
                                                            <ul class="icon5">
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image20.jpg" alt="買取保証制度"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image21.jpg" alt="買取保証制度"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image22.jpg" alt="買取保証制度"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image23.jpg" alt="買取保証制度"></li>
                                                                <li><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image24.jpg" alt="買取保証制度"></li>

                                                            </ul>
                                                        </div>
                                                        <div id="btn-area">
                                                            <ul class="buttons">
                                                                <li><a href="<?php echo SGVINK_SUMIKAE; ?>/pdf/sumikae.pdf" target="_blank"><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image25.jpg" alt="3分でわかる！住み替えマスター　マンガ版"></a></li>
                                                                <li><a href="/sell/"><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image26.jpg" alt="住み替えご希望の方はコチラ"></a></li>
                                                                <li><a href="https://www.propolife.co.jp/group/" target="_blank"><img class="img-fluid" src="<?php echo SGVINK_SUMIKAE; ?>/imgs/image27.png" alt="GROUP WNTERPRISE　プロポライフグループ"></a></li>
                                                            </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </article>

                                            </div>
                                        </div>
                                    </div>
                                 </section>
                                
                            </div>

                            <?php
                        endwhile;
                    else:
                        ?>
                            <p align="center">404 Page not found.</p>
                        <?php
                    endif;
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();?>