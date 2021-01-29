<input type="hidden" name="term_id" value="<?=get_queried_object()->term_id?>">
<input type="hidden" name="taxonomy" value="<?=get_query_var('taxonomy')?>">
<input type="hidden" name="d" value="<?=isset($_GET['d'])?htmlspecialchars($_GET['d']):''?>">
<?php $event_lists = get_event_date_list();
foreach ($event_lists as $date => $event_list):
    $date_format = date_i18n('Fj日 (D)', strtotime($date));
?>
    <div class="event-lists" data-date="<?=$date?>">
        <h2><?=$date_format?></h2>
        <?php foreach ($event_list as $key => $event) : ?>
        <div class="box_list_services_item">
            <div class="row no-gutters">
                <div class="col-12 col-lg-12">
                    <h3 class="d-block d-lg-none"><a href="<?=$event->permalink?>"><?=$event->title?></a></h3>
                </div>
                <div class="col-4 col-lg-4 align-self-center">
                    <div class="box_list_services_item_img">
                        <a href="<?=$event->permalink?>"><img src="<?=$event->thumbails_url?>" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 align-self-center">
                    <div class="box_list_services_item_body">
                        <h3 class="d-none d-lg-block"><a href="<?=$event->permalink?>"><?=$event->title?></a></h3>
                        <p><?=$event->description?></p>
                        <ul>
                            <li><img src="<?=IMAGE_PATH;?>/i_date.svg" alt="" class="img-fluid" width="10"> <?=$date_format.' '.$event->time_rand?>〜</li>
                            <li><img src="<?=IMAGE_PATH;?>/i_map.svg" alt="" class="img-fluid" width="10"> オンライン</li>
                        </ul>
                        <ul>
                            <?php
                                if(is_array($event->categories) && count($event->categories)) { 
                                foreach ($event->categories as $key => $cat) { 
                                $cat_link = get_category_link($cat);
                            ?>
                                <li><a href="<?=$cat_link?>"><?=$cat->name?></a></li>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>
    </div>
<?php endforeach; ?>
<p class="text-center"><a href="#" class="btn btn_more">もっと見る <i class="fas fa-chevron-down"></i></a></p>
