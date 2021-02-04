<?php $construction_examples = get_homepage_posts('construction_example'); ?>
<div class="row">
    <div class="col-12 col-lg-6">
        <h2>施工事例</h2>
    </div>
    <div class="col-12 col-lg-6">
        <a href="<?php echo site_url('work'); ?>" class="btn btn_seeall d-none d-lg-block">施工事例をすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
    </div>
</div>
<ul class="list_construction d-lg-flex d-none">
    <?php 
        if($construction_examples):
        foreach ($construction_examples as $key => $construction_example):
    ?>
        <li>
            <div class="construction_item">
                <a href="<?php echo $construction_example->permalink; ?>">
                    <div class="construction_item_img">
                        <img src="<?php echo $construction_example->thumbails_url; ?>" alt="" class="img-fluid">
                    </div>
                    <h3><span><?php echo $construction_example->title; ?></span></h3>
                </a>
            </div>
        </li>
    <?php endforeach;endif; ?>
</ul>

<div class="carousel d-block d-lg-none"
  data-flickity='{ "wrapAround": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false, "autoPlay": 3000 }'>
    <?php 
        if($construction_examples):
        foreach ($construction_examples as $key => $construction_example):
    ?>
        <div class="carousel-cell">
          <div class="construction_item">
                <a href="<?php echo $construction_example->permalink; ?>">
                    <div class="construction_item_img">
                        <img src="<?php echo $construction_example->thumbails_url; ?>" alt="" class="img-fluid">
                    </div>
                    <h3><span><?php echo $construction_example->title; ?>!?</span></h3>
                </a>
            </div>
        </div>
    <?php endforeach;endif; ?>
</div>
<a href="<?php echo site_url('work'); ?>" class="btn btn_seeall d-block d-lg-none">施工事例をすべて見る <img src="<?php echo IMAGE_PATH; ?>/i_brown_right.svg" alt="" class="img-fluid" width="5"></a>
