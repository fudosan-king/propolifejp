<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>パース制作のお問い合わせ｜株式会社クロニクル </title>
    <meta name="description" content="パース制作のお問い合わせ｜株式会社クロニクル" />
    <meta name="keywords" content="CHRONICLE,Renovation,Reform,CHRONICLE,PROSTYLE,news">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/common/favicon.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/common/favicon.png" sizes="32x32">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/css/styles.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/mobile.css" type="text/css"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <script src="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/js/jquery.matchHeight-min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.ja.min.js"></script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9S2NL');</script>
<!-- End Google Tag Manager -->



    <script src="<?php echo get_stylesheet_directory_uri().'/assets'; ?>/js/contact.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9S2NL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page">
        <header>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/common/images/img_logo_chronicle_ja.png" alt="" class="img-responsive" style="width:350px;"></h2>
              </div>
            </div>
          </div>
        </header>
        <main>
            <section class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="https://go.pardot.com/l/185822/2019-04-23/fqytv3" method="POST" role="form" class="frm_contact">
                                <h2 class="form-title" style="margin-bottom: 30px;"></h2>
                                <div class="row">
                                    <?php if(isset($_GET['finish']) && $_GET['finish']=='1'): ?>
                                        <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                                            <div class="telNumber">
                                                <a href="tel:0368978570"><div>お電話のお問い合わせも承っております</div><div>03-6897-8570</div></a>
                                            </div>
                                        </div>
                                        
                                    <?php else: ?>
                                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                            この度は弊社のパース制作サービスにご感心をお寄せいただき 誠にありがとうございます。<br>
                                            下記の事項にご記入いただき、お問い合わせくださいませ。<br>
                                            「必須」がついている項目はご記入必須項目になります。
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="telNumber">
                                                <a href="tel:0368978570"><div>お電話のお問い合わせも承っております</div><div>03-6897-8570</div></a>
                                            </div>
                                        </div>
                                        
                                    <?php endif; ?>
                                </div>

                                

                                <?php if(isset($_GET['finish']) && $_GET['finish']=='1'): ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                                            <div class="message-complete">
                                                お問い合わせが完了しました
                                                <p>お問い合わせありがとうございます。担当の者からご連絡申しあげますので、今しばらくお待ちくださいませ</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="step">
                                                <ol>
                                                    <li class="active">１．ご入力</li>
                                                    <li>２．完了</li>
                                                    <!-- <li>３．完了</li> -->
                                                </ol>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <section class="form_info input">

                                        <!-- 最寄りのショールームをお選びください  -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="long-title">
                                                            最寄りのショールームをお選びください<br>
                                                            <span style="font-weight: normal;"><small>※1つお選びください。後ほど担当者からご連絡申し上げます。</small></span>
                                                        </div>
                                                        <label class="require-flag showroom long">必須</label>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="error-text showroom">値を入力してください</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <ul class="list_radio">
                                                                        <li>
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="showroom" id="" value="クロニクル表参道本店ショールーム" onchange=""> クロニクル表参道本店ショールーム
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="showroom" id="" value="クロニクル東京日本橋ショールーム" onchange=""> クロニクル東京日本橋ショールーム
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="showroom" id="" value="クロニクル吉祥寺ショールーム" onchange=""> クロニクル吉祥寺ショールーム
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="showroom" id="" value="クロニクル横浜西口ショールーム" onchange=""> クロニクル横浜西口ショールーム
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="radio">
                                                                                <label>
                                                                                    <input type="radio" name="showroom" id="" value="クロニクル名古屋伏見ショールーム" onchange=""> クロニクル名古屋伏見ショールーム
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                             

                                        <!-- お名前 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        お名前 <label class="require-flag name">必須</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="error-text name">値を入力してください</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 css-mobile">
                                                                姓
                                                            </div>
                                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 css-mobile">
                                                                <div class="form-group">
                                                                    <input name="first-name" type="text" class="form-control" placeholder="姓" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 css-mobile">
                                                                名
                                                            </div>
                                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 css-mobile">
                                                                <div class="form-group">
                                                                    <input name="last-name" type="text" class="form-control" id="" placeholder="名" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ご法人名 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        ご法人名 <label class="require-flag company">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <input name="company" type="company" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 電話番号 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        電話番号 <label class="require-flag phone-number">必須</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="error-text phone-number">値を入力してください</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <input name="phone-number" type="text" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Eメールアドレス -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        Eメールアドレス <label class="require-flag email">必須</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="error-text email">値を入力してください</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control" id="" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- お問い合わせ内容 -->
                                        <div class="row non-require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        お問い合わせ内容
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <textarea name="iken" id="" class="form-control" rows="8" required="required"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="end-form">
                                                    <div class="content-policy-title">
                                                        <span>個人情報の取扱について</span><label class="require-flag secret-info">必須</label>
                                                    </div>
                                                    
                                                    <p>弊社の個人情報に関する取り扱いについては「プライバシーポリシー」をご一読ください。上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                                    <p class="content-policy"><a class="btn btn-link" target="_blank" href="https://www.chronicle-web.com/policy/">▶「プライバシーポリシー」を開く（株式会社クロニクル）</a></p>
                                                    <div class="checkbox center">
                                                        <label>
                                                            <input name="secret-info" type="checkbox" id="" value="同意する" onchange=""> 同意する
                                                        </label>
                                                        <div class="error-text secret-info" style="margin-top: 15px;">値を入力してください</div>
                                                    </div>

                                                    <input type="button" class="btn btn-lg btnForm" id="goConfirm" value="入力内容を確認する">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </section>

                                    <!-- CONFIRM INFORMATION FORM -->
                                    <section class="form_info confirm" style="display: none;">

                                        <!-- 最寄りのショールームをお選びください  -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="long-title">
                                                            最寄りのショールームをお選びください<br>
                                                            <span style="font-weight: normal;"><small>※1つお選びください。後ほど担当者からご連絡申し上げます。</small></span>
                                                        </div>
                                                        <label class="require-flag">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cfr cfrm_showroom" style="min-height: 90px;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- お名前 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        お名前 <label class="require-flag">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cfr cfrm_name">

                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ご法人名 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        ご法人名 <label class="require-flag">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cfr cfrm_company">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 電話番号 -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        電話番号 <label class="require-flag">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cfr cfrm_phonenumber">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Eメールアドレス -->
                                        <div class="row require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        Eメールアドレス <label class="require-flag">必須</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="cfr cfrm_email">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- お問い合わせ内容 -->
                                        <div class="row non-require">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 left-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        お問い合わせ内容
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 right-side">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                         <div class="cfr cfrm_comments" style="min-height: 90px;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="end-form" style="width: 100%;">
                                                    <input type="button" class="btn btn-lg btnForm" id="goBack" value="戻る"> &nbsp;
                                                    <input type="button" class="btn btn-lg btnForm" id="goSubmit" value="送信する">
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                <?php endif; ?>
                                <br><br><br>


                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
