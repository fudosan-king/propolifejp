<h2><img src="<?=IMAGE_PATH;?>/i_flag.svg" alt="" class="img-fluid" width="20"> イベント内容を選ぶ</h2>
<ul>
    <?php
    $categories = get_event_terms('event_category');
    $current_term = get_queried_object();
    $d = isset($_GET['d'])?$_GET['d']:'';
    foreach ($categories as $key => $cat) {
        if($cat->count > 0) {
        $cat_link = get_tag_link( $cat->term_id );
?>
    <li <?php echo ($current_term->term_id == $cat->term_id)?'class="active"':''; ?>><a href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></li>
<?php }} ?>
    <li <?php echo (is_term($current_term->term_id) == NULL)?'class="active"':''; ?> ><a href="<?php echo esc_url(network_site_url('events'));?>">すべて</a></li>
</ul>
<h2><img src="<?=IMAGE_PATH;?>/i_cam.svg" alt="" class="img-fluid" width="24"> セミナー形式を選ぶ</h2>
<ul>
    <?php
        $tags = get_event_terms('event_tags');
        foreach ($tags as $key => $cat) {
            if($cat->count > 0) {
            $cat_link = get_tag_link( $cat->term_id );
    ?>
        <li <?php echo ($current_term->term_id == $cat->term_id)?'class="active"':''; ?>><a href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></li>
    <?php }} ?>
        <li <?php echo (is_term($current_term->term_id) == NULL)?'class="active"':''; ?> ><a href="<?php echo esc_url(network_site_url('events'));?>">すべて</a></li>
</ul>
<h2><img src="<?=IMAGE_PATH;?>/i_date.svg" alt="" class="img-fluid" width="20"> 開催スケジュールを選ぶ</h2>
<ul>
    <li <?php echo $d=='sat' ?'class="active"':''?>><a href="?d=sat">土曜日</a></li>
    <li <?php echo $d=='sun' ?'class="active"':''?>><a href="?d=sun">日曜日</a></li>
    <li <?php echo $d=='week' ?'class="active"':''?>><a href="?d=week">平日</a></li>
    <li <?php echo empty($d)?'class="active"':''?>><a href="<?php echo esc_url(network_site_url('events'));?>">すべて</a></li>
</ul>
