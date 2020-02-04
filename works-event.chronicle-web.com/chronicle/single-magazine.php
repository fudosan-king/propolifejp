<?php  header("Access-Control-Allow-Origin: *"); ?>
<?php
  include_once "api/api.php";
  $api = new WP_API();
  $recent_posts = $api->get_recent_posts();
  $list_terms = $api->get_terms_taxonomy();
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> | 物件探して、デザインして、リノベしよう｜クロニクル</title><link rel="apple-touch-icon" sizes="152x152" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/favicon_package_v0.16/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/favicon_package_v0.16/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/favicon_package_v0.16/favicon-16x16.png">
  <link rel="manifest" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/favicon_package_v0.16/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800,900&amp;subset=japanese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;subset=japanese" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/tablesaw.stackonly.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
  <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/css/bsnav.min.css">

  <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/css/styles.css" type="text/css">
  <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/css/mobile.css" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/assets/themes/my-bootstrap/css/templates.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>

    <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/assets/themes/my-bootstrap/css/magazine.css">

    <script>
    /*
    * Khanh Nguyen (KN) - Ajax get data and process.
    */
        var getQueryStr = function(){

            var href = window.location.href;
            var res = {};
            if (href.indexOf('?')>=0){
                var str = href.substring(href.indexOf('?') + 1, href.length);
                var params = str.split("&");
                params.forEach(function(data){
                    var obj = data.split("=");
                    res[obj[0]] = obj[1];
                });
            }

            return res;
        }

        var numPage = '';

        if (typeof getQueryStr()['page'] !== 'undefined'){
            numPage = 'page/' + getQueryStr()['page'] + '/';

        }

        $.get('https://works-event.chronicle-web.com/works/' + numPage, function(data){

            $('#main-data').html($(data).find('#main').html());
            $('#container-data').html($(data).find('#container').html());

            $('#main-data').find('a').each(function(){
                $(this).attr('href', $(this).prop('baseURI'));
            });

            $('#container-data').find('.imgBox > a').each(function(){
                var pID = $(this).prop('pathname').split('/')[2];

                $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
                    $(this).attr('href', 'http://chronicle-web.aws.fudosan-king.jp/plus' +'/works/detail/?p=' + pID);
                    $(this).attr('target', '_blank');
                });

            });

            $('#container-data #localNav').find('a').each(function(){
                var pathName = $(this).prop('pathname');
                $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
                    $(this).attr('href', 'http://chronicle-web.aws.fudosan-king.jp/plus' + pathName);
        // $(this).attr('target', '_blank');
        });
            });

            $('#container-data').find('.pager a').each(function(){
                var pageNum = $(this).prop('outerText');
                $(this).attr('href', 'http://chronicle-web.aws.fudosan-king.jp/plus/works/?page=' + pageNum);
            });

        });

    /*
    * END - Khanh Nguyen (KN) - Ajax get data and process.
    */
    </script>

  <link rel="stylesheet" href="http://chronicle-web.aws.fudosan-king.jp/plus/cache/css/fix.css" type="text/css">


  <?php wp_head(); ?>
</head>

