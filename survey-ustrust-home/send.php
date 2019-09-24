<?php
session_start();

mb_language('ja');
mb_internal_encoding('UTF-8');
error_reporting(E_ALL & ~E_NOTICE);

require 'digima/vendor/autoload.php';
require_once 'digima/src/Client.php';

$client = new \Digima\Client('1K7R8TLBH3');
$form = $client->makeForm('QatnK2IQdxZzB8ut20wK');

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
$to = "suzuki@comvex.co.jp";
//$to = "maco@funnypro.net";
$from_mail = "suzuki@comvex.co.jp";
$from_name = "企業名";

//メール
$admin_subject ="メールフォームよりお問合せがありました";
$customer_subject ="お問合せいただき、ありがとうございます";
$header = "From: ".mb_encode_mimeheader($from_name)."<".$from_mail.">";

//配列
$cf1='contact_field_14';
$cf2='contact_field_15';
$cf3='contact_field_16';
$cf4='contact_field_70';

$q1 = $_POST[$cf1];
$q2 = $_POST[$cf2];
$q3 = $_POST[$cf3];
$email = $_POST['email'];
$note = $_POST[$cf4];

$inputArray = array(
	'q1' => $q1,
	'q2' => $q2,
	'q3' => $q3,
	'email' => $email,
	'note' => $note
);

$itemArray = array(
	'q1' => 'Q1',
	'q2' => 'Q2',
	'q3' => 'Q3',
	'email' => 'Eメールアドレス',
	'note' => 'ご質問'
);

//メール本文
$body="";
foreach ($inputArray as $key => $value){
	if($value !== null){
		$body .= $itemArray[$key]."： ".$value."\n";
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


if($q1=="詳細を聞きたい"){
	$form->contact()->groups()->push('グループ1');
}else if($q1=="将来検討したい"){
	$form->contact()->groups()->push('グループ2');
}else if($q1=="今は必要ない"){
	$form->contact()->groups()->push('グループ3');
}

$form->contact()->staticFields()->set('email', $email);
$form->contact()->customFields()->setMany(array(
	$cf1 => $q1,
	$cf2 => $q2,
	$cf3 => $q3,
	$cf4 => $note
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