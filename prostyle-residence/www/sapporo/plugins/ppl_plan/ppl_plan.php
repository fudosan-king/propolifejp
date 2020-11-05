<?php
/*
  Plugin Name: PPL Plan
  Plugin URI: https://www.propolifevietnam.com/
  Description: PPL Plan From PEDE Team
  Version: 1.0.0
  Author: TrungDong pro
  Author URI: http://www.propolifevietnam.com
 */
 
require_once ( dirname(__FILE__) . '/templates' . "/template.php"); 
 
class PPL_Plan {

	/******************************** PORTFOLIO POST TYPE INIT START ***********************************/
	
	public function ppl_plan_list_categories() {
		$_categories = get_categories('taxonomy=ppl-plan-category');
		foreach ($_categories as $_cat) {
			?>
			<li class="cat-item cat-item-<?php echo $_cat->term_id; ?>">
				<a title="View all posts filed under <?php echo $_cat->name; ?>" href="#<?php //echo get_term_link($_cat->slug, 'ppl-plan-category'); ?>" data-filter=".<?php echo $_cat->slug; ?>"><?php echo $_cat->name; ?></a>
			</li>
			<?php
		}
	}

	public function ppl_plan_get_item_classes($post_id = null) {
		if ($post_id === null)
			return;
		$_terms = wp_get_post_terms($post_id, 'ppl-plan-category');
		foreach ($_terms as $_term) {
			echo " " . $_term->slug;
		}
	}

	public function ppl_plan_get_attachment_src($attachment_id, $size_name = 'thumbnail') {

		global $_wp_additional_image_sizes;
		$size_name = trim($size_name);
		$meta = wp_get_attachment_metadata($attachment_id);

		if (empty($meta['sizes']) || empty($meta['sizes'][$size_name])) {

			// let's first see if this is a registered size
			if (isset($_wp_additional_image_sizes[$size_name])) {
				$height = (int) $_wp_additional_image_sizes[$size_name]['height'];
				$width = (int) $_wp_additional_image_sizes[$size_name]['width'];
				$crop = (bool) $_wp_additional_image_sizes[$size_name]['crop'];

				// if not, see if name is of form [width]x[height] and use that to crop
			} else if (preg_match('#^(\d+)x(\d+)$#', $size_name, $matches)) {
				$height = (int) $matches[2];
				$width = (int) $matches[1];
				$crop = true;
			}

			if (!empty($height) && !empty($width)) {
				$resized_path = $this->ppl_plan_generate_attachment($attachment_id, $width, $height, $crop);
				$fullsize_url = wp_get_attachment_url($attachment_id);

				$file_name = basename($resized_path);
				$new_url = str_replace(basename($fullsize_url), $file_name, $fullsize_url);

				if (!empty($resized_path)) {
					$meta['sizes'][$size_name] = array(
						'file' => $file_name,
						'width' => $width,
						'height' => $height,
					);

					wp_update_attachment_metadata($attachment_id, $meta);
					return array(
						$new_url,
						$width,
						$height
					);
				}
			}
		}
		return wp_get_attachment_image_src($attachment_id, $size_name);
	}

	public function ppl_plan_generate_attachment($attachment_id = 0, $width = 0, $height = 0, $crop = true) {
		$attachment_id = (int) $attachment_id;
		$width = (int) $width;
		$height = (int) $height;
		$crop = (bool) $crop;

		$original_path = get_attached_file($attachment_id);

		$resized_path = @image_resize($original_path, $width, $height, $crop);

		if (
				!is_wp_error($resized_path) &&
				!is_array($resized_path)
		) {
			return $resized_path;

			// perhaps this image already exists.  If so, return it.
		} else {
			$orig_info = pathinfo($original_path);
			$suffix = "{$width}x{$height}";
			$dir = $orig_info['dirname'];
			$ext = $orig_info['extension'];
			$name = basename($original_path, ".{$ext}");
			$destfilename = "{$dir}/{$name}-{$suffix}.{$ext}";
			if (file_exists($destfilename)) {
				return $destfilename;
			}
		}

		return '';
	}


