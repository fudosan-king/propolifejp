<?php 
/*
    Template Name: Counter Completed
*/
?>

<?php get_header(); ?>

<?php 
$home_url = home_url();
$status = isset($_GET['status'])?$_GET['status']:'';
if($status == 'wait-confirm') {
	$subject = 'メールを送信しました。<br>予約はまだ完了しておりません。';
    $image = 'booking-not-success.png';
}
elseif($status == 'confirm') {
	$subject = '会員登録<br>スマートリノベカウンター予約<br>完了しました！';
    $image = 'booking-not-success.png';
}
else {
    $subject = 'スマートリノベカウンター<br>予約完了';
    $image = 'booking-success-1.png';
}

?>

<section class="section_breakcrum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="<?php echo $home_url; ?>">TOP</a></li>
                        <li class="breadcrumb-item active" aria-current="page">イベント申込完了</li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="service-lp booking-confirm">
    <div class="container">
        <div class="booking-success_box">
            <h2><?php echo $subject; ?></h2>
            <div class="booking-success_ct">
                <div class="img">
                    <img src="<?php echo COUNTER_IMAGE_PATH;?>/<?php echo $image; ?>" class="hide-mobile img-fluid" title="" alt="">
                    <img src="<?php echo COUNTER_IMAGE_PATH;?>/2x/<?php echo $image; ?>" class="hide-pc show-mobile img-fluid" title="" alt="">
                </div>
            </div>
        </div>
        <a href="<?php echo $home_url; ?>" class="btn btn-lp-turquoise" title="">ログリノベトップに戻る
            <i class="circle-arrow-right"></i>
        </a>
    </div>
</section>

<?php get_footer(); ?>
