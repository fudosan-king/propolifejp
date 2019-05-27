<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php if (get_post_type() == 'page' && get_post_status() != 'publish'){
    echo '<meta http-equiv="refresh" content="0;url=/" />';
    exit;
}?>

<link rel="apple-touch-icon" sizes="152x152" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800,900&amp;subset=japanese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;subset=japanese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&amp;subset=cyrillic,japanese" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/tablesaw.stackonly.css">
<link rel="stylesheet" href="<?php SGVinK::the_css_uri(); ?>/bsnav.min.css">

<!-- <link rel="stylesheet" href="<?php //SGVinK::the_css_uri(); ?>/styles.css" type="text/css">
<link rel="stylesheet" href="<?php //SGVinK::the_css_uri(); ?>/mobile.css" type="text/css"> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.9/SmoothScroll.min.js"></script>


<?php 
if(is_page( 'contact' ) || is_page( 'contact-purchase' ) || is_page( 'sell' )):
	?>
		<link rel="stylesheet" href="<?php SGVinK::the_css_uri(); ?>/contact/styles.css" type="text/css">
    	<link rel="stylesheet" href="<?php SGVinK::the_css_uri(); ?>/contact/mobile.css" type="text/css">

		<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<?php
endif;
?>