	public function ppl_plan_get_filetype($itemSrc) {
		if(preg_match('/youtube\.com\/watch/i', $itemSrc) || preg_match('/youtu\.be/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/vimeo\.com/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.mov\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.swf\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.avi\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.mpg\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.mpeg\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else if(preg_match('/\b.mp4\b/i', $itemSrc)) {
			return 'wd-pretty-video';
		} else {
			return 'wd-pretty-image';
		}
	}


	public function ppl_plan_section_options() {
		?>
		<div class="ppl-plan-meta-section">
			<div class="form-wrap">
				<div class="form-field">
					<label for="ppl_plan"><?php _e('Image/Video URL', 'ppl_plan_context')?></label>
					<input type="text" id="ppl_plan" name="ppl_plan" value="<?php echo htmlspecialchars($this->ppl_plan_get_meta('ppl-plan')); ?>" style="width:70%;" />
					<a id="ppl_plan_media_lib" href="javascript:void(0);" class="button" rel="ppl_plan">URL from Media Library</a>
					<p><?php _e('Enter URL for the full-size image or video (youtube, vimeo, swf, quicktime) you want to display in the lightbox gallery. You can also choose Image URL from your Media gallery', 'ppl_plan_context')?></p>
				</div>            
				<div class="form-field">
					<label for="ppl_plan_url"><?php _e('PPL Plan URL', 'ppl_plan_context')?></label>
					<input type="text" name="ppl_plan_url" value="<?php echo htmlspecialchars($this->ppl_plan_get_meta('ppl-plan-url')); ?>" />
					<p><?php _e('Enter URL to the live version of the project.', 'ppl_plan_context')?></p>
				</div>   

				<?php
					require_once( WDP_TEMPLATE.DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR."slideshow.php" );
				?>
				
			</div>
			<input type="hidden" name="ppl_plan_noncename" id="ppl_plan_noncename" value="<?php echo wp_create_nonce(plugin_basename(__FILE__)); ?>" />
		</div>
		<?php
	}


	public function ppl_plan_save_data($post_id, $post) {

		// verify this came from the our screen and with proper authorization,
		// because save_post can be triggered at other times
		if ( isset($_POST['ppl_plan_noncename']) && !wp_verify_nonce($_POST['ppl_plan_noncename'], plugin_basename(__FILE__)))
			return $post->ID;

		if ($post->post_type == 'revision')
			return; //don't store custom data twice

		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;

		// OK, we're authenticated: we need to find and save the data
		// We'll put it into an array to make it easier to loop though.
		
		//do save ppl_plan slider
		if( isset($_POST['_wd_slider']) && $_POST['_wd_slider'] == 1 ){
			$ret_str = '';
			$element_count = count($_POST['element_id']);
			$ret_arr = array();
			for( $i = 0 ; $i < $element_count ; $i++ ){	
				$temp_arr = array(
					 'id' 				=> absint($_POST['element_id'][$i])
					,'image_url' 		=> wp_kses_data($_POST['element_image_url'][$i])
					,'thumb_id' 		=> absint($_POST['thumb_id'][$i])
					,'thumb_url' 		=> wp_kses_data($_POST['thumb_url'][$i])
					,'url' 				=> wp_kses_data($_POST['element_url'][$i])
					,'alt' 				=> wp_kses_data($_POST['element_alt'][$i])
					,'title'			=> wp_kses_data($_POST['element_title'][$i])
				
				);
				array_push( $ret_arr, $temp_arr );
			}
			
			$ret_str = serialize($ret_arr);
			update_post_meta($post_id,'_wd_slider',$ret_str);	
		}		
		
		if( isset($_POST) && isset($_POST['ppl_plan']) && isset($_POST['ppl_plan_url']) ) {
			$mydata = array();
			$mydata['ppl-plan'] = $_POST['ppl_plan'];
			$mydata['ppl-plan-url'] = $_POST['ppl_plan_url'];

			// Add values of $mydata as custom fields
			foreach ($mydata as $key => $value) { //Let's cycle through the $mydata array!
				update_post_meta($post->ID, $key, $value);
				if (!$value)
					delete_post_meta($post->ID, $key); //delete if blank
			}
		}
		
		
	}	
	
	public function ppl_plan_register() {

		$labels = array(
			'name' => __('PPL Plan Items'),
			'singular_name' => __('PPL Plan Item'),
			'add_new' => __('Add PPL Plan Item'),
			'add_new_item' => __('Add New PPL Plan Item'),
			'edit_item' => __('Edit PPL Plan Item'),
			'new_item' => __('New PPL Plan Item'),
			'view_item' => __('View PPL Plan Item'),
			'search_items' => __('Search PPL Plan Item'),
			'not_found' => __('No PPL Plan Items found'),
			'not_found_in_trash' => __('No PPL Plan Items found in Trash'),
			'parent_item_colon' => '',
			'menu_name' => __('PPL Plan Items')
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => array('slug' => 'ppl_plan'),
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'excerpt',
			//'author',
			//'trackbacks',
			'custom-fields',
			//'comments', 
			//'revisions', 
			//'page-attributes'
			),
			'menu_position' => 23,
			'menu_icon' => WDP_IMAGE . '/icon.png',
			'taxonomies' => array('ppl-plan')
		);

		register_post_type('ppl_plan', $args);

		$this->ppl_plan_register_taxonomies();
	}	
	
