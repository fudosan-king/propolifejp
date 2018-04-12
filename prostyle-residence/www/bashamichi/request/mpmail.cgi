#!/usr/bin/perl
##############################################################################
# MP Form Mail CGI Professional版　Ver3.2.3
# （CGI本体）
# Copyright(C) futomi 2001 - 2009
# http://www.futomi.com/
###############################################################################
use strict;
use lib "./lib";
use Jcode;
use CGI;
my $q = new CGI;
$| = 1;

#--------------------------------------------------------------------
#■sendmailのオプション指定
#  メールを送信する際には、ご利用のサーバに実装されているsendmailコマ
#  ンドを使いますが、MP Form Mail CGI Stanrad版は、-t, -oi, -fオプショ
#  ンを使います。しかし、サーバによって利用可能なオプションが異なりま
#  す。もしご利用のサーバに実装されているsendmailで、-oi, -fオプション
#  が使えない場合には、値を0にセットして下さい。（-tオプションは必須で
#  すので、このオプションを外すことは出来ません。)
#--------------------------------------------------------------------
# -oiオプション
my $SENDMAIL_OPT_oi = 1;
# -fオプション
my $SENDMAIL_OPT_f  = 1;

#Unicode::Japaneseの動作チェック
my $UJ = 1;
if($] < 5.006) {
	$UJ = 0;
} else {
	eval {require Unicode::Japanese;};
	if($@) {$UJ = 0;}
}
#設定データ取得/定義

my $MANUAL_CGIURL = '';
my $X_MAILER = 'MP Form Mail CGI Pro Ver3.2 (http://www.futomi.com/)';
my $MP_CONF = './conf/mpconfig.cgi';
my $ITEM_CONF = './conf/itemconfig.cgi';
my $CHECK_CONF = './conf/checkconfig.cgi';
my $CONFIRM_TEMP_FILE = './template/confirm.html';
my $MAIL_TEMP_FILE = './template/mail.txt';
my $REPLY_TEMP_FILE = './template/reply.txt';
my $ERROR_TEMP_FILE = './template/error.html';
my $THANKS_TEMP_FILE = './template/thanks.html';
my $ATTACHMENT_DIR = './attachment';

my %CONF = &GetConf($MP_CONF);

my @ALLOW_FROM_URLS = split(/\|/, $CONF{'ALLOW_FROM_URLS'});
my $ATTACHMENT_DEL_FLAG = $CONF{'ATTACHMENT_DEL_FLAG'};
my $ATTACHMENT_MAX_SIZE = $CONF{'ATTACHMENT_MAX_SIZE'};
my $CONFIRM_FLAG = $CONF{'CONFIRM_FLAG'};
my $DELIMITER = $CONF{'DELIMITER'};
my @EXT_RESTRICT = split(/\|/, $CONF{'EXT_RESTRICT'});
my $FORMAT_CUSTOM_FLAG = $CONF{'FORMAT_CUSTOM_FLAG'};
my $FROM = $CONF{'FROM'};
my $FROM_ADDR_FOR_REPLY = $CONF{'FROM_ADDR_FOR_REPLY'};
my $LOGING_FLAG = $CONF{'LOGING_FLAG'};
my $LOG_FORMAT = $CONF{'LOG_FORMAT'};
my $LOTATION = $CONF{'LOTATION'};
my $LOTATION_SIZE = $CONF{'LOTATION_SIZE'};
my $MAILTO = $CONF{'MAILTO'};
my $MAIL_HEADER_PLUS = $CONF{'MAIL_HEADER_PLUS'};
my $REDIRECT_URL = $CONF{'REDIRECT_URL'};
my $REJECT_ERR_MSG = $CONF{'REJECT_ERR_MSG'};
my @REJECT_HOSTS = split(/\|/, $CONF{'REJECT_HOSTS'});
my $REPLY_FLAG = $CONF{'REPLY_FLAG'};
my $SENDER_NAME_FOR_REPLY = $CONF{'SENDER_NAME_FOR_REPLY'};
my $REPLY_CC_OPTION = $CONF{'REPLY_CC_OPTION'};
my $SENDMAIL_PATH = $CONF{'SENDMAIL'};
my $SIRIAL_FLAG = $CONF{'SIRIAL_FLAG'};
my $SUBJECT = $CONF{'SUBJECT'};
my $SUBJECT_FOR_REPLY = $CONF{'SUBJECT_FOR_REPLY'};
my $WRAP = $CONF{'WRAP'};
my $ERRORS_TO = $CONF{'ERRORS_TO'};
my $THANKS_PAGE_METHOD = $CONF{'THANKS_PAGE_METHOD'};
my $REDIRECT_METHOD = $CONF{'REDIRECT_METHOD'};
my $DATE_FORMAT = $CONF{'DATE_FORMAT'};
my $RETURN_CODE_CONV = $CONF{'RETURN_CODE_CONV'};
my $REPEATED_POST_FORBIDDEN = $CONF{'REPEATED_POST_FORBIDDEN'};
my $LOG_DIR = $CONF{'LOG_DIR'};
if($LOG_DIR eq '') {
	$LOG_DIR = './logs';
	$CONF{'LOG_DIR'} = $LOG_DIR;
}

my %ITEM_CONF = &GetItemConf($ITEM_CONF);
my @item_names = &GetOrderdItemNames($ITEM_CONF);
my %CHECK_CONF = &GetConf($CHECK_CONF);
my @EQUALITY_CHECK_LIST = ();
for my $name (keys %CHECK_CONF) {
	my($name2, $err) = split(/,/, $CHECK_CONF{$name});
	push(@EQUALITY_CHECK_LIST, "$name,$name2,$err");
}

# タイムスタンプ用の日時文字列を取得
# $stamp: YYYYMMDDhhmmss（いたるところで使う）
# $send_date: 送信メール用
# $log_date: ログ用
my($stamp, $send_date, $logdate) = &GetDate;

# 外部サーバからの利用禁止
&ExternalRequestCheck;

# 指定ホストからのアクセスを除外する
my $host_name = &GetHostName($ENV{'REMOTE_ADDR'});
&RejectHostAccess($host_name);

# sendmailのパスを取得する
$SENDMAIL_PATH = &MakeSendmailPath;
#
my $status = $q->param('status');
#文字コードを判定
my $CHARCODE;
{
	my $joined_value;
	for my $key ($q->param) {
		$joined_value .= $q->param($key);
	}
	$CHARCODE = &Jcode::getcode($joined_value);
	if($CHARCODE !~ /^(sjis|euc|utf8|jis)$/) {
		$CHARCODE = "sjis";
	}
}

# フォームデータを取得,送信メール本文生成、確認画面用HIDDENタグ生成
my %values = ();
my @hiddens = ();
for my $key (@item_names) {
	if($key eq 'status') {
		next;
	} else {
		my @multi_values = $q->param($key);
		my $multi_values_num = scalar @multi_values;
		$key = &CharCodeConvert("$key", "sjis", "${CHARCODE}");
		my @valid_values;
		for my $value (@multi_values) {
			$value = &UnifyReturnCode($value);
			if($multi_values_num > 1) {
				if($value eq '') {
					next;
				}
			}
			#SJIS半角カナが含まれていなければ念のためにSJISに変換
			my @chars = &SpritSjisChars($value);
			unless(grep(/^[\xA1-\xDF]$/, @chars)) {
				$value = &CharCodeConvert("$value", "sjis", "${CHARCODE}");
			}
			#サイズ制限
			if($ITEM_CONF{$key}->[4] && $key !~ /^attachment/) {
				if(length($value) > $ITEM_CONF{$key}->[4]) {
					my $disp_name = $ITEM_CONF{$key}->[3];
					$disp_name = &SecureHtml($disp_name);
					&ErrorPrint("$disp_name は $ITEM_CONF{$key}->[4] バイト以内で入力して下さい。");
				}
			}
			#入力値変換
			if($ITEM_CONF{$key}->[1] && $key !~ /^attachment/) {
				$value = &ValueConvert($value, $ITEM_CONF{$key}->[1]);
			}
			my $value_for_hidden = &SecureHtml($value);
			my $hidden_tag = "<input type=\"hidden\" name=\"$key\" value=\"$value_for_hidden\">";
			push(@hiddens, $hidden_tag);
			push(@valid_values, $value);
		}
		$values{$key} = join(" ", @valid_values);
	}
}
push(@hiddens, '<input type="hidden" name="status" value="1">');

