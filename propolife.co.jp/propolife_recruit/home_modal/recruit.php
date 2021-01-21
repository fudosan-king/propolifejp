<?php
require_once("../../../../wp-config.php");
$page_data = get_page_by_path('home_settings');
$page_id = $page_data->ID;
$modal_text = get_field('home_modal_text_recruit', $page_id);
?>
<div id="modal_data" class="recruit">
<p class="btn_recruit_new"><a href="/newgraduate/"><img src="/wordpress/wp-content/themes/propolife_recruit/common/images/home/btn_recruit_new_graduate.png" alt="新卒採用"></a></p>
<p class="btn_recruit_career"><a href="/career/"><img src="/wordpress/wp-content/themes/propolife_recruit/common/images/home/btn_recruit_career.png" alt="中途採用"></a></p>
<p class="modal_close"></p>
</div>