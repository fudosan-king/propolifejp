<?php
/*
Plugin Name: HNY JPForms something additional
Plugin URI: http://www.hanano-ya.jp
Description: 素敵な日本産お問い合わせフォームMW WP Form でちょっとした機能を追加する
Author: 花のや
Version: 1.0.0
Author URI: http://www.hanano-ya.jp

Copyright 2014 hananoya (email : info@hanano-ya.jp)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$hny_jsa = new hny_jpforms_something_additional();

class hny_jpforms_something_additional{
  
  //オプション用配列
  private $my_fields = array(
    'hny_jsa_zip',
    'hny_jsa_address',
    'hny_jsa_confirm_scroll',
    'hny_jsa_confirm_button',
    'hny_jsa_confirm_on_button',
    'hny_jsa_send_button',
    'hny_jsa_send_on_button',
    'hny_jsa_back_button',
    'hny_jsa_back_on_button',
    'hny_jsa_additional_number_key',
    'hny_jsa_additional_number_value',
  );
  
  //MW WP FORMのポストタイプ
  const _MW_WP_FORM_POST_TYPE = 'mw-wp-form';
  /**
  * コンストラクタ
  */
  public function __construct(){
    add_action('plugins_loaded', array(&$this, 'hny_initialize'));

    //アクティベーション・アンインスト処理フック
    register_activation_hook( __FILE__, array(&$this, 'hny_activation'));
    register_uninstall_hook( __FILE__, array(&$this, 'hny_uninstall'));
  }
  //プラグインアクティベーション
  public function hny_activation(){
  }
  //プラグインアンインストール
  public function hny_uninstall(){
  }
  /**
  * 初期処理
  */
  public function hny_initialize(){
    add_action('admin_menu', array(&$this, 'hny_admin_menu'));
    add_action('save_post', array(&$this, 'hny_save_data'));
    
    add_action('wp_print_footer_scripts', array(&$this, 'hny_make_footer_scripts'));
    add_action('wp_print_styles', array(&$this, 'hny_make_styles'));
    
    //お問い合せ番号用
    if (! is_admin()) {
      $this->hny_create_additional_number_hook();
    }
  }
  /**
  * MW WP Form管理画面時にメタボックスを追加
  */
  public function hny_admin_menu(){
    add_meta_box('jpform_custom', 'JpForm色々', array(&$this,'add_mw_wp_form'), self::_MW_WP_FORM_POST_TYPE, 'side', 'low');
//    add_meta_box('jpform_custom', 'JpForm色々', array(&$this,'add_mw_wp_form'), 'page', 'side', 'low');
  }

  /**
  * mw wp formでmetaboxとか出力
  */
  public function add_mw_wp_form(){
    wp_enqueue_media();
    wp_enqueue_script( 'custom-header' );
    wp_enqueue_script('hny_uploads',plugin_dir_url(__FILE__).'js/hny_uploads.js',array('jquery'),null,null);
    include_once(plugin_dir_path( __FILE__ ).'template/add_mw_wp_form.php');
  }

  /**
  * オプションアップデートぶんまわし
  * @param int.id mw wpform id
  */
  public function hny_save_data($id){
    if ( $_POST['post_type'] != self::_MW_WP_FORM_POST_TYPE ) {
        return;
    }
    foreach ($this->my_fields as $fields)
      $this->hny_save_or_update($id, $fields);
  }

  /**
  * オプションアップデート実行
  *
  * @param int.id mw wpform id
  * @param string.field_name
  */
  private function hny_save_or_update($id, $fields){
    $my_data = ($_POST[$fields])? esc_html($_POST[$fields]): '';
    update_post_meta($id, $fields, $my_data) ;
  }

  /**
  * 登録されたFromを取得
  *
  * @return array.obj.post[mw-wp-form]
  */
  private function hny_get_mw_wp_forms(){
    $args = array(
      'post_type' => self::_MW_WP_FORM_POST_TYPE,
      'posts_per_page' => -1
    );
    return get_posts($args);
  }

  /**
  * css出力
  */
  public function hny_make_styles(){
    global $post;
    if (function_exists('has_shortcode')){
      if(is_admin() || ! has_shortcode($post->post_content, 'mwform_formkey'))
        return;
    }else{
      if(is_admin())
        return;
    }
    $forms = $this->hny_get_mw_wp_forms();
    $output = '<style type="text/css">'."\n";
    $output .= $this->hny_button2image_style($forms,array('send','confirm','back'),array('input[value="送信する"]','input[name="submitConfirm"]','input[name="submitBack"]'));
    $output .= '</style>'."\n";
    echo $output;
  }

  /**
  * css作成
  *
  * @param array.obj mw_wp_form
  * @param array.string 動作(send,confirm,back)
  * @param array.string selector
  * @return string css
  */
  private function hny_button2image_style($forms,$methods,$selectors){
    $ret = '';
    foreach($forms as $form){
      for($i = 0;$i < count($methods);$i++){
        $standerd = 'hny_jsa_'.$methods[$i].'_button';
        $on = 'hny_jsa_'.$methods[$i].'_on_button';
        if($form->$standerd){
          $img = wp_get_attachment_image_src($form->$standerd,'full');
          $ret .= '#mw_wp_form_mw-wp-form-'.$form->ID.' '.$selectors[$i].'{'.
                  'text-indent:-9999px;border:none;cursor:pointer;'.
                  'background:url('.$img[0].') no-repeat left top;width:'.$img[1].'px;height:'.$img[2].'px;margin:0 5px;'.
                  "}\n";
          if($form->$on){
            $on_img = wp_get_attachment_image_src($form->$on,'full');
            $ret .= '#mw_wp_form_mw-wp-form-'.$form->ID.' '.$selectors[$i].':hover{'.
                    'background:url('.$on_img[0].') no-repeat left top;width:'.$on_img[1].'px;height:'.$on_img[2].'px;'.
                    "}\n";
          }else{
            $ret .= '#mw_wp_form_mw-wp-form-'.$form->ID.' '.$selectors[$i].':hover{'.
                    'opacity:0.75;filter: alpha(opacity=75);-ms-filter: "alpha(opacity=75)";'.
                    "}\n";
          }
        }
      }
    }

    return $ret;
  }

  /**
  * javascript出力
  */
  public function hny_make_footer_scripts(){
    global $post;
    if (function_exists('has_shortcode')){
      if(is_admin() || ! has_shortcode($post->post_content, 'mwform_formkey'))
        return;
    }else{
      if(is_admin())
        return;
    }

    $forms = $this->hny_get_mw_wp_forms();
    $output = '<script src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8"></script>'."\n";
    $output .= '<script type="text/javascript">'."\n";
    $output .= 'jQuery(document).ready(function($){'."\n";
    $output .= $this->hny_zip2address_script($forms);
    $output .= $this->hny_confirm_scroll_script($forms);
    $output .= '});'."\n";
    $output .= '</script>'."\n";
    echo $output;
  }

  /**
  * javascript作成(ajaxzip3)
  *
  * @param array.obj mw_wp_form
  * @return string css
  */
  private function hny_zip2address_script($forms){
    $ret = '';
    foreach($forms as $form){
      if($form->hny_jsa_zip && $form->hny_jsa_address){
        $ret .= "$('div#mw_wp_form_mw-wp-form-".$form->ID." input[name=\"".$form->hny_jsa_zip."\"]').on('keyup',function(){";
        $ret .= "  AjaxZip3.zip2addr(this,'','".$form->hny_jsa_address."','".$form->hny_jsa_address."');";
        $ret .= "});\n";

        $ret .= "$('div#mw_wp_form_mw-wp-form-".$form->ID." input[name=\"".$form->hny_jsa_zip."\\\\[data\\\\]\\\\[1\\\\]\"]').on('keyup',function(){";
        $ret .= "AjaxZip3.zip2addr('".$form->hny_jsa_zip."[data][0]','".$form->hny_jsa_zip."[data][1]','".$form->hny_jsa_address."','".$form->hny_jsa_address."','".$form->hny_jsa_address."');";
        $ret .= "});\n";
      }
    }
    return $ret;
  }

  /**
  * javascript作成(auto scroll)
  *
  * @param array.obj mw_wp_form
  * @return string css
  */
  private function hny_confirm_scroll_script($forms){
    $ret = '';
    foreach($forms as $form){
      if($form->hny_jsa_confirm_scroll){
        $ret .= "var target".$form->ID." = $('div#mw_wp_form_mw-wp-form-".$form->ID.".mw_wp_form');\n";
        $ret .= "if(target".$form->ID.".length && (target".$form->ID.".hasClass('mw_wp_form_confirm') || target".$form->ID.".find('.error').length)){ $('html, body').animate({scrollTop:target".$form->ID.".offset().top}, 500, 'swing'); }\n";
      }
    }
    return $ret;
  }
  
  /**
  * お問い合せ番号用フック生成
  */
  public function hny_create_additional_number_hook(){
    $forms = $this->hny_get_mw_wp_forms();
    foreach ( $forms as $form ) {
      if ( ! empty( $form->hny_jsa_additional_number_key) ) {
        add_filter( 'mwform_admin_mail_raw_mw-wp-form-'.$form->ID, array(&$this, 'hny_convert_additional_number'), 10, 2 );
        add_filter( 'mwform_auto_mail_raw_mw-wp-form-'.$form->ID, array(&$this, 'hny_convert_additional_number'), 10, 2 );
      }
    }
  }
  
  /**
  * 管理者メールの書き換え（お問い合せ番号）
  */
  public function hny_convert_additional_number($mail, $data) {
    $additional_key = 'hny_jsa_additional_number_key';
    $additional_value = 'hny_jsa_additional_number_value';
    //フィルター判定 true > admin用メール　false > 自動返信メール
    $filter_name = (strpos(current_filter(), 'mwform_admin_mail_raw_mw-wp-form-') === false)? 'mwform_auto_mail_raw_mw-wp-form-': 'mwform_admin_mail_raw_mw-wp-form-';

    //idが取得できないので wordpressの関数　current_filterで無理やり取得　mwform_mail_mw-wp-form-1034
    $post_id = intval(str_replace($filter_name,'',current_filter()));
    $additional_key = get_post_meta($post_id, $additional_key, true);
    $additional_number =  intval(get_post_meta($post_id, $additional_value, true));

    //管理者メールフィルターの時は問い合わせ番号に+1して保存
    if ($filter_name == 'mwform_admin_mail_raw_mw-wp-form-') {
      $additional_number++;
      update_post_meta($post_id, $additional_value, $additional_number);
    }
    //メール本文置き換え
    $mail->body = str_replace('{'.$additional_key.'}', $additional_number, $mail->body);
    return $mail;
  }
  
  private function getImageUrlById($id,$size = 'thumbnail'){
    $img = wp_get_attachment_image_src($id,$size);
    return $img[0];
  }

  private function getImageTagById($id,$size = 'thumbnail'){
    return wp_get_attachment_image($id,$size);
  }

}





 
?>