#添付ファイルの存在をチェック
my $attach_flag = 0;
my @attach_names;
my @in_names = $q->param;
for my $name (@in_names) {
	if($name =~ /^attachment[0-9]*$/) {
		my $value = $q->param($name);
		if($value ne '') {
			push(@attach_names, $name);
			$attach_flag ++;
		}
	}
}

$values{'DATE'} = $send_date;
$values{'USERAGENT'} = $ENV{'HTTP_USER_AGENT'};
$values{'REMOTE_ADDR'} = $ENV{'REMOTE_ADDR'};
$values{'REMOTE_HOST'} = $host_name;

# シリアル番号を生成
if($SIRIAL_FLAG) {
	my $sirial = &MakeSirial($stamp);
	$values{'sirial'} = $sirial;
	$values{'SIRIAL'} = $sirial;
}

#Safariの文字化けをチェック
if($ENV{'HTTP_USER_AGENT'} =~ /Safari/) {
	&SafariEncodeMistakeCheck(\%values);
}

# 必須項目が選択もしくは入力されているかのチェック
&NecessaryCheck(\%values, \%ITEM_CONF, \@item_names);

#入力値制限チェック
&InputRestrict(\%values, \%ITEM_CONF);

# 再入力チェック。
if(scalar @EQUALITY_CHECK_LIST) {
	&EqualityCheck(\%values);
}

# name属性が「mailaddress」のものが存在しなければ、自動返信のフラグをOFFにする。
unless($values{'mailaddress'}) {
	$REPLY_FLAG = 0;
}

# フォーム内に、name属性が「mailaddress」のものがあれば、
# 送信元メールアドレスを優先的に設定する。
my $from_flag = 0;
if($values{'mailaddress'} ne '') {
	$FROM = $values{'mailaddress'};
	$from_flag = 1;
}

# フォーム内に、name属性が「subject」のものがあれば、
# 送信元メールサブジェクトを優先的に設定する。
if($values{'subject'} ne '') {
	$SUBJECT = $values{'subject'};
}

# 添付ファイルがあれば、ファイル名を抽出し、
# テンポラリーファイルを生成する。
my %attach_data = ();
if($attach_flag) {
	for my $aname (@attach_names) {
		my $full_file_name = $q->param($aname);
		my $attach_content_type = $q->uploadInfo($full_file_name)->{'Content-Type'};
		my $full_file_name_euc = $full_file_name;		# \ で区切りたいが、SJISではうまくいかないため、EUCに変換してから \ で分割する。
		$full_file_name_euc = &CharCodeConvert("$full_file_name_euc", "euc", "${CHARCODE}");
		my @path_parts = split(/\\/, $full_file_name_euc);
		my $in_file_name = pop(@path_parts);
		$in_file_name = &CharCodeConvert("$in_file_name", "sjis", "euc");
		# 拡張子チェック
		my @in_file_name_parts = split(/\./, $in_file_name);
		my $ext = pop(@in_file_name_parts);
		my $in_file_name_without_ext = join("\.", @in_file_name_parts);
		if(scalar @EXT_RESTRICT) {
			unless(grep(/^\.$ext$/i, @EXT_RESTRICT)) {
				&ErrorPrint("指定のファイルを送信することはできません。");
			}
		}
		$ATTACHMENT_DIR =~ s/\/$//;
		my $out_file_name = $in_file_name;
		if(-e "${ATTACHMENT_DIR}/${out_file_name}") {
			my $i=1;
			while(1) {
				unless(-e "${ATTACHMENT_DIR}/${in_file_name_without_ext}.${i}.${ext}") {
					$out_file_name = "${in_file_name_without_ext}.${i}.${ext}";
					last;
				}
				$i ++;
			}
		}

		my $out_file_path = "${ATTACHMENT_DIR}/${out_file_name}";
		open(OUTFILE, ">$out_file_path") || &ErrorPrint("添付ファイルのテンポラリーファイル\[${out_file_name}\]の作成に失敗しました。:$!");
		my($bytesread, $buffer);
		while($bytesread=read($full_file_name, $buffer, 1024)) {
			print OUTFILE $buffer;
		}
		close(OUTFILE);
		# 添付ファイルサイズのチェック
		my $attach_file_size = -s $out_file_path;
		if($attach_file_size > $ATTACHMENT_MAX_SIZE) {
			unlink($out_file_path);
			for my $file (keys %attach_data) {
				unlink($file);
			}
			&ErrorPrint("$ATTACHMENT_MAX_SIZEバイト以上のファイルは添付できません。");
		}
		$attach_data{$out_file_path} = [$in_file_name, $attach_content_type];
	}
}

#確認画面表示
if($CONFIRM_FLAG && $attach_flag == 0 && $status eq '') {
	&PrintConfirm(\@item_names, \%values, \@hiddens);
	exit;
}

#連続投稿禁止
if($REPEATED_POST_FORBIDDEN) {
	&RepeatedPostCheck($REPEATED_POST_FORBIDDEN);
}

# フォームデータをログに出力
if($LOGING_FLAG) {
	&Loging(\@item_names, \%values, $stamp, $logdate);
}

#メール送信
&MailSend(\@item_names, \%ITEM_CONF, \%values, $attach_flag, \%attach_data);

# 返信メールを送信
if($REPLY_FLAG && $from_flag) {
	&Reply(\@item_names, \%values);
}

# 添付ファイルを削除する
if($attach_flag && $ATTACHMENT_DEL_FLAG) {
	for my $out_file_path (keys %attach_data) {
		unlink($out_file_path);
	}
}

# 完了画面表示
if($THANKS_PAGE_METHOD == 1) {
	&Redirect;
} else {
	&PrintThanks(\@item_names, \%values);
}

exit;


######################################################################
# サブルーチン
######################################################################

sub RepeatedPostCheck {
	my($forbidden_sec) = @_;
	if($forbidden_sec < 1) {
		return;
	}
	my $file = "${LOG_DIR}/posted.cgi";
	if(-e $file) {
		open(FILE, "+<$file") || &ErrorPrint("$fileを書込オープンできませんでした。");
	} else {
		open(FILE, ">$file") || &ErrorPrint("$fileファイルを書込オープンできませんでした。");
	}
	if(&Lock(*FILE)) {
		&ErrorPrint("ファイルロックに失敗しました。");
	}
	seek(FILE, 0, 0);
	my %list;
	my $now = time;
	while(<FILE>) {
		chomp;
		my($ip, $post_time) = split(/\t/);
		if($ip && $post_time && $now - $post_time <= $forbidden_sec) {
			$list{$ip} = $post_time;
		}
	}
	if(exists($list{$ENV{'REMOTE_ADDR'}})) {
		&ErrorPrint("既に投稿を受け付けました。");
	} else {
		$list{$ENV{'REMOTE_ADDR'}} = $now;
	}
	truncate FILE, 0;
	seek FILE, 0, 0;
	for my $key (keys %list) {
		print FILE "${key}\t$list{$key}\n";
	}
	close(FILE);
}

sub SafariEncodeMistakeCheck {
	#?が3つ以上連続した項目が2項目以上あった場合に、Safari文字化け現象とみなす。
	my($values_ref) = @_;
	my $count = 0;
	for my $key (keys %{$values_ref}) {
		my $value = $values_ref->{$key};
		if($value =~ /[^\x20-\x7E]/) {
			next;
		}
		if($value =~ /\?{3}/) {
			$count ++;
		}
	}
	if($count >= 2) {
		&ErrorPrint("ご利用のブラウザー（Safari）から送信されたデータは、文字化けを起こしています。入力画面に戻り、再読み込みをした後、再度、入力して下さい。");
	}
}

