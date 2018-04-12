#!/usr/bin/perl
##############################################################################
# MP Form Mail CGI Professional�Ł@Ver3.2.3
# �iCGI�{�́j
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
#��sendmail�̃I�v�V�����w��
#  ���[���𑗐M����ۂɂ́A�����p�̃T�[�o�Ɏ�������Ă���sendmail�R�}
#  ���h���g���܂����AMP Form Mail CGI Stanrad�ł́A-t, -oi, -f�I�v�V��
#  �����g���܂��B�������A�T�[�o�ɂ���ė��p�\�ȃI�v�V�������قȂ��
#  ���B���������p�̃T�[�o�Ɏ�������Ă���sendmail�ŁA-oi, -f�I�v�V����
#  ���g���Ȃ��ꍇ�ɂ́A�l��0�ɃZ�b�g���ĉ������B�i-t�I�v�V�����͕K�{��
#  ���̂ŁA���̃I�v�V�������O�����Ƃ͏o���܂���B)
#--------------------------------------------------------------------
# -oi�I�v�V����
my $SENDMAIL_OPT_oi = 1;
# -f�I�v�V����
my $SENDMAIL_OPT_f  = 1;

#Unicode::Japanese�̓���`�F�b�N
my $UJ = 1;
if($] < 5.006) {
	$UJ = 0;
} else {
	eval {require Unicode::Japanese;};
	if($@) {$UJ = 0;}
}
#�ݒ�f�[�^�擾/��`

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

# �^�C���X�^���v�p�̓�����������擾
# $stamp: YYYYMMDDhhmmss�i������Ƃ���Ŏg���j
# $send_date: ���M���[���p
# $log_date: ���O�p
my($stamp, $send_date, $logdate) = &GetDate;

# �O���T�[�o����̗��p�֎~
&ExternalRequestCheck;

# �w��z�X�g����̃A�N�Z�X�����O����
my $host_name = &GetHostName($ENV{'REMOTE_ADDR'});
&RejectHostAccess($host_name);

# sendmail�̃p�X���擾����
$SENDMAIL_PATH = &MakeSendmailPath;
#
my $status = $q->param('status');
#�����R�[�h�𔻒�
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

# �t�H�[���f�[�^���擾,���M���[���{�������A�m�F��ʗpHIDDEN�^�O����
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
			#SJIS���p�J�i���܂܂�Ă��Ȃ���ΔO�̂��߂�SJIS�ɕϊ�
			my @chars = &SpritSjisChars($value);
			unless(grep(/^[\xA1-\xDF]$/, @chars)) {
				$value = &CharCodeConvert("$value", "sjis", "${CHARCODE}");
			}
			#�T�C�Y����
			if($ITEM_CONF{$key}->[4] && $key !~ /^attachment/) {
				if(length($value) > $ITEM_CONF{$key}->[4]) {
					my $disp_name = $ITEM_CONF{$key}->[3];
					$disp_name = &SecureHtml($disp_name);
					&ErrorPrint("$disp_name �� $ITEM_CONF{$key}->[4] �o�C�g�ȓ��œ��͂��ĉ������B");
				}
			}
			#���͒l�ϊ�
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

#�Y�t�t�@�C���̑��݂��`�F�b�N
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

# �V���A���ԍ��𐶐�
if($SIRIAL_FLAG) {
	my $sirial = &MakeSirial($stamp);
	$values{'sirial'} = $sirial;
	$values{'SIRIAL'} = $sirial;
}

#Safari�̕����������`�F�b�N
if($ENV{'HTTP_USER_AGENT'} =~ /Safari/) {
	&SafariEncodeMistakeCheck(\%values);
}

# �K�{���ڂ��I���������͓��͂���Ă��邩�̃`�F�b�N
&NecessaryCheck(\%values, \%ITEM_CONF, \@item_names);

#���͒l�����`�F�b�N
&InputRestrict(\%values, \%ITEM_CONF);

# �ē��̓`�F�b�N�B
if(scalar @EQUALITY_CHECK_LIST) {
	&EqualityCheck(\%values);
}

# name�������umailaddress�v�̂��̂����݂��Ȃ���΁A�����ԐM�̃t���O��OFF�ɂ���B
unless($values{'mailaddress'}) {
	$REPLY_FLAG = 0;
}

# �t�H�[�����ɁAname�������umailaddress�v�̂��̂�����΁A
# ���M�����[���A�h���X��D��I�ɐݒ肷��B
my $from_flag = 0;
if($values{'mailaddress'} ne '') {
	$FROM = $values{'mailaddress'};
	$from_flag = 1;
}

# �t�H�[�����ɁAname�������usubject�v�̂��̂�����΁A
# ���M�����[���T�u�W�F�N�g��D��I�ɐݒ肷��B
if($values{'subject'} ne '') {
	$SUBJECT = $values{'subject'};
}