	public function ppl_plan_register_taxonomies() {
		register_taxonomy('ppl-plan-category', 'ppl_plan', array('hierarchical' => true, 'label' => 'PPL Plan Category', 'query_var' => true, 'rewrite' => array('slug' => 'ppl_plan-category')));

		if (count(get_terms('ppl-plan-category', 'hide_empty=0')) == 0) {
			register_taxonomy('category', 'ppl_plan', array('hierarchical' => true, 'label' => 'PPL Plan Category'));
			$_categories = get_categories('taxonomy=category&title_li=');
			foreach ($_categories as $_cat) {
				if (!term_exists($_cat->name, 'ppl-plan-category'))
					wp_insert_term($_cat->name, 'ppl-plan-category');
			}
			$ppl_plan = new WP_Query(array('post_type' => 'ppl_plan', 'posts_per_page' => '-1'));
			while ($ppl_plan->have_posts()) : $ppl_plan->the_post();
				$post_id = get_the_ID();
				$_terms = wp_get_post_terms($post_id, 'category');
				$terms = array();
				foreach ($_terms as $_term) {
					$terms[] = $_term->term_id;
				}
				wp_set_post_terms($post_id, $terms, 'ppl-plan-category');
			endwhile;
			wp_reset_query();
			register_taxonomy('category', array());
		}
	}		
	
	/******************************** PORTFOLIO POST TYPE INIT END *************************************/


	public function __construct(){
		$this->constant();
		
		/****************************/
		// Register PPL Plan post type
		add_action('init', array($this,'ppl_plan_register') );
		add_theme_support('post-thumbnails', array('ppl_plan'));
		
		register_activation_hook(__FILE__, array($this,'ppl_plan_activate') );
		register_deactivation_hook(__FILE__, array($this,'ppl_plan_deactivate') );

		add_action('admin_enqueue_scripts',array($this,'init_admin_script'));
		
		add_action('admin_menu', array( $this,'ppl_plan_create_section' ) );	
		
		add_filter('attribute_escape', array($this,'rename_second_menu_name') , 10, 2);
		
		add_action('save_post', array($this,'ppl_plan_save_data') , 1, 2);
		
		add_action( 'template_redirect', array($this,'ppl_plan_template_redirect') );
		
		$this->init_trigger();
		$this->init_handle();
	}
	
