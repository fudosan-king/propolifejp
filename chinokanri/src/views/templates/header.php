<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="content-language" content="ja">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

        <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/img/favicon-16x16.png">
        <link rel="manifest" href="<?=base_url();?>assets/img/site.webmanifest">
        <link rel="mask-icon" href="<?=base_url();?>assets/img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

        <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/426c32e6a9.js" crossorigin="anonymous"></script>

        <!-- monmentjs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

        <title><?=$title;?></title>
        <meta name="Description" content="<?=$meta_description;?>">
        <meta name="Keywords" content="<?=$meta_keywords;?>">

        <?php 
            if($this->uri->uri_string() == 'contact' || $this->uri->uri_string() == 'contact/finish' || $this->uri->uri_string() == 'kaiyaku/finish'):
                ?>
                <link rel="stylesheet" href="<?=base_url();?>assets/css/contact.css">
                <?php
            endif;

             if($this->uri->uri_string() == 'kaiyaku'):
                ?>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
                <link rel="stylesheet" href="<?=base_url();?>assets/css/kaiyaku.css">
                <?php
            endif;
        ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NXFQN6X');</script>
        <!-- End Google Tag Manager -->


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-63861816-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXFQN6X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>

        <header>
            <div class="container">
                <div class="row">                    
                    <div class="col-12 col-sm-12 col-md-8">
                       <p class="header-intro">分譲マンション・賃貸物件・商業ビル管理事業・プロパティ・マネジメント・建物清掃事業</p>
                       <a href="/"><img class="header-logo" src="<?=base_url();?>assets/img/logo.jpg" class="img-fluid" alt="Responsive image"></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="header-contact"><a href="<?=base_url();?>contact"><i class="fa fa-envelope" aria-hidden="true"></i>お問い合わせ</a></div>
                        <div class="header-phone"><a href="tel:0120997950"><i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"></i>0120-99-7950</a></div>
                    </div>
                    
                </div>
            </div>
        </header>
        <div class="container">
            <?php 
                if($this->router->fetch_class() == 'home'):
                    ?>
                    <section class="row banner">
                        <div class="col-sm|md|lg|xl-1-12|auto">
                            <div class="banner-content">
                                <h3 class="text-center">「マンション管理なんてどこも同じ」<br> と思ってませんか？</h3>
                            </div>
                        </div>
                    </section>
                    <?php
                endif;
            ?>
            