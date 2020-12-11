<?php $events = get_homepage_posts('homepage_events'); ?>
<div class="row mb-2">
    <div class="col-12 col-lg-7">
        <h2>リノベーションセミナー・イベント</h2>
    </div>
    <div class="col-12 col-lg-5">
        <a href="<?php echo site_url('events'); ?>" class="btn btn_seeall d-none d-lg-block">セミナー・イベントをすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
    </div>
</div>
<?php 
    if($events):
    foreach ($events as $key => $event):
?>
<div class="seminar_event_item">
    <div class="row no-gutters">
        <div class="col-4 col-lg-4">
            <div class="seminar_event_item_img">
                <a href="<?php echo $event->permalink; ?>"><img data-src="<?php echo $event->thumbails_url; ?>" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-8 col-lg-8">
            <div class="seminar_event_item_content flex-column-reverse">
                <ul>
                    <?php 
                        if(count($event->categories)): 
                        foreach ($event->categories as $key => $cat): 
                            $cat_link = get_category_link($cat);
                    ?>
                        <li><a href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></li>
                    <?php endforeach;endif ?>
                </ul>
                <h3><a href="<?php echo $event->permalink; ?>"><?php echo $event->title; ?></a></h3>
                <p class="d-none d-lg-block"><?php echo limit_event_content($event->description, 180); ?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach;endif; ?>
<a href="<?php echo site_url('events'); ?>" class="btn btn_seeall d-block d-lg-none">セミナー・イベントをすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