	public function ppl_plan_template_redirect(){
		global $wp_query,$post,$page_datas,$data;
		if( $wp_query->is_page() || $wp_query->is_single() ){
			//if ( has_shortcode( $post->post_content, 'ppl-plan' ) ) { 
				add_action('wp_enqueue_scripts',array($this,'init_script'));
			//}
		}
		
	}
	
	public function ppl_plan_create_section() {
		//add_meta_box('ppl-plan-section-options', __('Options', 'ppl_plan_context'), array($this,'ppl_plan_section_options') , 'ppl_plan', 'normal', 'high');
		//add_meta_box('ppl-plan-section-options', __('Options', 'ppl_plan_context'), array($this,'ppl_plan_section_options') , 'ppl_plan', 'normal', 'high');
	}


	
	public function ppl_plan_deactivate() {
		flush_rewrite_rules();
	}

	public function ppl_plan_activate() {
		$this->ppl_plan_register();
		flush_rewrite_rules();
	}		
	
	public function rename_second_menu_name($safe_text, $text) {
		if (__('PPL Plan Items', 'WD_ppl_plan_context') !== $text) {
			return $safe_text;
		}

		// We are on the main menu item now. The filter is not needed anymore.
		remove_filter('attribute_escape', array($this,'rename_second_menu_name') );

		return __('PPL Plan', 'ppl_plan_context');
	}
	
	public function ppl_plan_get_meta($field) {
		global $post;
		$custom_field = get_post_meta($post->ID, $field, true);
		switch ($field) {
			case 'ppl-plan':
				if (preg_match('/\.pdf/', $custom_field)) {
					$pdf_src = urlencode($custom_field);
					$custom_field = "http://docs.google.com/viewer?url=$pdf_src&embedded=true&iframe=true&width=100%&height=100%";
				}
				break;
			default :
				break;
		}
		return $custom_field;
	}
	public function ppl_plan_show($atts = array()) {

		extract(shortcode_atts(array(
			'count' 				=>  '6',
			'ignore_slug' 			=>  ''
		),$atts));		
		show_ppl_plan( $count, $ignore_slug );	
	}
	public function ppl_plan_item_show($atts = array()) {

		extract(shortcode_atts(array(
			'id'     =>  '',
			'slug'   =>  '',
			'style'	 => 'special',
		),$atts));		

		show_item_ppl_plan($id, $slug, $style);	
	}

	public function ppl_plan_item($atts = array()) {
	
		ob_start();
		$this->ppl_plan_item_show($atts);
		$content = ob_get_clean();
		//ob_end_clean();
		return $content;
	}
	
		public function ppl_plan_custom_image($atts = array()) {

		extract(shortcode_atts(array(
			'id' 				=> '',
			'slug' 	    		=> '',
			'type'				=> 'thumbnail',
			'word'				=> '60',
			'id_image'			=> '',
			'width'				=> '',
			'height'			=> '',
		),$atts));
		ob_start();
		show_item_ppl_plan_imag($id,$type,$word,$id_image,$height,$width,$slug);	
		$content = ob_get_clean();
		//ob_end_clean();
		return $content;
	}

	public function ppl_plan_owlcarousel($atts = array()) {

		extract(shortcode_atts(array(
			'limit' 				=> -1,
			'slug' 			=>  ''
		),$atts));		
		ob_start();
		show_carousel_ppl_plan($limit);
		$content = ob_get_clean();
		//ob_end_clean();
		return $content;	
	}

	public function ppl_plan_masonry($atts = array()) {

		extract(shortcode_atts(array(
			'limit' 				=> -1,
		),$atts));
		ob_start();		
		show_masonry_ppl_plan($limit);	
		$content = ob_get_clean();
		//ob_end_clean();
		return $content;
	}



	public function ppl_plan($atts = array()) {
	
		ob_start();
		$this->ppl_plan_show($atts);
		$content = ob_get_clean();
		//ob_end_clean();
		return $content;
	}

	


