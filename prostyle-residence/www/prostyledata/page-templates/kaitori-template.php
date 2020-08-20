<?php 
/* Template Name: Kaitori - Page Template */
?>

<?php get_header(); ?>

<?php 

if (have_posts()):
    while (have_posts()): the_post();
?>

<section class="banner"></section>          

<main>
    <section class="bg_common">&nbsp;</section>
    <section style="padding-bottom: 50px; background-color: #FFF;">
        <div><img style="width: 100%;" src="<?php echo SGVinK::get_images_uri()."/tmp/img_01.png"; ?>" alt=""></div>
        <div><img style="width: 100%;" src="<?php echo SGVinK::get_images_uri()."/tmp/img_02.png"; ?>" alt=""></div>
        <div><img style="width: 100%;" src="<?php echo SGVinK::get_images_uri()."/tmp/img_03.png"; ?>" alt=""></div>
        <div><img style="width: 100%;" src="<?php echo SGVinK::get_images_uri()."/tmp/img_04.png"; ?>" alt=""></div>
        
        <div align="center">
            <p style="font-size:12px;">こちらからPDFでダウンロードして頂けます。</p>
            <article class="docItem">
                <a href="https://www.prostyle-residence.com/wp-content/uploads/2019/02/★プロスタイル買取物件募集★.pdf"><img src="https://www.prostyle-residence.com/wp-content/themes/prostyledata/assets/images/ext/file_pdf.png" alt=""></a><br><br>
                <div class="title">★プロスタイル買取物件募集★.pdf</div>
            </article>
        </div>
        

    </section>
    <section class="bg_common">&nbsp;</section>

</main>

<?php 
        
    endwhile;
endif;

?>

<?php get_footer(); ?>