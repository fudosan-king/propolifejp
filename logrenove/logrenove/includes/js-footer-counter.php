<script src="<?php echo COUNTER_SCRIPT_PATH;?>/bootstrap.min.js" async></script>
<script src="<?php echo COUNTER_SCRIPT_PATH;?>/bootstrap-datepicker.min.js"></script>
<script src="<?php echo COUNTER_SCRIPT_PATH;?>/bootstrap-datepicker.ja.min.js"></script>
<?php 
    wp_enqueue_script( 'main-script', COUNTER_SCRIPT_PATH.'/functions.js');
    wp_enqueue_script( 'pardot-script', COUNTER_SCRIPT_PATH.'/pardot.js');
?>
