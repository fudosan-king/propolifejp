<!doctype html>
<html class="no-js" lang="ja">

<head>
    <?php 
        if(is_page( 'service' )){
            require 'includes/head2.php'; 
        }else{
            require 'includes/head.php'; 
        }
    ?>

    <?php wp_head(); ?>
    <?php do_action( 'header_extra_script'); ?>
    <style>
        .init-overload.active {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #fff;
            top: 0;
            z-index: 100;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'body_extra_script'); ?>
    <?php if(!is_preview()): ?>
        <div class="init-overload active"></div>
    <?php endif; ?>
    <div id="page" data-service="<?php echo is_page( 'service' ); ?>">
        <?php
            if(is_page( 'service' )){
                require 'includes/header2.php';
            }else{
                require 'includes/header.php';
            }
            
        ?>    
        <?php
            if(is_home()){
                get_template_part( 'template-parts/banner', 'default' );     
            }
        ?>