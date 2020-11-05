<?php 
	$sectionIntro = ACFRestaurantFields::_sectionIntro();
	$sectionMenu = ACFRestaurantFields::_sectionMenu();
	$sectionDetail = ACFRestaurantFields::_sectionDetail();

	

	function _display_repeater_content_text($repeater){
		$html = '';
		if(_isNotNull($repeater)){
			foreach($repeater as $i => $obj){
				$html .= '<p>'.$obj->title.'<span class="ml-4 d-inline-block">'.$obj->value.'</span></p>';
			}
		}
		return $html;
	}

	function _display_repeater_content_link($repeater){
		$html = '';
		if(_isNotNull($repeater)){
			foreach($repeater as $i => $obj){
				if(_isNotNull($obj->link))
					$html .= sprintf('<a href="%s" target="%s" class="btn btnGray">%s</a>', $obj->link->url, $obj->link->target, $obj->link->title);
			}
		}
		return '<p class="text-center text-md-left">'.$html.'</p>';
	}

	function _display_flex_content($flex){
		$html = '';
		if(_isNotNull($flex)){
			foreach($flex as $i => $obj){
				switch ($obj->acf_fc_layout) {
					case 'info':
						$html .= '<li><h5>'.$obj->title.'</h5>'.$obj->content.'</li>';
						break;
					case 'info_table':
						$html .= '<li><h5>'.$obj->title.'</h5>'._display_repeater_content_text($obj->content_repeater).'</li>';
						break;
					case 'info_button_link':
						$html .= '<li><h5>'.$obj->title.'</h5>'._display_repeater_content_link($obj->content_repeater).'</li>';
						break;
				}
			}
		}
		echo '<ul class="list_information">'.$html.'</ul>';
	}

	// MENU MEAL
	function _display_menu_flex_content($flex){
		$html = '';
		if(_isNotNull($flex)){
			foreach($flex as $i => $obj){

				switch ($obj->customize_class) {
					case 'dinner':
						$html .= '
							<section class="section_dinner mb-0">
								<div class="container">
									<div class="row">
										<div class="col-12">'._generate_dinner_content($obj).'</div>
									</div>
								</div>
							</section>';
						break;
					case 'breakfast':
						$html .= '
							<section class="section_breakfast bg-white mb-0">
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

		$html='<h2 class="title mb-0">'.$item->title.'</h2>
					<div class="box_each_menu">
						<div class="row">
							<div class="col-12 col-md-6 align-self-center">
								<img src="<?php the_img_path(); ?>/1x/menu/maindishA-1.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<div class="box_menu_content">
									<h3 class="menu_name">Main dish A</h3>
									<p>もちろん嘉納さんに経験らどう安心に欠けなら国家この名私か説明にというお議論なかったたませて、その昔はそれか程度いた事が得て、嘉納さんののを糧の私におもにお作文と来らけれどもこれ最初へご運動を参りようにけっしてお留学にしないんば、そのうち断然随行にあっますばつけないのをあろたです。</p>
									<h4 class="menu_price">Price: <span>1000$</span></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="box_each_menu box_each_menu_left">
						<div class="row flex-row-reverse">
							<div class="col-12 col-md-6 align-self-center">
								<img src="<?php the_img_path(); ?>/1x/menu/maindishB-1.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<div class="box_menu_content">
									<h3 class="menu_name">Main dish B</h3>
									<p>もちろん嘉納さんに経験らどう安心に欠けなら国家この名私か説明にというお議論なかったたませて、その昔はそれか程度いた事が得て、嘉納さんののを糧の私におもにお作文と来らけれどもこれ最初へご運動を参りようにけっしてお留学にしないんば、そのうち断然随行にあっますばつけないのをあろたです。</p>
									<h4 class="menu_price">Price: <span>1000$</span></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="box_each_menu">
						<div class="row">
							<div class="col-12 col-md-6 align-self-center">
								<img src="<?php the_img_path(); ?>/1x/menu/maindishC-2.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<div class="box_menu_content">
									<h3 class="menu_name">Main dish C</h3>
									<p>もちろん嘉納さんに経験らどう安心に欠けなら国家この名私か説明にというお議論なかったたませて、その昔はそれか程度いた事が得て、嘉納さんののを糧の私におもにお作文と来らけれどもこれ最初へご運動を参りようにけっしてお留学にしないんば、そのうち断然随行にあっますばつけないのをあろたです。</p>
									<h4 class="menu_price">Price: <span>1000$</span></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="box_menu_info">
						<p><span class="opening">17:00~23:00</span> <span class="closing">23:00</span> <span class="last_order"></span></p>
					</div>';
		return $html;
	}

	function _generate_breakfast_content($item){
		$html="";

		$html='<h2 class="title mb-0">Breakfast</h2>
					<div class="box_each_menu box_each_menu_left">
						<div class="row">
							<div class="col-12 col-md-6 align-self-center">
								<div class="box_menu_content mb-3">
									<h3 class="menu_name">Main dish C</h3>
									<p>もちろん嘉納さんに経験らどう安心に欠けなら国家この名私か説明にというお議論なかったたませて、その昔はそれか程度いた事が得て、嘉納さんののを糧の私におもにお作文と来らけれどもこれ最初へご運動を参りようにけっしてお留学にしないんば、そのうち断然随行にあっますばつけないのをあろたです。</p>
									<h4 class="menu_price">Price: <span>1000$</span></h4>
								</div>
							</div>
							<div class="col-12 col-md-6 align-self-center">
								<img src="<?php the_img_path(); ?>/1x/menu/maindishC-2Copy.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="box_menu_info">
						<p><span class="opening">17:00</span> <span class="closing">23:00</span></p>
					</div>';
		return $html;
	}

?>
<section class="section_relaxing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="mb-4"><img src="<?php _echo($sectionIntro->logo->url); ?>" alt="" class="img-fluid kotakino_logo"></p>
				<h2 class="title"><?php _echo($sectionIntro->description); ?></h2>
				<div class="row">
					<div class="col-12 col-md-7 mx-auto">
						<p class="mb-0 text-left"><?php _echo($sectionIntro->content); ?></p>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>

<div class="main_content">
	<?php 
		if(is_user_logged_in()): 

			_display_menu_flex_content($sectionMenu->menu_flexible);

		endif; 
	?>

	<section class="section_information mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 mx-auto">
					<h2 class="title"><?php _echo($sectionDetail->title); ?></h2>
					<?php _display_flex_content($sectionDetail->flex_content); ?>
				</div>
			</div>
		</div>
	</section>
</div>