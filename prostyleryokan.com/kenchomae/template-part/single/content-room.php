<!-- <div class="main_content">
    <?php 
        // if(have_posts()):
        //     while(have_posts()): the_post();
        //         the_content();
        //     endwhile;
        // endif;
    ?>
</div> -->

<?php 
    $thumbnail = _getPostThumbnail($post->ID);
    $data = ACFRoomsCPTFields::_data($post->ID);
    $boxContent = ACFRoomsCPTFields::_boxContent($post->ID);

    $gallery = $data->gallery;

    function _generateLRBoxContent($repeater, $class=''){
        $html = '';
        if(_isNotNull($repeater)){
            foreach($repeater as $i => $obj){
                $html .= '
                <dt class="col-4 col-sm-4 col-md-4">'.$obj->title.'</dt>
                <dd class="col-8 col-sm-8 col-md-8"><p class="box_detail_content">'.$obj->value.'</p></dd>';
            }
        }

        return '
        <div class="col-12 col-sm-6">
            <dl class="row '.$class.'">
            '.$html.'
            </dl>
        </div>';
    }

    function _generateFBoxContent($repeater){
        $html = '';
        if(_isNotNull($repeater)){
            foreach($repeater as $i => $obj){
                $html .= '
                <dl class="row">
                    <dt class="col-12 border-bottom-0 pb-0">'.$obj->title.'</dt>
                    <dd class="col-12">'.$obj->value.'</dd>
                </dl>';
            }
        }

        return '
         <div class="col-12">
            '.$html.'
        </div>';
    }

    function _display_box_content($boxContent){
        $html = '';
        $lcontentRepeater = $boxContent->lcontent_repeater;
        $rcontentRepeater = $boxContent->rcontent_repeater;
        $contentRepeater = $boxContent->content_repeater;

        if (_isNotNull($boxContent)){
            $html = sprintf('
            <div class="detail_suiteSpecification">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2">
                            <div class="box_detail_suiteSpecification">
                                <div class="row">
                                %s
                                %s
                                %s
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>', _generateLRBoxContent($lcontentRepeater, 'mr-0'), _generateLRBoxContent($rcontentRepeater), _generateFBoxContent($contentRepeater));
        }
        return $html;
    }

    function _generateGallerySlider($gallery){
        $html = '';
        if(_isNotNull($gallery)){
            $html .= ' <div class="carousel carousel-main" data-flickity=\'{ "pageDots": false, "prevNextButtons": false }\'>';
            foreach($gallery as $i => $obj){
                $html .= '
                <div class="carousel-cell">
                    <a href="'.$obj->url.'" data-fancybox="images"><img src="'.$obj->url.'" alt="" class="img-fluid"></a>
                </div>';
            }
            $html .= '</div>';
        }

        return $html;
    }
    function _generateGalleryNavSlider($gallery){
        $html = '';
        if(_isNotNull($gallery)){
            $html .= '<div class="carousel carousel-nav"
                        data-flickity=\'{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }\'>';
            foreach($gallery as $i => $obj){
                $html .= '
                <div class="carousel-cell">
                    <img src="'.$obj->url.'" alt="" class="img-fluid">
                </div>';
            }
            $html .= '</div>';
        }

        return $html;
    }
?>

<section class="section_room_detail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper_room">
                    <div class="box_label">
                        <h3><?=the_title();?></h3>
                    </div>
                    <?php 
                        if(_isNotNull($data->gallery)){
                            _echo(_generateGallerySlider($gallery));
                            _echo(_generateGalleryNavSlider($gallery));
                        }else{
                            ?>
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="background-image:url('<?php echo $thumbnail->url; ?>')"></div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
    <div class="head_suiteSpecification">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p><?=$data->introduction;?></p>
                </div>
            </div>
        </div>
    </div>
    <?php _echo(_display_box_content($boxContent)); ?>
</section>