<?php
require_once("../../../../wp-config.php");
$page_data = get_page_by_path('home_settings');
$page_id = $page_data->ID;
$modal_text = get_field('home_modal_text_point', $page_id);
?>
<div id="modal_data" class="point">
<p class="desc"><?php echo $modal_text; ?></p>
<p class="btn_more"><a href="/point/"><img src="/wordpress/wp-content/themes/propolife_recruit/common/images/home/btn_modal_more.png" alt="MORE"></a></p>
<p class="modal_close"></p>
</div>