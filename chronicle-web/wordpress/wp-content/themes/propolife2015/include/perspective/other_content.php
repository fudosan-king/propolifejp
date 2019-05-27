<?php 
    $other_content_image = get_field('other-content-image');
    $other_content_title = get_field('other-content-title');
    $other_content_description = get_field('other-content-description');
    $other_content_button = get_field('other-content-button');
?>
<div class="effect">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body" align="center">
                        <div align="center" style="margin-bottom:15px;"><img src="<?php echo $other_content_image['url']; ?>" height="68px" alt="<?php echo get_ogmeta('site_name'); ?>" class="img-responsive"></div>
                        <h3 align="center" style="margin-top:0px;margin-bottom:15px;"><?php echo $other_content_title; ?></h3> 
                        <p><?php echo $other_content_description; ?></p>
                        <br>
                        <br>

                        <?php if (!empty($other_content_button)&&count($other_content_button)>0): ?>
                            <div style="margin-top:30px;margin-bottom:15px">
                                <a href="<?php echo $other_content_button['url'] ?>" class="btn btn-success btn-lg btn-big" target="<?php echo $other_content_button['target'] ?>"><?php echo $other_content_button['title'] ?><i class="fa fa-chevron-circle-right" style="margin:0px 0px 0px 10px;color:#ffffff"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>