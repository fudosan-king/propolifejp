<?php 
    $data = ACFHomeFields::_sectionAccess();

    function _display_location_data($data){
        $html = '';
        if(_isNotNull($data->location_repeater)){
            foreach($data->location_repeater as $i => $row){

                $classOrder1 = $row->reverse_on_mobile == 'no' ? '' : 'order-2 order-md-1';
                $classOrder2 = $row->reverse_on_mobile == 'no' ? '' : 'order-1 order-md-2';

                $html .= sprintf('
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 %s">
                            <h4>%s</h4>
                            %s
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 %s">
                            <h4>%s</h4>
                            %s
                        </div>
                    </div>', $classOrder1, $row->ltitle, $row->lcontent, $classOrder2, $row->rtitle, $row->rcontent);             
            }
        }
        echo $html;
    }
?>
<section id="section_access" class="section_access mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><?php _echo($data->title); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="box_img_photo" style="background-image: url('<?=$data->background_image->url?>')">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="map_frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3239.479334173804!2d139.7986798!3d35.7144283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ec39c4e00ff%3A0x68af1801cc7b1092!2z5pel5pys44CB44CSMTExLTAwMzMg5p2x5Lqs6YO95Y-w5p2x5Yy66Iqx5bed5oi477yS5LiB55uu77yR77yS4oiS77yR77yR!5e0!3m2!1sja!2s!4v1594349258939!5m2!1sja!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <!-- <div class="acf-map">
                        <div class="marker" data-lat="<?php //echo $data->map->lat; ?>" data-lng="<?php //echo $data->map->lng; ?>">
                            <p class="address"><?php //echo $data->map->address; ?></p>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php if(_isNotNull($data->btn_map)) ?>
                <a class="btnMap" href="<?=$data->btn_map->url?>" target="<?=$data->btn_map->target?>"><?=$data->btn_map->title?></a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php if(_isNotNull($data->btn_direction)) ?>
                <a class="btnMap" href="<?=$data->btn_direction->url?>" target="<?=$data->btn_direction->target?>"><?=$data->btn_direction->title?></a>
            </div>
        </div>

        <?php _echo(_display_location_data($data)); ?>
    </div>
</section>