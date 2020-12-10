<?php
global $current_lang;
$dir_name = 'access';
$dir_category = 'company';
$current_lang = qtranxf_getLanguage();
?>
<?php
$office = array();

while(the_repeater_field('access_table')){
    if(get_sub_field('display')){
        if($current_lang == 'ja'){
            $_office_name = get_sub_field('office_title_ja');
            $_office_name = str_replace("/", "/<br>", $_office_name);
        }
        if($current_lang != 'ja'){ $_office_name = get_sub_field('office_title_en'); }
        
        $office[] = $_office_name;
    }
}
$office_length = count($office);
$office_nav_col = 4;
$office_nav_row_num = ceil($office_length / $office_nav_col);
$office_nav_row = ($office_length/4 > $office_nav_row_num? $office_nav_row_num + 1: $office_nav_row_num);
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/access/img_title_h2.png" alt="ACCESS"></h2>
        <p class="ruby"><?php if($current_lang == 'ja'): ?><?php the_title(); ?><?php endif; ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        <div id="office_nav">
            <p class="btn_office_list"><span><?php if($current_lang == 'ja'): ?>オフィス/ショールーム選択<?php elseif($current_lang != 'ja'): ?>MENU<?php endif; ?></span></p>
            <div id="office_nav_list">
                <?php
                    for($i = 0; $i < $office_nav_row; $i ++){
                        echo '<ul>' . "\n";
                        for($j = $office_nav_col * ($i); $j < ($i + 1) * $office_nav_col; $j ++){
                            $isEven = (($j + $i) % 2 == 1)? true: false;
                            $isEvenSP = ($j % 2 == 1)? true: false;
                            $class;
                            if($isEven && $isEvenSP){ $class = 'class="bg bg2"'; }
                            else if($isEvenSP){ $class = 'class="bg2"'; }
                            else if($isEven){ $class = 'class="bg"'; }
                            else{ $class = ''; }
                            
                            if($j < $office_length){ echo '<li'; echo ' ' . $class; echo'><a href="#office' . $j . '">' . $office[$j] .'</a></li>' . "\n"; }
                            // if($j >= $office_length){ echo '<li class="blank"></li>' . "\n"; }
                        }
                        echo '</ul>' . "\n";
                    }
                ?>
            </div>
        </div>
        
        <div id="office_list">
            
            <?php
                $office_table_num = 0;
                while(the_repeater_field('access_table')):
                    $name_ja = get_sub_field('office_title_ja');
                    $name_en = get_sub_field('office_title_en');
                    $address = get_sub_field('address');
                    $misc = get_sub_field('misc');
                    $root = get_sub_field('root');
                    $latlng= get_sub_field('map_latlng');
                    $col_bg = ($office_table_num % 2 == 1)? true: false;
                    $qtrans_split_address = qtrans_split($address);
                    $display = get_sub_field('display');

                    $address_gmap = str_replace(array("\r\n","\n","\r", "<br />"), '', strip_tags($qtrans_split_address['ja'], "<br><br/>"));

                    if($display){
            ?>
            <div id="office<?php echo $office_table_num; ?>" class="section_list<?php if($col_bg): echo ' left'; endif; ?>">
                <div class="col_left <?php echo $display; ?>">
                    <div id="map<?php echo $office_table_num; ?>" class="gmap"></div>
                    <script type="text/javascript">
                        $(function(){
                            var mapId = 'map' + <?php echo $office_table_num; ?>;
                            GL_Propolife.func.AddGoogleMap.SetMap('<?php echo $latlng; ?>', mapId, <?php echo $office_table_num; ?>);
                        });
                    </script>
                </div>
                <div class="col_right">
                    <div class="desc">
                        <?php if(!empty($name_ja)): ?><?php if($current_lang != 'en'): ?><h3><?php echo $name_ja; ?></h3><?php endif; ?><?php endif; echo "\n";?>
                        <?php if(!empty($name_en)): ?><p class="en"><?php echo $name_en; ?></p><?php endif; echo "\n";?>
                        <?php if(!empty($address)): ?><p class="address"><?php echo $address; ?></p><?php endif; echo "\n";?>
                        <?php if(!empty($misc)): ?><p class="misc"><?php echo $misc; ?></p><?php endif; echo "\n";?>
                        <?php if(!empty($root)): ?><p class="root"><?php echo $root; ?></p><?php endif; echo "\n";?>
                        <p class="btn_map"><a href="https://www.google.co.jp/maps/place/<?php echo $address_gmap; ?>" target="_blank"><?php if($current_lang == 'ja'): ?>マップを見る<?php elseif($current_lang != 'ja'): ?>MAP<?php endif; ?></a></p>
                    </div>
                </div>
            </div>

            <?php
                    $office_table_num += 1; 
                } 
                endwhile; 
            ?>
            
        </div><!-- // #office_list -->
    </div>
</div><!-- // #contents -->
<?php get_footer(); ?>
