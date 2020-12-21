<?php $popular_seminars = get_popular_seminar(); ?>

<h2 class="title"><span>人気セミナー <img src="<?=IMAGE_PATH;?>/i_lost.svg" alt="" class="img-fluid" width="60"></span></h2>
<div class="box_popular_seminar_body">
    <?php 
        if($popular_seminars):
        foreach ($popular_seminars as $key => $val):
    ?>
        <div class="box_popular_seminar_item">
            <h2><a href="<?=$val->permalink?>"><?=$val->title?></a></h2>
            <div class="row no-gutters">
                <div class="col-5 col-lg-5">
                    <div class="box_popular_seminar_item_img event_ranking">
                        <a href="<?=$val->permalink?>"><img src="<?=$val->thumbails_url?>" alt="" class="img-fluid"></a>
                        <span class="ranking-<?=$val->rank?>"><?=$val->rank?></span>
                    </div>
                </div>
                <div class="col-7 col-lg-7">
                    <div class="box_popular_seminar_item_body">
                        <p><?=$val->description?></p>
                        <ul>
                            <li><img src="<?=IMAGE_PATH;?>/i_date.svg" alt="" class="img-fluid" width="10"> <?=$val->date_rand.' '.$val->time_rand?>〜</li>
                            <li><img src="<?=IMAGE_PATH;?>/i_map.svg" alt="" class="img-fluid" width="10"> オンライン</li>
                        </ul>
                        <ul>
                            <?php
                                if(is_array($val->categories) && count($val->categories)) { 
                                foreach ($val->categories as $key => $cat) { 
                                $cat_link = get_category_link($cat);
                            ?>
                                <li><a href="<?=$cat_link?>"><?=$cat->name?></a></li>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;endif; ?>
</div>
