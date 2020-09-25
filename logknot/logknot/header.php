<!doctype html>
<html class="no-js">

<head>
    <?php 
        require 'includes/head.php'; 
    ?>
    <?php wp_head(); ?>
    <?php do_action( 'header_extra_script'); ?>
 
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'body_extra_script'); ?>

    <div id="page" >
        <?php
        if(is_home() || is_front_page() )
            require 'includes/header.php';
        else
            require 'includes/header-page.php';

        ?>    
     