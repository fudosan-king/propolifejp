<?php
/*Template Name: Restaurant - Page Template*/
?>

<?php get_header(); ?>

<?php 
    $section_intro = get_field('section_intro');
    $section_menu = get_field('section_menu');
    $section_detail = get_field('section_detail');

    function _display_repeater_content_text($repeater){
        $html = '';
        if(!empty($repeater)){
            foreach($repeater as $i => $obj){
                $html .= '<p>'.$obj['title'].'<span class="ml-4 d-inline-block">'.$obj['value'].'</span></p>';
            }
        }
        return $html;
    }
    function _display_repeater_content_link($repeater){
        $html = '';
        if(!empty($repeater)){
            foreach($repeater as $i => $obj){
                if(!empty($obj['link']))
                    $html .= sprintf('<a href="%s" target="%s" class="btn btnGray">%s</a>', $obj['link']['url'], $obj['link']['target'], $obj['link']['title']);
            }
        }
        return '<p class="text-center">'.$html.'</p>';
    }
    function _display_flex_content($flex){
        $html = '';
        if(!empty($flex)){
            foreach($flex as $i => $obj){
                switch ($obj['acf_fc_layout']) {
                    case 'info':
                        $html .= '<li><h5>'.$obj['title'].'</h5>'.$obj['content'].'</li>';
                        break;
                    case 'info_table':
                        $html .= '<li><h5>'.$obj['title'].'</h5>'._display_repeater_content_text($obj['content_repeater']).'</li>';
                        break;
                    case 'info_button_link':
                        $html .= '<li><h5>'.$obj['title'].'</h5>'._display_repeater_content_link($obj['content_repeater']).'</li>';
                        break;
                }
            }
        }
        echo '<ul class="list_information">'.$html.'</ul>';
    }

    // MENU MEAL
    function _display_menu_flex_content($flex){
        $html = '';

        if(!empty($flex)){
            foreach($flex as $i => $obj){
                switch ($obj['acf_fc_layout']) {
                    case 'menu_set_dinner':
                        $html .= '
                            <section class="section_restaurant">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">'._generate_dinner_content($obj).'</div>
                                    </div>
                                </div>
                            </section>';
                        break;
                    case 'menu_set_breakfast':
                        $html .= '
                            <section class="section_breakfast mb-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">'._generate_breakfast_content($obj).'</div>
                                    </div>
                                </div>
                            </section>';
                        break;
                }
            }
        }
        echo $html;
    }

    function _generate_dinner_content($item){
        $html="";

        $html='<h2 class="title mb-0">'.$item['title'].'</h2>
                    '._display_repeater_item($item['food_items']).'
                    <div class="box_menu_info">
                        <p class="mb-0"><span class="opening">'.$item['opening'].'</span> <span class="closing">'.$item['closing'].'</span></p>
                    </div>';
                    
        return $html;
    }

    function _generate_breakfast_content($item){
        $html="";

        $html='<h2 class="title mb-0">'.$item['title'].'</h2>
                    '._display_repeater_item($item['food_items'], true).'
                    <div class="box_menu_info">
                        <p class="mb-0"><span class="opening">'.$item['opening'].'</span> <span class="closing">'.$item['closing'].'</span></p>
                    </div>';
        return $html;
    }

    function _display_repeater_item($repeater, $reverse=false){
        $html = '';
        if(!empty($repeater)){
            $count = 0;
            foreach($repeater as $i => $obj){
                $count++;
                
                if (!$reverse){
                    $leftClass = '';
                    $reverseClass = $count % 2 == 0 ? 'flex-row-reverse' : '';
                }
                else{
                    $leftClass = $count % 2 == 0 ? '' : 'box_each_menu_left';
                    $reverseClass = $count % 2 == 0 ? '' : 'flex-row-reverse';
                }

                $priceStr = (!empty($obj['price'])) ? '<h4 class="menu_price">'.__('Price', 'uniquek').': <span>'.$obj['price'].'</span></h4>' : '';

                $html .= '
                    <div class="box_each_menu '.$leftClass.'">
                        <div class="row '.$reverseClass.'">
                            <div class="col-12 col-md-6 align-self-center">
                                <div class="box_restaurant_img">
                                    <img src="'.$obj['picture']['url'].'" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 align-self-center">
                                <h3>'.$obj['title'].'</h3>
                                '.$obj['content'].$priceStr.'
                            </div>
                        </div>
                    </div>';
                
            }
        }
        return $html;
    }

?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<main>
    <section class="section_relaxing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-4"><img src="<?php echo $section_intro['logo']['url']; ?>" alt="" class="img-fluid kotakino_logo"></p>
                    <h2 class="title"><?php echo $section_intro['description']; ?></h2>
                    <div class="row">
                        <div class="col-12 col-md-7 mx-auto">
                            <p class="mb-0 text-left"></p><?php echo $section_intro['content']; ?>
                        </div>              
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php _display_menu_flex_content($section_menu['menu_flexible']); ?>

    <section class="section_information mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto">
                    <h2 class="title"><?php echo $section_detail['title']; ?></h2>
                    <?php _display_flex_content($section_detail['flex_content']); ?>
                </div>
            </div>
        </div>
    </section>

<?php
    
?>

<?php get_footer(); ?>