<?php 
    $estate_part_title = get_field('estate-part-title');
    $estate_part_subtitle = get_field('estate-part-subtitle');
    $estate_part_description = get_field('estate-part-description');
    $estate_part_button = get_field('estate-part-button');
    $estate_part_note = get_field('estate-part-note');
?>
<div class="effect">
    <div class="parttern">
        <div class="container" align="center">
                        <h3 align="center"><?php echo $estate_part_title; ?></h3>
            <h4><?php echo $estate_part_subtitle; ?></h4>
            <h3 align="center" style="margin-top: 0px;"><?php echo $estate_part_description; ?></h3>
            <div class="row">

                <?php 
                    if(have_rows('estate_gallery')){
                        while(have_rows('estate_gallery')){
                            the_row();
                            $image = get_sub_field('image');
                            $imgUrl = $image['url'];
                            ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="thumbnail interior" align="center">
                                    <a href="<?php echo $image['url']; ?>" class="fancybox-buttons centerIn loaded" data-fancybox-group="button">
                                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-responsive resize wp-post-image" alt="" onload="imgLoaded(this)" srcset="<?php echo $image['sizes']['medium']; ?>" "="">
                                    </a>
                                </div>
                            </div>
                                
                            <?php
                        }
                    }
                    
                ?>

                <div class="clearfix"></div>
                
                <?php if (!empty($estate_part_button)&&count($estate_part_button)>0): ?>
                    <div align="center" style="margin-top:30px;"><a href="<?php echo $estate_part_button['url'] ?>" class="btn btn-success btn-lg btn-big" target="<?php echo $estate_part_button['target'] ?>"><?php echo $estate_part_button['title'] ?><i class="fa fa-chevron-circle-right" style="margin:0px 0px 0px 10px;color:#ffffff"></i></a></div>
                <?php endif; ?>
                <div class="col-md-12" align="center"><h3 align="center"><?php echo $estate_part_note; ?></h3></div>

            </div>
        </div>
    </div>
</div>