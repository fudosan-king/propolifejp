<?php 
/* Template Name: PDF Viewer - Page Template */
?>

<?php 
    $PDFUrl = '';
    switch (get_field('pdf_type')) {
        case 'upload': {
            if (!empty(get_field('pdf_file'))){
                $PDFUrl = get_field('pdf_file')['url'];
            }
        }break;
        
        default:
            if (!empty(get_field('pdf_link'))){
                $PDFUrl = get_field('pdf_link');
            }
            break;
    }
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
</head>
<body>
    <script>
        PDFObject.embed("<?php //echo $PDFUrl; ?>");
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Content HERE without title tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="152x152" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="<?php SGVinK::the_assets_uri(); ?>/favicon_package_v0.16/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo wp_get_document_title(); ?></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.8/SmoothScroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
    
</head>
<body>
    <?php do_action( 'wp_body' ); ?>
        
        <script>PDFObject.embed("<?php echo $PDFUrl; ?>");</script>

    <?php wp_footer(); ?>
</body>
</html>
