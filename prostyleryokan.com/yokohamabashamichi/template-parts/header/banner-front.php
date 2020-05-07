
<?php 
$page_info = get_page_by_path('general-addition-info');
$header_info = get_field('header', $page_info);

$header_link = !empty($header_info['header_link']) ? $header_info['header_link']['url'] : '/' ;
$header_link_target = !empty($header_info['header_link']) ? $header_info['header_link']['target'] : '' ;

$currentLanguage = function_exists('qtranxf_getLanguage') ? qtranxf_getLanguage() : '';

$noticeContent = '';
switch($currentLanguage){
    case 'en':{
        $noticeContent = '<p>[Notice of temporary closure due to emergency declaration]</p>
            <p>Thank you for using PROSTYLE Ryokan Yokohama Bashamichi.<br>
            With the declaration of an emergency due to the spread of the new coronavirus infectious disease,
            we will be closed temporarily during the following period.<br>
            <span class="darkred">Closure duration: From Thursday, April 9 to Wednesday, May 6, 2020.</span><br>
            * The duration may be changed depending on future conditions.<br>
            ● Nikuan “Kotakino Yokohama Bashamichi” restaurant will also be closed temporarily during the above period.</p>
            <p class="mb-0">We apologize for any inconvenience or inconvenience, thank you for your understanding.</p>';
    }break;
    case 'zh':{
        $noticeContent = '<p>【关于紧急事态宣言期间停业的通知】</p>
            <p>感谢您利用PROSTYLE Ryokan Yokohama Bashamichi。<br>
            在日本政府宣布紧急事态之后，为了防止新冠病毒的进一步扩散，我们将在以下期间临时停业。<br>
            <span class="darkred">停业时间：2020/4/9（星期四）～2020/5/6（星期三）</span><br>
            ※根据国家规定停业时间可能发生变动。<br>
            「小泷野 横濱馬車道店」也将在这一期间停业。</p>
            <p class="mb-0">对于给您带来的不便，我们深表歉意，请您谅解。</p>';
    }break;
    case 'tw':{
        $noticeContent = '<p>【關於緊急事態宣言期間停業的通知】</p>
            <p>感謝您利用PROSTYLE Ryokan Yokohama Bashamichi。<br>
            在日本政府宣布緊急事態之後，為了防止新冠病毒的進一步擴散，我們將在以下期間臨時停業。<br>
            <span class="darkred">停業時間：2020/4/9（星期四）～2020/5/6（星期三）</span><br>
            ※根據國家規定停業時間可能發生變動。<br>
            「小瀧野 横濱馬車道店」也將在這一期間停業。</p>
            <p class="mb-0">對於給您帶來的不便，我們深表歉意，請您諒解。</p>';
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