	protected function init_trigger(){
		add_image_size('ppl_plan_image',480,300,true); 
	}
	
	
	protected function init_handle(){
		add_shortcode('ppl-plan', array( $this,'ppl_plan') );
		add_shortcode('ppl-plan-carousel', array( $this,'ppl_plan_owlcarousel') );
		add_shortcode('ppl-plan-item', array( $this,'ppl_plan_item') );
		add_shortcode('ppl-plan-masonry', array( $this,'ppl_plan_masonry') );
		add_shortcode('ppl-plan-image',array($this,'ppl_plan_custom_image'));
	}	
	
	public function init_admin_script() {
		if (function_exists('wp_enqueue_media')) {
			wp_register_script('admin_media_lib_35', WDP_JS . '/admin-media-lib-35.js', 'jquery', false,false);
			wp_enqueue_script('admin_media_lib_35');
		} else {
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
			wp_register_script('admin_media_lib', WDP_JS . '/admin-media-lib.js', 'jquery', false,false);
			wp_enqueue_script('admin_media_lib');
		}

	}	
	
	
	public function init_script(){
		wp_enqueue_script('jquery');
		wp_register_script( 'TweenMax', WDP_JS.'/TweenMax.min.js');
		wp_enqueue_script('TweenMax');		
		wp_register_script( 'jquery.prettyPhoto', WDP_JS.'/jquery.prettyPhoto.min.js',array('jquery','TweenMax'));
		wp_enqueue_script('jquery.prettyPhoto');	
		
		wp_register_script( 'js.packery-mode.pkgd', WDP_JS.'/packery-mode.pkgd.js',false,false,true);
		 wp_enqueue_script('js.packery-mode.pkgd');
		 wp_register_script( 'js.isotope.pkgd', WDP_JS.'/isotope.pkgd.js',false,false,true);
		 wp_enqueue_script('js.isotope.pkgd');
		  wp_register_script( 'js.fit-columns', WDP_JS.'/fit-columns.js',false,false,true);
		 wp_enqueue_script('js.fit-columns');
		wp_register_style( 'css.isotope', WDP_CSS.'/isotope.css');
		wp_enqueue_style('css.isotope');	
		
		wp_register_script( 'wd.ppl_plan.js', WDP_JS.'/ppl_plan.js',false,false,true);			
		wp_register_script( 'wd.masonry-horizontal.js', WDP_JS.'/masonry-horizontal.js',false,false,true);
		wp_enqueue_script('wd.masonry-horizontal.js');	

		wp_register_style( 'css.prettyPhoto', WDP_CSS.'/prettyPhoto.css');
		wp_enqueue_style('css.prettyPhoto');	
		
	
		
		wp_register_script( 'jquery.quicksand', WDP_JS.'/jquery.quicksand.js');
		wp_enqueue_script('jquery.quicksand');	
		// wp_register_script( 'wd.animation', WDP_JS.'/wd.animation.js',array('jquery','TweenMax'));
		// wp_enqueue_script('wd.animation');
		// wp_register_style( 'wd.ppl_plan', WDP_CSS.'/wd.ppl_plan.css');		
		// wp_enqueue_style('wd.ppl_plan');

	}
	
	protected function constant(){
		//define('DS',DIRECTORY_SEPARATOR);	
		if( !defined('WDP_BASE') ){
			define('WDP_BASE'		,  	plugins_url( '', __FILE__ )		);
			define('WDP_JS'			, 	WDP_BASE . '/js'		);
			define('WDP_CSS'		, 	WDP_BASE . '/css'		);
			define('WDP_IMAGE'		, 	WDP_BASE . '/images'	);
			define('WDP_TEMPLATE' 	, 	dirname(__FILE__) . '/templates'	);
		}
	}	
	
}
 
$_ppl_plan = new PPL_Plan; // Start an instance of the plugin class 