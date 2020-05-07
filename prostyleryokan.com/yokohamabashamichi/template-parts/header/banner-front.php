
<?php 
$page_info = get_page_by_path('general-addition-info');
$header_info = get_field('header', $page_info);

$header_link = !empty($header_info['header_link']) ? $header_info['header_link']['url'] : '/' ;
$header_link_target = !empty($header_info['header_link']) ? $header_info['header_link']['target'] : '' ;

$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

$noticeContent = '';
switch($currentLanguage){
    case 'en':{
        $noticeContent = '<p>[Notice of closed extension due to emergency declaration]</p>
            <p>Thank you for using PROSTYLE Ryokan Yokohama Bashamichi.<br>
            It was closed from Thursday, April 9th due to the declaration of emergency due to the spread of infectious disease of the new coronavirus, but due to the extension of the emergency declaration this time, it will be extended during the following period It became a thing.<br>
            <span class="darkred">Closed extension period: May 7 (Thursday) to May 31 (Sunday).</span><br>
            * The closing period may change depending on the future situation.<br>
            ● During the above period, the meat restaurant "Kotakino Yokohama Bashamichi Store" will also be closed.</p>
            <p class="mb-0">Inquiries regarding reservations and cancellations Other inquiries regarding the hotel.<br>
            Contact: <a href="mailto:reservation@prostyleryokan.com">reservation@prostyleryokan.com</a></p>';
    }break;
    case 'zh':{
        $noticeContent = '<p>【停业期间延长通知】</p>
            <p>感谢您对PROSTYLE Ryokan Yokohama Bashamichi的支持。<br>
            由于紧急事态宣言期间的延长，我们的停业时间也将与紧急事态宣言期间同步。<br>
            为了防止新冠病毒的进一步扩散，我们将在以下期间延长停业时间。<br>
            <span class="darkred">停业时间：2020/5/7（星期四）～2020/5/31（星期日）</span><br>
            ※根据国家规定停业时间可能发生变动。<br>
            「小泷野 横滨马车道店」也将在这一期间停业。</p>
            <p class="mb-0">如果您对酒店预定，取消有任何疑问，请联系我们。<br>
            联系方式：<a href="mailto:reservation@prostyleryokan.com">reservation@prostyleryokan.com</a></p>';
    }break;
    case 'tw':{
        $noticeContent = '<p>【停業期間延長通知】</p>
            <p>感謝您對PROSTYLE Ryokan Yokohama Bashamichi的支持。<br>
            由於緊急事態宣言期間的延長，我們的停業時間也將與緊急事態宣言期間同步。<br>
            為了防止新冠病毒的進一步擴散，我們將在以下期間延長停業時間。<br>
            <span class="darkred">停業時間：2020/5/7（星期四）～2020/5/31（星期日）</span><br>
            ※根據國家規定停業時間可能發生變動。<br>
            「小瀧野 橫濱馬車道店」也將在這一期間停業。</p>
            <p class="mb-0">如果您對酒店預定，取消有任何疑問，請聯係我們。<br>
            聯係方式：<a href="mailto:reservation@prostyleryokan.com">reservation@prostyleryokan.com</a></p>';
    }break;
    default:{
        $noticeContent = '<p>【緊急事態宣言延長による休館延長のお知らせ】</p>
            <p>平素よりPROSTYLE旅館 横浜馬車道をご利用頂き、誠にありがとうございます。<br>
            新型コロナウイルスの感染症拡大による緊急事態宣言に伴い、4月9日(木)より休館しておりましたが、この度の緊急事態宣言延長に合わせ、下記の期間にて休館延長とさせて頂く事となりました。<br>
            <span class="darkred">休館延長期間：令和2年5月7日（木) ～ 5月31日（日）</span><br>
            ※休館期間につきましては、今後の状況等に応じて変更となる場合が御座います。<br>
            ●上記期間中、肉庵「小滝野 横浜馬車道店」も休業延長とさせていただきます。</p>
            <p class="mb-0">ご予約、キャンセルに関するお問い合わせその他当館に関するお問い合わせ <br>
            お問い合わせ先: <a href="mailto:reservation@prostyleryokan.com">reservation@prostyleryokan.com</a>
            </p>';
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