# �Y�t�t�@�C��������΁A�t�@�C�����𒊏o���A
# �e���|�����[�t�@�C���𐶐�����B
my %attach_data = ();
if($attach_flag) {
	for my $aname (@attach_names) {
		my $full_file_name = $q->param($aname);
		my $attach_content_type = $q->uploadInfo($full_file_name)->{'Content-Type'};
		my $full_file_name_euc = $full_file_name;		# \ �ŋ�؂肽�����ASJIS�ł͂��܂������Ȃ����߁AEUC�ɕϊ����Ă��� \ �ŕ�������B
		$full_file_name_euc = &CharCodeConvert("$full_file_name_euc", "euc", "${CHARCODE}");
		my @path_parts = split(/\\/, $full_file_name_euc);
		my $in_file_name = pop(@path_parts);
		$in_file_name = &CharCodeConvert("$in_file_name", "sjis", "euc");
		# �g���q�`�F�b�N
		my @in_file_name_parts = split(/\./, $in_file_name);
		my $ext = pop(@in_file_name_parts);
		my $in_file_name_without_ext = join("\.", @in_file_name_parts);
		if(scalar @EXT_RESTRICT) {
			unless(grep(/^\.$ext$/i, @EXT_RESTRICT)) {
				&ErrorPrint("�w��̃t�@�C���𑗐M���邱�Ƃ͂ł��܂���B");
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
		open(OUTFILE, ">$out_file_path") || &ErrorPrint("�Y�t�t�@�C���̃e���|�����[�t�@�C��\[${out_file_name}\]�̍쐬�Ɏ��s���܂����B:$!");
		my($bytesread, $buffer);
		while($bytesread=read($full_file_name, $buffer, 1024)) {
			print OUTFILE $buffer;
		}
		close(OUTFILE);
		# �Y�t�t�@�C���T�C�Y�̃`�F�b�N
		my $attach_file_size = -s $out_file_path;
		if($attach_file_size > $ATTACHMENT_MAX_SIZE) {
			unlink($out_file_path);
			for my $file (keys %attach_data) {
				unlink($file);
			}
			&ErrorPrint("$ATTACHMENT_MAX_SIZE�o�C�g�ȏ�̃t�@�C���͓Y�t�ł��܂���B");
		}
		$attach_data{$out_file_path} = [$in_file_name, $attach_content_type];
	}
}

#�m�F��ʕ\��
if($CONFIRM_FLAG && $attach_flag == 0 && $status eq '') {
	&PrintConfirm(\@item_names, \%values, \@hiddens);
	exit;
}

#�A�����e�֎~
if($REPEATED_POST_FORBIDDEN) {
	&RepeatedPostCheck($REPEATED_POST_FORBIDDEN);
}

# �t�H�[���f�[�^�����O�ɏo��
if($LOGING_FLAG) {
	&Loging(\@item_names, \%values, $stamp, $logdate);
}

#���[�����M
&MailSend(\@item_names, \%ITEM_CONF, \%values, $attach_flag, \%attach_data);

# �ԐM���[���𑗐M
if($REPLY_FLAG && $from_flag) {
	&Reply(\@item_names, \%values);
}

# �Y�t�t�@�C�����폜����
if($attach_flag && $ATTACHMENT_DEL_FLAG) {
	for my $out_file_path (keys %attach_data) {
		unlink($out_file_path);
	}
}

# ������ʕ\��
if($THANKS_PAGE_METHOD == 1) {
	&Redirect;
} else {
	&PrintThanks(\@item_names, \%values);
}

exit;


######################################################################
# �T�u���[�`��
######################################################################

sub RepeatedPostCheck {
	my($forbidden_sec) = @_;
	if($forbidden_sec < 1) {
		return;
	}
	my $file = "${LOG_DIR}/posted.cgi";
	if(-e $file) {
		open(FILE, "+<$file") || &ErrorPrint("$file�������I�[�v���ł��܂���ł����B");
	} else {
		open(FILE, ">$file") || &ErrorPrint("$file�t�@�C���������I�[�v���ł��܂���ł����B");
	}
	if(&Lock(*FILE)) {
		&ErrorPrint("�t�@�C�����b�N�Ɏ��s���܂����B");
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
		&ErrorPrint("���ɓ��e���󂯕t���܂����B");
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
	#?��3�ȏ�A���������ڂ�2���ڈȏ゠�����ꍇ�ɁASafari�����������ۂƂ݂Ȃ��B
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
		&ErrorPrint("�����p�̃u���E�U�[�iSafari�j���瑗�M���ꂽ�f�[�^�́A�����������N�����Ă��܂��B���͉�ʂɖ߂�A�ēǂݍ��݂�������A�ēx�A���͂��ĉ������B");
	}
}

sub PrintThanks {
	my($names_ref, $values_ref) = @_;
	my $size = -s $THANKS_TEMP_FILE;
	if(!open(FILE, "$THANKS_TEMP_FILE")) {
		&ErrorPrint("�e���v���[�g�t�@�C�� <tt>$THANKS_TEMP_FILE</tt> ���I�[�v���ł��܂���ł����B : $!");
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
		$html .= "���܂��]������Ȃ��ꍇ�́A<a href=\"${REDIRECT_URL}\">������</a>���N���b�N���ĉ������B";
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

# �K�{���ڂ��I���������͓��͂���Ă��邩�̃`�F�b�N
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
	my $error = '�ȉ��̍��ڂ͕K�{�ł��B<ul>';
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
	#���[���A�h���X�`�F�b�N
	if($values_ref->{'mailaddress'} ne '') {
		unless(&MailAddressCheck($values_ref->{'mailaddress'})) {
			my $disp_name = $item_conf_ref->{'mailaddress'}->[3];
			&ErrorPrint("$disp_name������������܂���B");
		}
	}
}

#���͒l�ϊ�
sub ValueConvert {
	my($value, $rule_str) = @_;
	my @rules = split(/,/, $rule_str);
	my $rule;
	for $rule (@rules) {
		if($rule eq '1') {		#�S�p�����ƑS�p�n�C�t���𔼊p�ɕϊ�
			$value =~ s/\x82([\x4F-\x58])/&sjis_num_alfa_z2h($1)/geo;
			$value =~ s/\x81\x7C/\-/g;	#"\x81\x7C" = "�|"
		} elsif($rule eq '2') {	#���p�����Ɣ��p�n�C�t����S�p�ɕϊ�
			$value = &CharCodeConvert("$value", "euc", "sjis");
			$value =~ s/([0-9])/&euc_num_h2z($1)/geo;
			$value =~ s/\-/\xA1\xDD/g;
			$value = &CharCodeConvert("$value", "sjis", "euc");
		} elsif($rule eq '3') {	#�S�p�E���p�n�C�t�����폜
			$value =~ s/\x81\x5B//g;	#"\x81\x5B" = "�["
			$value =~ s/\x81\x5C//g;	#"\x81\x5C" = "�\"
			$value =~ s/\x81\x5D//g;	#"\x81\x5D" = "�]"
			$value =~ s/\x81\x7C//g;	#"\x81\x7C" = "�|"
			$value =~ s/\x2D//g;		#"\x2D" = "-"
		} elsif($rule eq '4') {	#�S�p�A���t�@�x�b�g�𔼊p�ɕϊ�
			my @chars = &SpritSjisCharsWithLF($value);
			my $new;
			for my $c (@chars) {
				if($c =~ /^\x82([\x60-\x79]|[\x81-\x9A])$/) {
					$c = &sjis_num_alfa_z2h($1);
				}
				$new .= $c;
			}
			$value = $new;
		} elsif($rule eq '5') {	#���p�A���t�@�x�b�g��S�p�ɕϊ�
			$value = &CharCodeConvert("$value", "euc", "sjis");
			$value =~ s/([a-zA-Z])/&euc_num_alfa_h2z($1)/geo;
			$value = &CharCodeConvert("$value", "sjis", "euc");
		} elsif($rule eq '6') {	#���p�J�i��S�p�J�i�ɕϊ�
			$value = &kana_h2z_sjis($value);
		} elsif($rule eq '7') {	#���[���A�h���X�𔼊p�ɕϊ�
			$value =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])/&sjis_num_alfa_z2h($1)/geo;
			$value =~ s/\x81\x97/\@/g;
			$value =~ s/\x81\x44/\./g;
			$value =~ s/\x81\x7C/\-/g;
			$value =~ s/\x81\x51/\_/g;
			$value =~ s/\x81\x93/\%/g;
		} elsif($rule eq '8') {	#�S�p�J�^�J�i��S�p�Ђ炪�Ȃɕϊ�
			$value = &SjisZenKana2Hira($value);
		} elsif($rule eq '9') {	#�S�p�Ђ炪�Ȃ�S�p�J�^�J�i�ɕϊ�
			$value = &SjisZenHira2Kana($value);
		}
	}
	return $value;
}

#Shift-JIS�̑S�p�Ђ炪�Ȃ�S�p�J�^�J�i�ɕϊ�
sub SjisZenHira2Kana {
	my($string) = @_;
	$string =~ s/\x82([\x9F-\xF1])/&sjis_zen_hira2kana($1)/geo;
	return $string;
	sub sjis_zen_hira2kana {
		my($c) = @_;
		#���`�݁��@�`�~
		$c =~ tr/[\x9F-\xDD]/[\x40-\x7E]/;
		#�ށ`�񁨃��`��
		$c =~ tr/[\xDE-\xF1]/[\x80-\x93]/;
		#\x83��擪�ɉ�����
		$c = "\x83" . $c;
		return $c;
	}
}

#Shift-JIS�̑S�p�J�^�J�i��S�p�Ђ炪�Ȃɕϊ�
sub SjisZenKana2Hira {
	my($string) = @_;
	$string =~ s/\x83([\x40-\x93])/&sjis_zen_kana2hira($1)/geo;
	return $string;
	sub sjis_zen_kana2hira {
		my($c) = @_;
		#�@�`�~�����`��
		$c =~ tr/[\x40-\x7E]/[\x9F-\xDD]/;
		#���`�����ށ`��
		$c =~ tr/[\x80-\x93]/[\xDE-\xF1]/;
		#\x82��擪�ɉ�����
		$c = "\x82" . $c;
		return $c;
	}
}

#���p������EUC�S�p�ɕϊ�����
sub euc_num_h2z {
	my($c) = @_;
	#�S�p�����ɕϊ�
	$c =~ tr/\x30-\x39/\xB0-\xB9/;
	#1�o�C�g�ڂ�"\xA3"��������
	$c = "\xA3" . $c;
	return $c;
}

#���p�p������EUC�S�p�ɕϊ�����
sub euc_num_alfa_h2z {
	my($c) = @_;
	#�S�p�����ɕϊ�
	$c =~ tr/\x30-\x39/\xB0-\xB9/;
	#�S�p�啶���A���t�@�x�b�g�ɕϊ�
	$c =~ tr/\x41-\x5A/\xC1-\xDA/;
	#�S�p�������A���t�@�x�b�g�ɕϊ�
	$c =~ tr/\x61-\x7A/\xE1-\xFA/;
	#1�o�C�g�ڂ�"\xA3"��������
	$c = "\xA3" . $c;
	return $c;
}

sub sjis_num_alfa_z2h {
	my($c) = @_;
	#���p�����ɕϊ�
	$c =~ tr/\x4F-\x58/\x30-\x39/;
	#���p�啶���A���t�@�x�b�g�ɕϊ�
	$c =~ tr/\x60-\x79/\x41-\x5A/;
	#���p�������A���t�@�x�b�g�ɕϊ�
	$c =~ tr/\x81-\x9A/\x61-\x7A/;
	return $c;
}

#���͒l�����`�F�b�N
sub InputRestrict {
	my($values_ref, $item_conf_ref) = @_;
	my %errs = (
		'1'  => '$NAME$�́A���p�����Ŏw�肵�Ă��������B',
		'2'  => '$NAME$�́A�S�p�����Ŏw�肵�Ă��������B',
		'3'  => '$NAME$�́A���p�A���t�@�x�b�g�Ŏw�肵�Ă��������B',
		'4'  => '$NAME$�́A�S�p�A���t�@�x�b�g�Ŏw�肵�Ă��������B',
		'5'  => '$NAME$�́A���p�p���Ŏw�肵�Ă��������B',
		'6'  => '$NAME$�́A�S�p�p���Ŏw�肵�Ă��������B',
		'7'  => '$NAME$�́A����������܂���B',
		'11' => '$NAME$�́A�n�C�t���Ȃ��̔��p����10���Ŏw�肵�Ă��������B',
		'12' => '$NAME$�́A�n�C�t��������10���̔��p�����Ŏw�肵�Ă��������B',
		'13' => '$NAME$�́A�n�C�t���Ȃ��̔��p����11���Ŏw�肵�Ă��������B',
		'14' => '$NAME$�́A�n�C�t��������11���̔��p�����Ŏw�肵�Ă��������B',
		'15' => '$NAME$�́A�n�C�t���Ȃ��̔��p����11���Ŏw�肵�Ă��������B',
		'16' => '$NAME$�́A�n�C�t��������11���̔��p�����Ŏw�肵�Ă��������B',
		'17' => '$NAME$�́A�n�C�t���Ȃ���10����������11���̔��p�����Ŏw�肵�Ă��������B',
		'18' => '$NAME$�́A�n�C�t��������10����������11���̔��p�����Ŏw�肵�Ă��������B',
		'21' => '$NAME$�́A�n�C�t���Ȃ��Ŕ��p����7���Ŏw�肵�Ă��������B',
		'22' => '$NAME$�́A�n�C�t�������Ĕ��p����7���Ŏw�肵�Ă��������B',
		'23' => '$NAME$�́A���p����3���Ŏw�肵�Ă��������B',
		'24' => '$NAME$�́A���p����4���Ŏw�肵�Ă��������B',
		'31' => '$NAME$�́A�S�p�Ђ炪�ȂŎw�肵�Ă��������B',
		'32' => '$NAME$�́A�S�p�J�^�J�i�Ŏw�肵�Ă��������B',
		'41' => '$NAME$�́AURL�Ƃ��ĕs�K�؂ł��B'
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
			if($rule eq '1') {				#���p�����̂�
				if($value =~ /[^0-9]/) {
					$err_no = $rule;
				}
			} elsif($rule eq '2') {			#�S�p�����̂�
				$value =~ s/\x82[\x4F-\x58]//g;
				if($value ne '') {
					$err_no = $rule;
				}
			} elsif($rule eq '3') {			#���p�A���t�@�x�b�g�̂�
				for my $char (@chars) {
					if($char =~ /[^a-zA-Z]/) {
						$err_no = $rule;
						last;
					}
				}
			} elsif($rule eq '4') {			#�S�p�A���t�@�x�b�g�̂�
				$value =~ s/\x82([\x60-\x79]|[\x81-\x9A])//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '5') {			#���p�p���̂�
				for my $char (@chars) {
					if($char =~ /[^a-zA-Z0-9]/) {
						$err_no = $rule;
						last;
					}
				}
			} elsif($rule eq '6') {			#�S�p�p���̂�
				$value =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '7') {			#���[���A�h���X
				unless(&MailAddressCheck($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '11') {		#�n�C�t���Ȃ��̌Œ�d�b�i���p�j�i��F0312345678�j
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
			} elsif($rule eq '12') {		#�n�C�t������̌Œ�ԍ��i���p�j�i��F03-1234-5678�j
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
			} elsif($rule eq '13') {		#�n�C�t���Ȃ��̌g�ѓd�b�i���p�j�i��F09012345678�j
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^0[8-9]0[0-9]{8}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '14') {		#�n�C�t������̌g�ѓd�b�i���p�j�i��F090-1234-5678�j
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^0[8-9]0\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless($value_len == 13) {
					$err_no = $rule;
				}
			} elsif($rule eq '15') {		#�n�C�t���Ȃ��̂o�g�r�@�i���p�j�i��F07012345678�j
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^070[0-9]{8}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '16') {		#�n�C�t������̂o�g�r�@�i���p�j�i��F070-1234-5678�j
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
				unless($value =~ /^070\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless($value_len == 13) {
					$err_no = $rule;
				}
			} elsif($rule eq '17') {		#�n�C�t���Ȃ��̓d�b�S�ʁi���p�j
				if($value =~ /\-/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '18') {		#�n�C�t������̓d�b�S�ʁi���p�j
				unless($value =~ /^0[0-9]+\-[0-9]+\-[0-9]+$/) {
					$err_no = $rule;
				}
				unless(&IsTelNum($value)) {
					$err_no = $rule;
				}
			} elsif($rule eq '21') {		#�n�C�t���Ȃ��̗X�֔ԍ��i���p�j�i��F1234567�j
				unless($value =~ /^[0-9]{7}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '22') {		#�n�C�t������̗X�֔ԍ��i���p�j�i��F123-4567�j
				unless($value =~ /^[0-9]{3}\-[0-9]{4}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '23') {		#���p����3���i�X�֔ԍ��̑O���j
				unless($value =~ /^[0-9]{3}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '24') {		#���p����4���i�X�֔ԍ��̌㔼�j
				unless($value =~ /^[0-9]{4}$/) {
					$err_no = $rule;
				}
			} elsif($rule eq '31') {		#�S�p�Ђ炪�Ȃ̂�
				$value =~ s/(\x82[\x9F-\xF1]|\x81[\x40-\x42]|\x81\x5B)//g;
				if($value) {
					$err_no = $rule;
				}
			} elsif($rule eq '32') {		#�S�p�J�^�J�i�̂�
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
	#�܂��́A���p�����Ɣ��p�n�C�t���ȊO�̕������܂܂�Ă��Ȃ������`�F�b�N�B
	if($tel =~ /[^0-9\-]/) {
		return 0;
	}
	#���p�n�C�t������菜��
	$tel =~ s/\-//g;
	#�����̌����𒲂ׂ�
	my $len = length $tel;
	#�e�d�b�T�[�r�X���Ƃɏ�������
	if($tel =~ /^0(5|7|8|9)0[1-9]/) {
	#�g�ѓd�b�APHS�̏ꍇ
		if($len == 11) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0120/) {
	#���M�ۋ��p�d�b�ԍ��̏ꍇ
		if($len == 10) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0800/) {
	#���M�ۋ��p�d�b�ԍ��̏ꍇ
		if($len == 11) {
			return 1;
		} else {
			return 0;
		}
	} elsif($tel =~ /^0[1-9]{2}/) {
	#�Œ�d�b�̏ꍇ
		if($len == 9 || $len == 10) {
			return 1;
		} else {
			return 0;
		}
	} else {
	#�ȏシ�ׂĂɓ��Ă͂܂�Ȃ��ꍇ
		return 0;
	}
}

#�ē��̓`�F�b�N
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

# �m�F��ʂ�\������
sub PrintConfirm {
	my($names_ref, $values_ref, $hiddens_ref) = @_;
	# ����CGI��URL����肷��B
	my $cgiurl;
	if($MANUAL_CGIURL =~ /^http/) {
		$cgiurl = $MANUAL_CGIURL;
	} else {
		$cgiurl = &GetCgiUrl;
	}
	#Hidden�^�O����̃X�J���[�ϐ��Ɋi�[����B
	my $hidden = join("\n", @$hiddens_ref);
	#�m�F��ʃe���v���[�g��ǂݎ��
	my $html = &ReadTemplate($CONFIRM_TEMP_FILE);
	#hidden�^�O��u��
	if($html =~ /\$hidden\$/) {
		$html =~ s/\$hidden\$/$hidden/;
	} else {
		&ErrorPrint("�m�F��ʗp�e���v���[�gHTML�t�@�C���i$CONFIRM_TEMP_FILE�j�ɁA\$hidden\$ ���L�ڂ���Ă���܂���B");
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

# ���[���𑗐M����
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
	# ���b�Z�[�W�����[�h���b�v����
	if($WRAP >= 50) {
		$body = &WordWrap($body, $WRAP, 1, 1);
	}
	# ���b�Z�[�W��JIS�ɕϊ�
	$body = &CharCodeConvert("$body", "jis", "sjis");
	my $boundary;
	if($attach_flag) {
		# ���E���`
		$boundary = &GenerateBoundary($body);
	}
	# �T�u�W�F�N�g���ɁA�t�H�[�����͒l�ϊ��w���q������Εϊ�����B
	for my $key (keys %$item_conf_ref) {
		$SUBJECT =~ s/\$$key\$/$values_ref->{$key}/g;
	}
	$SUBJECT =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/gi;

	# ���[���^�C�g����Base64 B�G���R�[�h
	$SUBJECT = &EncodeSubject($SUBJECT);
	#���M����
	my $send_date = &GetSendDate;
	# ���[�����M
	my $sendmail_opt = " -t";
	if($SENDMAIL_OPT_oi) {
		$sendmail_opt .= ' -oi';
	}
	if($SENDMAIL_OPT_f) {
		$sendmail_opt .= " -f'$FROM'";
	}
	open(SENDMAIL, "|${SENDMAIL_PATH}${sendmail_opt}") || &ErrorPrint("���[�����M�Ɏ��s���܂��� : $!");
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
			#�Y�t�t�@�C����Base64�G���R�[�h����
			my $file_size = -s "$out_file_path";
			my $file_data;
			open(FILE, "$out_file_path") || &ErrorPrint("�Y�t�t�@�C���̃e���|�����[�t�@�C�����I�[�v���o���܂���ł����B: $!");
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
		$body = "�y�V���A���ԍ��z\n";
		$body .= "$values_ref->{'sirial'}\n\n";
	}
	for my $name (@$item_names_ref) {
		my $disp_name = $item_conf_ref->{$name}->[3];
		if($disp_name) {
			$body .= "�y$disp_name�z\n";
		} else {
			$body .= "�y$name�z\n";
		}
		$body .= "$values_ref->{$name}\n";
		$body .= "\n";

	}
	$body .= "\n";
	# ���M�ҏ������[���{���ɒǉ�
	my $host_name = &GetHostName($ENV{'REMOTE_ADDR'});

	$body .= "�y���M�ҏ��z\n";
	$body .= "  �E�u���E�U�[      : $values_ref->{'USERAGENT'}\n";
	$body .= "  �E���M��IP�A�h���X: $values_ref->{'REMOTE_ADDR'}\n";
	$body .= "  �E���M���z�X�g��  : $values_ref->{'REMOTE_HOST'}\n";
	$body .= "  �E���M����        : $values_ref->{'DATE'}\n";

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


# �t�H�[���f�[�^�����O�ɏo��
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
			$buff =~ s/\s/\x81\x40/g;	#���p�X�y�[�X��SJIS�S�p�X�y�[�X�ɕϊ�
		} elsif($DELIMITER == 3) {
			$buff =~ s/\t//g;
		} else {
			$buff =~ s/,/\x81\x43/g;	#���p�J���}��SJIS�S�p�J���}�ɕϊ�
		}
		$log_line .= "$buff";
		$log_line .= $delim_char;
	}
	my $host_name = $values_ref->{'REMOTE_HOST'};
	$log_line .= "$ENV{'REMOTE_ADDR'}$delim_char$host_name$delim_char$ENV{'HTTP_USER_AGENT'}";
	$log_line = &UnifyReturnCode($log_line);	#���s�R�[�h���u\n�v�ɓ��ꂷ��
	$log_line =~ s/\n/$RETURN_CODE_CONV/g;	#���s�R�[�h��ϊ�����
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
						&ErrorPrint("�������[�v�G���[ : ���O�t�@�C���������Ɏ��s���܂����B");
					}
				}
				rename($log_file, $new_filename) || &ErrorPrint("���O���[�e�[�V�����Ɏ��s���܂����B: $!");
			}
		}
	}
	open(LOGFILE, ">>$log_file") || &ErrorPrint("���O�t�@�C���������I�[�v���ł��܂���ł����B");
	my $lock_result = &Lock(*LOGFILE);
	if($lock_result) {
		&ErrorPrint("�����A���ݍ����Ă���܂��B���΂炭���Ă��炨�������������B: $lock_result");;
	}
	print LOGFILE "$log_line\n";
	close(LOGFILE);
}


# �ԐM���[���𑗐M����
sub Reply {
	my($names_ref, $values_ref) = @_;
	# �e���v���[�g�t�@�C���̕������ $template�Ɋi�[����
	my $template = &ReadTemplate($REPLY_TEMP_FILE);
	# �����ϊ�
	for my $key (@$names_ref) {
		$template =~ s/\$$key\$/$values_ref->{$key}/g;
	}

	$template =~ s/\$USERAGENT\$/$values_ref->{'USERAGENT'}/g;
	$template =~ s/\$REMOTE_ADDR\$/$values_ref->{'REMOTE_ADDR'}/g;
	$template =~ s/\$REMOTE_HOST\$/$values_ref->{'REMOTE_HOST'}/g;
	$template =~ s/\$DATE\$/$values_ref->{'DATE'}/g;
	$template =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/ig;

	# ���b�Z�[�W�̉��s�R�[�h�𓝈ꂷ��
	$template = &UnifyReturnCode($template);

	# ���b�Z�[�W�����[�h���b�v����
	if($WRAP >= 50) {
		$template = &WordWrap($template, $WRAP, 1, 1);
	}
	# ���[�����M�̂��߂ɁA���b�Z�[�W��JIS�ɕϊ�
	$template = &CharCodeConvert("$template", "jis", "sjis");
	# �T�u�W�F�N�g���ɁA�t�H�[�����͒l�ϊ��w���q������Εϊ�����B
	for my $key (keys %$values_ref) {
		$SUBJECT_FOR_REPLY =~ s/\$$key\$/$values_ref->{$key}/g;
	}
	$SUBJECT =~ s/\$SIRIAL\$/$values_ref->{'SIRIAL'}/gi;
	# �T�u�W�F�N�g��Base64 B�G���R�[�h
	$SUBJECT_FOR_REPLY = &EncodeSubject($SUBJECT_FOR_REPLY);
	# From�s���G���R�[�h
	my $from_line = $FROM_ADDR_FOR_REPLY;
	if($SENDER_NAME_FOR_REPLY) {
		$from_line = &EncodeFrom($SENDER_NAME_FOR_REPLY, $FROM_ADDR_FOR_REPLY);
	}
	#���M����
	my $send_date = &GetSendDate;
	# �ԐM���[�����M
	my $sendmail_opt = ' -t';
	if($SENDMAIL_OPT_oi) {
		$sendmail_opt .= ' -oi';
	}
	if($ERRORS_TO ne '' && $SENDMAIL_OPT_f) {
		$sendmail_opt .= " -f'$ERRORS_TO'";
	} else {
		$sendmail_opt .= " -f'$FROM_ADDR_FOR_REPLY'";
	}
	open(SENDMAIL, "|${SENDMAIL_PATH}${sendmail_opt}") || &ErrorPrint("�����ԐM���[���𑗐M�ł��܂���ł����B: $!");
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

# From�s���G���R�[�h
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
		&ErrorPrint2("�e���v���[�g�t�@�C�� $ERROR_TEMP_FILE ������܂���B: $!");
	}
	my $size = -s $ERROR_TEMP_FILE;
	if(!open(FILE, "$ERROR_TEMP_FILE")) {
		&ErrorPrint2("�e���v���[�g�t�@�C�� <tt>$ERROR_TEMP_FILE</tt> ���I�[�v���ł��܂���ł����B : $!");
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

# ���݂̃^�C���X�^���v��Ԃ�
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
	my @weekdays = ('��', '��', '��', '��', '��', '��', '�y');
	my $disp_stamp = "$year�N$mon��$mday���i$weekdays[$wday]�j $hour:$min:$sec";
	my $stamp = $year.$mon.$mday.$hour.$min.$sec;
	my $log_stamp;
	if($DATE_FORMAT eq '1') {
		$log_stamp = $stamp;
	} elsif($DATE_FORMAT eq '2') {
		$log_stamp = "${year}/${mon}/${mday} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '3') {
		$log_stamp = "${disp_mon} ${mday} ${hour}:${min}:${sec} ${year}";
	} elsif($DATE_FORMAT eq '4') {	#12/29/2003 12:31:51�iUS�F��/��/�N�j
		$log_stamp = "${mon}/${mday}/${year} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '5') {	#29/12/2003 12:31:51�iEuropean�F��/��/�N�j
		$log_stamp = "${mday}/${mon}/${year} ${hour}:${min}:${sec}";
	} elsif($DATE_FORMAT eq '6') {	#2003-12-29 12:31:51�iISO�F�N-��-���j
		$log_stamp = "${year}-${mon}-${mday} ${hour}:${min}:${sec}";
	} else {
		$log_stamp = $stamp;
	}
	return $stamp,$disp_stamp,$log_stamp;
}

# �V���A���ԍ��𐶐�����
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

# ���s�R�[�h�� \n �ɓ���
sub UnifyReturnCode {
	my($String) = @_;
	$String =~ s/\x0D\x0A/\n/g;
	$String =~ s/\x0D/\n/g;
	$String =~ s/\x0A/\n/g;
	return $String;
}

# MIME Multipart�p�̋��E�𐶐�
sub GenerateBoundary {
	my($body_string) = @_;
	srand;
	#���E�������`
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

# �Y�t�t�@�C����Base64�G���R�[�h
sub Base64Encode {
	my($data) = @_;
	my $table = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
	                 'abcdefghijklmnopqrstuvwxyz'.
	                 '0123456789+/';
	#�f�[�^��2�i���ɕϊ�
	my $binary = unpack("B*", $data);
	#�p�b�f�B���O�i�r�b�g�ǉ��j
	my $len = length $data;
	if($len % 3 == 1) {
		$binary .= '0000';
	} elsif($len % 3 == 2) {
		$binary .= '00';
	}
	#3�o�C�g�i24�r�b�g�j�Âɕ���
	my @parts24 = $binary =~ /(.{1,24})/g;
	#�G���R�[�h��̃f�[�^���i�[����X�J���[�ϐ����`
	my $encoded_data;
	#���������o�C�g��ϊ�
	for my $key (@parts24) {
		#24�r�b�g��4��6�r�b�g�ɕ���
		my @parts = $key =~ /.{6}/g;
		#�������ꂽ6�r�b�g��ASCII�����ɕϊ����A
		#$encoded_data�ɒǉ�
		for my $part (@parts) {
			#6�r�b�g��10�i���ɕϊ�
			$part = sprintf("%08d", $part);
			my $dec = unpack("C", pack("B8", $part));
			#ASCII�����ɕϊ����A$encoded_data�ɒǉ�
			$encoded_data .= substr($table, $dec, 1);
		}
	}
	#�p�b�f�B���O�i"="�ǉ��j
	if($len % 3 == 1) {
		$encoded_data .= '==';
	} elsif($len % 3 == 2) {
		$encoded_data .= '=';
	}
	#76�����Ő܂�Ԃ��悤�ɉ��s��}��
	$encoded_data =~ s/(.{1,76})/$1\n/g;
	#�Ō�̉��s����菜��
	$encoded_data =~ s/\n$//;
	#���ʂ�Ԃ�
	return $encoded_data;
}

#���[���T�u�W�F�N�g��Base64 B�G���R�[�h
sub EncodeSubject {
	my($string) = @_;
	#����ASCII�����݂̂������ꍇ�ɂ́A�����ϊ������ɕԂ�
	unless($string =~ /[^\x20-\x7E]/) {
		return $string;
	}
	#���p�J�i��S�p�ɕϊ�
	$string = &kana_h2z_sjis($string);
	#�ȉ��A��ASCII�������܂܂�Ă����ꍇ�̏���
	#Shif-JIS�̕�������ꕶ�����������A�z��Ɋi�[����
	my @chars = $string =~ /
		 [\x20-\x7E]             #ASCII����
		|[\xA1-\xDF]             #���p�J�^�J�i
		|[\x81-\x9F][\x40-\xFC]  #2�o�C�g����
		|[\xE0-\xEF][\x40-\xFC]  #2�o�C�g����
	/gox;
	#JIS�ɕϊ����G���R�[�h����76byte�ȓ��ɂȂ�悤�ɁA�����𕪊�
	#����B�ꕶ���������ĕϊ���̃o�C�g�������ς����Ă����B
	#�w�b�_�[��"Subject: ", "=?ISO-2022-JP?B?", "?="���������ŕK
	#�v�Ȃ��߁A���̕������������āA�G���R�[�h��̃o�C�g���́A49
	#�o�C�g�ȓ��łȂ���΂����Ȃ��B�G���R�[�h����ƁA�T�C�Y��4/3
	#�ɑ�����̂ŁA�t�Z���āAJIS�R�[�h�̕�����36�o�C�g�ȓ��łȂ�
	#��΂����Ȃ��B�������A�p�b�f�B���O���l������ƁA����ɁA2�o
	#�C�g�����āA34�o�C�g�ȓ��łȂ���΂����Ȃ��B
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
	#�s�ɕ�������JIS�R�[�h�̕������A���ꂼ��Base64�G���R�[�h����
	#�w�b�_�[�ɂ���B
	for(my $i=0;$i<@lines;$i++) {
		my $encoded_word;
		$encoded_word .= "=?ISO-2022-JP?B?";
		$encoded_word .= &Base64Encode($lines[$i]);
		$encoded_word .= "?=";
		$lines[$i] = $encoded_word;
	}
	#���s�Ɣ��p�X�y�[�X�Ō���
	my $header = join("\n ", @lines);
	#�w�b�_�[��Ԃ�
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
			&ErrorPrint("�s���ȃT�[�o����̃��N�G�X�g�ł��B");
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
			if($Reject =~ /[^0-9\.]/) {	# �z�X�g���w��̏ꍇ
				if($HostName =~ /$Reject$/) {
					$RejectFlag = 1;
					last;
				}
			} else {	# IP�A�h���X�w��̏ꍇ
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
	#�s���֑�����
	my @non_head_chars = ('�A', '�B', '�C', '�D', '�E', '�H', '�I', '�J', '�K', '�R', '�S', '�T', '�U', '�X', '�[', '�j', '�n', '�p', '�v', '�x', '!', ')', ',', '.', ':', ';', '?', ']', '}', '�', '�', '�', '�', '�', '�', '�');
	#�s���֑�����
	my @non_end_chars = ('�i', '�m', '�o', '�u', '�w', '(', '[', '{', '�');
	#�������[�h���b�v�t���O
	#0:�s��Ȃ��A1:�s��
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
						 [\x20-\x7E]             #ASCII����
						|[\xA1-\xDF]             #���p�J�^�J�i
						|[\x81-\x9F][\x40-\xFC]  #2�o�C�g����
						|[\xE0-\xEF][\x40-\xFC]  #2�o�C�g����
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
	open(FILE, "$file") || &ErrorPrint("�ݒ�t�@�C�� <tt>$file</tt> ���I�[�v���ł��܂���ł����B: $!");
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
	open(FILE, "$file") || &ErrorPrint("�ݒ�t�@�C�� <tt>$file</tt> ���I�[�v���ł��܂���ł����B: $!");
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
	open(FILE, "$file") || &ErrorPrint("�ݒ�t�@�C�� <tt>$file</tt> ���I�[�v���ł��܂���ł����B: $!");
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
	#�`�F�b�N�P�i�s�K�؂ȕ������`�F�b�N�j
	if($mail =~ /[^a-zA-Z0-9\@\.\-\_\%]/) {
		return 0;
	}
	#�`�F�b�N�Q�i@�}�[�N�̃`�F�b�N�j
	#"@"�̐��𐔂��܂��B��ȊO�������ꍇ�ɂ́A0��Ԃ��܂��B
	my $at_num = 0;
	while($mail =~ /\@/g) {
		$at_num ++;
	}
	if($at_num != 1) {
		return 0;
	}
	#�`�F�b�N�R�i�A�J�E���g�A�h���C���̑��݂��`�F�b�N�j
	my($acnt, $domain) = split(/\@/, $mail);
	if($acnt eq '' || $domain eq '') {
		return 0;
	}
	#�`�F�b�N�S�i�h���C���̃h�b�g���`�F�b�N�j
	#�h�b�g�̐��𐔂��܂��B0�������ꍇ�ɂ́A0��Ԃ��܂��B
	my $dot_num = 0;
	while($domain =~ /\./g) {
		$dot_num ++;
	}
	if($dot_num == 0) {
		return 0;
	}
	#�`�F�b�N�T�i�h���C���̊e�p�[�c���`�F�b�N�j
	#�擪�Ƀh�b�g���Ȃ����Ƃ��`�F�b�N
	if($domain =~ /^\./) {
		return 0;
	}
	#�Ō�Ƀh�b�g���Ȃ����Ƃ��`�F�b�N
	if($domain =~ /\.$/) {
		return 0;
	}
	#�h�b�g��2�ȏ㑱���Ă��Ȃ������`�F�b�N
	if($domain =~ /\.\./) {
		return 0;
	}
	#�`�F�b�N�U�iTLD�̃`�F�b�N�j
	my @domain_parts = split(/\./, $domain);
	my $tld = pop @domain_parts;
	if($tld =~ /[^a-zA-Z]/) {
		return 0;
	}
	#���ׂẴ`�F�b�N���ʂ����̂ŁA���̃��[���A�h���X�͓K�؂ł���B
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
		&ErrorPrint2("�e���v���[�g�t�@�C�� $disp_file ���I�[�v���ł��܂���ł����B: $!");
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
			&ErrorPrint("sendmail�̃p�X�������擾�ł��܂���ł����B�ݒ�t�@�C���ɖ����I�Ɏw�肵�ĉ������B");
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
		$str =~ s/\xef\xbd\x9e/\xe3\x80\x9c/g;	#�`��ϊ�
		$str =~ s/\xef\xbc\x8d/\xe2\x88\x92/g;	#�|��ϊ�
		&Jcode::convert(\$str, $to, $from);
	}
	return $str;
}
