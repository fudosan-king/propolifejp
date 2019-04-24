<?php 
    if($post->post_parent == 0){
        get_template_part( 'page-template/contact', 'main' );
    }else{
        get_template_part( 'page-template/contact', 'pers' );
    }
?>