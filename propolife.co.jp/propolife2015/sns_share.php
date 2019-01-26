<?php global $tw_lang;
    $tw_text;
    if($tw_lang == 'ja'){ $tw_text = '「住」に自由とロマンを。総合不動産企業のプロポライフ';}
    else if($tw_lang == 'en'){ $tw_text = 'Bringing Freedom and Wonder to Residences PROPOLIFE'; }
    else if($tw_lang == 'zh-cn'){ $tw_text = '赋予“住宅”自由与浪漫。PROPOLIFE';}
?>
<div id="sns">
    <ul>
        <li class="tw"><a href="https://twitter.com/share" data-text="<?php echo $tw_text; ?>" class="twitter-share-button" data-url="https://www.propolife.co.jp/" data-lang="<?php echo $tw_lang; ?>" data-count="<?php if($tw_lang != 'ja'): ?>none<?php endif; ?>"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
        <li class="fb"><div class="fb-like" data-href="https://www.propolife.co.jp/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div></li>
    </ul>
</div>