sub PrintThanks {
	my($names_ref, $values_ref) = @_;
	my $size = -s $THANKS_TEMP_FILE;
	if(!open(FILE, "$THANKS_TEMP_FILE")) {
		&ErrorPrint("テンプレートファイル <tt>$THANKS_TEMP_FILE</tt> をオープンできませんでした。 : $!");
		exit;
	}
	binmode(FILE);
	my $html;
	sysread(FILE, $html, $size);
	close(FILE);
	for my $name (@$names_ref) {
		my $value = $values_ref->{$name};
		$value = &SecureHtml($value);
		if($value eq '') {
			$value = '&nbsp;';
		} else {
			$value =~ s/\n/<br>\n/g;
		}
		$html =~ s/\$${name}\$/${value}/g;
	}
	$html =~ s/\$sirial\$/$values_ref->{'SIRIAL'}/ig;
	my $content_length = length($html);
	print "Content-Length: $content_length\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub Redirect {
	if($REDIRECT_METHOD eq '1') {
		print "Location: $REDIRECT_URL\n\n";
	} elsif($REDIRECT_METHOD eq '2') {
		my $html;
		$html .= "<html><head><title>${X_MAILER}</title>\n";
		$html .= "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=${REDIRECT_URL}\">\n";
		$html .= "</head><body>\n";
		$html .= "うまく転送されない場合は、<a href=\"${REDIRECT_URL}\">こちら</a>をクリックして下さい。";
		$html .= "</body></html>\n";
		my $content_length = length($html);
		print "Content-Length: $content_length\n";
		print $q->header(-type=>'text/html; charset=Shift_JIS');
		print $html
	} else {
		print "Location: $REDIRECT_URL\n\n";
	}
	exit;
}

# 必須項目が選択もしくは入力されているかのチェック
sub NecessaryCheck {
	my($values_ref, $item_conf_ref, $names_ref) = @_;
	my @null_names = ();
	my $cnt = 0;
	for my $name (@$names_ref) {
		if($item_conf_ref->{$name}->[0]) {
			if($values_ref->{$name} eq '') {
				push(@null_names, $name);
				$cnt ++;
			}
		}
	}
	my $error = '以下の項目は必須です。<ul>';
	if($cnt) {
		for my $name (@null_names) {
			if($item_conf_ref->{$name}->[3] ne '') {
				my $disp_name = $item_conf_ref->{$name}->[3];
				$error .= "<li>${disp_name}</li>";
			} else {
				$error .= "<li>${name}</li>";
			}
		}
		$error .= '</ul>';
		&ErrorPrint($error);
	}
	#メールアドレスチェック
	if($values_ref->{'mailaddress'} ne '') {
		unless(&MailAddressCheck($values_ref->{'mailaddress'})) {
			my $disp_name = $item_conf_ref->{'mailaddress'}->[3];
			&ErrorPrint("$disp_nameが正しくありません。");
		}
	}
}

#入力値変換
sub ValueConvert {
	my($value, $rule_str) = @_;
	my @rules = split(/,/, $rule_str);
	my $rule;
	for $rule (@rules) {
		if($rule eq '1') {		#全角数字と全角ハイフンを半角に変換
			$value =~ s/\x82([\x4F-\x58])/&sjis_num_alfa_z2h($1)/geo;
			$value =~ s/\x81\x7C/\-/g;	#"\x81\x7C" = "－"
		} elsif($rule eq '2') {	#半角数字と半角ハイフンを全角に変換
			$value = &CharCodeConvert("$value", "euc", "sjis");
			$value =~ s/([0-9])/&euc_num_h2z($1)/geo;
			$value =~ s/\-/\xA1\xDD/g;
			$value = &CharCodeConvert("$value", "sjis", "euc");
		} elsif($rule eq '3') {	#全角・半角ハイフンを削除
			$value =~ s/\x81\x5B//g;	#"\x81\x5B" = "ー"
			$value =~ s/\x81\x5C//g;	#"\x81\x5C" = "―"
			$value =~ s/\x81\x5D//g;	#"\x81\x5D" = "‐"
			$value =~ s/\x81\x7C//g;	#"\x81\x7C" = "－"
			$value =~ s/\x2D//g;		#"\x2D" = "-"
		} elsif($rule eq '4') {	#全角アルファベットを半角に変換
			my @chars = &SpritSjisCharsWithLF($value);
			my $new;
			for my $c (@chars) {
				if($c =~ /^\x82([\x60-\x79]|[\x81-\x9A])$/) {
					$c = &sjis_num_alfa_z2h($1);
				}
				$new .= $c;
			}
			$value = $new;
		} elsif($rule eq '5') {	#半角アルファベットを全角に変換
			$value = &CharCodeConvert("$value", "euc", "sjis");
			$value =~ s/([a-zA-Z])/&euc_num_alfa_h2z($1)/geo;
			$value = &CharCodeConvert("$value", "sjis", "euc");
		} elsif($rule eq '6') {	#半角カナを全角カナに変換
			$value = &kana_h2z_sjis($value);
		} elsif($rule eq '7') {	#メールアドレスを半角に変換
			$value =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])/&sjis_num_alfa_z2h($1)/geo;
			$value =~ s/\x81\x97/\@/g;
			$value =~ s/\x81\x44/\./g;
			$value =~ s/\x81\x7C/\-/g;
			$value =~ s/\x81\x51/\_/g;
			$value =~ s/\x81\x93/\%/g;
		} elsif($rule eq '8') {	#全角カタカナを全角ひらがなに変換
			$value = &SjisZenKana2Hira($value);
		} elsif($rule eq '9') {	#全角ひらがなを全角カタカナに変換
			$value = &SjisZenHira2Kana($value);
		}
	}
	return $value;
}

#Shift-JISの全角ひらがなを全角カタカナに変換
sub SjisZenHira2Kana {
	my($string) = @_;
	$string =~ s/\x82([\x9F-\xF1])/&sjis_zen_hira2kana($1)/geo;
	return $string;
	sub sjis_zen_hira2kana {
		my($c) = @_;
		#ぁ～み→ァ～ミ
		$c =~ tr/[\x9F-\xDD]/[\x40-\x7E]/;
		#む～ん→ム～ン
		$c =~ tr/[\xDE-\xF1]/[\x80-\x93]/;
		#\x83を先頭に加える
		$c = "\x83" . $c;
		return $c;
	}
}

#Shift-JISの全角カタカナを全角ひらがなに変換
sub SjisZenKana2Hira {
	my($string) = @_;
	$string =~ s/\x83([\x40-\x93])/&sjis_zen_kana2hira($1)/geo;
	return $string;
	sub sjis_zen_kana2hira {
		my($c) = @_;
		#ァ～ミ→ぁ～み
		$c =~ tr/[\x40-\x7E]/[\x9F-\xDD]/;
		#ム～ン→む～ん
		$c =~ tr/[\x80-\x93]/[\xDE-\xF1]/;
		#\x82を先頭に加える
		$c = "\x82" . $c;
		return $c;
	}
}

#半角数字をEUC全角に変換する
sub euc_num_h2z {
	my($c) = @_;
	#全角数字に変換
	$c =~ tr/\x30-\x39/\xB0-\xB9/;
	#1バイト目に"\xA3"を加える
	$c = "\xA3" . $c;
	return $c;
}

