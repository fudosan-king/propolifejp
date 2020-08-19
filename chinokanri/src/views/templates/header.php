<!doctype html>
<html lang="ja">
    <head>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>千野建物管理株式会社</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>

        <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url();?>assets/favicon_package_v0.16/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/favicon_package_v0.16/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/favicon_package_v0.16/favicon-16x16.png">
        <link rel="manifest" href="<?=base_url();?>assets/favicon_package_v0.16/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700,900&display=swap&subset=japanese" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">
        
        <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.css" type="text/css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/mobile.css" type="text/css">

        <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/426c32e6a9.js" crossorigin="anonymous"></script>

        <!-- momentjs -->
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
        
        <div id="page">

            <header>
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9 align-self-lg-start align-self-center">
                      <p class="mb-1 job">分譲マンション・賃貸物件・商業ビル管理事業・プロパティ・マネジメント・建物清掃事業</p>
                      <a class="logo" href="/"><img src="<?=base_url();?>assets/images/1x/logo.jpg" alt="" class="img-fluid" width="210"></a>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center">
                      <div class="header_contact">
                        <div class="header_left">
                            <p><a class="btn btnEmail" href="<?=base_url();?>contact/"><img src="<?=base_url();?>assets/images/SVG/mail.svg" alt="" class="img-fluid" width="24"> お問い合わせ</a></p>    
                        </div>
                        <div class="header_right">
                            <p><a class="btnPhone" href="tel:0120997950"><img src="<?=base_url();?>assets/images/SVG/phone.svg" alt="" class="img-fluid" width="24"> 0120-99-7950</a></p>
                            <p>電話 045-581-9556（代）<br>
                            FAX 045-575-6477</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </header>

            <main>
                <div class="main_content">
                    <section class="section_top">
                        <?php
                            if($this->router->fetch_class() == 'home'):
                                ?>
                                <div class="container">
                                    <div class="row banner">
                                        <div class="col-sm|md|lg|xl-1-12|auto">
                                            <div class="banner-content">
                                                <h3 class="text-center">「マンション管理なんてどこも同じ」<br> と思ってませんか？</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            endif;
                        ?>
