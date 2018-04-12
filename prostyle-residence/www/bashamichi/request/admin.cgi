#!/usr/bin/perl
######################################################################
# MP Form Mail CGI Professional版　Ver3.2.3
# （設定用スクリプト）
# Copyright(C) futomi 2001 - 2009
# http://www.futomi.com/
######################################################################
use strict;
use CGI;
my $q = new CGI;
use lib './lib';
use Digest::Perl::MD5;
use Jcode;
$| = 1;

my $VERSION = '3.2.3';
#Copyright
my $COPYRIGHT = "futomi's CGI Cafe - MP Form Mail CGI Professional版 $VERSION";
my $COPYRIGHT1 = '<a href="http://www.futomi.com/" target="_blank">futomi\'s CGI Cafe</a>';
my $COPYRIGHT2 = '<a href="http://www.futomi.com/" target="_blank">futomi\'s CGI Cafe - MP Form Mail CGI Professional版</a>';

#セッションファイル格納ディレクトリ
my $SESSION_DIR = './session';
#セッションタイムアウト（秒）
my $SESSION_TIMEOUT = 1800;
#セッションファイル削除時間（秒）
my $SESSION_DELETE_TIME = 3600;
#Cookie名
my $COOKIE_NAME = 'mp_session';

# ファイルのパス指定
my $MP_CONF = './conf/mpconfig.cgi';
my $ITEM_CONF = './conf/itemconfig.cgi';
my $CHECK_CONF = './conf/checkconfig.cgi';
my $HELP_DIR = './lib/help';
my $SETPASS_FILE = './template/admin.setpass.html';
my $PARENT_FILE = './template/admin.parent.html';
my $MENU_FILE = './template/admin.menu.html';
my $CONF1_FILE = './template/admin.conf1.html';
my $AUTH_FILE = './template/admin.auth.html';
my $COMPLETE_FILE = './template/admin.complete.html';
my $CONF2_FILE = './template/admin.conf2.html';
my $ITEMLIST_FILE = './template/admin.itemlist.html';
my $ADDITEM_FILE = './template/admin.additem.html';
my $MODITEM_FILE = './template/admin.moditem.html';
my $CHECK_FILE = './template/admin.checklist.html';
my $ERROR_FILE = './template/admin.error.html';
my $MAILEDIT_FILE = './template/admin.maileditor.html';
my $REPLYEDIT_FILE = './template/admin.replyeditor.html';
my $LOGADMIN_FILE = './template/admin.log.html';
my $DLFORM_FILE = './template/admin.dlform.html';
my $TOP_FILE = './template/admin.top.html';
my $MAIL_FORMAT_FILE = './template/mail.txt';
my $REPLY_FORMAT_FILE = './template/reply.txt';

my $ERROR_TEMP_FILE = './template/error.html';
my $CONFIRM_TEMP_FILE = './template/confirm.html';
my $THANKS_TEMP_FILE = './template/thanks.html';
my $PASSC_FILE = './template/admin.passchange.html';
my $LOUT_FILE = './template/admin.logout.html';
my $AUTH_ERR_FILE = './template/admin.autherr.html';

my $CONFIRM_EDITOR_FILE = './template/admin.confirmeditor.html';
my $THANKS_EDITOR_FILE = './template/admin.thankseditor.html';
my $ERROR_EDITOR_FILE = './template/admin.erroreditor.html';
my $PASSC_COMPLETE_FILE = './template/admin.passcdone.html';

#禁止 name 属性の定義
my $FORBIDDEN_NAMES = 'DATE|SIRIAL|REMOTE_ADDR|REMOTE_HOST|USERAGENT';


my %CONV_RULES = (
  '1' => '全角数字と全角ハイフンを半角に変換',
  '2' => '半角数字と半角ハイフンを全角に変換',
  '3' => '全角・半角ハイフンを削除',
  '4' => '全角アルファベットを半角に変換',
  '5' => '半角アルファベットを全角に変換',
  '6' => '半角カナを全角カナに変換',
  '7' => 'メールアドレスを半角に変換',
  '8' => '全角カタカナを全角ひらがなに変換',
  '9' => '全角ひらがなを全角カタカナに変換'
);

my %RESTRICT_RULES = (
  '1' => '半角数字のみ',
  '2' => '全角数字のみ',
  '3' => '半角アルファベットのみ',
  '4' => '全角アルファベットのみ',
  '5' => '半角英数のみ',
  '6' => '全角英数のみ',
  '7' => 'メールアドレス',
  '11' => 'ハイフンなしの固定電話（半角）（例：0312345678）',
  '12' => 'ハイフンありの固定番号（半角）（例：03-1234-5678）',
  '13' => 'ハイフンなしの携帯電話（半角）（例：09012345678）',
  '14' => 'ハイフンありの携帯電話（半角）（例：090-1234-5678）',
  '15' => 'ハイフンなしのＰＨＳ　（半角）（例：07012345678）',
  '16' => 'ハイフンありのＰＨＳ　（半角）（例：070-1234-5678）',
  '17' => 'ハイフンなしの電話全般（半角）',
  '18' => 'ハイフンありの電話全般（半角）',
  '21' => 'ハイフンなしの郵便番号（半角）（例：1234567）',
  '22' => 'ハイフンありの郵便番号（半角）（例：123-4567）',
  '23' => '半角数字3桁（郵便番号の前半）',
  '24' => '半角数字4桁（郵便番号の後半）',
  '31' => '全角ひらがなのみ',
  '32' => '全角カタカナのみ',
  '41' => 'URL'
);

my $err_status = '<font color="RED">NG</font>';
my $ok_status = '<font color="GREEN">OK</font>';



#設定データ取得
my %CONF = &GetConf($MP_CONF);
#設定データのデフォルト値を定義
if($CONF{'LOG_DIR'} eq '') {
	$CONF{'LOG_DIR'} = './logs';
}

#処理内容の取得
my $action = $q->param('action');

#パスワードが設定されていなければ、パスワード設定画面を表示
if($CONF{'USER_NAME'} eq '' || $CONF{'PASSWORD'} eq '') {
	if($action eq 'setpass') {
		&SetPass;
		&PrintTemplate($AUTH_FILE);
	} else {
		unless($CONF{'PASSWORD'}) {
			&PrintTemplate($SETPASS_FILE);
			exit;
		}
	}
}
#認証
my %cookies = &GetCookie;
my $sid;
if($action eq 'auth') {
	my $user_name = $q->param('user_name');
	my $pass = $q->param('pass');
	$sid = &EntryAuth($user_name, $pass);
} elsif($cookies{$COOKIE_NAME}) {
	$sid = &SessionAuth($cookies{$COOKIE_NAME});
} else {
	&PrintTemplate($AUTH_FILE);
}