<body>
    <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9S2NL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <div id="page">

    <div class="navbar navbar-expand-md bsnav bsnav-sticky bsnav-sticky-slide bsnav-brand-center">
  <div class="container">

    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <a class="navbar-brand" href="http://chronicle-web.aws.fudosan-king.jp/plus"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/logo.svg" width="200px" alt="" class="img-fluid"></a>
    <div class="box_favorites d-block d-md-none">
      <a href="http://chronicle-web.aws.fudosan-king.jp/plus/favorites">
        <i class="fas fa-heart fa-2x"></i>
        <span class="favorites_number"></span>
      </a>
    </div>
    <a href="tel:0120602423" class="freecall d-block d-md-none"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/gnavi-freecall-tokyo.png" alt="" class="img-fluid"></a>

    <div class="collapse navbar-collapse justify-content-md-between">
      <ul class="navbar-nav navbar-mobile">
        <li class="nav-item active"><a class="nav-link nav_search" href="http://chronicle-web.aws.fudosan-king.jp/plus/#section_propertySearch">物件検索 <span>SEARCH</span></a></li>
        <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/works/">リノベーション実例 <span>WORKS</span></a></li>
        <li class="nav-item dropdown fadeup">
          <a class="nav-link" href="#">クロニクルプラスとは <span>ABOUT</span> <i class="caret"></i></a>
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/flow/">中古購入の流れ</a></li>
            <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/about/">リノベーションについて</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/event/">イベント・セミナー <span>EVENT</span></a></li>
        <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/voice/">お客様の声 <span>VOICE</span></a></li>
        <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/vr/">体験！VR <span>Virtual Reality</span></a></li>
        <li class="nav-item"><a class="nav-link" href="http://chronicle-web.aws.fudosan-king.jp/plus/package/">クロニクルパッケージ <span>PACKAGE</span></a></li>
        <li class="nav-item"><a class="nav-link" href="tel:0120602423"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/i_phone.svg" width="30px" alt="" class="img-fluid"> <span class="phone_number">0120-602-423</span></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="bsnav-mobile">
  <div class="bsnav-mobile-overlay"></div>
  <div class="navbar"></div>
</div>


<main class="magazine article">
    <section class="section_article">
        <div class="container">
            <div class="row">
              <?php
                if(have_posts()):
                  while(have_posts()): the_post();
                    $imgThumb = wp_get_attachment_image_url( get_post_thumbnail_id(), $size = 'full', $icon = false );
              ?>
                <div class="col-12 col-lg-8">
                    <h2><?php echo get_the_title(); ?></h2>
                    <small class="date"><?php echo date('m.d.Y', strtotime($post->post_date)) ?></small>
                    <img src="<?php echo $imgThumb; ?>" alt="" class="img-fluid article">

                    <div class="post-content">
                        <!-- AJAX JSON CONTENT -->
                        <?php  the_content(); ?>
                    </div>

                    <div class="box_light">
                        <div class="row no-pad">
                            <div class="col-12 col-sm-6">
                                <div class="box_light_content br0">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/magazine/img01.png" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="col-8">
                                            <h5><a href="#">前の記事</a></h5>
                                            <p><a href="#">天井は極張りにフ木に包まれた癒 Lの空間、りノベーション8事例</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="box_light_content">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="text-right">
                                                <h5><a href="#">前の記事</a></h5>
                                                <p><a href="#">トッブインタビュー1Miele Japan／ミーレジ＋，にン」俊昌</a> </p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a href="#"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/magazine/img02.png" alt="" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center w_btn">
                        <a href="#" class="btn btnYellow">button 1</a>
                        <a href="#" class="btn btnYellow">button 2</a>
                        <a href="#" class="btn btnYellow">button 3</a>
                    </p>
                </div>
                <?php

                    endwhile;
                  endif;
                ?>

                <div class="col-12 col-lg-4">
                    <div class="row justify-content-center side_right">

                        <div class="col-12">



                            <h4>新着記事</h4>
                            <div class="box_new_arcticle">
                                <div class="sync_content">
                                    <!-- AJAX JSON CONTENT -->
                                    <?php
                                      if(!empty($recent_posts)):
                                        foreach($recent_posts['data'] as $rc_post){
                                          ?>
                                            <a href="{{url_base}}/magazine/article/?slug=${post.name}" class="article_items">
                                              <article>
                                                  <div class="row no-gutters">
                                                      <div class="col-3">
                                                          <div class="article_items_img">
                                                              <img src="<?php echo $rc_post['thumbnails']['medium']; ?>" alt="" class="img-fluid">
                                                          </div>
                                                      </div>
                                                      <div class="col-9 col-sm-9">
                                                          <div class="article_items_content">
                                                              <p><?php echo $rc_post['title']; ?></p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </article>
                                             <?php
                                              foreach($rc_post['terms'] as $term){echo '<span class="label_sub">'.$term['name'].'</span>';}
                                              ?>
                                          </a>
                                          <?php
                                        }
                                      endif;
                                    ?>
                                </div>

                                <?php
                                if ($recent_posts['max_num_pages']>0){
                                  ?>
                                    <a href="#" class="article_items">
                                        <article>
                                            <p class="showall">すべてを表示</p>
                                        </article>
                                    </a>
                                    <?php
                                  }
                                ?>


                                <!-- <a href="#" class="article_items">
                                    <article>
                                        <div class="row no-pad">
                                            <div class="col-xs-3 col-sm-3">
                                                <div class="article_items_img">
                                                    <img src="https://www.renovation-soup.com/wp/wp-content/uploads/2018/01/213_r_p_004s-700x514-140x140.jpg" alt="" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-sm-9">
                                                <div class="article_items_content">
                                                    <p>5分でわかる、長期優良住宅のメリットとデメリット</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <span class="label_sub">property</span>
                                </a> -->

                            </div>

                        </div>

                        <div class="col-12">

                            <div class="category_list">
                                <h4>ジャンル別で記事を見る</h4>
                                <!-- AJAX JSON CONTENT -->
                                <?php
                                  if(!empty($list_terms)):
                                    foreach($list_terms as $term){
                                      echo '<a href="">'.$term['name'].'</a>';
                                    }
                                  endif;
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


    <a class="back_top d-block d-lg-none" href="#">
  <p><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/i_arrow_top.png" alt="" class="img-fluid"></p>
  <p>PAGE TOP</p>
