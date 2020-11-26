<section class="banner-bottom">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center mb-3">
            <?php 
                $footer_banner = get_footer_banner();
                $left_url = $footer_banner['left_url'];
                $left_banner = $footer_banner['left_banner'];
                $right_url = $footer_banner['right_url'];
                $right_banner = $footer_banner['right_banner'];
                if(!empty($left_banner) && count($left_banner) > 0 && !empty($left_url) && count($left_url) > 0 ){

                    ?>
                        <a href="<?php echo $left_url['url'] ?>" target="<?php echo $left_url['target'] ?>" id="bottomrec_left">
                            <img data-src="<?php echo $left_banner['url']; ?>" class="img-fluid" alt="Responsive image">
                        </a>
                    <?php
                }
            ?>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
            <?php 
                if(!empty($right_banner) && count($right_banner) > 0 && !empty($right_url) && count($right_url) > 0){
                    ?>
                        <a href="<?php echo $right_url['url'] ?>" target="<?php echo $right_url['target'] ?>" id="bottomrec_right">
                            <img data-src="<?php echo $right_banner['url']; ?>" class="img-fluid" alt="Responsive image">
                        </a>
                    <?php
                }
            ?>
        </div>
    </div>
</section>