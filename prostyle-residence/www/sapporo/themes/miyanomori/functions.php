<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Register Support Theme.
 */
if ( ! function_exists( 'miyanomori_setup' ) ) :
	function miyanomori_setup() {
		add_theme_support( 'post-thumbnails' );
		// if (!current_user_can('administrator') && !is_admin()) {
		  show_admin_bar(false);
		// }
	}
endif;
add_action( 'after_setup_theme', 'miyanomori_setup' );

/**
 * Register and Enqueue Styles.
 */
function miyanomori_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'miyanomori-style', get_stylesheet_uri(), array(), $theme_version );

	// Add print CSS.
	// wp_enqueue_style( 'miyanomori-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
}
add_action( 'wp_head', 'miyanomori_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function miyanomori_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// wp_enqueue_script( 'miyanomori-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );

}

add_action( 'wp_footer', 'miyanomori_register_scripts' );


function ajax_miyanomori_init() {

    wp_register_script( 'ajax-miyanomori-script', get_template_directory_uri()  . '/assets/js/ajax-miyanomori-script.js', array('jquery') );
    wp_enqueue_script( 'ajax-miyanomori-script' );

    wp_register_style('miyanomori_admin_style',get_template_directory_uri()  . '/assets/admin/css/miyanomori-script.css', 'all');
    wp_enqueue_style( 'miyanomori_admin_style' );

    wp_register_script( 'miyanomori-admin-script', get_template_directory_uri()  . '/assets/admin/js/miyanomori-script.js', array('jquery') );
    wp_enqueue_script( 'miyanomori-admin-script' );
    
    wp_localize_script( 'ajax-miyanomori-script', 'ajax_miyanomori_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'jp_national_holidays_min' => get_template_directory_uri().'/assets/data/jp_national_holidays_min.json',
        'redirecturl' => home_url(),
        'loadingmessage' => __( 'Sending user info, please wait ...' )
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
    add_action( 'wp_ajax_nopriv_ajaxregister', 'ajax_register' );
    add_action( 'wp_ajax_nopriv_ajaxforgotpassword', 'ajax_forgot_password' );
}

add_action( 'init', 'ajax_miyanomori_init' );

// Check if users input information is valid
function ajax_login() {
    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

	//Nonce is checked, get the POST data and sign user on
	$info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

	$user_signon = wp_signon( $info, false );
	if ( is_wp_error( $user_signon )) {
	    echo json_encode( array( 'loggedin'=>false, 'message'=>__( 'Wrong username or password!' ), 'message_jp'=>__('ユーザー名またはパスワード が正しくありません') ) );
	} else {
	    echo json_encode( array( 'loggedin'=>true, 'message'=>__('Login successful! redirecting...' ),'message_jp'=>__('ログインに成功しました。リダイレクトしています...') ));
	}

	die();
}

// Check if users input information is valid
function ajax_register()
{
    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

	//Nonce is checked, get the POST data and sign user on
	// $user_login = $_POST['userlogin'];
	$user_email = $_POST['useremail'];
	$user_login = explode('@', $user_email);
	$user_login = $user_login[0];
	
	$register  = register_new_user( $user_email, $user_email );

	if ( is_wp_error( $register )) {
	    echo json_encode( array( 'loggedin'=>false, 'message'=> ['This username is already registered. Please choose another one.'], 'message_jp'=> ['このユーザー名は既に登録されています']  ));
	} else {
	    echo json_encode( array( 'loggedin'=>true, 'message'=>__('Register successful! Please check email to get password.' ), 'message_jp'=> __('会員登録に成功しました。メールを送信しましたのでパスワードをご確認ください') ));
	}

	die();
}


function ajax_forgot_password()
{ 
	$login = isset( $_POST['user_login'] ) ? sanitize_user( wp_unslash( $_POST['user_login'] ) ) : ''; // WPCS: input var ok, CSRF ok.

	if ( empty( $login ) ) 
	{
		echo json_encode( array( 'status'=>false, 'message'=> ["Enter a username or email address."]));
		die();
		
	} 

	// Check on username first, as customers can use emails as usernames.
	$user_data = get_user_by( 'login', $login );
	

	// If no user found, check if it login is email and lookup user based on email.
	if ( ! $user_data && is_email( $login )  ) 
	{
		$user_data = get_user_by( 'email', $login );
	}

	$errors = new WP_Error();

	do_action( 'lostpassword_post', $errors );

	if ( $errors->get_error_code() )
	{
		echo json_encode( array( 'status'=>false, 'message'=> $errors->get_error_message()));
		die();
	}

	if ( ! $user_data ) {
		echo json_encode( array( 'status'=>false, 'message'=> ['Invalid username or email.'], 'message_jp' => ['ユーザー名またはメールアドレスが正しくありません']));
		die();
	}

	if ( is_multisite() && ! is_user_member_of_blog( $user_data->ID, get_current_blog_id() ) )
	{
		echo json_encode( array( 'status'=>false, 'message'=> ['Invalid username or email.'],'message_jp' => ['ユーザー名またはメールアドレスが正しくありません']));
		die();
	}

	// Redefining user_login ensures we return the right case in the email.
	$user_login = $user_data->user_login;

	do_action( 'retrieve_password', $user_login );

	$allow = apply_filters( 'allow_password_reset', true, $user_data->ID );

	if ( ! $allow )
	{
		echo json_encode( array( 'status'=>false, 'message'=> ['Password reset is not allowed for this user']));
		die();
	} 

	if ( is_wp_error( $allow ) )
	{
		echo json_encode( array( 'status'=>false, 'message'=> $allow->get_error_message()));
		die();
	}

	// Redefining user_login ensures we return the right case in the email.
	$user_login = $user_data->user_login;
	$user_email = $user_data->user_email;
	$key = get_password_reset_key( $user_data );

	if ( is_wp_error( $key ) )
	{
		echo json_encode( array( 'status'=>false, 'message'=> $key->get_error_message()));
		die();
	}


	/*
	 * The blogname option is escaped with esc_html on the way into the database
	 * in sanitize_option we want to reverse this for the plain text arena of emails.
	 */
	$site_name = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );

	$message  = __( '※本メールは【プロスタイル札幌宮の森】公式サイトのパスワード再設定処理の自動送信メールです。'). "\r\n\r\n";

    $message .= __('---------------------------------------------------------------------------------'). "\r\n";
    $message .= __('ログインパスワード再設定のお手続きはまだ完了しておりません。'). "\r\n";
    $message .= __('---------------------------------------------------------------------------------'). "\r\n";
    $message .= __('下記リンクをクリックしますとパスワードの再設定画面に遷移いたします。こちらより新しいパスワードをご設定くださいますようお願いいたします。') . "\r\n\r\n";
	/* translators: %s: site name */
	$message .= __( '▼パスワード再設定URL') . "\r\n";
	$message .= '<' . network_site_url( "lostpassword?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n";
	/* translators: %s: user login */
	$message .= __('※上記リンクがクリックできない場合は、大変お手数ですがURLをコピーしてお使いのブラウザのアドレスバーに貼り付けていただき、パスワード再設定画面へお進みください。'). "\r\n\r\n";

    $message .= __('※本メールの送信アドレスは送信専用です。こちらにご返信いただいてもご回答できませんのでご了承ください。'). "\r\n";
    $message .= __('※本メールにお心当たりのない方は、お手数ではございますがこのメールを破棄ください。'). "\r\n";
    $message .= __('■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□'). "\r\n";
    $message .= __('プロスタイル宮の森｜お問い合わせ窓口') . "\r\n";
	$message .= __( 'フリーダイヤル：0120-853-133') . "\r\n";
	$message .= __( '※携帯電話・PHSからもご利用いただけます') . "\r\n";
	$message .= __( '営業時間：　10:00～18:00') . "\r\n";
    $message .= __( '定休日：　火・水曜日　※祝祭日は営業いたします') . "\r\n";
	$message .= __( 'お問い合わせ窓口：miyanomori@propolife.co.jp' ) . "\r\n";
	$message .= __( 'お問い合わせフォーム' ) . "\r\n";
	$message .= '<' . network_site_url( "contactus", 'login' ) . ">\r\n";
	$message .= __( '<売主・共同事業主>　株式会社クロニクル' ) . "\r\n";
	$message .= __( '<共同事業主>　株式会社プロスタイル' ) . "\r\n";
	$message .= __( '■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□' ) . "\r\n";
	/* translators: Password reset email subject. %s: Site name */
	$title =  __( '【プロスタイル札幌宮の森】公式サイト｜パスワード再設定' );

	/**
	 * Filters the subject of the password reset email.
	 *
	 * @since 2.8.0
	 * @since 4.4.0 Added the `$user_login` and `$user_data` parameters.
	 *
	 * @param string  $title      Default email title.
	 * @param string  $user_login The username for the user.
	 * @param WP_User $user_data  WP_User object.
	 */
	$title = apply_filters( 'retrieve_password_title', $title, $user_login, $user_data );

	/**
	 * Filters the message body of the password reset mail.
	 *
	 * If the filtered message is empty, the password reset email will not be sent.
	 *
	 * @since 2.8.0
	 * @since 4.1.0 Added `$user_login` and `$user_data` parameters.
	 *
	 * @param string  $message    Default mail message.
	 * @param string  $key        The activation key.
	 * @param string  $user_login The username for the user.
	 * @param WP_User $user_data  WP_User object.
	 */
	$message = apply_filters( 'retrieve_password_message', $message, $key, $user_login, $user_data );

	if ( $message && !wp_mail( $user_email, wp_specialchars_decode( $title ), $message ) )
	{
		echo json_encode( array( 'status'=>false, 'message'=> ['The email could not be sent.Possible reason: your host may have disabled the mail() function.']));
		die();
	}

	echo json_encode( array( 'status'=>true, 'message'=> "Reset Password successful!! Please check email to create the new password  ", 'message_jp' => "パスワードのリセットに成功しました。メールをご確認いただき、新しいパスワードを作成ください" ));
	die();
}

function get_nav_lang($isMobile=false){
    global $q_config;

    if(function_exists('qtranxf_getLanguage')){
		$currentLanguage = qtranxf_getLanguage();
		$currentLangName = strtoupper(qtranxf_getLanguageNameNative( $currentLanguage ));

		$classBoxLang = (!$isMobile) ? '' : 'sm';
		$classNavLink = (!$isMobile) ? '' : 'btnLang';

		$locale = get_locale();
		$lang = substr( $locale, 3, 4 );
          
		echo '<a class="nav-link dropdown-toggle '.$classNavLink.'" onclick="return false;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$lang.'<i class="fa fa-angle-down fa-lg"></i></a>';
		echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
		foreach ( qtranxf_getSortedLanguages() as $language ) {
			$name 	 = strtoupper(qtranxf_getLanguageNameNative( $language ));
			$locale = $q_config['locale'][ $language ];
			$lang = substr( $locale, 3, 4 );
			echo '<a class="dropdown-item" href="' . qtranxf_convertURL( '', $language, false, true ) . '">' . $lang . '</a>';
		}
		echo '</div>';
	}
}

add_action('miyanomori_nav_language','get_nav_lang');

add_shortcode( "Miyanomori_Blogs","miyanomori_blogs_type");

function miyanomori_blogs_type($atts){
	extract(shortcode_atts( array(
		'type' => 'small_image',
		"ignore_sticky_posts" => "top",
		"orderby" => "ID",
		"order" => "ASC"
		), $atts));

	if(get_query_var('paged')):
		$paged = get_query_var('paged');
	elseif(get_query_var('page')):
		$paged = get_query_var('page');
	else:
		$paged = 1;
	endif;

	$args = array(
		'post_type' 			=> 'post',
		'orderby' => $orderby,
		'order'   => $order,
		'paged' => $paged,
	);	

	

	$blogs = new WP_Query($args);	
	ob_start();
	$maxpage = $blogs->max_num_pages;
	if($blogs->have_posts()):?>
		<div class="content_blog">
			<?php while ($blogs->have_posts()):?>
				<?php $blogs->the_post(); ?>
				<?php get_template_part( 'template-parts/content'); ?>
			<?php 
				endwhile;
				wp_reset_postdata();
				$total = $blogs->max_num_pages;
			?>
			<div class="pagenav_box">
				<div class="pagenavigation">
					<span class="total-on-page"><?= ($paged ? $paged : 1).' / '.$total?></span>
					<?php 
						$GLOBALS['wp_query']->max_num_pages = $blogs->max_num_pages;
		                // the_posts_pagination( array(
		                //    'mid_size' => 2,
		                //    'end_size' => 0,
		                //    'prev_text' => __( '«', 'green' ),
		                //    'next_text' => __( '»', 'green' ),
		                //    'screen_reader_text' => ' ',
		                //    'current' => ($paged ? $paged : 1),
		                //    'total' => $blogs->max_num_pages,
		                // ) );
						$pag_args1 = array(
							'type'         	=> 'array',
							'end_size'     	=> 0,
							'mid_size'      => 2,
							'add_fragment'  => '',
							'show_all' 		=> false,
						    'current' 		=> $paged,
						    'total'   		=> $blogs->max_num_pages,
						    'prev_text'		=> '«',
						    'next_text'		=> '»',
						);
	    				$paginate_links = paginate_links( $pag_args1 );
	    				$c=$pag_args1['current'];
	    				$dots3 =  __( '&hellip;' );


	    				$allowed=[
	    					'current',
						    'prev ',
						    'next ',
						    $dots3,
						    sprintf( '/page/%d/', $c+1 ),
						    sprintf( '/page/%d/', $c+2 ),
						    sprintf( '/page/%d/', $c-1 ),
						    sprintf( '/page/%d/', $c+2 ),
	    				];

	    				$paginate_links=array_filter(
					        $paginate_links,
						    function( $value ) use ( $allowed ) {
						        foreach( (array) $allowed as $tag )
						        {			        	
						            if( false !== strpos( $value, $tag ) )
						                return true;
						        }
						        return false;
						    }
						);

	    				if( ! empty( $paginate_links ) )
					    printf(
					        "%s",
					        join( "", $paginate_links )
					    );
					?>
				</div>
			</div>
		</div>
		
	<?php endif; /* end if*/ 		
	
	$content=ob_get_contents();
	ob_get_clean();
	return $content;
}


/**
 * Generates custom logout URL
 */
function getLogoutUrl($redirectUrl = ''){
    if(!$redirectUrl) $redirectUrl = site_url();
    $return = str_replace("&amp;", '&', wp_logout_url($redirectUrl));
    return $return;
}

/**
 * Bypass logout confirmation on nonce verification failure
 */
function logout_without_confirmation($action, $result){
    if(!$result && ($action == 'log-out')){ 
        wp_safe_redirect(getLogoutUrl()); 
        exit(); 
    }
}
add_action( 'check_admin_referer', 'logout_without_confirmation', 1, 2);

/**
 * Filter the new user notification email.
 *
 * @param $email array New user notification email parameters.
 * @return $email array New user notification email parameters.
 */
function new_user_notification_email_callback( $email )
{
	preg_match("/http(.)*\s/i", $email['message'] ,$url_login);
	$url_login = str_replace("wp-login.php?action","lostpassword?action", $url_login[0] ); 

	$message  = __( '※本メールは【プロスタイル札幌宮の森】公式サイトのパスワード設定の自動送信メールです。'). "\r\n\r\n";

    $message .= __('---------------------------------------------------------------------------------'). "\r\n";
    $message .= __('会員登録のお手続きはまだ完了しておりません'). "\r\n";
    $message .= __('---------------------------------------------------------------------------------'). "\r\n\r\n";

    $message .= __('下記リンクをクリックしますとパスワードの再設定画面に遷移いたします。こちらより新しいパスワードをご設定くださいますようお願いいたします。') . "\r\n\r\n";
	/* translators: %s: site name */
	$message .= __( '▼パスワード設定URL') . "\r\n";
	$message .= '<' .$url_login . ">\r\n";
	/* translators: %s: user login */
	$message .= __('※上記リンクがクリックできない場合は、大変お手数ですがURLをコピーしてお使いのブラウザのアドレスバーに貼り付けていただき、パスワード再設定画面へお進みください。'). "\r\n\r\n";

	$message .= __('この度は新築分譲マンション【プロスタイル札幌宮の森】にご関心をお寄せいただき、誠にありがとうございます。'). "\r\n\r\n";

	$message .= __('【プロスタイル札幌宮の森】公式サイトでは、ご登録いただいたお客様だけがご覧いただける物件情報他、各種限定コンテンツをご案内してまいります。情報は順次追加・更新してまいりますのでどうぞご期待くださいませ。お知りになりたいことがございましたら、お気軽にお問い合わせいただければ幸いでございます。'). "\r\n\r\n";

	$message .= __('どうぞ【プロスタイル札幌宮の森】をご検討賜りますようお願い申し上げます。'). "\r\n\r\n";

	$message .= __('▼ご登録メールアドレス'). "\r\n";
	$message .= '<' .$email['to'] . ">\r\n\r\n";

	$message .= __('▼公式サイト'). "\r\n";
	$message .= '<' .network_site_url() . ">\r\n\r\n";

	$message .= __('▼資料請求、来場予約、その他お問い合わせはこちら'). "\r\n";
	$message .= '<' .network_site_url("contactus") . ">\r\n\r\n";

    $message .= __('※本メールの送信アドレスは送信専用です。こちらにご返信いただいてもご回答できませんのでご了承ください。'). "\r\n";
    $message .= __('※本メールにお心当たりのない方は、お手数ではございますがこのメールを破棄ください。'). "\r\n";
    $message .= __('■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□'). "\r\n";
    $message .= __('プロスタイル宮の森｜お問い合わせ窓口') . "\r\n";
	$message .= __( 'フリーダイヤル：0120-853-133') . "\r\n";
	$message .= __( '※携帯電話・PHSからもご利用いただけます') . "\r\n";
	$message .= __( '営業時間：　10:00～18:00') . "\r\n";
    $message .= __( '定休日：　火・水曜日　※祝祭日は営業いたします') . "\r\n";
	$message .= __( 'お問い合わせ窓口：miyanomori@propolife.co.jp' ) . "\r\n";
	$message .= __( 'お問い合わせフォーム' ) . "\r\n";
	$message .= '<' . network_site_url( "contactus", 'login' ) . ">\r\n";
	$message .= __( '<売主・共同事業主>　株式会社クロニクル' ) . "\r\n";
	$message .= __( '<共同事業主>　株式会社プロスタイル' ) . "\r\n";
	$message .= __( '■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□' ) . "\r\n";

    $email['message'] = $message;
    $email['subject'] = '【プロスタイル札幌宮の森】公式サイト｜パスワード設定のお願い';
   
    return $email;
}
 
add_filter( 'wp_new_user_notification_email', 'new_user_notification_email_callback' );


// add_action( 'admin_enqueue_scripts', 'miyanomori_admin_enqueue' );

// /**
//  * Register and enqueue Scripts and Styles
//  */
// function miyanomori_admin_enqueue()
// {
//     wp_register_style(
//         'miyanomori_admin_style', // Style handle
//         get_template_directory_uri()  . '/assets/admin/css/miyanomori-script.css', // Style URL
//         null, // Dependencies
//         null, // Version
//         'all' // Media
//     );
//     wp_enqueue_style( 'miyanomori_admin_style' );

//     wp_register_script(
//         'miyanomori_admin_script', // Script handle
//         get_template_directory_uri()  . '/assets/admin/js/miyanomori-script.js', // Script URL
//         array( 'jquery' ), // Dependencies. jQuery is enqueued by default in admin
//         null, // Version
//         true // In footer
//     );
//     wp_enqueue_script( 'miyanomori_admin_script' );
// }
