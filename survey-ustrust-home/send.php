<?php
session_start();

mb_language('ja');
mb_internal_encoding('UTF-8');
error_reporting(E_ALL & ~E_NOTICE);

require 'digima/vendor/autoload.php';
require_once 'digima/src/Client.php';

$client = new \Digima\Client('DOAMPS86UN');
$form = $client->makeForm('vBXOwTk8VuWHcunYWxlK');

$form->setPageTitle('アンケートフォーム');

//フォームURL
$domain = (empty($_SERVER["HTTPS"]) ? "http://" : "https://").$_SERVER["HTTP_HOST"];
$url = $domain;

/* 機種依存文字変換 */
function replaceStr($subject){
	$search = Array('Ⅰ','Ⅱ','Ⅲ','Ⅳ','Ⅴ','Ⅵ','Ⅶ','Ⅷ','Ⅸ','Ⅹ','①','②','③','④','⑤','⑥','⑦','⑧','⑨','⑩','№','㈲','㈱');
	$replace = Array('I','II','III','IV','V','VI','VII','VIII','IX','X','(1)','(2)','(3)','(4)','(5)','(6)','(7)','(8)','(9)','(10)','No.','（有）','（株）');
	$result = str_replace($search, $replace, $subject);
	return $result;
}
/* メール送信 */
$to = "mizonokuchi@ustrust.co.jp,miyamaedaira@ustrust.co.jp";
$from_mail = "mizonokuchi@ustrust.co.jp";
$from_name = "株式会社USTRUST";

//メール
$admin_subject ="メールフォームよりお問合せがありました";
$customer_subject ="お問合せいただき、ありがとうございます";
$header = "From: ".mb_encode_mimeheader($from_name)."<".$from_mail.">";

//配列

$cf1='purchase_considerations';
$cf2='hope_question';

$q1 = $_POST[$cf1];
$q2 = $_POST[$cf2];
$email = $_POST['email'];

$inputArray = array(
	'q1' => $q1,
	'q2' => $q2,
	'email' => $email,
);

$itemArray = array(
	'q1' => 'マイホーム購入のご検討状況について',
	'q2' => 'ご希望・ご質問',
	'email' => 'Eメールアドレス',
);

//メール本文
$body="";
foreach ($inputArray as $key => $value){
	if($value !== null){
		$body .= $itemArray[$key]."：\n ".$value."\n";
	}
}

$admin_body = "メールフォームよりお問合せがありました。ご対応をお願いします。\n\n";
$admin_body .= $body;

$customer_body = "この度はお問合せをいただき、ありがとうございました。\n";
$customer_body .= "送信された内容は以下の通りです。\n\n";
$customer_body .= "----------------------------\n";
$customer_body .= $body;
$customer_body .= "----------------------------\n\n";
$customer_body .= "ご質問やご不明点などがございましたら、\n";
$customer_body .= "お気軽におたずねください。\n";
$customer_body .= "なお、このメールは送信専用アドレスよりお送りしております。\n";
$customer_body .= "ご返信いただいてもメールを受け取ることができませんのでご注意ください。\n\n";

$form->contact()->staticFields()->set('email', $email);
$form->contact()->customFields()->setMany(array(
	$cf1 => $q1,
	$cf2 => $q2,
));

$form->submit();

if($form->hasError()) {
	echo "error";
    // Loop through all the errors to check them
    foreach ($form->getErrors() as $error) {
        switch ($error->getType()) {
            case \Digima\Errors\Error::TYPE_DATA_VALIDATION_ERROR:
                // Handle validation errors
                $field = $error->getField();
                $code = $error->getCode();
                $message = $error->getMessage();
                echo $code;
                echo $field;
                break;
            case \Digima\Errors\Error::TYPE_REQUEST_ERROR:
                // Handle request error (authorization, service availability, etc.)
                break;
            default:
                // Handle other errors
                break;
        }
    }
}else{
	if(mb_send_mail($to,$admin_subject,$admin_body,$header)){
		if(mb_send_mail($email,$customer_subject,$customer_body,$header)){
			header("Location: ./thanks.html");
		}
	}
}
?>