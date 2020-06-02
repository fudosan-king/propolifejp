
<?php 
$page_info = get_page_by_path('general-addition-info');
$header_info = get_field('header', $page_info);

$header_link = !empty($header_info['header_link']) ? $header_info['header_link']['url'] : '/' ;
$header_link_target = !empty($header_info['header_link']) ? $header_info['header_link']['target'] : '' ;

$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

$noticeContent = '';
switch($currentLanguage){
    case 'en':{
        $noticeContent = '<p>[Notice of business resumption]</p>
            <p>PROSTYLE Ryokan Yokohama Bashamichi is affected by the new coronavirus<br>
            It was closed from April 1st, but it will be restarted from June 1st.<br>
            <br>
            Upon restarting business, we will continue to thoroughly implement infection prevention measures so that customers can use our products more safely and securely.</p>';
    }break;
    case 'zh':{
        $noticeContent = '<p>【恢复正常营业的通知】</p>
            <p>PROSTYLE旅馆横滨马车道店于6月1日开始正式恢复营业。<br>
            为保证顾客的安全与健康，我们将继续采取措施防止感染。<br>
            <br>
            期待您的光临。</p>';
    }break;
    case 'tw':{
        $noticeContent = '<p>【恢複正常營業的通知】</p>
            <p>PROSTYLE旅館橫濱馬車道店於6月1日開始正式恢複營業。<br>
            為保證顧客的安全與健康，我們將繼續采取措施防止感染。<br>
            <br>
            期待您的光臨。</p>';
    }break;
    default:{
        $noticeContent = '<p>【営業再開のお知らせ】</p>
            <p>PROSTYLE旅館横浜馬車道は、新型コロナウイルスの影響により<br>
            4月1日より休館とさせて頂いておりましたが、この度6月1日より営業再開とさせて頂きます。<br>
            <br>
            営業再開にあたり、お客様にはより安全・安心にご利用頂く為、引き続き感染防止策を徹底してまいります。</p';
    }
}

if (have_posts()):
    while(have_posts()): the_post();
        $featuredImageUrl = wp_get_attachment_image_url( get_post_thumbnail_id( $post ), $size = 'full');
    ?>

    <div class="jarallax bg_top">
        <img class="jarallax-img bg-scale" src="<?php echo $featuredImageUrl; ?>" alt="">
    </div>
    
    <a href="<?php echo $header_link; ?>" class="logo" target="<?php echo $header_link_target; ?>"><img src="<?php echo $header_info['header_logo']['url']; ?>" alt="" class="img-fluid" width="150"></a>

    <div class="w_site_content">
        <?php the_content(); ?>
        <div class="box_notice">
            <?php echo $noticeContent; ?>
        </div>
    </div><!-- w_site_content -->

    <div id="scroll_down">
        <div class="vertical_elem">
            <div class="line white only vertical t_b hidden scroll_loop"></div>
            <div class="start_square has_transition_600"></div>
        </div>
    </div>

    <?php
    endwhile;
endif;
?>
