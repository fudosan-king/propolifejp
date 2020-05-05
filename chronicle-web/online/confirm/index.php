<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <main>
            <section class="section_main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center mt-5"><img src="../images/1x/online-sales.svg" alt="" class="img-fluid" width="57"></p>
                            <h1 class="text-center">オンライン相談予約</h1>
                            <p class="box_intro">クロニクルでは、ご自宅でもオンラインでスタッフにご相談いただけます。<br>
                            各種オンラインミーティングツール（zoom、calling、Google meet等）を使い、
                            スタッフと対話しながら、物件をご確認いただけます。</p>
                            <div class="box_content">
                                <p class="sub_des">※カメラ機能がついたパソコン、タブレット、スマートフォンのいずれかが必要です。<br>
                                ※お顔が映るのが苦手な方は音声のみで問題ございません。<br>
                                ※ご利用は無料ですが、別途通信料がかかります。データ通信料はお客さまのご負担となります。<br>
                                　従量課金制通信サービスや通信料に上限があるネット回線・プランを利用する場合はご注意ください。<br>
                                　安定した画質で利用するためにも、Wi-Fi環境下での利用を推奨します。</p>
                                <?php
                                    if (isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $datepicker = $_POST['datepicker'];
                                        $time = $_POST['time'];
                                    } else {
                                    	header('Location:/online/', true, 301);
                                        exit();
                                    }
                                ?>
                                <form action="" method="POST" class="frm_online">
                                    <div class="box_entry">
                                        <h2 class="text-center">入力内容をご確認ください</h2>
                                        <div class="row">
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">お名前</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $name; ?></p>
                                                <input hidden type="text" name="name" value="<?php echo $name; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">メールアドレス</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $email; ?></p>
                                                <input hidden type="text" name="email" value="<?php echo $email; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for=""> ご希望日</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $datepicker; ?></p>
                                                <input hidden type="text" name="datepicker" value="<?php echo $datepicker; ?>">
                                            </div>
                                            <div class="col-4 col-md-6 align-self-center">
                                                <label for="">ご希望時間</label>
                                            </div>
                                            <div class="col-8 col-md-6 align-self-center">
                                                <p class="mb-0"><?php echo $time; ?></p>
                                                <input hidden type="text" name="time" value="<?php echo $time; ?>">
                                            </div>
                                        </div>
                                        <p class="text-center text_information"><small>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                        個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/">プライバシーポリシー</a>をご覧ください。</small></p>
                                    </div>
                                    <div class="row">
		                                <div class="col-6 col-md-6">
		                                    <a href="javascript:history.back();" class="btn btn_border btnreturn_send w-100">入力画面に戻る</a>
		                                </div>
		                                <div class="col-6 col-md-6">
		                                    <button type="submit" name="submit" class="btn btn_border btnreturn_send w-100">送信する</button>
		                                </div>
	                            	</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require '../footer.php'; ?>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>