#処理分岐
if($action eq 'menu') {
	&PrintTemplate($MENU_FILE);
} elsif($action eq 'top') {
	&PrintTemplate($TOP_FILE);
} elsif($action eq 'syscheck') {
	&SysCheck;
} elsif($action eq 'conf1') {
	&PrintConf1;
} elsif($action eq 'setconf1') {
	&SetConf1;
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=conf1');
} elsif($action eq 'conf2') {
	&PrintConf2;
} elsif($action eq 'setconf2') {
	&SetConf2;
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=conf2');
} elsif($action eq 'itemlist') {
	&PrintItemlist;
} elsif($action eq 'itemaddform') {
	&PrintTemplate($ADDITEM_FILE, '', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemadd') {
	&ItemAdd;
	&PrintTemplate($COMPLETE_FILE, '追加完了しました。', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemmodform') {
	&PrintItemModForm;
} elsif($action eq 'itemmod') {
	&ItemMod;
	&PrintTemplate($COMPLETE_FILE, '修正しました。', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemdel') {
	&ItemDel;
	&PrintTemplate($COMPLETE_FILE, '削除完了しました。', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemup') {
	&ItemUp;
	&PrintItemlist;
} elsif($action eq 'itemdown') {
	&ItemDown;
	&PrintItemlist;
} elsif($action eq 'checklist') {
	&PrintChecklist;
} elsif($action eq 'checkadd') {
	&CheckAdd;
	&PrintTemplate($COMPLETE_FILE, '追加完了しました。', 'admin.cgi?action=checklist');
} elsif($action eq 'checkdel') {
	&CheckDel;
	&PrintTemplate($COMPLETE_FILE, '削除完了しました。', 'admin.cgi?action=checklist');
} elsif($action eq 'maileditor') {
	&PrintMaileditor;
} elsif($action eq 'mailedit') {
	&MailEdit;
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=maileditor');
} elsif($action eq 'replyeditor') {
	&PrintReplyeditor;
} elsif($action eq 'replyedit') {
	&ReplyEdit;
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=replyeditor');
} elsif($action eq 'confirmeditor') {
	unless($CONF{'CONFIRM_FLAG'}) {
		&ErrorPrint('確認画面を表示する設定になっていないと、このメニューはご利用いただけません。機能設定メニューの確認画面表示欄をご確認下さい。');
	}
	&PrintHtmlEditor('CONFIRM');
} elsif($action eq 'confirmedit') {
	&HtmlEdit('CONFIRM');
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=confirmeditor');
} elsif($action eq 'thankseditor') {
	unless($CONF{'THANKS_PAGE_METHOD'} eq '2') {
		&ErrorPrint('基本設定メニューの完了画面表示方法欄で「テンプレートを使ってCGIが出力」を指定しないと、このメニューはご利用いただけません。');
	}
	&PrintHtmlEditor('THANKS');
} elsif($action eq 'thanksedit') {
	&HtmlEdit('THANKS');
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=thankseditor');
} elsif($action eq 'erroreditor') {
	&PrintHtmlEditor('ERROR');
} elsif($action eq 'erroredit') {
	&HtmlEdit('ERROR');
	&PrintTemplate($COMPLETE_FILE, '設定完了しました。', 'admin.cgi?action=erroreditor');
} elsif($action eq 'logadmin') {
	unless($CONF{'LOGING_FLAG'}) {
		&ErrorPrint('ログを出力する設定になっていないと、このメニューはご利用いただけません。');
	}
	&PrintLogadmin;
} elsif($action eq 'dlform') {
	&PrintDownloadForm;
} elsif($action eq 'download') {
	&Download;
} elsif($action eq 'logdel') {
	&DeleteLog;
	&PrintTemplate($COMPLETE_FILE, '削除完了しました。', 'admin.cgi?action=logadmin');
} elsif($action eq 'help') {
	&PrintHelp;
} elsif($action eq 'logout') {
	&Logout($sid);
} elsif($action eq 'passchangeform') {
	&PrintPassChangeForm;
} elsif($action eq 'passchange') {
	&SetPass;
	&PrintPassChangeComplete;
} else {
	&PrintParentHtml($sid);
}

exit;


##### サブルーチン ###################################################

sub PrintPassChangeComplete {
	my $html = &ReadTemplate("$PASSC_COMPLETE_FILE");
	my $cookie_header = &ClearCookie($COOKIE_NAME);
	print "$cookie_header\n";
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub PrintParentHtml {
	my($sid) = @_;
	my $html = &ReadTemplate($PARENT_FILE);
	print "P3P: CP=\"NOI TAIa\"\n";
	my $cookie_header = &SetCookie($COOKIE_NAME, $sid);
	print "$cookie_header\n";
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub PrintPassChangeForm {
	my $html = &ReadTemplate($PASSC_FILE);
	$html =~ s/\$USER_NAME\$/$CONF{'USER_NAME'}/g;
	print "Content-Type: text/html; charset=Shift_JIS\n\n";
	print $html;
	exit;
}

sub Logout {
	my($sid) = @_;
	my $session_file = "${SESSION_DIR}/${sid}.cgi";
	unlink($session_file);
	my $html = &ReadTemplate($LOUT_FILE);;
	my $cookie_header = &ClearCookie($COOKIE_NAME);
	print "$cookie_header\n";
	print "Cache-Control: no-cache\n";
	print "Content-Type: text/html; charset=Shift_JIS\n\n";
	print $html;
	exit;
}

sub EntryAuth {
	my($in_user_name, $in_pass) = @_;
	if($in_user_name eq '') {
		&ErrorPrint("ユーザー名を入力して下さい。");
	} else {
		if($in_user_name =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("認証エラー");
		}
	}
	if($in_pass eq '') {
		&ErrorPrint("パスワードを入力して下さい。");
	} else {
		if($in_pass =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("認証エラー");
		}
	}
	if($CONF{'USER_NAME'} ne $in_user_name) {
		&ErrorPrint("認証エラー");
	}
	my $salt;
	if($CONF{'PASSWORD'} =~ /^\$1\$([^\$]+)\$/) {
		$salt = $1;
	} else {
		$salt = substr($CONF{'PASSWORD'}, 0, 2);
	}
	my $pass = crypt($in_pass, $salt);
	unless($pass eq $CONF{'PASSWORD'}) {
		&ErrorPrint("パスワードが違います。");
	}
	my $sid = &MakeSessionId;
	&SessionFileSweep;	#セッションファイルのお掃除
	return $sid;
}

sub SessionFileSweep {
	opendir(DIR, "$SESSION_DIR");
	my @files = readdir(DIR);
	closedir(DIR);
	my $now = time;
	for my $file (@files) {
		unless($file =~ /\.cgi/) {next;}
		my $session_file = "${SESSION_DIR}/${file}";
		my $mtime = (stat($session_file))[9];
		if($now - $mtime > $SESSION_DELETE_TIME) {
			unlink($session_file);
		}
	}
}

sub SessionAuth {
	my($sid) = @_;
	my $session_file = "${SESSION_DIR}/${sid}.cgi";
	unless(-e $session_file) {
		&AuthErrorPrint("すでにログアウトしております。");
	}
	unless(open(SESSION, "$session_file")) {
		&ErrorPrint("Can't open a session file : $!");
	}
	my($acnt, $mtime) = <SESSION>;
	close(SESSION);
	chop $acnt;
	chop $mtime;
	if(time - $mtime > $SESSION_TIMEOUT) {
		unlink($session_file);
		&AuthErrorPrint("セッションタイムアウトしました。もう一度ログオンしなおしてください。");
	}
	unless(open(SESSION, ">$session_file")) {
		&ErrorPrint("Can't open a session file : $!");
	}
	my $now = time;
	print SESSION "Administrator\n$now\n";
	close(SESSION);
	return $sid;
}

sub MakeSessionId {
	my @ip_addrs = split(/\./, $ENV{'REMOTE_ADDR'});
	for(my $i=0;$i<4;$i++) {
		my $num = sprintf("%03d", $ip_addrs[$i]);
		$ip_addrs[$i] = $num;
	}
	my $ipaddress = join("", @ip_addrs);
	my $remote_port = sprintf("%04d", $ENV{'REMOTE_PORT'});
	my $seed = $ipaddress.$remote_port.time.$ENV{'HTTP_USER_AGENT'};
	my $sid = Digest::Perl::MD5::md5_hex(Digest::Perl::MD5::md5_hex($seed));
	my $session_file = "${SESSION_DIR}/${sid}.cgi";
	if(-e $session_file) {
		&ErrorPrint("セッションファイル生成に失敗しました。再度、ログオンしなおしてみて下さい。");
	}
	unless(open(SESSION, ">$session_file")) {
		&ErrorPrint("セッションファイル生成に失敗しました。フォルダー session のパーミッションを 707 にして下さい。: $!");
	}
	my $now = time;
	print SESSION "Administrator\n";
	print SESSION "$now\n";
	close(SESSION);
	return $sid;
}

sub AuthErrorPrint {
	my($message) = @_;
	my $html = &ReadTemplate($AUTH_ERR_FILE);
	$html =~ s/\$message\$/$message/g;
	$html = &CopyRight($html);
	my $cookie_header = &ClearCookie($COOKIE_NAME);
	print "$cookie_header\n";
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub SysCheckLinePrint {
	my($title, $result, $status) = @_;
	print '<table border="0" cellspacing="0" cellpadding="0"><tr>';
	print "<td style=\"width:380px\">$title</td>";
	print "<td style=\"width:130px\">$result</td>";
	print "<td style=\"width:30px\">$status</td>";
	print '</tr></table>';
	print "\n";
}

sub SysCheck {
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
print '
<html>
<head>
  <meta http-equiv="Content-Language" content="ja">
  <meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
  <style type="text/css">
    td {
      font-size: 12px;
      height:14px;
      overflow:hidden;
      line-height:16px;
    }
    p {
      font-size: 12px;
      width: 530px;
    }
  </style>
  <title>システム診断</title>
</head>
<body bgcolor="#FFFFFF">
<p>システム診断を開始します。問題がある場合には、赤字で表\示されます。診断が完了するまでしばらくお待ちください。</p>
<hr>
';

	sleep 1;

	my $ex_uid = $>;
	my @stats = stat("./admin.cgi");
	my $owner_uid = $stats[4];
	my $executer;
	if($ex_uid eq $owner_uid) {
		$executer = 'owner';
	} else {
		$executer = 'other';
	}
	&SysCheckLinePrint('■ CGI の実行権限', $executer, $ok_status);
	print "\n";

	my $rc = &GetReturnCode("./admin.cgi");
	&SysCheckLinePrint('■ CGI ファイル ./admin.cgi の改行コード', $rc, $ok_status);
	my $perl_path = &GetPerlPath("./admin.cgi");
	&SysCheckLinePrint('■ CGI ファイル ./admin.cgi の Perl パス', $perl_path, $ok_status);
	my $permission = sprintf("%o",(stat("./admin.cgi"))[2] & 0777);
	&SysCheckLinePrint('■ CGI ファイル ./admin.cgi のパーミッション', $permission, $ok_status);
	print "\n";

	&ExistCheck('./mpmail.cgi', 'CGI ファイル');
	&ReturnCodeCheck('./mpmail.cgi', 'CGI ファイル', $rc);
	&PerlPathCheck('./mpmail.cgi', $perl_path);
	&PermissionCheck('./mpmail.cgi', $executer, $permission);
	print "\n";

	&DirExistCheck('./lib', 'ライブラリー格納フォルダ');
	&ExistCheck('./lib/Jcode.pm', '文字コード変換ライブラリー');
	&ReturnCodeCheck('./lib/Jcode.pm', '文字コード変換ライブラリー', $rc);
	&ExistCheck('./lib/Digest/Perl/MD5.pm', 'MD5モジュール');
	&ReturnCodeCheck('./lib/Digest/Perl/MD5.pm', 'MD5モジュール', $rc);
	&DirExistCheck('./lib/help', 'ヘルプファイル格納フォルダ');
	print "\n";

	&DirExistCheck('./session', 'セッションファイル格納フォルダ');
	&DirWriteCheck('./session', 'セッションファイル格納フォルダ');
	print "\n";

	&DirExistCheck("$CONF{'LOG_DIR'}", 'ログ格納フォルダ');
	&DirWriteCheck("$CONF{'LOG_DIR'}", 'ログ格納フォルダ');
	print "\n";

	&DirExistCheck('./attachment', '添付格納フォルダ');
	&DirWriteCheck('./attachment', '添付格納フォルダ');
	print "\n";

	&DirExistCheck('./conf', '各種設定格納フォルダ');
	&DirWriteCheck('./conf', '各種設定格納フォルダ');
	&ExistCheck($MP_CONF, 'CGI 設定ファイル');
	&ReturnCodeCheck($MP_CONF, 'CGI 設定ファイル', $rc);
	&WriteCheck($MP_CONF, 'CGI 設定ファイル');
	&ExistCheck($ITEM_CONF, '入力項目設定ファイル');
	&ReturnCodeCheck($ITEM_CONF, '入力項目設定ファイル', $rc);
	&WriteCheck($ITEM_CONF, '入力項目設定ファイル');
	&ExistCheck($CHECK_CONF, '再入力設定ファイル');
	&ReturnCodeCheck($CHECK_CONF, '再入力設定ファイル', $rc);
	&WriteCheck($CHECK_CONF, '再入力設定ファイル');
	print "\n";

	&DirExistCheck('./template', 'テンプレート格納フォルダ');
	&ExistCheck($MAIL_FORMAT_FILE, 'メールテンプレート');
	&ReturnCodeCheck($MAIL_FORMAT_FILE, 'メールテンプレート', $rc);
	&WriteCheck($MAIL_FORMAT_FILE, 'メールテンプレート');

	&ExistCheck($REPLY_FORMAT_FILE, '自動返信メールテンプレート');
	&ReturnCodeCheck($REPLY_FORMAT_FILE, '自動返信メールテンプレート', $rc);
	&WriteCheck($REPLY_FORMAT_FILE, '自動返信メールテンプレート');

	&ExistCheck($CONFIRM_TEMP_FILE, '確認画面テンプレート');
	&ReturnCodeCheck($CONFIRM_TEMP_FILE, '確認画面テンプレート', $rc);
	&WriteCheck($CONFIRM_TEMP_FILE, '確認画面テンプレート');

	&ExistCheck($ERROR_TEMP_FILE, 'エラー画面テンプレート');
	&ReturnCodeCheck($ERROR_TEMP_FILE, 'エラー画面テンプレート', $rc);
	&WriteCheck($ERROR_TEMP_FILE, 'エラー画面テンプレート');

	&ExistCheck($THANKS_TEMP_FILE, '完了画面テンプレート');
	&ReturnCodeCheck($THANKS_TEMP_FILE, '完了画面テンプレート', $rc);
	&WriteCheck($THANKS_TEMP_FILE, '完了画面テンプレート');

	&ExistCheck($ADDITEM_FILE);
	&ExistCheck($AUTH_FILE);
	&ExistCheck($AUTH_ERR_FILE);
	&ExistCheck($CHECK_FILE);
	&ExistCheck($COMPLETE_FILE);
	&ExistCheck($CONF1_FILE);
	&ExistCheck($CONF2_FILE);
	&ExistCheck($CONFIRM_EDITOR_FILE);
	&ExistCheck($DLFORM_FILE);
	&ExistCheck($ERROR_FILE);
	&ExistCheck($ERROR_EDITOR_FILE);
	&ExistCheck($ITEMLIST_FILE);
	&ExistCheck($LOGADMIN_FILE);
	&ExistCheck($LOUT_FILE);
	&ExistCheck($MAILEDIT_FILE);
	&ExistCheck($MENU_FILE);
	&ExistCheck($MODITEM_FILE);
	&ExistCheck($PARENT_FILE);
	&ExistCheck($PASSC_COMPLETE_FILE);
	&ExistCheck($PASSC_FILE);
	&ExistCheck($REPLYEDIT_FILE);
	&ExistCheck($SETPASS_FILE);
	&ExistCheck($THANKS_EDITOR_FILE);
	&ExistCheck($TOP_FILE);

	print "\n";

	print $q->hr;
	print "診断完了<br>\n";
	print "</tt></pre>\n";
	print "</body>\n";
	print "</html>\n\n";

	exit;
}

sub PermissionCheck {
	my($file, , $executer, $permission) = @_;
	my $permission2 = sprintf("%o",(stat("$file"))[2] & 0777);
	my $title = "■ CGI ファイル $file の パーミッション";
	my $result = "$permission2";
	my $status;
	my $err_str;
	my $err_flag = 0;
	if($permission2 eq '0' || $permission2 eq '') {
		$result = "診断不可";
		$status = "";
	} elsif($permission eq $permission2) {
		$status = $ok_status;
	} else {
		if($executer eq 'owner') {
			unless($permission2 =~ /^(7|5)/) {
				$err_str = &SysCheckError("$file の $executer に実行権限がありません。パーミッションを $permission のように $executer に実行権を与えるように設定してください。");
				$status = $err_status;
				$err_flag = 1;
			} else {
				$status = $ok_status;
			}
		} elsif($executer eq 'other') {
			unless($permission2 =~ /(7|5)$/) {
				$err_str = &SysCheckError("$file の $executer に実行権限がありません。パーミッションを $permission のように $executer に実行権を与えるように設定してください。");
				$status = $err_status;
				$err_flag = 1;
			} else {
				$status = $ok_status;
			}
		}
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub PerlPathCheck {
	my($file, $perl_path) = @_;
	my $perl_path2 = &GetPerlPath("$file");
	my $title = "■ CGI ファイル $file の Perl パス設定";
	my $result = "$perl_path2";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if($perl_path eq '' || $perl_path2 eq '') {
		$result = "診断不可";
		$status = "";
	} elsif($perl_path2 eq $perl_path) {
		$status = $ok_status;
	} else {
		$err_str = &SysCheckError("$file の Perl パスが正しく設定されていません。$file の 1 行目を「$perl_path」に書き換えてください。");
		$err_flag = 1;
		$status = $err_status;
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}

}

sub WriteCheck {
	my($file, $str) = @_;
	my $title = "■ $str $file への書込み";
	my $result = "";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if(open(FILE, ">>$file")) {
		$status = $ok_status;
		close(FILE);
	} else {
		$status = $err_status;
		$err_flag = 1;
		$err_str = &SysCheckError("$file のパーミッションが正しくありません。606 もしくは 666 に変更してください。");
	}
	$result = sprintf("%o",(stat("$file"))[2] & 0777);
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub DirWriteCheck {
	my($dir, $str) = @_;
	my $test_file = "$dir/check.txt";
	my $title = "■ $str $dir 内のファイル書込み";
	my $result = sprintf("%o",(stat("$dir"))[2] & 0777);
	my $status;
	my $err_flag = 0;
	my $err_str;
	if(-e "$dir") {
		if(open(TEST, ">$test_file")) {
			$status = $ok_status;
			close(TEST);
			unlink("$test_file");
		} else {
			$status = $err_status;
			$err_str = &SysCheckError("ディレクトリ $dir のパーミッションが正しくありません。707 もしくは 777 に変更してください。");
			$err_flag = 1;
		}
		&SysCheckLinePrint($title, $result, $status);
		if($err_flag) {
			print "$err_str\n";
		}
	} else {
		$result = "診断不可";
		$status = "";
		&SysCheckLinePrint($title, $result, $status);
	}
}

sub DirExistCheck {
	my($dir, $str) = @_;
	my $title = "■ $str $dir の存在";
	my $result = "";
	my $status;
	my $err_flag = 0;
	my $err_str;

	if(opendir(DIR, "$dir")) {
		$status = $ok_status;
		closedir(DIR);
	} else {
		$status = $err_status;
		$err_flag = 1;
		$err_str = &SysCheckError("ディレクトリ $dir がありません。サーバ上に $dir を作成してください。");
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub ExistCheck {
	my($file, $str) = @_;
	my $title = "■ $str $file の存在";
	my $result = "";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if(-e "$file") {
		$status = $ok_status;
	} else {
		$err_flag = 1;
		$status = $err_status;
		$err_str = &SysCheckError("$file がありません。サーバに $file を アップロードしてください。");
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub ReturnCodeCheck {
	my($file, $str, $rc) = @_;
	my $rc2 = &GetReturnCode("$file");
	my $title = "■ $str $file の改行コード";
	my $result = "$rc2";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if($rc2 eq '' || $rc eq '') {
		$result = "診断不可";
		$status = "";
	} elsif($rc2 eq $rc) {
		$status = $ok_status;
	} else {
		$status = $err_status;
		$err_flag = 1;
		$err_str = &SysCheckError("$file の改行コードが正しくありません。$file を ASCII モードで上書きアップロードしてください。");
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub GetPerlPath {
	my($file) = @_;
	if(open(FILE, "$file")) {
		my @lines = <FILE>;
		my $perl_path = shift @lines;
		chop $perl_path;
		close(FILE);
		return $perl_path;
	} else {
		return '';
	}
}

sub GetReturnCode {
	my($file) = @_;

	my $size = -s "$file";
	my $str;
	if(open(FILE, "$file")) {
		sysread(FILE, $str, $size);
		close(FILE);
	} else {
		return '';
	}

	my $return_code;
	if($str =~ /\x0D\x0A/) {
		$return_code = 'CRLF';
	} elsif($str =~ /\x0D/) {
		$return_code = 'CR';
	} elsif($str =~ /\x0A/) {
		$return_code = 'LF';
	}
	return $return_code;
}

sub SysCheckError {
	my($str) = @_;
	my $err = "<blockquote>\n";
	$err .= "<table border=\"0\" width=\"500\"><tr><td>\n";
	$err .= "<div><font color=\"RED\"><tt>\n";
	$err .= "$str\n";
	$err .= "</tt></font></div>\n";
	$err .= "</td></tr></table>\n";
	$err .= "</blockquote>\n";
	return $err;
}

sub PrintHelp {
	my $item = $q->param('item');
	if($item =~ /[^a-zA-Z0-9\_\-]/) {
		&ErrorPrint("不正なリクエストです。");
	}
	if($item eq '') {
		&ErrorPrint("不正なリクエストです。");
	}
	my $file = "${HELP_DIR}/${item}.html";
	my $html = &ReadTemplate($file);
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub DeleteLog {
	my @target_logs = $q->param('delfile');
	unless(@target_logs) {
		&ErrorPrint("削除したいログファイルを選択して下さい。");
	}
	for my $log (@target_logs) {
		unless(-e "$CONF{'LOG_DIR'}/$log") {
			&ErrorPrint("ログファイル <tt>$CONF{'LOG_DIR'}/$log</tt> が存在しません。");
		}
	}
	for my $log (@target_logs) {
		unlink("$CONF{'LOG_DIR'}/$log") || &ErrorPrint("ログファイル <tt>$CONF{'LOG_DIR'}/$log</tt> の削除に失敗しました。: $!");
	}
}

sub Download {
	my $file = $q->param('LOGFILE');
	my $ext = $q->param('EXT');
	my $return_code = $q->param('RETURN_CODE');
	my $char_code = $q->param('CHAR_CODE');
	my $first_line = $q->param('FIRST_LINE');

	my $file_size = -s "$CONF{'LOG_DIR'}/$file";
	open(LOG, "$CONF{'LOG_DIR'}/$file") || &ErrorPrint("ログファイル <tt>$file</tt> をオープンできませんでした。 : $!");
	my $filestr;
	sysread(LOG, $filestr, $file_size);
	close(LOG);

	if($char_code eq 'EUC') {
		&Jcode::convert(\$filestr, 'euc', 'sjis');
	} elsif($char_code eq 'JIS') {
		&Jcode::convert(\$filestr, 'jis', 'sjis');
	}

	my $rc;
	if($return_code eq 'CRLF') {
		$rc = "\x0D\x0A";
	} elsif($return_code eq 'CR') {
		$rc = "\x0D";
	} elsif($return_code eq 'LF') {
		$rc = "\x0A";
	} else {
		$rc = "\x0D\x0A";
	}
	$filestr =~ s/\n/$rc/g;

	if($first_line) {
		my %item_data = &GetConf($ITEM_CONF);
		#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称
		my @fields;
		if($first_line eq '1') {
			@fields = ('DATE');
			if($CONF{'SIRIAL_FLAG'}) {
				push(@fields, 'SIRIAL');
			}
		} elsif($first_line eq '2') {
			@fields = ('日付');
			if($CONF{'SIRIAL_FLAG'}) {
				push(@fields, 'シリアル');
			}
		}
		for my $no (sort{$a<=>$b} keys %item_data) {
			my @data = split(/<>/, $item_data{$no});
			if($first_line eq '1') {
				#name属性値を付加する
				push(@fields, $data[0]);
			} elsif($first_line eq '2') {
				#項目名を付加する
				push(@fields, $data[4]);
			}
		}
		if($first_line eq '1') {
			push(@fields, 'REMOTE_ADDR', 'REMOTE_HOST', 'USERAGENT');
		} elsif($first_line eq '2') {
			push(@fields, 'IPアドレス', 'ホスト名', 'ユーザーエージェント');
		}
		my $delimiter;
		if($CONF{'DELIMITER'} eq '1') {
			$delimiter = ',';
		} elsif($CONF{'DELIMITER'} eq '2') {
			$delimiter = ' ';
		} elsif($CONF{'DELIMITER'} eq '3') {
			$delimiter = "\t";
		} else {
			$delimiter = ',';
		}
		my $line = join("$delimiter", @fields);
		if($char_code eq 'EUC') {
			&Jcode::convert(\$line, 'euc', 'sjis');
		} elsif($char_code eq 'JIS') {
			&Jcode::convert(\$line, 'jis', 'sjis');
		}
		$filestr = "${line}${rc}${filestr}";
	}

	my $size = length($filestr);
	$file =~ s/\.cgi$/\.$ext/;

	print "Content-Type: application/octet-stream\n";
	print "Content-Disposition: attachment; filename=$file\n";
	print "Content-length: $size\n";
	print "\n";
	print $filestr;
	exit;
}

sub CopyRight {
	my($str) = @_;
	$str =~ s/\$COPYRIGHT\$/$COPYRIGHT/g;
	$str =~ s/\$COPYRIGHT1\$/$COPYRIGHT1/g;
	$str =~ s/\$COPYRIGHT2\$/$COPYRIGHT2/g;
	return $str;
}

sub PrintDownloadForm {
	my $size = -s $DLFORM_FILE;
	my $html = &ReadTemplate($DLFORM_FILE);
	my $targetfile = $q->param('file');
	opendir(DIR, "$CONF{'LOG_DIR'}") || &ErrorPrint("ログ格納ディレクトリ <tt>$CONF{'LOG_DIR'}</tt> をオープンできませんでした。 : $!");
	my @files = readdir(DIR);
	close(DIR);
	my $liststr;
	for my $file (sort {$b cmp $a} @files) {
		unless($file =~ /^maillog[0-9\.\-]*\.cgi$/) {
			next;
		}
		if($file eq $targetfile) {
			$liststr .= "<option valeu=\"$file\" selected>$file</option>\n";
		} else {
			$liststr .= "<option valeu=\"$file\">$file</option>\n";
		}
	}
	$html =~ s/\$LIST\$/$liststr/g;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub PrintLogadmin {
	my $size = -s $LOGADMIN_FILE;
	my $html = &ReadTemplate($LOGADMIN_FILE);
	opendir(DIR, "$CONF{'LOG_DIR'}") || &ErrorPrint("ログ格納ディレクトリ <tt>$CONF{'LOG_DIR'}</tt> をオープンできませんでした。 : $!");
	my @files = readdir(DIR);
	close(DIR);

	my %recordnum_hash = ();
	my %size_hash = ();
	for my $file (@files) {
		unless($file =~ /^maillog[0-9\.\-]*\.cgi$/) {
			next;
		}
		my $size = -s "$CONF{'LOG_DIR'}/$file";
		$size_hash{$file} = $size;
		if(open(LOG, "$CONF{'LOG_DIR'}/$file")) {
			my $num = 0;
			while(<LOG>) {
				$num ++;
			}
			close(LOG);
			$recordnum_hash{$file} = $num;
		}

	}
	my $liststr;
	for my $file (sort {$b cmp $a} @files) {
		unless($file =~ /^maillog[0-9\.\-]*\.cgi$/) {
			next;
		}
		$liststr .= "<tr>\n";
		$liststr .= "  <td bgcolor=\"#FFFFFF\"><a href=\"admin.cgi?action=dlform&file=$file\">$file</a></td>\n";
		$liststr .= "  <td bgcolor=\"#FFFFFF\" align=\"right\">$recordnum_hash{$file}</td>\n";
		$liststr .= "  <td bgcolor=\"#FFFFFF\" align=\"right\">$size_hash{$file} byte</td>\n";
		$liststr .= "  <td bgcolor=\"#FFFFFF\"><input type=\"checkbox\" name=\"delfile\" value=\"$file\"></td>\n";
		$liststr .= "</tr>\n";
	}
	$html =~ s/\$LIST\$/$liststr/g;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}


sub ReplyEdit {
	my $REPLY_FLAG = $q->param('REPLY_FLAG');
	my $FROM_ADDR_FOR_REPLY = $q->param('FROM_ADDR_FOR_REPLY');
	my $SENDER_NAME_FOR_REPLY = $q->param('SENDER_NAME_FOR_REPLY');
	my $SUBJECT_FOR_REPLY = $q->param('SUBJECT_FOR_REPLY');

	if($REPLY_FLAG) {
		unless($FROM_ADDR_FOR_REPLY) {
			&ErrorPrint("自動返信機能\を使う場合には、自動返信メール用送信元メールアドレスを設定してください。");
		}
		unless($SUBJECT_FOR_REPLY) {
			&ErrorPrint("自動返信機能\を使う場合には、返信メールのサブジェクトを設定してください。");
		}
	} else {
		&ErrorPrint("自動返信機能\を使わない設定の場合、返信メールの編集はできません。");
	}
	if($FROM_ADDR_FOR_REPLY) {
		$FROM_ADDR_FOR_REPLY = &ConvZen2Han($FROM_ADDR_FOR_REPLY);
		$FROM_ADDR_FOR_REPLY =~ s/^\s*//;
		$FROM_ADDR_FOR_REPLY =~ s/\s*$//;
		&MailAddressCheck($FROM_ADDR_FOR_REPLY, '自動返信メール用送信元メールアドレス');
	}

	$CONF{'REPLY_FLAG'} = $REPLY_FLAG;
	$CONF{'FROM_ADDR_FOR_REPLY'} = $FROM_ADDR_FOR_REPLY;
	$CONF{'SENDER_NAME_FOR_REPLY'} = $SENDER_NAME_FOR_REPLY;
	$CONF{'SUBJECT_FOR_REPLY'} = $SUBJECT_FOR_REPLY;
	&WriteConfData;

	my $MAIL_FORMAT = $q->param('MAIL_FORMAT');
	$MAIL_FORMAT = &UnifyReturnCode($MAIL_FORMAT);
	open(MAIL, ">$REPLY_FORMAT_FILE") || &ErrorPrint("メールフォーマットファイル <tt>$REPLY_FORMAT_FILE</tt> の書込オープンに失敗しました。<tt>$REPLY_FORMAT_FILE</tt> と、ディレクトリ「<tt>template</tt>」のパーミッションを再確認して下さい。");
	print MAIL $MAIL_FORMAT;
	close(MAIL);
}


sub PrintReplyeditor {
	my $size = -s $REPLYEDIT_FILE;
	my $html = &ReadTemplate($REPLYEDIT_FILE);
	my $mailsize = -s $REPLY_FORMAT_FILE;
	my $mailformat = &ReadTemplate($REPLY_FORMAT_FILE);
	$mailformat =~ s/\</&lt;/g;
	$mailformat =~ s/\>/&gt;/g;
	$html =~ s/\$MAIL_FORMAT\$/$mailformat/;
	if($CONF{'REPLY_FLAG'}) {
		$html =~ s/\$REPLY_FLAG1\$/ selected/;
		$html =~ s/\$REPLY_FLAG0\$//;
	} else {
		$html =~ s/\$REPLY_FLAG1\$//;
		$html =~ s/\$REPLY_FLAG0\$/ selected/;
	}
	$html =~ s/\$FROM_ADDR_FOR_REPLY\$/$CONF{'FROM_ADDR_FOR_REPLY'}/g;
	$html =~ s/\$SENDER_NAME_FOR_REPLY\$/$CONF{'SENDER_NAME_FOR_REPLY'}/g;
	$html =~ s/\$SUBJECT_FOR_REPLY\$/$CONF{'SUBJECT_FOR_REPLY'}/g;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub MailEdit {
	my $FORMAT_CUSTOM_FLAG = $q->param('FORMAT_CUSTOM_FLAG');
	unless($FORMAT_CUSTOM_FLAG) {
		&ErrorPrint("メールを編集するには、メールフォーマットを「カスタマイズ」に設定してください。");
	}
	$CONF{'FORMAT_CUSTOM_FLAG'} = $FORMAT_CUSTOM_FLAG;
	&WriteConfData;

	my $MAIL_FORMAT = $q->param('MAIL_FORMAT');
	$MAIL_FORMAT = &UnifyReturnCode($MAIL_FORMAT);
	open(MAIL, ">$MAIL_FORMAT_FILE") || &ErrorPrint("メールフォーマットファイル <tt>$MAIL_FORMAT_FILE</tt> の書込オープンに失敗しました。<tt>$MAIL_FORMAT_FILE</tt> と、ディレクトリ「<tt>template</tt>」のパーミッションを再確認して下さい。");
	print MAIL "$MAIL_FORMAT\n";
	close(MAIL);
}

sub PrintMaileditor {
	my $html = &ReadTemplate($MAILEDIT_FILE);
	my $mailformat = &ReadTemplate($MAIL_FORMAT_FILE);
	$html =~ s/\$MAIL_FORMAT\$/$mailformat/;
	if($CONF{'FORMAT_CUSTOM_FLAG'}) {
		$html =~ s/\$FORMAT_CUSTOM_FLAG1\$/ selected/;
		$html =~ s/\$FORMAT_CUSTOM_FLAG0\$//;
	} else {
		$html =~ s/\$FORMAT_CUSTOM_FLAG1\$//;
		$html =~ s/\$FORMAT_CUSTOM_FLAG0\$/ selected/;
	}
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}


sub CheckDel {
	my @names = $q->param('NAMES');
	unless(scalar @names) {
		&ErrorPrint("削除する項目にチェックを入れてください。");
	}

	my %check_data = &GetConf($CHECK_CONF);
	my $name;
	for $name (@names) {
		delete $check_data{$name};
	}
	&WriteCheckData(\%check_data);
}

sub CheckAdd {
	my $name1 = $q->param('NAME1');
	my $name2 = $q->param('NAME2');
	my $error = $q->param('ERROR');

	if($name1 eq $name2) {
		&ErrorPrint("同じ name 属性を指定することはできません。");
	}
	unless($error) {
		&ErrorPrint("エラーメッセージを指定してください。");
	}
	my %check_data = &GetConf($CHECK_CONF);
	my @name_list = keys %check_data;
	my $name;
	for $name (keys %check_data) {
		my($name2, $msg) = split(/\|/, $check_data{$name});
		unless($name2) {next;}
		push(@name_list, $name2);
	}
	if(grep(/^$name1$/, @name_list)) {
		&ErrorPrint("name 属性「$name1」は、既に設定されています。");
	}
	if(grep(/^$name2$/, @name_list)) {
		&ErrorPrint("name 属性「$name2」は、既に設定されています。");
	}
	$check_data{$name1} = "$name2,$error";
	&WriteCheckData(\%check_data);
}


sub WriteCheckData {
	my($data_ref) = @_;
	my $name;
	open(CHECK, ">$CHECK_CONF") || &ErrorPrint("データファイル $CHECK_CONF の書込オープンに失敗しました。: $!");
	for $name (keys %$data_ref) {
		unless($name) {next;}
		my $value = $data_ref->{$name};
		print CHECK "$name=$value\n";
	}
	close(CHECK);
}


sub PrintChecklist {
	my %item_data = &GetConf($ITEM_CONF);
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称
	my $html = &ReadTemplate($CHECK_FILE);
	my $names_html;
	my $item_no;
	for $item_no (sort{$a<=>$b} keys %item_data) {
		my @data = split(/<>/, $item_data{$item_no});
		unless($data[0]) {next;}
		$names_html .= "<option value=\"$data[0]\">$data[0]</option>\n";
	}
	$html =~ s/\$NAMELIST\$/$names_html/g;
	my %check_data = &GetConf($CHECK_CONF);
	my $list_html;
	my $num = 0;
	my $name;
	for $name (sort keys %check_data) {
		unless($name) {
			next;
		}
		my($name2, $error) = split(/,/, $check_data{$name});
		$list_html .= "<tr>\n";
		$list_html .= "  <td bgcolor=\"#FFFFFF\" nowrap>$name</td>\n";
		$list_html .= "  <td bgcolor=\"#FFFFFF\" nowrap>$name2</td>\n";
		$list_html .= "  <td bgcolor=\"#FFFFFF\">$error</td>\n";
		$list_html .= "  <td bgcolor=\"#FFFFFF\" nowrap><input type=\"checkbox\" name=\"NAMES\" value=\"$name\"> 削除</td>\n";
		$list_html .= "</tr>\n";
		$num ++;
	}
	$html =~ s/\$LIST\$/$list_html/g;
	if($num >= 1) {
		$html =~ s/\$DELBUTTON\$/<input type=\"submit\" value=\"削除\">/;
	} else {
		$html =~ s/\$DELBUTTON\$//;
	}
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub ItemDel {
	my @itemno_list = $q->param('ITEMNO');
	unless(scalar @itemno_list) {
		&ErrorPrint("削除する項目にチェックを入れてください。");
	}

	my %check_data = &GetConf($CHECK_CONF);
	my $name1;
	my %check_list = ();
	for $name1 (keys %check_data) {
		my($name2) = split(/,/, $check_data{$name1});
		$check_list{$name1} = 1;
		$check_list{$name2} = 1;
	}
	my %item_data = &GetConf($ITEM_CONF);
	my $item_no;
	for $item_no (@itemno_list) {
		my($name) = split(/<>/, $item_data{$item_no});
		if(exists $check_list{$name}) {
			&ErrorPrint("name属性「$name」は、再入力設定がされていますので、削除できません。事前に、再入力設定を解除してください。");
		}
	}
	for $item_no (@itemno_list) {
		delete $item_data{$item_no};
	}
	&WriteItemData(\%item_data);
}

sub ReadTemplate {
	my($template) = @_;
	my $size = -s $template;
	if(!open(IN, "$template")) {
		&ErrorPrint2("テンプレートファイル <tt>$template</tt> をオープンできませんでした。 : $!");
	}
	binmode(IN);
	my $filestr;
	sysread(IN, $filestr, $size);
	close(IN);
	$filestr = &UnifyReturnCode($filestr);
	$filestr = &CopyRight($filestr);
	return $filestr;
}

sub PrintItemModForm {
	my $itemno = $q->param('itemno');
	if($itemno =~ /[^0-9]/) {
		&ErrorPrint("項目番号に不正な文字が含まれています。");
	}
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称<>サイズ制限（バイト）
	my %all_item_data = &GetConf($ITEM_CONF);
	my @item_data = split(/<>/, $all_item_data{$itemno});
	#指定項目番号の存在をチェック
	unless(exists $all_item_data{$itemno}) {
		&ErrorPrint("指定された項目番号は登録されておりません。: $itemno");
	}
	#修正フォームのテンプレートHTMLを読み込む
	my $html = &ReadTemplate($MODITEM_FILE);
	#各種パラメータを置換
	$html =~ s/\$itemno\$/$itemno/g;
	$html =~ s/\$NAME\$/$item_data[0]/g;
	$html =~ s/\$DISP_NAME\$/$item_data[4]/g;
	my $necessary_flag = $item_data[1];
	$html =~ s/\$NECESSARY_FLAG${necessary_flag}\$/ selected/;
	$html =~ s/\$NECESSARY_FLAG[0-9]+\$//g;
	$html =~ s/\$INPUT_MAX_SIZE\$/$item_data[5]/g;
	my @conv_nums = split(/,/, $item_data[2]);
	for(my $i=1;$i<=5;$i++) {
		my $conv_num = $conv_nums[$i-1];
		if($conv_num eq '') {
			$conv_num = '0';
		}
		$html =~ s/\$CONV${i}_${conv_num}\$/ selected/;
		$html =~ s/\$CONV${i}_[0-9]+\$//;
	}
	my @rest_nums = split(/,/, $item_data[3]);
	for(my $i=1;$i<=3;$i++) {
		my $rest_num = $rest_nums[$i-1];
		if($rest_num eq '') {
			$rest_num = '0';
		}
		$html =~ s/\$RESTRICT${i}_${rest_num}\$/ selected/;
		$html =~ s/\$RESTRICT${i}_[0-9]+\$//;
	}

	#結果を出力する
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;

}

sub MakeItemConfString {
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称<>サイズ制限（バイト）
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name 属性を指定してください。");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> は、name 属性として指定できません。");
	}
	if($name =~ /[^0-9a-zA-Z\-\_]/) {
		&ErrorPrint("name属性は、半角英数字もしくは半角ハイフン、半角アンダースコアーで指定して下さい。");
	}
	my $disp_name = $q->param('DISP_NAME');
	unless($disp_name) {
		&ErrorPrint("項目名称を指定してください。");
	}
	$disp_name = &SecureHtml($disp_name);

	my $necessary_flag = $q->param('NECESSARY_FLAG');
	my $conv1 = $q->param('CONV1');
	my $conv2 = $q->param('CONV2');
	my $conv3 = $q->param('CONV3');
	my $conv4 = $q->param('CONV4');
	my $conv5 = $q->param('CONV5');
	my $restrict1 = $q->param('RESTRICT1');
	my $restrict2 = $q->param('RESTRICT2');
	my $restrict3 = $q->param('RESTRICT3');

	my %for_check_hash;
	my $conf_str = "$name<>$necessary_flag<>";
	if($conv1) {
		$conf_str .= "$conv1,";
		$for_check_hash{$conv1} = 1;
	}
	if($conv2) {
		if(exists($for_check_hash{$conv2})) {
			&ErrorPrint("次の入力値変換設定が重複しています。: <tt>\[$CONV_RULES{$conv2}\]</tt>");
		}
		$conf_str .= "$conv2,";
		$for_check_hash{$conv2} = 1;
	}
	if($conv3) {
		if(exists($for_check_hash{$conv3})) {
			&ErrorPrint("次の入力値変換設定が重複しています。: <tt>\[$CONV_RULES{$conv3}\]</tt>");
		}
		$conf_str .= "$conv3,";
		$for_check_hash{$conv3} = 1;
	}
	if($conv4) {
		if(exists($for_check_hash{$conv4})) {
			&ErrorPrint("次の入力値変換設定が重複しています。: <tt>\[$CONV_RULES{$conv4}\]</tt>");
		}
		$conf_str .= "$conv4,";
		$for_check_hash{$conv4} = 1;
	}
	if($conv5) {
		if(exists($for_check_hash{$conv5})) {
			&ErrorPrint("次の入力値変換設定が重複しています。: <tt>\[$CONV_RULES{$conv5}\]</tt>");
		}
		$conf_str .= "$conv5,";
	}
	$conf_str =~ s/,$//;
	$conf_str .= '<>';

	%for_check_hash = ();
	if($restrict1) {
		$conf_str .= "$restrict1,";
		$for_check_hash{$restrict1} = 1;
	}
	if($restrict2) {
		if(exists($for_check_hash{$restrict2})) {
			&ErrorPrint("次の入力値制限設定が重複しています。: <tt>\[$RESTRICT_RULES{$restrict2}\]</tt>");
		}
		$conf_str .= "$restrict2,";
		$for_check_hash{$restrict2} = 1;
	}
	if($restrict3) {
		if(exists($for_check_hash{$restrict3})) {
			&ErrorPrint("次の入力値制限設定が重複しています。: <tt>\[$RESTRICT_RULES{$restrict3}\]</tt>");
		}
		$conf_str .= "$restrict3,";
	}
	$conf_str =~ s/,$//;
	$conf_str .= "<>$disp_name";

	#サイズ制限
	my $input_max_size = $q->param('INPUT_MAX_SIZE');
	if($input_max_size =~ /[^0-9]/) {
		&ErrorPrint("サイズ制限には、半角数字で指定して下さい。");
	}
	$conf_str .= "<>$input_max_size";
	#設定値を返す
	return $conf_str;
}



sub ItemMod {
	my $itemno = $q->param('itemno');
	if($itemno =~ /[^0-9]/) {
		&ErrorPrint("項目番号に不正な文字が含まれています。");
	}
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称<>サイズ制限（バイト）
	my %item_data = &GetConf($ITEM_CONF);
	#指定項目番号の存在をチェック
	unless(exists $item_data{$itemno}) {
		&ErrorPrint("指定された項目番号は登録されておりません。: $itemno");
	}
	#name属性名のチェック
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name 属性を指定してください。");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> は、name 属性として指定できません。");
	}
	for my $key (keys %item_data) {
		my @data = split(/<>/, $item_data{$key});
		if($name eq $data[0] && $key ne $itemno) {
			&ErrorPrint("name 属性名 $name は、すでに登録されています。");
		}
	}

	my $item_conf_string = &MakeItemConfString;
	$item_data{$itemno} = $item_conf_string;
	&WriteItemData(\%item_data);
}

sub ItemAdd {
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称<>サイズ制限（バイト）
	my %item_data = &GetConf($ITEM_CONF);
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name 属性を指定してください。");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> は、name 属性として指定できません。");
	}
	for my $key (keys %item_data) {
		my @data = split(/<>/, $item_data{$key});
		if($name eq $data[0]) {
			&ErrorPrint("name 属性名 $name は、すでに登録されています。");
		}
	}
	my $item_no = 0;
	for my $key (keys %item_data) {
		if($key > $item_no) {$item_no = $key;}
	}
	$item_no += 10;
	my $item_conf_string = &MakeItemConfString;
	$item_data{$item_no} = $item_conf_string;
	&WriteItemData(\%item_data);
}

sub ItemUp {
	&ItemNoChange('up');
}

sub ItemDown {
	&ItemNoChange('down');
}

sub ItemNoChange {
	my($mode) = @_;
	my $item_no = $q->param('itemno');
	unless($item_no) {
		&ErrorPrint("項目番号が指定されておりません。");
	}
	my %item_data = &GetConf($ITEM_CONF);
	unless(exists $item_data{$item_no}) {
		&ErrorPrint("指定の項目は、登録されておりません。");
	}
	my $data = $item_data{$item_no};
	delete $item_data{$item_no};
	my $mod_no;
	if($mode eq 'up') {
		$mod_no = $item_no - 15;
	} else {
		$mod_no = $item_no + 15;
	}
	$item_data{$mod_no} = $data;
	my $key;
	my $no = 1;
	my %new_list = ();
	for $key (sort{$a<=>$b} keys %item_data) {
		my $new_no = $no * 10;
		$new_list{$new_no} = $item_data{$key};
		$no ++;
	}
	&WriteItemData(\%new_list);
}

sub WriteItemData {
	my($data_ref) = @_;
	my $name;
	open(ITEM, ">$ITEM_CONF") || &ErrorPrint("項目データファイル $ITEM_CONF の書込オープンに失敗しました。: $!");
	for $name (keys %$data_ref) {
		unless($name) {next;}
		my $value = $data_ref->{$name};
		print ITEM "$name=$value\n";
	}
	close(ITEM);
}

sub PrintItemlist {
	my %item_data = &GetConf($ITEM_CONF);
	#項目番号=name属性<>必須フラグ<>変換データ<>制限データ<>項目名称<>サイズ制限（バイト）

	my $first_no = 99999999;
	my $last_no = 0;
	my $no;
	for $no (keys %item_data) {
		if($no < $first_no) {$first_no = $no;}
		if($no > $last_no) {$last_no = $no;}
	}
	my $filestr = &ReadTemplate($ITEMLIST_FILE);
	my $column = 1;
	my $list;
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">DATE</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">日時</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	if($CONF{'SIRIAL_FLAG'}) {
		$list .= "<tr>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\">SIRIAL</td>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\">シリアル</td>\n";
		for(my $i=0;$i<6;$i++) {
			$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
		}
		$list .= "</tr>\n";
		$column ++;
	}
	my $item_num = 0;
	for $no (sort{$a<=>$b} keys %item_data) {
		unless($item_data{$no}) {next;}
		my($name, $necessary, $conv, $restrict, $disp_name, $input_max_size) = split(/<>/, $item_data{$no});

		$list .= "<tr>\n";
		$list .= "  <td bgcolor=\"#FFFFFF\" align=\"center\">$column</td>\n";
		$list .= "  <td bgcolor=\"#FFFFFF\"><a href=\"admin.cgi?action=itemmodform&itemno=$no\">$name</a></td>\n";
		$list .= "  <td bgcolor=\"#FFFFFF\">$disp_name</td>\n";
		#必須設定
		if($necessary) {
			$list .= "  <td bgcolor=\"#FFFFFF\">必須</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#入力値変換
		my @conv_nums = split(/,/, $conv);
		my $num;
		my $conv_html;
		my $conv_no = 1;
		for $num (@conv_nums) {
			$conv_html .= "$conv_no : $CONV_RULES{$num}<br>";
			$conv_no ++;
		}
		$conv_html =~ s/<br>$//;
		if($conv_html) {
			$list .= "  <td bgcolor=\"#FFFFFF\">$conv_html</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#入力値制限
		my @rest_nums = split(/,/, $restrict);
		my $rest_html;
		$conv_no = 1;
		for $num (@rest_nums) {
			$rest_html .= "$conv_no : $RESTRICT_RULES{$num}<br>";
			$conv_no ++;
		}
		$rest_html =~ s/<br>$//;
		if($rest_html) {
			$list .= "  <td bgcolor=\"#FFFFFF\">$rest_html</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#サイズ制限
		if($input_max_size) {
			$list .= "  <td bgcolor=\"#FFFFFF\">${input_max_size} byte</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#順番
		$list .= "  <td bgcolor=\"#FFFFFF\" nowrap>";
		if($no == $first_no) {
			$list .= "<font color=\"#AAAAAA\">▲</font> ";
			$list .= "<a href=\"admin.cgi?action=itemdown&itemno=$no\">▼</a>";
		} elsif($no == $last_no) {
			$list .= "<a href=\"admin.cgi?action=itemup&itemno=$no\">▲</a> ";
			$list .= "<font color=\"#AAAAAA\">▼</font>";
		} else {
			$list .= "<a href=\"admin.cgi?action=itemup&itemno=$no\">▲</a> ";
			$list .= "<a href=\"admin.cgi?action=itemdown&itemno=$no\">▼</a>";
		}
		$list .= "</td>\n";
		$list .= "  <td bgcolor=\"#FFFFFF\" align=\"middle\"><input type=\"checkbox\" name=\"ITEMNO\" value=\"$no\"></td>\n";
		$list .= "</tr>\n";
		$column ++;
		$item_num ++;
	}
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">REMOTE_ADDR</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">IP アドレス</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">REMOTE_HOST</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">ホスト名</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">USERAGENT</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">ユーザーエージェント</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";

	$filestr =~ s/\$LIST\$/$list/;
	if($item_num >= 1) {
		$filestr =~ s/\$DELBUTTON\$/<input type=\"submit\" value=\"削除\">/;
	} else {
		$filestr =~ s/\$DELBUTTON\$//;
	}
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $filestr;
	exit;
}


sub SetConf2 {
	my $CONFIRM_FLAG = $q->param('CONFIRM_FLAG');
	my $FORMAT_CUSTOM_FLAG = $q->param('FORMAT_CUSTOM_FLAG');
	my $REPLY_FLAG = $q->param('REPLY_FLAG');
	my $FROM_ADDR_FOR_REPLY = $q->param('FROM_ADDR_FOR_REPLY');
	my $SENDER_NAME_FOR_REPLY = $q->param('SENDER_NAME_FOR_REPLY');
	my $SUBJECT_FOR_REPLY = $q->param('SUBJECT_FOR_REPLY');
	my $REPLY_CC_OPTION = $q->param('REPLY_CC_OPTION');
	my $ATTACHMENT_DEL_FLAG = $q->param('ATTACHMENT_DEL_FLAG');
	my $ATTACHMENT_MAX_SIZE = $q->param('ATTACHMENT_MAX_SIZE');
	my $EXT_RESTRICT = $q->param('EXT_RESTRICT');
	my $MAX_INPUT_CHAR = $q->param('MAX_INPUT_CHAR');
	my $LOGING_FLAG = $q->param('LOGING_FLAG');
	my $LOG_FORMAT = $q->param('LOG_FORMAT');
	my $LOTATION = $q->param('LOTATION');
	my $LOTATION_SIZE = $q->param('LOTATION_SIZE');
	my $DELIMITER = $q->param('DELIMITER');
	my $DATE_FORMAT = $q->param('DATE_FORMAT');
	my $RETURN_CODE_CONV = $q->param('RETURN_CODE_CONV');
	my $SIRIAL_FLAG = $q->param('SIRIAL_FLAG');
	my $REJECT_HOSTS = $q->param('REJECT_HOSTS');
	my $REJECT_ERR_MSG = $q->param('REJECT_ERR_MSG');
	my $ALLOW_FROM_URLS = $q->param('ALLOW_FROM_URLS');
	my $WRAP = $q->param('WRAP');
	my $MAIL_HEADER_PLUS = $q->param('MAIL_HEADER_PLUS');
	my $ERRORS_TO = $q->param('ERRORS_TO');
	my $REPEATED_POST_FORBIDDEN = $q->param('REPEATED_POST_FORBIDDEN');
	#確認画面表示
	if($CONFIRM_FLAG eq '') {
		&ErrorPrint("確認画面表示を選択して下さい。");
	} else {
		unless($CONFIRM_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("確認画面表示に不適切な設定値がリクエストされました。");
		}
	}
	#メールフォーマット
	if($FORMAT_CUSTOM_FLAG eq '') {
		&ErrorPrint("メールフォーマットを選択して下さい。");
	} else {
		unless($FORMAT_CUSTOM_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("メールフォーマットに不適切な設定値がリクエストされました。");
		}
	}
	#自動返信メール
	if($REPLY_FLAG eq '') {
		&ErrorPrint("自動返信メールを選択して下さい。");
	} else {
		unless($REPLY_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("自動返信メールに不適切な設定値がリクエストされました。");
		}
	}
	#自動返信メール用送信元メールアドレス
	if($FROM_ADDR_FOR_REPLY eq '') {
		if($REPLY_FLAG eq '1') {
			&ErrorPrint("自動返信機能\を使う場合には、自動返信メール用送信元メールアドレスを設定してください。");
		}
	} else {
		$FROM_ADDR_FOR_REPLY = &ConvZen2Han($FROM_ADDR_FOR_REPLY);
		$FROM_ADDR_FOR_REPLY =~ s/^\s*//;
		$FROM_ADDR_FOR_REPLY =~ s/\s*$//;
		unless(&MailAddressCheck($FROM_ADDR_FOR_REPLY)) {
			&ErrorPrint("自動返信メール用送信元メールアドレスが不適切です。");
		}
	}
	#自動返信メールのサブジェクト
	if($REPLY_FLAG eq '1' && $SUBJECT_FOR_REPLY eq '') {
		&ErrorPrint("自動返信機能\を使う場合には、返信メールのサブジェクトを設定してください。");
	}
	#自動返信メールの CC オプション
	if($REPLY_FLAG eq '1') {
		if($REPLY_CC_OPTION eq '') {
			&ErrorPrint("自動返信メールの CC オプションを選択して下さい。");
		} else {
			unless($REPLY_CC_OPTION =~ /^(0|1|2)$/) {
				&ErrorPrint("自動返信メールの CC オプションに不適切な設定値がリクエストされました。");
			}
		}
	}
	#添付ファイルの削除
	if($ATTACHMENT_DEL_FLAG eq '') {
		&ErrorPrint("添付ファイルの削除を選択して下さい。");
	} else {
		unless($ATTACHMENT_DEL_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("添付ファイルの削除に不適切な設定値がリクエストされました。");
		}
	}
	#添付ファイルのサイズ上限(バイト）
	if($ATTACHMENT_MAX_SIZE ne '') {
		$ATTACHMENT_MAX_SIZE = &ConvZen2Han($ATTACHMENT_MAX_SIZE);
		$ATTACHMENT_MAX_SIZE =~ s/^\s*//;
		$ATTACHMENT_MAX_SIZE =~ s/\s*$//;
		if($ATTACHMENT_MAX_SIZE =~ /[^0-9]/) {
			&ErrorPrint("添付ファイルのサイズ上限は数字のみで指定してください。");
		}
	}
	#添付ファイルの拡張子限定
	if($EXT_RESTRICT) {
		$EXT_RESTRICT = &ConvTextarea2ConfFormat($EXT_RESTRICT);
		if($EXT_RESTRICT =~ /[^a-zA-Z0-9\.\|]/) {
			&ErrorPrint("添付ファイルの拡張子限定　は、半角の英数、ドットで指定してください。");
		}
	}
	#ログ出力
	if($LOGING_FLAG eq '') {
		&ErrorPrint("ログ出力を選択して下さい。");
	} else {
		unless($LOGING_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("ログ出力に不適切な設定値がリクエストされました。");
		}
		if($LOGING_FLAG) {
			my $testfile = "$CONF{'LOG_DIR'}/test.cgi";
			unless(open(TEST, ">$testfile")) {
				&ErrorPrint("ログファイルの追加書込オープンに失敗しました。この状態ではログを出力することができません。ディレクトリ $CONF{'LOG_DIR'} のパーミッションを再確認してください。");
			}
			close(TEST);
			unlink($testfile);
		}
	}
	if($LOGING_FLAG) {
		#ログローテーション
		if($LOTATION eq '') {
			&ErrorPrint("ログローテーションを選択して下さい。");
		} else {
			unless($LOTATION =~ /^[0-9]$/) {
				&ErrorPrint("ログローテーションに不正な値がリクエストされました。");
			}
		}
		#ログローテーションサイズ
		if($LOTATION eq '9') {
			if($LOTATION_SIZE) {
				$LOTATION_SIZE = &ConvZen2Han($LOTATION_SIZE);
				$LOTATION_SIZE =~ s/^\s*//;
				$LOTATION_SIZE =~ s/\s*$//;
				if($LOTATION_SIZE =~ /[^0-9]/) {
					&ErrorPrint("ローテーションサイズは数字のみで指定してください。");
				}
			} else {
				&ErrorPrint("サイズを指定してローテーションする場合には、ローテーションサイズを指定してください。");
			}
		}
		#ログファイルフォーマット
		if($LOG_FORMAT eq '') {
			&ErrorPrint("ログファイルフォーマットを選択して下さい。");
		} else {
			unless($LOG_FORMAT =~ /^[0-9]$/) {
				&ErrorPrint("ログファイルフォーマットに不正な値がリクエストされました。");
			}
		}
		#ログファイルの区切り文字
		if($DELIMITER eq '') {
			&ErrorPrint("ログファイルの区切り文字を選択して下さい。");
		} else {
			unless($DELIMITER =~ /^[0-9]$/) {
				&ErrorPrint("ログファイルの区切り文字に不正な値がリクエストされました。");
			}
		}
		#ログファイルの日付フォーマット
		if($DATE_FORMAT eq '') {
			&ErrorPrint("ログファイルの日付フォーマットを選択して下さい。");
		} else {
			unless($DATE_FORMAT =~ /^[0-9]$/) {
				&ErrorPrint("ログファイルの日付フォーマットに不正な値がリクエストされました。");
			}
		}
		#テキストエリアの改行
		if($RETURN_CODE_CONV ne '') {
			if($RETURN_CODE_CONV =~ /[^\x20-\x7E]/) {
				&ErrorPrint("テキストエリアの改行には、半角文字（半角カナを除く)を指定して下さい。");
			}
			my $forbidden_char = ',';
			if($DELIMITER eq '1') {
				$forbidden_char = ',';
			} elsif($DELIMITER eq '2') {
				$forbidden_char = ' ';
			}
			if($RETURN_CODE_CONV =~ /$forbidden_char/) {
				&ErrorPrint("テキストエリアの改行には、ログファイルの区切り文字を使うことが出来ません。");
			}
		}
	}

	#シリアル番号の生成
	if($SIRIAL_FLAG eq '') {
		&ErrorPrint("シリアル番号の生成を選択して下さい。");
	} else {
		unless($SIRIAL_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("シリアル番号の生成に不適切な設定値がリクエストされました。");
		}
	}
	#利用禁止ホスト
	if($REJECT_HOSTS) {
		$REJECT_HOSTS = &ConvTextarea2ConfFormat($REJECT_HOSTS);
	}
	#利用禁止ホストからのアクセス時に出力するエラーメッセージ
	if($REJECT_HOSTS) {
		unless($REJECT_ERR_MSG) {
			&ErrorPrint("「利用禁止ホスト」を指定している場合には、「利用禁止ホストからのアクセス時に出力するエラーメッセージ」を指定してください。");
		}
	}
	#外部サーバからの利用禁止設定
	if($ALLOW_FROM_URLS) {
		$ALLOW_FROM_URLS = &ConvTextarea2ConfFormat($ALLOW_FROM_URLS);
		my $url;
		my @urls = split(/\|/, $ALLOW_FROM_URLS);
		for $url (@urls) {
			unless(&IsUrl($url)) {
				&ErrorPrint("外部サーバからの利用禁止設定に指定したURLが不適切です。");
			}
		}
	}
	#簡易英文ワードラップ・折返文字数
	if($WRAP) {
		$WRAP = &ConvZen2Han($WRAP);
		$WRAP =~ s/^\s*//;
		$WRAP =~ s/\s*$//;
		if($WRAP =~ /[^0-9]/) {
			&ErrorPrint("「簡易英文ワードラップ・折返文字数」 は数字のみで指定してください。");
		}
	}
	#追加メールヘッダー
	if($MAIL_HEADER_PLUS) {
		$MAIL_HEADER_PLUS =~ s/^\s*//;
		$MAIL_HEADER_PLUS =~ s/\s*$//;
		unless($MAIL_HEADER_PLUS =~ /^[^:]+:[\t\s]+/) {
			&ErrorPrint("メールヘッダーフォーマットが正しくありません。: <tt>$MAIL_HEADER_PLUS</tt>");
		}
	}
	#エラーメールの宛先アドレス
	if($ERRORS_TO ne '') {
		$ERRORS_TO = &ConvZen2Han($ERRORS_TO);
		$ERRORS_TO =~ s/^\s*//;
		$ERRORS_TO =~ s/\s*$//;
		unless(&MailAddressCheck($ERRORS_TO)) {
			&ErrorPrint("エラーメールの宛先アドレスが不適切です。");
		}
	}
	#連続投稿禁止設定
	if($REPEATED_POST_FORBIDDEN ne '') {
		$REPEATED_POST_FORBIDDEN = &ConvZen2Han($REPEATED_POST_FORBIDDEN);
		$REPEATED_POST_FORBIDDEN =~ s/^\s*//;
		$REPEATED_POST_FORBIDDEN =~ s/\s*$//;
		if($REPEATED_POST_FORBIDDEN =~ /[^0-9]/) {
			&ErrorPrint("連続投稿禁止設定の秒数設定には、半角数字で指定して下さい。");
		}
	}

	$CONF{'CONFIRM_FLAG'} = $CONFIRM_FLAG;
	$CONF{'FORMAT_CUSTOM_FLAG'} = $FORMAT_CUSTOM_FLAG;
	$CONF{'REPLY_FLAG'} = $REPLY_FLAG;
	$CONF{'FROM_ADDR_FOR_REPLY'} = $FROM_ADDR_FOR_REPLY;
	$CONF{'SENDER_NAME_FOR_REPLY'} = $SENDER_NAME_FOR_REPLY;
	$CONF{'SUBJECT_FOR_REPLY'} = $SUBJECT_FOR_REPLY;
	$CONF{'REPLY_CC_OPTION'} = $REPLY_CC_OPTION;
	$CONF{'ATTACHMENT_DEL_FLAG'} = $ATTACHMENT_DEL_FLAG;
	$CONF{'ATTACHMENT_MAX_SIZE'} = $ATTACHMENT_MAX_SIZE;
	$CONF{'EXT_RESTRICT'} = $EXT_RESTRICT;
	$CONF{'LOGING_FLAG'} = $LOGING_FLAG;
	$CONF{'LOG_FORMAT'} = $LOG_FORMAT;
	$CONF{'LOTATION'} = $LOTATION;
	$CONF{'LOTATION_SIZE'} = $LOTATION_SIZE;
	$CONF{'DELIMITER'} = $DELIMITER;
	$CONF{'DATE_FORMAT'} = $DATE_FORMAT;
	$CONF{'RETURN_CODE_CONV'} = $RETURN_CODE_CONV;
	$CONF{'SIRIAL_FLAG'} = $SIRIAL_FLAG;
	$CONF{'REJECT_HOSTS'} = $REJECT_HOSTS;
	$CONF{'REJECT_ERR_MSG'} = $REJECT_ERR_MSG;
	$CONF{'ALLOW_FROM_URLS'} = $ALLOW_FROM_URLS;
	$CONF{'WRAP'} = $WRAP;
	$CONF{'MAIL_HEADER_PLUS'} = $MAIL_HEADER_PLUS;
	$CONF{'ERRORS_TO'} = $ERRORS_TO;
	$CONF{'REPEATED_POST_FORBIDDEN'} = $REPEATED_POST_FORBIDDEN;
	&WriteConfData;
}

sub ConvTextarea2ConfFormat {
	my($str) = @_;
	$str = &UnifyReturnCode($str);
	my @items = split(/\n/, $str);
	my $item;
	my $confdata;
	for $item (@items) {
		$item =~ s/^\s*//;
		$item =~ s/\s*$//;
		if($item) {
			$confdata .= "$item|";
		}
	}
	$confdata =~ s/\|$//;
	return $confdata;
}

sub PrintConf2 {
	my $filestr = &ReadTemplate($CONF2_FILE);
	for my $key (keys %CONF) {
		#テキストエリア
		if($key =~ /^(EXT_RESTRICT|REJECT_HOSTS|ALLOW_FROM_URLS)$/) {
			my @items = split(/\|/, $CONF{$key});
			my $itemstr = join("\n", @items);
			$filestr =~ s/\$$key\$/$itemstr/g;
		#セレクトメニュー
		} elsif($key =~ /^(CONFIRM_FLAG|FORMAT_CUSTOM_FLAG|REPLY_FLAG|REPLY_CC_OPTION|ATTACHMENT_DEL_FLAG|LOGING_FLAG|LOTATION|LOG_FORMAT|DELIMITER|DATE_FORMAT|SIRIAL_FLAG)$/) {
			$filestr =~ s/\$$key$CONF{$key}\$/ selected/g;
			$filestr =~ s/\$$key[0-9]+\$//g;
		} else {
			$filestr =~ s/\$$key\$/$CONF{$key}/g;
		}
	}
	#バージョンアップ追加分
	$filestr =~ s/\$REPEATED_POST_FORBIDDEN\$/$CONF{'REPEATED_POST_FORBIDDEN'}/g;
	#結果を出力
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $filestr;
	exit;
}

sub MailAddressCheck {
	my($mail) = @_;
	#チェック１（不適切な文字をチェック）
	if($mail =~ /[^a-zA-Z0-9\@\.\-\_\%]/) {
		return 0;
	}
	#チェック２（@マークのチェック）
	#"@"の数を数えます。一つ以外だった場合には、0を返します。
	my $at_num = 0;
	while($mail =~ /\@/g) {
		$at_num ++;
	}
	if($at_num != 1) {
		return 0;
	}
	#チェック３（アカウント、ドメインの存在をチェック）
	my($acnt, $domain) = split(/\@/, $mail);
	if($acnt eq '' || $domain eq '') {
		return 0;
	}
	#チェック４（ドメインのドットをチェック）
	#ドットの数を数えます。0個だった場合には、0を返します。
	my $dot_num = 0;
	while($domain =~ /\./g) {
		$dot_num ++;
	}
	if($dot_num == 0) {
		return 0;
	}
	#チェック５（ドメインの各パーツをチェック）
	#先頭にドットがないことをチェック
	if($domain =~ /^\./) {
		return 0;
	}
	#最後にドットがないことをチェック
	if($domain =~ /\.$/) {
		return 0;
	}
	#ドットが2つ以上続いていないかをチェック
	if($domain =~ /\.\./) {
		return 0;
	}
	#チェック６（TLDのチェック）
	my @domain_parts = split(/\./, $domain);
	my $tld = pop @domain_parts;
	if($tld =~ /[^a-zA-Z]/) {
		return 0;
	}
	#すべてのチェックが通ったので、このメールアドレスは適切である。
	return 1;
}

sub IsUrl {
	my($url) = @_;
	if($url =~ /[^a-zA-Z0-9\.\-\_\/\:\~\&\%\=\#]/) {
		return 0;
	}
	unless($url =~ /^https?:\/\//) {
		return 0;
	}
	return 1;
}

sub SetConf1 {
	#入力値を取得する
	my $mailto = $q->param('MAILTO');
	my $from = $q->param('FROM');
	my $subject = $q->param('SUBJECT');
	my $thanks_page_method = $q->param('THANKS_PAGE_METHOD');
	my $redirect_url = $q->param('REDIRECT_URL');
	my $redirect_method = $q->param('REDIRECT_METHOD');
	my $sendmail = $q->param('SENDMAIL');
	my $log_dir = $q->param('LOG_DIR');
	#メール送信先アドレスのチェック
	$mailto = &ConvZen2Han($mailto);
	$mailto =~ s/^\s*//;
	$mailto =~ s/\s*$//;
	if($mailto eq '') {
		&ErrorPrint("メール送信先アドレスを指定してください。");
	} else {
		my @mailto_list = split(/,/, $mailto);
		for my $addr (@mailto_list) {
			$addr =~ s/^\s*//;
			$addr =~ s/\s*$//;
			unless(&MailAddressCheck($addr)) {
				&ErrorPrint("メール送信先アドレスが不適切です。");
			}
		}
	}
	#デフォルトのメール送信元アドレスのチェック
	$from = &ConvZen2Han($from);
	$from =~ s/^\s*//;
	$from =~ s/\s*$//;
	if($from eq '') {
		&ErrorPrint("デフォルトのメール送信元アドレスを指定してください。");
	} else {
		unless(&MailAddressCheck($from)) {
			&ErrorPrint("デフォルトのメール送信元アドレスが不適切です。");
		}
	}
	#完了画面表示方法のチェック
	if($thanks_page_method eq '') {
		&ErrorPrint("完了画面表示方法を選択して下さい。");
	} else {
		unless($thanks_page_method =~ /^(1|2)$/) {
			&ErrorPrint("完了画面表示方法に不正な値が送信されました。");
		}
	}
	#リダイレクト先 URLのチェック
	if($thanks_page_method eq '1') {
		if($redirect_url eq '') {
			&ErrorPrint("リダイレクト先URLを指定してください。");
		}
		$redirect_url = &ConvZen2Han($redirect_url);
		$redirect_url =~ s/^\s*//;
		$redirect_url =~ s/\s*$//;
		unless(&IsUrl($redirect_url)) {
			&ErrorPrint("リダイレクト先URLが不適切です。");
		}
	}
	#リダイレクト方法のチェック
	if($thanks_page_method eq '1') {
		if($redirect_method eq '') {
			&ErrorPrint("リダイレクト方法を選択して下さい。");
		} else {
			unless($redirect_method =~ /^(1|2)$/) {
				&ErrorPrint("リダイレクト方法に不正な値が送信されました。");
			}
		}
	}
	#sendmailのパスのチェック
	if($sendmail ne '') {
		$sendmail = &ConvZen2Han($sendmail);
		$sendmail =~ s/^\s*//;
		$sendmail =~ s/\s*$//;
		if($sendmail =~ /[^a-zA-Z0-9\/\.\-\_]/) {
			&ErrorPrint("sendmail のパスに不適切な文字が含まれています。");
		}
		unless(-e $sendmail) {
			&ErrorPrint("sendmail のパスが間違っています。: $!");
		}
	}
	#ログ格納ディレクトリのパスのチェック
	if($log_dir eq '') {
		&ErrorPrint("ログ格納ディレクトリのパスを指定して下さい。");
	} else {
		if($log_dir =~ /[^0-9a-zA-Z\_\-\/\.]/) {
			&ErrorPrint("ログ格納ディレクトリのパスに不適切な文字が含まれています。");
		}
		if($log_dir =~ /\/$/) {
			&ErrorPrint("ログ格納ディレクトリのパスの最後にはスラッシュを入れないで下さい。");
		}

		unless(-d $log_dir) {
			&ErrorPrint("指定したログ格納ディレクトリのパスが存在しません。事前にディレクトリを作成した上で、設定して下さい。");
		}
		if( open(TEST, ">${log_dir}/test.cgi") ) {
			close(TEST);
			unlink "${log_dir}/test.cgi";
		} else {
			&ErrorPrint("指定したログ格納ディレクトリ内にファイルを生成することができません。パーミッションを確認して下さい。");
		}
	}
	#設定値を連想配列%CONFにセットする
	$CONF{'MAILTO'} = $mailto;
	$CONF{'FROM'} = $from;
	$CONF{'SUBJECT'} = $subject;
	$CONF{'THANKS_PAGE_METHOD'} = $thanks_page_method;
	$CONF{'REDIRECT_URL'} = $redirect_url;
	$CONF{'REDIRECT_METHOD'} = $redirect_method;
	$CONF{'SENDMAIL'} = $sendmail;
	$CONF{'LOG_DIR'} = $log_dir;
	#設定を書き込む
	&WriteConfData;
}

sub ConvZen2Han {
	my($str) = @_;
	&Jcode::convert(\$str, 'sjis');
	$str =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])/&sjis_num_alfa_z2h($1)/geo;
	$str =~ s/＠/\@/g;
	$str =~ s/．/\./g;
	$str =~ s/＿/\_/g;
	$str =~ s/：/\:/g;
	$str =~ s/～/\~/g;
	$str =~ s/＆/\&/g;
	$str =~ s/％/\%/g;
	$str =~ s/＝/\=/g;
	$str =~ s/＃/\#/g;
	$str =~ s/，/,/g;
	$str =~ s/　/ /g;
	$str =~ s/\x81\x5E/\//g;	#／
	$str =~ s/\x81\x7C/\-/g;	#－
	return $str;
}

sub sjis_num_alfa_z2h {
	my($c) = @_;
	#半角数字に変換
	$c =~ tr/\x4F-\x58/\x30-\x39/;
	#半角大文字アルファベットに変換
	$c =~ tr/\x60-\x79/\x41-\x5A/;
	#半角小文字アルファベットに変換
	$c =~ tr/\x81-\x9A/\x61-\x7A/;
	return $c;
}

sub SetPass {
	my $user_name = $q->param('USER_NAME');
	my $pass1 = $q->param('PASSWORD1');
	my $pass2 = $q->param('PASSWORD2');
	if($user_name eq '') {
		&ErrorPrint("ユーザー名を指定して下さい。");
	} else {
		if($user_name =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("ユーザー名に不適切な文字が含まれています。半角英数字、ハイフン、アンダースコアー以外の文字を指定することはできません。");
		}
	}
	if($pass1 eq '' && $pass2 eq '') {
		&ErrorPrint("パスワードを指定してください。");
	} else {
		unless($pass1 eq $pass2) {
			&ErrorPrint("パスワード再入力が間違っています。再度注意して入力してください。");
		}
		if($pass1 =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("パスワードに不正な文字が含まれています。指定できる文字は、半角の英数、ハイフン、アンダースコアです。");
		}
	}
	my $enc_pass = &EncryptPasswd($pass1);
	$CONF{'USER_NAME'} = $user_name;
	$CONF{'PASSWORD'} = $enc_pass;
	&WriteConfData;
}

sub WriteConfData {
	open(CONF, ">$MP_CONF") || &ErrorPrint("設定ファイル $MP_CONF への書込みに失敗しました。$MP_CONF のパーミッションを 606 にして下さい。: $!");
	my $key;
	for $key (sort keys %CONF) {
		print CONF "$key=$CONF{$key}\n";
	}
	close(CONF);
}

sub PrintTemplate {
	my($file, $message, $back_link) = @_;
	my $filestr = &ReadTemplate($file);
	for my $key (keys %CONF) {
		$filestr =~ s/\$$key\$/$CONF{$key}/g;
	}
	$filestr =~ s/\$BACK\$/$back_link/g;
	$filestr =~ s/\$MESSAGE\$/$message/g;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $filestr;
	exit;
}

sub PrintConf1 {
	my $html = &ReadTemplate($CONF1_FILE);
	if($CONF{'SENDMAIL'} eq '') {
		my($sendmail_path) = &GetCommandPath('sendmail');
		$html =~ s/\$SENDMAIL\$/$sendmail_path/g;
	}
	for my $key (keys %CONF) {
		if($key =~ /^(THANKS_PAGE_METHOD|REDIRECT_METHOD)$/) {
			$html =~ s/\$$key$CONF{$key}\$/ checked/g;
			$html =~ s/\$$key[0-9]+\$//g;
		} else {
			$html =~ s/\$$key\$/$CONF{$key}/g;
		}
	}
	if($CONF{'LOG_DIR'} eq '') {
		$html =~ s/\$LOG_DIR\$/\.\/logs/g;
	}
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub GetCommandPath {
	my($command) = @_;
	my @pathes;
	if($command eq '') {return @pathes;}
	if($^O =~ /MSWin32/i) {
		return @pathes;
	}
	my @whereis_list = ('whereis', '/usr/bin/whereis', '/usr/ucb/whereis');
	for my $whereis (@whereis_list) {
		my $res = `$whereis $command`;
		if($res eq '') {
			next;
		} else {
			my @locations = split(/\s/, $res);
			for my $path (@locations) {
				if($path =~ /$command$/) {
					push(@pathes, $path);
				}
			}
			last;
		}
	}
	my $num = scalar @pathes;
	unless($num) {
		my $path = `which $command`;
		if($path =~ /$command$/) {
			push(@pathes, $path);
		}
	}
	return @pathes;
}

sub GetConf {
	my($file) = @_;
	my %data = ();
	open(FILE, "$file") || &ErrorPrint("設定ファイル <tt>$file</tt> をオープンできませんでした。: $!");
	while(<FILE>) {
		chop;
		my $line = $_;
		unless($line) {next;}
		if($line =~ /^\s*\#/) {next;}
		my($key, $value) = split(/=/, $line);
		unless($key) {next;}
		$key =~ s/^[\s\t]*//;
		$key =~ s/[\s\t]*$//;
		$value =~ s/^[\s\t]*//;
		$value =~ s/[\s\t]*$//;
		$data{$key} = $value;
	}
	close(FILE);
	return %data;
}

sub HtmlEdit {
	my($mode) = @_;
	my $in_file;
	if($mode eq 'CONFIRM') {
		$in_file = $CONFIRM_TEMP_FILE;
	} elsif($mode eq 'THANKS') {
		$in_file = $THANKS_TEMP_FILE;
	} elsif($mode eq 'ERROR') {
		$in_file = $ERROR_TEMP_FILE;
	} else {
		&ErrorPrint("不正なリクエストです。");
	}
	my $in = $q->param('HTML');
	$in = &UnifyReturnCode($in);
	if($mode eq 'CONFIRM') {
		unless($in =~ /\$hidden\$/) {
			&ErrorPrint('置換指示子 $hidden$ をformタグ内に入れて下さい。');
		}
	}
	open(FILE, ">$in_file") || &ErrorPrint("テンプレートファイル $in_file をオープンできませんでした。: $!");
	print FILE $in;
	close(FILE);
}

sub PrintHtmlEditor {
	my($mode) = @_;
	my($in_file, $out_file);
	if($mode eq 'CONFIRM') {
		$in_file = $CONFIRM_TEMP_FILE;
		$out_file = $CONFIRM_EDITOR_FILE;
	} elsif($mode eq 'THANKS') {
		$in_file = $THANKS_TEMP_FILE;
		$out_file = $THANKS_EDITOR_FILE;
	} elsif($mode eq 'ERROR') {
		$in_file = $ERROR_TEMP_FILE;
		$out_file = $ERROR_EDITOR_FILE;
	} else {
		&ErrorPrint("不正なリクエストです。");
	}
	my $in = &ReadTemplate($in_file);
	my $out = &ReadTemplate($out_file);
	$in = &SecureHtml($in);
	$out =~ s/\$HTML\$/$in/;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $out;
	exit;
}

sub SecureHtml {
	my($html) = @_;
	$html =~ s/\&amp;/\&/g;
	$html =~ s/\&/&amp;/g;
	$html =~ s/\"/&quot;/g;
	$html =~ s/</&lt;/g;
	$html =~ s/>/&gt;/g;
	return $html;
}

sub ErrorPrint {
	my($message) = @_;
	my $html = &ReadTemplate($ERROR_FILE);
	$html =~ s/\$error\$/$message/ig;
	$html = &CopyRight($html);
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}


sub ErrorPrint2 {
	my($message) = @_;
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $message;
	exit;
}

sub ClearCookie {
	my($CookieName) = @_;
	my($CookieHeaderString);
	my($ExpiresTimeString) = 'Thu, 01-Jan-1970 00:00:00 GMT';
	$CookieHeaderString .= "Set-Cookie: $CookieName=clear\; expires=$ExpiresTimeString\;";
	return $CookieHeaderString;
}

sub SetCookie {
	my($CookieName, $CookieValue) = @_;
	$CookieValue =~ s/([^\w\=\& ])/'%' . unpack("H2", $1)/eg;
	$CookieValue =~ tr/ /+/;
	my($CookieHeaderString) = "Set-Cookie: $CookieName=$CookieValue\;";
	return $CookieHeaderString;
}

sub GetCookie {
	my(@CookieList) = split(/\; /, $ENV{'HTTP_COOKIE'});
	my(%Cookie) = ();
	my($key, $CookieName, $CookieValue);
	for $key (@CookieList) {
		($CookieName, $CookieValue) = split(/=/, $key);
		$CookieValue =~ s/\+/ /g;
		$CookieValue =~ s/%([0-9a-fA-F][0-9a-fA-F])/pack("C",hex($1))/eg;
		$Cookie{$CookieName} = $CookieValue;
	}
	return %Cookie;
}

sub EncryptPasswd {
	my($pass)=@_;
	my @salt_set = ('a'..'z','A'..'Z','0'..'9','.','/');
	srand;
	my $seed1 = int(rand(64));
	my $seed2 = int(rand(64));
	my $salt = $salt_set[$seed1] . $salt_set[$seed2];
	return crypt($pass,$salt);
}

sub UnifyReturnCode {
	my($String) = @_;
	$String =~ s/\x0D\x0A/\n/g;
	$String =~ s/\x0D/\n/g;
	$String =~ s/\x0A/\n/g;
	return $String;
}

