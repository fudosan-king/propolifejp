<!doctype html>
<html class="no-js">

<head>
    <?php require 'includes/head-counter.php'; ?>

    <?php wp_head(); ?>
    <?php do_action( 'header_extra_script'); ?>
</head>

<body class="body-service-lp">
    <?php do_action( 'body_extra_script'); ?>
    	<?php 
    	if(is_page('counter')) {
    		require 'includes/header-counter.php'; 
    	} else {
    		require 'includes/header.php'; 
    	}
    ?>