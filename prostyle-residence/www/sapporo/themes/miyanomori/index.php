<?php 

get_header(); 

if ( is_user_logged_in()) :

    get_template_part( 'template/home-page'); 

else:

    get_template_part( 'template/login'); 
    
endif; 

get_footer(); 

?>