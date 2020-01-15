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
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $data->map->lat; ?>" data-lng="<?php echo $data->map->lng; ?>">
                            <p class="address"><?php echo $data->map->address; ?></p>
                        </div>
                    </div>
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