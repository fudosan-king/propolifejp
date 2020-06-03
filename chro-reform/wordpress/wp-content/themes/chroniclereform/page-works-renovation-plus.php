
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="">

<title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/reset.css">
<link rel="stylesheet" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/general.css">
<link rel="stylesheet/less" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/colorscheme.less">
<link rel="stylesheet/less" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/base.less">
<link rel="stylesheet/less" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/module.less">
<link rel="stylesheet/less" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/parts.less">
<link rel="stylesheet/less" type="text/css" href ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/css/smart.less">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/nicker_nav.css">
<link rel="icon" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/images/favicon.png" type="image/png" />

<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/common/css/base.css">
<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/common/css/detail.css">
<link rel="stylesheet" type="text/css" href="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/candy/works/css/style.css">
<link rel="stylesheet/less" type="text/css" href="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } } ?>/shindan/tablet.css">

<!--[if lt IE 9]>
<script src ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/jquery.js"></script>
<script type="text/javascript">
if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0">');
    }else{
        document.write('<meta name="viewport" content="width=1100, maximum-scale=1">');
    }
</script>
<script type="text/javascript" src ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/less.js"></script>
<script type="text/javascript" src ="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/js/common.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9S2NL');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9S2NL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="container" class="page-works">

<!--================= Header start ==================-->
<?php get_header(); ?>
<!--================= //Header end ==================-->


<!--================= Content start ==================-->
<div id="content" class="clearfix">

<!--======== Category Title start ===========-->
<div class="ttlCategory bgGrey">
	<div class="boxInner">
	<h1 class="txtMain">施工事例</h1>
	<p class="txtSub">WORKS</p>
	</div>
</div>
<!--======== //Category Title end ===========-->

<!--======== Breadcrumb start ===========-->
<nav class="boxBreadcrumb boxInner">
	<p>
	<span><a href ="<?php if ($_SERVER['HTTP_X_CUSTOM_REFERRER']) { echo $_SERVER['HTTP_X_CUSTOM_REFERRER']; } else { bloginfo('url'); } ?>">ホーム</a> » </span>
	<span>施工事例</span>
	</p>
</nav>
<!--======== //Breadcrumb end ===========-->

<!--======== ▼Article start ===========-->
<article class="boxArticle">

	<div id="main-data">


    </div>
    <div id="container-data">


    </div>

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

        $.get('https://works-event.chronicle-web.com/works/renovation/plus/' + numPage, function(data){
          var baseTags, baseURI;
          baseURI = document.baseURI;

          if (!baseURI) {
            baseTags = document.getElementsByTagName("base");
            baseURI = baseTags.length ? baseTags[0].href : document.URL;
          }
          $('#main-data').html($(data).find('#main').html());
          $('#container-data').html($(data).find('#container').html());

          $('#main-data').find('a').each(function(){
            $(this).attr('href', baseURI);
          });

          $('#container-data').find('.imgBox > a').each(function(){
            var pID = $(this).prop('pathname').split('/')[2];

            $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
               $(this).attr('href', baseURI.substring(0, baseURI.indexOf('.com/') + 5) +'reform/works-detail/?p=' + pID);
               $(this).attr('target', '_blank');
            });

          });

          $('#container-data #localNav').find('a').each(function(){
            var pathName = $(this).prop('pathname');
            var arrPathName = pathName.substring(1, pathName.length-1).split('/');
            var strPath = arrPathName[0];
            if(arrPathName.length > 1){
              for(var i = 1; i < arrPathName.length; i++){
                strPath = strPath + '-' + arrPathName[i];
              }
            }
            strPath = strPath + '/';
            $('#container-data').find('a[href="'+ $(this).attr('href') +'"]').each(function(){
               $(this).attr('href', baseURI.substring(0, baseURI.indexOf('.com/') + 5) + 'reform/' + strPath);
               // $(this).attr('target', '_blank');
            });
          });

          $('#container-data').find('.pager a').each(function(){
            var pageNum = $(this).prop('outerText');
            $(this).attr('href', baseURI.substring(0, baseURI.indexOf('.com/') + 5) + 'reform/works/renovation/plus/?page=' + pageNum);
           });

        });

        /*
         * END - Khanh Nguyen (KN) - Ajax get data and process.
         */
    </script>



</article>
<!--======== //Article end ===========-->


<!--======== A-Side start ===========-->
<aside id="aside" class="boxInner">
<p class="txtC">
<a href="http://www.rakuten.co.jp/mokume/" target="_blank">
<img class="imgMain" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-toMokume.png" alt="木のインテリアショップmokume">
<img class="imgSmp" src="https://www.chronicle-web.com/reform/wordpress/wp-content/themes/chroniclereform/commonfiles/img/common/bnr-toMokumeSP.png" alt="木のインテリアショップmokume">
</a>
</p>
</aside>
<!--======== //A-Side end ===========-->

<?php get_footer(); ?>

</body>

</html>