#半角英数字をEUC全角に変換する
sub euc_num_alfa_h2z {
	my($c) = @_;
	#全角数字に変換
	$c =~ tr/\x30-\x39/\xB0-\xB9/;
	#全角大文字アルファベットに変換
	$c =~ tr/\x41-\x5A/\xC1-\xDA/;
	#全角小文字アルファベットに変換
	$c =~ tr/\x61-\x7A/\xE1-\xFA/;
	#1バイト目に"\xA3"を加える
	$c = "\xA3" . $c;
	return $c;
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

#入力値制限チェック
sub InputRestrict {
	my($values_ref, $item_conf_ref) = @_;
	my %errs = (
		'1'  => '$NAME$は、半角数字で指定してください。',
		'2'  => '$NAME$は、全角数字で指定してください。',
		'3'  => '$NAME$は、半角アルファベットで指定してください。',
		'4'  => '$NAME$は、全角アルファベットで指定してください。',
		'5'  => '$NAME$は、半角英数で指定してください。',
		'6'  => '$NAME$は、全角英数で指定してください。',
		'7'  => '$NAME$は、正しくありません。',
		'11' => '$NAME$は、ハイフンなしの半角数字10桁で指定してください。',
		'12' => '$NAME$は、ハイフンを入れて10桁の半角数字で指定してください。',
		'13' => '$NAME$は、ハイフンなしの半角数字11桁で指定してください。',
		'14' => '$NAME$は、ハイフンを入れて11桁の半角数字で指定してください。',
		'15' => '$NAME$は、ハイフンなしの半角数字11桁で指定してください。',
		'16' => '$NAME$は、ハイフンを入れて11桁の半角数字で指定してください。',
		'17' => '$NAME$は、ハイフンなしで10桁もしくは11桁の半角数字で指定してください。',
		'18' => '$NAME$は、ハイフンを入れて10桁もしくは11桁の半角数字で指定してください。',
		'21' => '$NAME$は、ハイフンなしで半角数字7桁で指定してください。',
		'22' => '$NAME$は、ハイフンを入れて半角数字7桁で指定してください。',
		'23' => '$NAME$は、半角数字3桁で指定してください。',
		'24' => '$NAME$は、半角数字4桁で指定してください。',
		'31' => '$NAME$は、全角ひらがなで指定してください。',
		'32' => '$NAME$は、全角カタカナで指定してください。',
		'41' => '$NAME$は、URLとして不適切です。'
	);
	for my $key (keys %$item_conf_ref) {
		if($item_conf_ref->{$key}->[2] eq '') {next;}
		if($key =~ /^attachment/) {next;}
		my $value = $values_ref->{$key};
		unless($value) {next;}
		my @chars = &SpritSjisChars($value);
		my $value_len;
		$value_len = length($value);
		my @rules = split(/,/, $item_conf_ref->{$key}->[2]);
		my $err_no;
		for my $rule (@rules) {
			if($rule eq '1') {				#半角数字のみ
				if($value =~ /[^0-9]/) {
					$err_no = $rule;
				}
			} elsif($rule eq '2') {			#全角数字のみ
				$value =~ s/\x82[\x4F-\x58]//g;
				if($value ne '') {
					$err_no = $rule;
				}
			} elsif($rule eq '3') {			#半角アルファベットのみ
				for my $char (@chars) {
					if($char =~ /[^a-zA-Z]/) {
						$err_no = $rule;
						last;
					}
				}
			} elsif($rule eq '4') {			#全角アルファベットのみ
				$value =~ s/\x82([\x60-\x79]|[\x81-\x9A])//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '5') {			#半角英数のみ
				for my $char (@chars) {
					if($char =~ /[^a-zA-Z0-9]/) {
						$err_no = $rule;
						last;
					}
				}
			} elsif($rule eq '6') {			#全角英数のみ
				$value =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '7') {			#メールアドレス
				unless(&MailAddressCheck($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '11') {		#ハイフンなしの固定電話（半角）（例：0312345678）
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value_len == 9 || $value_len == 10) {
					$err_no = $rule;
				}
				if($value =~ /^0(7|8|9)0[1-9]/ || $value =~ /^0120/ || $value =~ /^0800/) {
					$err_no = $rule;
				}
			} elsif($rule eq '12') {		#ハイフンありの固定番号（半角）（例：03-1234-5678）
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^0[0-9]+\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				$value =~ s/\-//g;
				unless($value_len == 9 || $value_len == 10) {
					$err_no = $rule;
				}
				if($value =~ /^0(7|8|9)0[1-9]/ || $value =~ /^0120/ || $value =~ /^0800/) {
					$err_no = $rule;
				}
			} elsif($rule eq '13') {		#ハイフンなしの携帯電話（半角）（例：09012345678）
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^0[8-9]0[0-9]{8}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '14') {		#ハイフンありの携帯電話（半角）（例：090-1234-5678）
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^0[8-9]0\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless($value_len == 13) {
					$err_no = $rule;
				}
			} elsif($rule eq '15') {		#ハイフンなしのＰＨＳ　（半角）（例：07012345678）
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^070[0-9]{8}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '16') {		#ハイフンありのＰＨＳ　（半角）（例：070-1234-5678）
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^070\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless($value_len == 13) {
					$err_no = $rule;
				}
			} elsif($rule eq '17') {		#ハイフンなしの電話全般（半角）
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '18') {		#ハイフンありの電話全般（半角）
				unless($value =~ /^0[0-9]+\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '21') {		#ハイフンなしの郵便番号（半角）（例：1234567）
				unless($value =~ /^[0-9]{7}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '22') {		#ハイフンありの郵便番号（半角）（例：123-4567）
				unless($value =~ /^[0-9]{3}\-[0-9]{4}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '23') {		#半角数字3桁（郵便番号の前半）
				unless($value =~ /^[0-9]{3}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '24') {		#半角数字4桁（郵便番号の後半）
				unless($value =~ /^[0-9]{4}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '31') {		#全角ひらがなのみ
				$value =~ s/(\x82[\x9F-\xF1]|\x81[\x40-\x42]|\x81\x5B)//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '32') {		#全角カタカナのみ
				$value =~ s/(\x83[\x40-\x96]|\x81[\x40-\x42]|\x81\x5B)//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '41') {		#URL
				unless(&IsUrl($value)) {
					$err_no = $rule;
				}
			}
			if($err_no) {
				my $err_msg = $errs{$err_no};
				$err_msg =~ s/\$NAME\$/$item_conf_ref->{$key}->[3]/g;
				&ErrorPrint("$err_msg");
			}
		}
		
	}
}

sub IsUrl {
	my($url) = @_;
	unless($url =~ /^https*:\/\/[^\/]+/) {
		return undef;
	}
	if($url =~ /[^0-9a-zA-Z\:\/\.\-\_\#\%\&\=\~\+\?]/) {
		return undef;
	}
	return 1;
}

sub SpritSjisChars {
	my($string) = @_;
	my @chars = $string =~ /[\x81-\x9F][\x40-\xFC]|[\xE0-\xEF][\x40-\xFC]|[\x20-\x7E]|[\xA1-\xDF]/g;
	return @chars;
}

sub SpritSjisCharsWithLF {
	my($string) = @_;
	my @chars = $string =~ /[\x81-\x9F][\x40-\xFC]|[\xE0-\xEF][\x40-\xFC]|[\x20-\x7E]|[\xA1-\xDF]|[\x0A\x0D]/g;
	return @chars;
}

sub IsTelNum {
	my($tel) = @_;
	#まずは、半角数字と半角ハイフン以外の文字が含まれていないかをチェック。
	if($tel =~ /[^0-9\-]/) {
		return 0;
	}
	#半角ハイフンを取り除く
	$tel =~ s/\-//g;
	#数字の桁数を調べる
	my $len = length $tel;
	#各電話サービスごとに条件分岐
	if($tel =~ /^0(5|7|8|9)0[1-9]/) {
	#携帯電話、PHSの場合
		if($len == 11) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0120/) {
	#着信課金用電話番号の場合
		if($len == 10) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0800/) {
	#着信課金用電話番号の場合
		if($len == 11) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0[1-9]{2}/) {
	#固定電話の場合
		if($len == 9 || $len == 10) {
			return 1;
		} else {
			return 0;
		}
	} else {
	#以上すべてに当てはまらない場合
		return 0;
	}
}

#再入力チェック
sub EqualityCheck {
	my($values_ref) = @_;
	my $data;
	for $data (@EQUALITY_CHECK_LIST) {
		my($name1, $name2, $msg) = split(/,/, $data);
		unless($values_ref->{$name1} eq $values_ref->{$name2}) {
			&ErrorPrint("$msg");
		}
	}
}

# 確認画面を表示する
sub PrintConfirm {
	my($names_ref, $values_ref, $hiddens_ref) = @_;
	# このCGIのURLを特定する。
	my $cgiurl;
	if($MANUAL_CGIURL =~ /^http/) {
		$cgiurl = $MANUAL_CGIURL;
	} else {
		$cgiurl = &GetCgiUrl;
	}
	#Hiddenタグを一つのスカラー変数に格納する。
	my $hidden = join("\n", @$hiddens_ref);
	#確認画面テンプレートを読み取る
	my $html = &ReadTemplate($CONFIRM_TEMP_FILE);
	#hiddenタグを置換
	if($html =~ /\$hidden\$/) {
		$html =~ s/\$hidden\$/$hidden/;
	} else {
		&ErrorPrint("確認画面用テンプレートHTMLファイル（$CONFIRM_TEMP_FILE）に、\$hidden\$ が記載されておりません。");
	}
	$html =~ s/\$cgiurl\$/$cgiurl/;
	for my $name (@$names_ref) {
		my $disp_values = $values_ref->{$name};
		$disp_values = &SecureHtml($disp_values);
		if($disp_values eq '') {
			$disp_values = '&nbsp;';
		} else {
			$disp_values =~ s/\n/<br>\n/g;
		}
		$html =~ s/\$$name\$/$disp_values/g;
	}
	my $content_length = length($html);
	print "Content-Length: $content_length\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

# メールを送信する
sub MailSend {
	my($item_names_ref, $item_conf_ref, $values_ref, $attach_flag, $attach_data_ref) = @_;
	my @item_names = @$item_names_ref;
	my %item_conf = %$item_conf_ref;
	my %values = %$values_ref;
	my $body;
	if($FORMAT_CUSTOM_FLAG) {
		$body = &MakeCustomizeMailBody(\%item_conf, \%values);
	} else {
		$body = &MakeRegularMailBody(\@item_names, \%item_conf, \%values);
	}
	# メッセージをワードラップする
	if($WRAP >= 50) {
		$body = &WordWrap($body, $WRAP, 1, 1);
	}
	# メッセージをJISに変換
	$body = &CharCodeConvert("$body", "jis", "sjis");
	my $boundary;
	if($attach_flag) {
		# 境界を定義
		$boundary = &GenerateBoundary($body);
	}
	# サブジェクト内に、フォーム入力値変換指示子があれば変換する。
	for my $key (keys %$item_conf_ref) {
		$SUBJECT =~ s/\$$key\$/$values_ref->{$key}/g;
	}
	$SUBJECT =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/gi;

	# メールタイトルをBase64 Bエンコード
	$SUBJECT = &EncodeSubject($SUBJECT);
	#送信日時
	my $send_date = &GetSendDate;
	# メール送信
	my $sendmail_opt = " -t";
	if($SENDMAIL_OPT_oi) {
		$sendmail_opt .= ' -oi';
	}
	if($SENDMAIL_OPT_f) {
		$sendmail_opt .= " -f'$FROM'";
	}
	open(SENDMAIL, "|${SENDMAIL_PATH}${sendmail_opt}") || &ErrorPrint("メール送信に失敗しました : $!");
	print SENDMAIL "To: $MAILTO\n";
	print SENDMAIL "From: $FROM\n";
	print SENDMAIL "Subject: $SUBJECT\n";
	print SENDMAIL "Date: $send_date\n";
	print SENDMAIL "X-Mailer: $X_MAILER\n";
	print SENDMAIL "MIME-Version: 1.0\n";
	if($MAIL_HEADER_PLUS) {
		$MAIL_HEADER_PLUS =~s/\n+$//;
		print SENDMAIL "$MAIL_HEADER_PLUS\n";
	}
	if($attach_flag) {
		print SENDMAIL 'Content-Type: multipart/mixed;',"\n";
		print SENDMAIL "	boundary=\"$boundary\"\n";
		print SENDMAIL "Content-Transfer-Encoding: 7bit\n";
		print SENDMAIL "\n";
		print SENDMAIL "--$boundary\n";
	}
	print SENDMAIL "Content-Type: text/plain\; charset=iso-2022-jp\n";
	print SENDMAIL "Content-Transfer-Encoding: 7bit\n";
	print SENDMAIL "\n";
	print SENDMAIL "$body\n";
	print SENDMAIL "\n";
	if($attach_flag) {
		for my $out_file_path (keys %$attach_data_ref) {
			#添付ファイルをBase64エンコードする
			my $file_size = -s "$out_file_path";
			my $file_data;
			open(FILE, "$out_file_path") || &ErrorPrint("添付ファイルのテンポラリーファイルをオープン出来ませんでした。: $!");
			sysread FILE, $file_data, $file_size;
			close(FILE);
			my $base64data = &Base64Encode($file_data);
			my $attach_content_type = $attach_data_ref->{$out_file_path}->[1];
			my $file_name = $attach_data_ref->{$out_file_path}->[0];
			$file_name = &EncodeSubject($file_name);
			print SENDMAIL "--$boundary\n";
			print SENDMAIL "Content-Type: $attach_content_type; name=\"$file_name\"\n";
			print SENDMAIL "Content-Disposition: attachment;\n";
			print SENDMAIL " filename=\"$file_name\"\n";
			print SENDMAIL "Content-Transfer-Encoding: base64\n";
			print SENDMAIL "\n";
			print SENDMAIL "$base64data\n";
			print SENDMAIL "\n";
		}
		print SENDMAIL "--$boundary--\n";
	}
	close(SENDMAIL);
}

sub GetSendDate {
	my($sec, $min, $hour, $mday, $mon, $year, $wday) = gmtime(time + 32400);
	my @month_string = ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
						'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	my @week_string = ('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
	my $month = $month_string[$mon];
	my $week = $week_string[$wday];
	$year += 1900;
	$mday = sprintf("%02d", $mday);
	$hour = sprintf("%02d", $hour);
	$min = sprintf("%02d", $min);
	$sec = sprintf("%02d", $sec);
	return "${week}, ${mday} ${month} ${year} ${hour}:${min}:${sec} +0900";
}

sub MakeRegularMailBody {
	my($item_names_ref, $item_conf_ref, $values_ref) = @_;
	my $body;
	if($SIRIAL_FLAG) {
		$body = "【シリアル番号】\n";
		$body .= "$values_ref->{'sirial'}\n\n";
	}
	for my $name (@$item_names_ref) {
		my $disp_name = $item_conf_ref->{$name}->[3];
		if($disp_name) {
			$body .= "【$disp_name】\n";
		} else {
			$body .= "【$name】\n";
		}
		$body .= "$values_ref->{$name}\n";
		$body .= "\n";

	}
	$body .= "\n";
	# 送信者情報をメール本文に追加
	my $host_name = &GetHostName($ENV{'REMOTE_ADDR'});

	$body .= "【送信者情報】\n";
	$body .= "  ・ブラウザー      : $values_ref->{'USERAGENT'}\n";
	$body .= "  ・送信元IPアドレス: $values_ref->{'REMOTE_ADDR'}\n";
	$body .= "  ・送信元ホスト名  : $values_ref->{'REMOTE_HOST'}\n";
	$body .= "  ・送信日時        : $values_ref->{'DATE'}\n";

	return $body;
}

sub MakeCustomizeMailBody {
	my($item_conf_ref, $values_ref) = @_;
	my $template = &ReadTemplate($MAIL_TEMP_FILE);
	for my $key (keys %$item_conf_ref) {
		$template =~ s/\$$key\$/$values_ref->{$key}/g;
	}
	$template =~ s/\$USERAGENT\$/$values_ref->{'USERAGENT'}/g;
	$template =~ s/\$REMOTE_ADDR\$/$values_ref->{'REMOTE_ADDR'}/g;
	$template =~ s/\$REMOTE_HOST\$/$values_ref->{'REMOTE_HOST'}/g;
	$template =~ s/\$DATE\$/$values_ref->{'DATE'}/g;
	$template =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/ig;
	$template = &UnifyReturnCode($template);
	return $template;
}


# フォームデータをログに出力
sub Loging {
	my($item_names_ref, $values_ref, $stamp, $date) = @_;
	my $log_file;
	if($LOTATION eq '0') {
		$log_file = "${LOG_DIR}/maillog.cgi";
	} elsif($LOTATION eq '1') {
		my $day = substr($stamp, 0, 8);
		$log_file = "${LOG_DIR}/maillog\.$day\.cgi";
	} elsif($LOTATION eq '2') {
		my $mon = substr($stamp, 0, 6);
		$log_file = "${LOG_DIR}/maillog\.$mon\.cgi";
	} else {
		$log_file = "${LOG_DIR}/maillog.cgi";
	}
	my $delim_char;
	if($DELIMITER == 2) {
		$delim_char = ' ';
	} elsif($DELIMITER == 3) {
		$delim_char = "\t";
	} else {
		$delim_char = ",";
	}
	my $log_line .= "${date}${delim_char}";
	if($SIRIAL_FLAG) {
		my $sirial = $values_ref->{'SIRIAL'};
		$log_line .= "${sirial}${delim_char}";
	}
	for my $key (@$item_names_ref) {
		if($LOG_FORMAT) {$log_line .= "$key=";}
		my $buff = $values_ref->{$key};
		if($DELIMITER == 2) {
			$buff =~ s/\s/\x81\x40/g;	#半角スペースをSJIS全角スペースに変換
		} elsif($DELIMITER == 3) {
			$buff =~ s/\t//g;
		} else {
			$buff =~ s/,/\x81\x43/g;	#半角カンマをSJIS全角カンマに変換
		}
		$log_line .= "$buff";
		$log_line .= $delim_char;
	}
	my $host_name = $values_ref->{'REMOTE_HOST'};
	$log_line .= "$ENV{'REMOTE_ADDR'}$delim_char$host_name$delim_char$ENV{'HTTP_USER_AGENT'}";
	$log_line = &UnifyReturnCode($log_line);	#改行コードを「\n」に統一する
	$log_line =~ s/\n/$RETURN_CODE_CONV/g;	#改行コードを変換する
	if($LOTATION eq '9') {
		if(-e "$log_file") {
			my $logsize = -s $log_file;
			if($logsize >= $LOTATION_SIZE) {
				my $day = substr($stamp, 0, 8);
				my $new_filename;
				my $cnt = 0;
				while(1) {
					if($cnt == 0) {
						$new_filename = "${LOG_DIR}/maillog\.$day\.cgi";
					} else {
						$new_filename = "${LOG_DIR}/maillog\.$day\-$cnt\.cgi";
					}
					unless(-e "$new_filename") {
						last;
					}
					$cnt ++;
					if($cnt >= 100) {
						&ErrorPrint("無限ループエラー : ログファイル名生成に失敗しました。");
					}
				}
				rename($log_file, $new_filename) || &ErrorPrint("ログローテーションに失敗しました。: $!");
			}
		}
	}
	open(LOGFILE, ">>$log_file") || &ErrorPrint("ログファイルを書込オープンできませんでした。");
	my $lock_result = &Lock(*LOGFILE);
	if($lock_result) {
		&ErrorPrint("只今、込み合っております。しばらくしてからお試しください。: $lock_result");;
	}
	print LOGFILE "$log_line\n";
	close(LOGFILE);
}


# 返信メールを送信する
sub Reply {
	my($names_ref, $values_ref) = @_;
	# テンプレートファイルの文字列を $templateに格納する
	my $template = &ReadTemplate($REPLY_TEMP_FILE);
	# 文字変換
	for my $key (@$names_ref) {
		$template =~ s/\$$key\$/$values_ref->{$key}/g;
	}

	$template =~ s/\$USERAGENT\$/$values_ref->{'USERAGENT'}/g;
	$template =~ s/\$REMOTE_ADDR\$/$values_ref->{'REMOTE_ADDR'}/g;
	$template =~ s/\$REMOTE_HOST\$/$values_ref->{'REMOTE_HOST'}/g;
	$template =~ s/\$DATE\$/$values_ref->{'DATE'}/g;
	$template =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/ig;

	# メッセージの改行コードを統一する
	$template = &UnifyReturnCode($template);

	# メッセージをワードラップする
	if($WRAP >= 50) {
		$template = &WordWrap($template, $WRAP, 1, 1);
	}
	# メール送信のために、メッセージをJISに変換
	$template = &CharCodeConvert("$template", "jis", "sjis");
	# サブジェクト内に、フォーム入力値変換指示子があれば変換する。
	for my $key (keys %$values_ref) {
		$SUBJECT_FOR_REPLY =~ s/\$$key\$/$values_ref->{$key}/g;
	}
	$SUBJECT =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/gi;
	# サブジェクトをBase64 Bエンコード
	$SUBJECT_FOR_REPLY = &EncodeSubject($SUBJECT_FOR_REPLY);
	# From行をエンコード
	my $from_line = $FROM_ADDR_FOR_REPLY;
	if($SENDER_NAME_FOR_REPLY) {
		$from_line = &EncodeFrom($SENDER_NAME_FOR_REPLY, $FROM_ADDR_FOR_REPLY);
	}
	#送信日時
	my $send_date = &GetSendDate;
	# 返信メール送信
	my $sendmail_opt = ' -t';
	if($SENDMAIL_OPT_oi) {
		$sendmail_opt .= ' -oi';
	}
	if($ERRORS_TO ne '' && $SENDMAIL_OPT_f) {
		$sendmail_opt .= " -f'$ERRORS_TO'";
	} else {
		$sendmail_opt .= " -f'$FROM_ADDR_FOR_REPLY'";
	}
	open(SENDMAIL, "|${SENDMAIL_PATH}${sendmail_opt}") || &ErrorPrint("自動返信メールを送信できませんでした。: $!");
	if($ERRORS_TO ne '') {
		print SENDMAIL "Return-Path: $ERRORS_TO\n";
	}
	print SENDMAIL "To: $FROM\n";
	if($REPLY_CC_OPTION eq '1') {
		print SENDMAIL "Cc: $MAILTO\n";
	} elsif($REPLY_CC_OPTION eq '2') {
		print SENDMAIL "Bcc: $MAILTO\n";
	}
	print SENDMAIL "From: $from_line\n";
	print SENDMAIL "Subject: $SUBJECT_FOR_REPLY\n";
	print SENDMAIL "Date: $send_date\n";
	print SENDMAIL "X-Mailer: $X_MAILER\n";
	print SENDMAIL "MIME-Version: 1.0\n";
	print SENDMAIL "Content-Type: text/plain\; charset=iso-2022-jp\n";
	print SENDMAIL "Content-Transfer-Encoding: 7bit\n";
	print SENDMAIL "\n";
	print SENDMAIL "$template";
	close(SENDMAIL);
}

# From行をエンコード
sub EncodeFrom {
	my($str, $from_addr) = @_;
	my $enc_str = &EncodeSubject($str);
	my @lines = split(/\n/, $enc_str);
	my $tmp = pop(@lines);
	if(length($tmp) + length($from_addr) + 3 > 75) {
		$enc_str .= "\n";
	}
	$enc_str .= " <${from_addr}>";
	return $enc_str;
}

sub ErrorPrint {
	my($msg) = @_;
	unless(-e $ERROR_TEMP_FILE) {
		&ErrorPrint2("テンプレートファイル $ERROR_TEMP_FILE がありません。: $!");
	}
	my $size = -s $ERROR_TEMP_FILE;
	if(!open(FILE, "$ERROR_TEMP_FILE")) {
		&ErrorPrint2("テンプレートファイル <tt>$ERROR_TEMP_FILE</tt> をオープンできませんでした。 : $!");
		exit;
	}
	binmode(FILE);
	my $html;
	sysread(FILE, $html, $size);
	close(FILE);
	$html =~ s/\$ERROR\$/$msg/gi;
	my $content_length = length($html);
	print "Content-Length: $content_length\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;
}

sub ErrorPrint2 {
	my($msg) = @_;
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $msg;
	exit;
}

# 現在のタイムスタンプを返す
sub GetDate {
	my($sec, $min, $hour, $mday, $mon, $year, $wday) = gmtime(time + 32400);
	my @month_string = ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
						'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	my $disp_mon = $month_string[$mon];
	$year += 1900;
	$mon += 1;
	$mon = sprintf("%02d", $mon);
	$mday = sprintf("%02d", $mday);
	$hour = sprintf("%02d", $hour);
	$min = sprintf("%02d", $min);
	$sec = sprintf("%02d", $sec);
	my @weekdays = ('日', '月', '火', '水', '木', '金', '土');
	my $disp_stamp = "$year年$mon月$mday日（$weekdays[$wday]） $hour:$min:$sec";
	my $stamp = $year.$mon.$mday.$hour.$min.$sec;
	my $log_stamp;
	if($DATE_FORMAT eq '1') {
		$log_stamp = $stamp;
	} elsif($DATE_FORMAT eq '2') {
		$log_stamp = "${year}/${mon}/${mday} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '3') {
		$log_stamp = "${disp_mon} ${mday} ${hour}:${min}:${sec} ${year}";
	} elsif($DATE_FORMAT eq '4') {	#12/29/2003 12:31:51（US：月/日/年）
		$log_stamp = "${mon}/${mday}/${year} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '5') {	#29/12/2003 12:31:51（European：日/月/年）
		$log_stamp = "${mday}/${mon}/${year} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '6') {	#2003-12-29 12:31:51（ISO：年-月-日）
		$log_stamp = "${year}-${mon}-${mday} ${hour}:${min}:${sec}";
	} else {
		$log_stamp = $stamp;
	}
	return $stamp,$disp_stamp,$log_stamp;
}

# シリアル番号を生成する
sub MakeSirial {
	my($stamp) = @_;
	my $sirial = "${stamp}-";
	my @IpAddr = split(/\./, $ENV{'REMOTE_ADDR'});
	for my $part (@IpAddr) {
		$part = sprintf("%03d", $part);
		$sirial .= $part;
	}
	return $sirial;
}

sub GetHostName {
	my($ip_address) = @_;
	my(@addr) = split(/\./, $ip_address);
	my($packed_addr) = pack("C4", $addr[0], $addr[1], $addr[2], $addr[3]);
	my($name, $aliases, $addrtype, $length, @addrs);
	($name, $aliases, $addrtype, $length, @addrs) = gethostbyaddr($packed_addr, 2);
	return $name;
}

# 改行コードを \n に統一
sub UnifyReturnCode {
	my($String) = @_;
	$String =~ s/\x0D\x0A/\n/g;
	$String =~ s/\x0D/\n/g;
	$String =~ s/\x0A/\n/g;
	return $String;
}

# MIME Multipart用の境界を生成
sub GenerateBoundary {
	my($body_string) = @_;
	srand;
	#境界文字を定義
	my $char_table = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
	                 'abcdefghijklmnopqrstuvwxyz'.
	                 '0123456789_-';
	my @lines = split(/\n/, $body_string);
	my $boundary;
	my $flag = 1;
	while($flag) {
		$boundary = '';
		for (my $i=0;$i<20;$i++) {
			if($i % 5 == 0 && $i != 0) {$boundary .= '_';}
			$boundary .= substr($char_table, int(rand(64)), 1);
		}
		$boundary .= '_'.time;
		$flag = 0;
		for my $line (@lines) {
			if($line =~ /$boundary/) {$flag = 1; last;}
		}
	}
	return $boundary;
}

# 添付ファイルをBase64エンコード
sub Base64Encode {
	my($data) = @_;
	my $table = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
	                 'abcdefghijklmnopqrstuvwxyz'.
	                 '0123456789+/';
	#データを2進数に変換
	my $binary = unpack("B*", $data);
	#パッディング（ビット追加）
	my $len = length $data;
	if($len % 3 == 1) {
		$binary .= '0000';
	} elsif($len % 3 == 2) {
		$binary .= '00';
	}
	#3バイト（24ビット）づつに分割
	my @parts24 = $binary =~ /(.{1,24})/g;
	#エンコード後のデータを格納するスカラー変数を定義
	my $encoded_data;
	#分割したバイトを変換
	for my $key (@parts24) {
		#24ビットを4つの6ビットに分割
		my @parts = $key =~ /.{6}/g;
		#分割された6ビットをASCII文字に変換し、
		#$encoded_dataに追加
		for my $part (@parts) {
			#6ビットを10進数に変換
			$part = sprintf("%08d", $part);
			my $dec = unpack("C", pack("B8", $part));
			#ASCII文字に変換し、$encoded_dataに追加
			$encoded_data .= substr($table, $dec, 1);
		}
	}
	#パッディング（"="追加）
	if($len % 3 == 1) {
		$encoded_data .= '==';
	} elsif($len % 3 == 2) {
		$encoded_data .= '=';
	}
	#76文字で折り返すように改行を挿入
	$encoded_data =~ s/(.{1,76})/$1\n/g;
	#最後の改行を取り除く
	$encoded_data =~ s/\n$//;
	#結果を返す
	return $encoded_data;
}

#メールサブジェクトをBase64 Bエンコード
sub EncodeSubject {
	my($string) = @_;
	#もしASCII文字のみだった場合には、何も変換せずに返す
	unless($string =~ /[^\x20-\x7E]/) {
		return $string;
	}
	#半角カナを全角に変換
	$string = &kana_h2z_sjis($string);
	#以下、非ASCII文字が含まれていた場合の処理
	#Shif-JISの文字列を一文字ずつ分割し、配列に格納する
	my @chars = $string =~ /
		 [\x20-\x7E]             #ASCII文字
		|[\xA1-\xDF]             #半角カタカナ
		|[\x81-\x9F][\x40-\xFC]  #2バイト文字
		|[\xE0-\xEF][\x40-\xFC]  #2バイト文字
	/gox;
	#JISに変換しエンコードして76byte以内になるように、文字を分割
	#する。一文字ずつ加えて変換後のバイト数を見積もっていく。
	#ヘッダーの"Subject: ", "=?ISO-2022-JP?B?", "?="が無条件で必
	#要なため、その分を差し引いて、エンコード後のバイト数は、49
	#バイト以内でなければいけない。エンコードすると、サイズは4/3
	#に増えるので、逆算して、JISコードの文字で36バイト以内でなけ
	#ればいけない。しかし、パッディングを考慮すると、さらに、2バ
	#イト引いて、34バイト以内でなければいけない。
	my(@lines, $line, $jis_line);
	for my $char (@chars) {
		$line .= $char;
		$jis_line = $line;
		$jis_line = &CharCodeConvert("$jis_line", "jis", "sjis");
		if(length($jis_line) > 30) {
			push(@lines, $jis_line);
			$line = '';
			$jis_line = '';
		}
	}
	if(length($jis_line)) {
		push(@lines, $jis_line);
	}
	#行に分割したJISコードの文字を、それぞれBase64エンコードして
	#ヘッダーにする。
	for(my $i=0;$i<@lines;$i++) {
		my $encoded_word;
		$encoded_word .= "=?ISO-2022-JP?B?";
		$encoded_word .= &Base64Encode($lines[$i]);
		$encoded_word .= "?=";
		$lines[$i] = $encoded_word;
	}
	#改行と半角スペースで結合
	my $header = join("\n ", @lines);
	#ヘッダーを返す
	return $header;
}

sub Lock {
	local(*FILE) = @_;
	eval{flock(FILE, 2)};
	if($@) {
		return $!;
	} else {
		return '';
	}
}

sub GetRemoteHost {
	my($remote_host);
	if($ENV{'REMOTE_HOST'} =~ /[^0-9\.]/) {
		$remote_host = $ENV{'REMOTE_HOST'};
	} else {
		my(@addr) = split(/\./, $ENV{'REMOTE_ADDR'});
		my($packed_addr) = pack("C4", $addr[0], $addr[1], $addr[2], $addr[3]);
		my($aliases, $addrtype, $length, @addrs);
		($remote_host, $aliases, $addrtype, $length, @addrs) = gethostbyaddr($packed_addr, 2);
		unless($remote_host) {
			$remote_host = $ENV{'REMOTE_ADDR'};
		}
	}
	return $remote_host;
}

sub ExternalRequestCheck {
	my $url;
	if(scalar @ALLOW_FROM_URLS) {
		my $flag = 0;
		for $url (@ALLOW_FROM_URLS) {
			if($ENV{'HTTP_REFERER'} =~ /^$url/) {
				$flag = 1;
			}
		}
		unless($flag) {
			&ErrorPrint("不正なサーバからのリクエストです。");
		}
	}
}

sub GetCgiUrl {
	my @url_parts = split(/\//, $ENV{'SCRIPT_NAME'});
	my $script_filename = pop @url_parts;
	return $script_filename;
}

sub RejectHostAccess {
	my($HostName) = @_;
	my($Reject);
	my $RejectFlag = 0;
	if(scalar @REJECT_HOSTS) {
		for $Reject (@REJECT_HOSTS) {
			if($Reject =~ /[^0-9\.]/) {	# ホスト名指定の場合
				if($HostName =~ /$Reject$/) {
					$RejectFlag = 1;
					last;
				}
			} else {	# IPアドレス指定の場合
				if($ENV{'REMOTE_ADDR'} =~ /^$Reject/) {
					$RejectFlag = 1;
					last;
				}
			}
		}
		if($RejectFlag) {
			&ErrorPrint("$REJECT_ERR_MSG");
			exit;
		}
	}
}

sub WordWrap {
	my($string, $fold_len, $european_wordwrap_flag, $kinsoku_flag) = @_;
	#行頭禁則文字
	my @non_head_chars = ('、', '。', '，', '．', '・', '？', '！', '゛', '゜', 'ヽ', 'ヾ', 'ゝ', 'ゞ', '々', 'ー', '）', '］', '｝', '」', '』', '!', ')', ',', '.', ':', ';', '?', ']', '}', '｡', '｣', '､', '･', 'ｰ', 'ﾞ', 'ﾟ');
	#行末禁則文字
	my @non_end_chars = ('（', '［', '｛', '「', '『', '(', '[', '{', '｢');
	#欧文ワードラップフラグ
	#0:行わない、1:行う
	#my $european_wordwrap_flag = 1;

	my @wraped_lines;
	my @lines = split(/\n/, $string);
	for my $line (@lines) {
		if(length($line) <= $fold_len) {
			push(@wraped_lines, $line);
			next;
		}
		$_ = $line;
		my @words = /
			(?>[\x21-\x7E]+\x20)
			|(?>[\x21-\x7E]+)
			|(?>[\xA1-\xDF]+\x20)
			|(?>[\xA1-\xDF]+)
			|(?>(?>[\x81-\x9F][\x40-\xFC]|[\xE0-\xEF][\x40-\xFC])+\x20)
			|(?>(?>[\x81-\x9F][\x40-\xFC]|[\xE0-\xEF][\x40-\xFC])+)
			|(?>\x20+)
		/gox;

		my $wraped_line;
		my $wraped_line_len;
		for my $word (@words) {
			my $word_len = length($word);
			if($wraped_line_len + $word_len < $fold_len) {
				$wraped_line .= $word;
				$wraped_line_len += $word_len;
			} elsif($wraped_line_len + $word_len == $fold_len) {
				push(@wraped_lines, "${wraped_line}${word}");
				$wraped_line = '';
				$wraped_line_len = 0;
			} else {
				if($european_wordwrap_flag && $word !~ /[^\x20-\x7E]/ && $word_len < $fold_len) {
					push(@wraped_lines, "${wraped_line}");
					$wraped_line = $word;
					$wraped_line_len = $word_len;
				} else {
					$_ = $word;
					my @chars = /
						 [\x20-\x7E]             #ASCII文字
						|[\xA1-\xDF]             #半角カタカナ
						|[\x81-\x9F][\x40-\xFC]  #2バイト文字
						|[\xE0-\xEF][\x40-\xFC]  #2バイト文字
					/gox;
					for my $char (@chars) {
						if($kinsoku_flag && $wraped_line_len == 0 && grep(/^\Q$char\E$/, @non_head_chars)) {
							my $line_num = scalar @wraped_lines;
							$wraped_lines[$line_num - 1] .= $char;
							next;
						}
						my $char_len = length($char);
						if($wraped_line_len + $char_len < $fold_len) {
							$wraped_line .= $char;
							$wraped_line_len += $char_len;
						} elsif($wraped_line_len + $char_len == $fold_len) {
							if($kinsoku_flag && grep(/^\Q$char\E$/, @non_end_chars)) {
								push(@wraped_lines, "${wraped_line}");
								$wraped_line = $char;
								$wraped_line_len = $char_len;
							} else {
								push(@wraped_lines, "${wraped_line}${char}");
								$wraped_line = '';
								$wraped_line_len = 0;
							}
						} else {
							my($line_end_char) = $wraped_line =~ /(
								[\x21-\x7E]
								|[\xA1-\xDF]
								|[\x81-\x9F][\x40-\xFC]
								|[\xE0-\xEF][\x40-\xFC]
							)$/ox;
							if($kinsoku_flag && grep(/^\Q$char\E$/, @non_head_chars)) {
								push(@wraped_lines, "${wraped_line}${char}");
								$wraped_line = '';
								$wraped_line_len = 0;
							} elsif($kinsoku_flag && grep(/^\Q$line_end_char\E$/, @non_end_chars)) {
								$wraped_line =~ s/\Q${line_end_char}\E$//;
								push(@wraped_lines, "${wraped_line}");
								$wraped_line = "${line_end_char}${char}";
								$wraped_line_len = length($wraped_line);
							} else {
								push(@wraped_lines, "${wraped_line}");
								$wraped_line = $char;
								$wraped_line_len = $char_len;
							}
						}
					}
				}
			}
		}
		if($wraped_line ne '') {
			push(@wraped_lines, "${wraped_line}");
		}
	}
	my $wraped_string = join("\n", @wraped_lines);
	return $wraped_string;
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
		my($key, $value) = $line =~ /^([^\=]+)\=(.*)$/;
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

sub GetItemConf {
	my($file) = @_;
	my %data = ();
	open(FILE, "$file") || &ErrorPrint("設定ファイル <tt>$file</tt> をオープンできませんでした。: $!");
	while(<FILE>) {
		chop;
		my $line = $_;
		unless($line) {next;}
		if($line =~ /^\s*\#/) {next;}
		my($key, $value) = $line =~ /^([^\=]+)\=(.*)$/;
		if($key eq '') {next;}
		$key =~ s/^[\s\t]*//;
		$key =~ s/[\s\t]*$//;
		my($name, $necessary_flag, $convert_code, $restrict_code, $disp_name, $input_max_size) = split(/<>/, $value);
		$disp_name = &SecureHtml($disp_name);
		$data{$name} = [$necessary_flag, $convert_code, $restrict_code, $disp_name, $input_max_size];
	}
	close(FILE);
	return %data;
}

sub GetOrderdItemNames {
	my($file) = @_;
	my %data;
	open(FILE, "$file") || &ErrorPrint("設定ファイル <tt>$file</tt> をオープンできませんでした。: $!");
	while(my $line=<FILE>) {
		chomp $line;
		my($no, $name) = $line =~ /^([0-9]+)\=([^\<]+)<>/;
		$data{$no} = $name;
	}
	close(FILE);
	my @ordered_names;
	for my $no (sort{$a<=>$b} keys %data) {
		push(@ordered_names, $data{$no});
	}
	return @ordered_names;
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

sub SecureHtml {
	my($html) = @_;
	$html =~ s/\&amp;/\&/g;
	$html =~ s/\&/&amp;/g;
	$html =~ s/\"/&quot;/g;
	$html =~ s/</&lt;/g;
	$html =~ s/>/&gt;/g;
	return $html;
}

sub ReadTemplate {
	my($file) = @_;
	my $size = -s $file;
	if(!open(FILE, "$file")) {
		my $disp_file = &SecureHtml($file);
		&ErrorPrint2("テンプレートファイル $disp_file をオープンできませんでした。: $!");
	}
	binmode(FILE);	# For Windows
	my $str;
	sysread(FILE, $str, $size);
	close(FILE);
	$str = &UnifyReturnCode($str);
	return $str;
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

sub MakeSendmailPath {
	my $path;
	if($SENDMAIL_PATH eq '') {
		($path) = &GetCommandPath('sendmail');
		if($path eq '') {
			&ErrorPrint("sendmailのパスを自動取得できませんでした。設定ファイルに明示的に指定して下さい。");
		}
	} else {
		$path = $SENDMAIL_PATH;
	}
	return $path;
}

sub kana_h2z_sjis {
	my($str) = @_;
	if($UJ) {
		$str = Unicode::Japanese->new($str, "sjis")->h2zKana->conv("sjis");
	} else {
		my $j = Jcode->new();
		$j->set($str, 'sjis');
		$str = $j->h2z->sjis;
	}
	return $str;
}

sub CharCodeConvert {
	my($str, $to, $from) = @_;
	if($UJ) {
		$str = Unicode::Japanese->new($str, $from)->conv($to);
	} else {
		$str =~ s/\xef\xbd\x9e/\xe3\x80\x9c/g;	#～を変換
		$str =~ s/\xef\xbc\x8d/\xe2\x88\x92/g;	#－を変換
		&Jcode::convert(\$str, $to, $from);
	}
	return $str;
}
