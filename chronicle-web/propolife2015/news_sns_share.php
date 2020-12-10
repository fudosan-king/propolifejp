<?php global $temp_dir, $dir_category, $post_title, $current_lang, $current_page_url;
    $site_title;
    if($current_lang == 'ja'){ $site_title = '「住」に自由とロマンを。総合不動産企業のプロポライフ';}
    else if($current_lang == 'en'){ $site_title = 'Bringing Freedom and Wonder to Residences PROPOLIFE'; }
    else if($current_lang == 'zh-cn'){ $site_title = '赋予“住宅”自由与浪漫。PROPOLIFE';}
    $title = $post_title . ' | ' . $site_title;
?>
<div class="sns">
    <div class="sns_inner">
        <a href="http://twitter.com/share?url=<?php echo $current_page_url; ?>&text=<?php echo urlencode($title); ?>" target="_blank"><img src="<?php echo $temp_dir; ?>/common/images/parts_ico_sns_tw.png" width="30" height="30" alt="Twitter"></a><a href="http://www.facebook.com/share.php?u=<?php echo $current_page_url; ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><img src="<?php echo $temp_dir; ?>/common/images/parts_ico_sns_fb.png" width="30" height="30" alt="Facebook"></a>
    </div>
</div>