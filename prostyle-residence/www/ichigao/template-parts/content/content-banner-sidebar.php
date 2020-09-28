<div class="col-12 col-lg-4">
    <div class="block_banner d-none d-lg-block">
        <?php $banners = get_banner_data(); if ($banners) : foreach ($banners as $data) :?>
            <div class="block_banner_item d-none d-lg-block">
                <a href="<?php echo $data['link'] ?>"><img src="<?php echo $data['image']['url'] ?>" alt="" class="img-fluid"></a>
            </div>
        <?php endforeach; endif; ?>
    </div>
</div>