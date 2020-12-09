<div align="center" class="sildermain">

    <div id="sliderContainer" style="position: relative; width:2000px;height:950px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"></div>
            <div style="position: absolute; display: block; background: url(https://www.propolifevietnam.com/wp-content/themes/themes/images/controls/ajax-loader.gif) no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;"></div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:2000px;height:950px;overflow: hidden;">
            <?php
            $listtext = array(
                0=>"「住み方」を施工する",
                1=>"We always make design and construct<br>comfortable residence",
                2=>"Design",
                3=>"Interior",
                4=>"Facade",
                5=>"プレゼンに説得力を。",
                // 6=>"We always make design and construct"
            );
            ?>

            <?php 
                if(have_rows('banner_gallery')){
                    while(have_rows('banner_gallery')){
                        the_row();
                        $image = get_sub_field('image');
                        $imgUrl = $image['url'];
                        $random_effect = mt_rand(0,3);
                        ?>
                            <div style="background: url(<?php echo $imgUrl; ?>)">
                                <img u="image" src="<?php echo $imgUrl;?>" />
                                <?php 

                                    switch ($random_effect) {
                                        case 0:
                                            echo '<div u="caption" t="RTTS|T" d=-300 t2="B" class="textBig" style="left:150px; top: 365px;">
                            <span class="title-slide">'.$listtext[5].'</span>
                        </div>
                        <div u="caption" t="T|IB" t2="T" d=-300 class="captionOrange"  style="position:absolute; left:190px; top:275px;">'.$listtext[2].'</div>
                        <div u="caption" t="T|IB" t2=L d=-900 class="captionBlack"  style="position:absolute; left:355px; top:275px;">'.$listtext[3].'</div>
                        <div u="caption" t="LISTH|R" t2="CLIP|TB" d=-600 class="captionOrange" style="position: absolute; top:275px; left:525px;text-align: left;">'.$listtext[4].'</div>';
                                            break;
                                        case 1:
                                            echo ' <div u="caption" t="CLIP|LR" du="1500" class="textBig" style="left:24%; top:425px;">
                            <span class="title-slide">'.$listtext[5].'</span>
                        </div>
                        <div u="caption" t="MCLIP|T" t2="T" class="captionOrange" d=-450 style="left:520px;top:335px;">'.$listtext[2].'</div>
                        <div u="caption" t="MCLIP|R" d=-300 class="captionOrange" style="left:685px;top:335px;">'.$listtext[3].'</div>
                        <div u="caption" t="MCLIP|R" d=-300 class="captionOrange" style="left:855px;top:335px;">'.$listtext[4].'</div>';
                                            break;
                                        case 2:
                                            echo ' <div u="caption" t="T" t2="NO" class="textBig" style="left:150px; top:185px;">
                            <span class="title-slide">'.$listtext[5].'</span>
                        </div>
                        <div u="caption" t="L" d=-750 class="captionOrange" style="left:195px; top: 300px;">'.$listtext[2].'</div>
                        <div u="caption" t="DDG|TR" t2="TORTUOUS|VB" d=-750 class="captionOrange" style="left:360px; top: 300px;">'.$listtext[3].'</div>
                        <div u="caption" t="TORTUOUS|VB" d=-750 class="captionOrange" style="left:530px; top:300px;">'.$listtext[4].'</div>';
                                            break;
                                        case 3:
                                            echo '<div u="caption" t="CLIP|LR" du="1500" class="textBig" style="left:55%;top:165px; width:700px;text-align:right;">
                            <span class="title-slide">'.$listtext[5].'</span>
                        </div>
                        <div u="caption" t="ZMF|10" d=-1300 class="captionOrange" style="left:63%;top:270px;">'.$listtext[2].'</div>
                        <div u="caption" t="CLIP|L" d=-300 class="captionBlack" style="left:71.5%;top:270px;text-align: center;">'.$listtext[3].'</div>
                        <a class="captionOrange" u="caption" t="CLIP|L" d=-300 href="#" style="left:80%;top:270px;">'.$listtext[4].'</a>';
                                            break;
                                    }

                                ?>
                            </div>
                        <?php
                    }
                }
                
            ?>

        </div>
        <div u="navigator" class="jssorb03" style="bottom: 16px; right: 6px;"><div u="prototype"><div u="numbertemplate"></div></div></div>
        <span u="arrowleft" class="jssora20l" style="left:81%;"><i class="fa fa-angle-left fa-5x"></i></span>
        <span u="arrowright" class="jssora20r" style="right:10%;"><i class="fa fa-angle-right fa-5x"></i></span>
    </div>

</div>