</a>
<footer>
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12 text-center">
          <p>
            <a href="http://chronicle-web.aws.fudosan-king.jp/plus"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/logo_chronicle.png" alt="" class="img-fluid"></a>
            <span>– クロニクルが提供するサービス</span>
          </p>
          <ul class="menu_footer">

            <li><a href="https://www.chronicle-web.com/showroom/">ショールーム</a></li>
            <li><a href="http://chronicle-web.aws.fudosan-king.jp/plus">クロニクルプラス</a></li>
            <li><a href="https://www.chronicle-web.com/logmansion/">ログマンション</a></li>
            <li><a href="https://www.chronicle-web.com/order_renove/">オーダーリノベ </a></li>
            <li><a href="https://www.chronicle-web.com/reform/">クロニクルリフォーム</a></li>
            <li><a href="http://www.chro-residence.com/aobadai/">クロニクルレジデンス</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="footer_mid">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12 text-center">
          <ul class="menu_footer">
            <li><a href="http://chronicle-web.aws.fudosan-king.jp/plus/contact">お問い合わせ</a></li>
            <li><a href="https://www.chronicle-web.com/terms/">WEBサイト </a></li>
            <li><a href="https://www.chronicle-web.com/policy/">利用規約</a></li>
            <li><a href="https://www.chronicle-web.com/company/about/">運営会社（企業情報）</a></li>
            <li>法人のお客様 （<a href="https://www.propolife.co.jp/wordpress/wp-content/uploads/sell.pdf" target="_blank">社有物件一覧表</a>）</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-6">
          <p class="copyright">Copyright © <a href="http://chronicle-web.aws.fudosan-king.jp/plus">CHRONICLE INC</a> All rights reserved.</p>
        </div>
        <div class="col col-12 col-sm-6">
          <a class="img_penguins btnMovetop" href="#"><img src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/images/1x/img_penguins.png" alt="" class="img-fluid"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
  </div>

<?php wp_footer(); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/tablesaw.stackonly.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/js/jquery.matchHeight-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/plugins/ScrollToPlugin.min.js"></script>

<script src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/js/button-favorites.js"></script>
<script src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/js/bsnav.min.js"></script>
<script src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/js/functions.js"></script>

    <script src="http://chronicle-web.aws.fudosan-king.jp/plus/cache/common/js/scrollTop.js"></script>
    <script src="http://chronicle-web.aws.fudosan-king.jp/plus/magazine/assets/js/content.js"></script>

</body>

</html>