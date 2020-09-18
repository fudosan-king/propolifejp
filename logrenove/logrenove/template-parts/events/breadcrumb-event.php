<?php 
global $detect;
$current_term = get_queried_object(); 
$event_href = (is_single()||is_term($current_term->term_id) != NULL)?esc_url(network_site_url('events')):'#';
$event_active = (!is_single()&&is_term($current_term->term_id) == NULL)?'active':'';
$item_title = '';
if(is_single()) $item_title = the_title('', '', false);
elseif($current_term->term_id) $item_title = $current_term->name;
$item_title = $detect->isMobile()?wp_trim_words($item_title, 15, '...'):$item_title;
?>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">TOP</a></li>
	    <li class="breadcrumb-item <?php echo $event_active;?>" aria-current="page"><a href="<?php echo $event_href; ?>">イベント</a></li>
	    <?php if(is_single() || is_term($current_term->term_id) != NULL) { ?>
	    	<li class="breadcrumb-item active" aria-current="page"><?php echo $item_title; ?></li>
		<?php } ?>
  	</ol>
</nav>
