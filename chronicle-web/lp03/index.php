<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php require 'header.php'; ?>

        <section class="section_banner section_banner_lp_works">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>クロニクルの「無垢材リノベーション」</h1>
                    </div>
                </div>
            </div>
        </section>

        <main>
            <section class="section_key section_key_lp_works">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                           <div class="box_gray">
                               <h2>製材から施工まで自社で行うことで高品質<small>※</small>の無垢材リノベーションを他社より㎡単価1万～2万円安く提供</h2>
                           </div>
                           <p class="note_materials">※第三者機関による無垢材のグレード評価1位、2位ランクの素材のみ使用</p>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="box_gray">
                               <h2>10年1500件超の無垢材施工実績でスムーズな施工、高品質の仕上がり、ストレスのない無垢材ライフを実現</h2>
                           </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_solidwood">
                <h2 class="title"><span class="red">リノベの詳細</span>と<span class="red">費用</span>が今すぐわかる！</h2>
                <div class="box_gallery">
                    <div class="carousel" data-flickity='{ "freeScroll": false, "wrapAround": true, "pageDots": false }'>
                        <div class="carousel-cell">
                            <img src="images/1x/slider/slide01.jpg" alt="" class="img-fluid">
                            <i class="i_tag tag_1"></i>
                            <i id="tag_2" class="i_tag tag_2"></i>
                            <i class="i_tag tag_3"></i>
                        </div>
                        <div class="carousel-cell">
                            <img src="images/1x/slider/slide02.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-cell">
                            <img src="images/1x/slider/slide03.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                 <?php require 'box_gallery_detail.php'; ?>

                <?php require 'box_room_detail.php'; ?>
                
            </section>

            <?php require 'section_consult.php'; ?>


        </main>

        <?php require 'footer.php'; ?>

    </div><!-- End page -->

    <?php require 'js-footer.php'; ?>
</body>

</html>