<?php $useful_contents = get_homepage_posts('useful_content'); ?>
<div class="box_usefulcontent">
    <h2>お役立ちコンテンツ</h2>
    <ul class="list_usefulcontent">
        <?php 
            if($useful_contents):
            foreach ($useful_contents as $key => $useful_content):
        ?>
                <li>
                    <div class="box_usefulcontent_item">
                        <div class="row no-gutters">
                            <div class="col-4 col-lg-4">
                                <div class="box_usefulcontent_item_img">
                                    <a href="<?php echo $useful_content->permalink; ?>"><img src="<?php echo $useful_content->thumbails_url; ?>" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-8 col-lg-8">
                                <div class="box_usefulcontent_item_content">
                                    <h3><a href="<?php echo $useful_content->permalink; ?>"><?php echo $useful_content->title; ?></a></h3>
                                    <ul>
                                        <?php 
                                            if(count($useful_content->categories)): 
                                            foreach ($useful_content->categories as $key => $cat): 
                                                $cat_link = get_category_link($cat);
                                        ?>
                                            <li><a href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></li>
                                        <?php endforeach;endif ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
        <?php endforeach;endif; ?>
    </ul>
    <a href="<?php echo site_url('basic'); ?>" class="btn btn_seeall mt-3">お役立ちコンテンツをすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="7"></a>
</div>
