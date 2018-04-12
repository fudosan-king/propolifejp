#!/usr/bin/perl
######################################################################
# MP Form Mail CGI Professional�Ł@Ver3.2.3
# �i�ݒ�p�X�N���v�g�j
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
my $COPYRIGHT = "futomi's CGI Cafe - MP Form Mail CGI Professional�� $VERSION";
my $COPYRIGHT1 = '<a href="http://www.futomi.com/" target="_blank">futomi\'s CGI Cafe</a>';
my $COPYRIGHT2 = '<a href="http://www.futomi.com/" target="_blank">futomi\'s CGI Cafe - MP Form Mail CGI Professional��</a>';

#�Z�b�V�����t�@�C���i�[�f�B���N�g��
my $SESSION_DIR = './session';
#�Z�b�V�����^�C���A�E�g�i�b�j
my $SESSION_TIMEOUT = 1800;
#�Z�b�V�����t�@�C���폜���ԁi�b�j
my $SESSION_DELETE_TIME = 3600;
#Cookie��
my $COOKIE_NAME = 'mp_session';

# �t�@�C���̃p�X�w��
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

#�֎~ name �����̒�`
my $FORBIDDEN_NAMES = 'DATE|SIRIAL|REMOTE_ADDR|REMOTE_HOST|USERAGENT';


my %CONV_RULES = (
  '1' => '�S�p�����ƑS�p�n�C�t���𔼊p�ɕϊ�',
  '2' => '���p�����Ɣ��p�n�C�t����S�p�ɕϊ�',
  '3' => '�S�p�E���p�n�C�t�����폜',
  '4' => '�S�p�A���t�@�x�b�g�𔼊p�ɕϊ�',
  '5' => '���p�A���t�@�x�b�g��S�p�ɕϊ�',
  '6' => '���p�J�i��S�p�J�i�ɕϊ�',
  '7' => '���[���A�h���X�𔼊p�ɕϊ�',
  '8' => '�S�p�J�^�J�i��S�p�Ђ炪�Ȃɕϊ�',
  '9' => '�S�p�Ђ炪�Ȃ�S�p�J�^�J�i�ɕϊ�'
);

my %RESTRICT_RULES = (
  '1' => '���p�����̂�',
  '2' => '�S�p�����̂�',
  '3' => '���p�A���t�@�x�b�g�̂�',
  '4' => '�S�p�A���t�@�x�b�g�̂�',
  '5' => '���p�p���̂�',
  '6' => '�S�p�p���̂�',
  '7' => '���[���A�h���X',
  '11' => '�n�C�t���Ȃ��̌Œ�d�b�i���p�j�i��F0312345678�j',
  '12' => '�n�C�t������̌Œ�ԍ��i���p�j�i��F03-1234-5678�j',
  '13' => '�n�C�t���Ȃ��̌g�ѓd�b�i���p�j�i��F09012345678�j',
  '14' => '�n�C�t������̌g�ѓd�b�i���p�j�i��F090-1234-5678�j',
  '15' => '�n�C�t���Ȃ��̂o�g�r�@�i���p�j�i��F07012345678�j',
  '16' => '�n�C�t������̂o�g�r�@�i���p�j�i��F070-1234-5678�j',
  '17' => '�n�C�t���Ȃ��̓d�b�S�ʁi���p�j',
  '18' => '�n�C�t������̓d�b�S�ʁi���p�j',
  '21' => '�n�C�t���Ȃ��̗X�֔ԍ��i���p�j�i��F1234567�j',
  '22' => '�n�C�t������̗X�֔ԍ��i���p�j�i��F123-4567�j',
  '23' => '���p����3���i�X�֔ԍ��̑O���j',
  '24' => '���p����4���i�X�֔ԍ��̌㔼�j',
  '31' => '�S�p�Ђ炪�Ȃ̂�',
  '32' => '�S�p�J�^�J�i�̂�',
  '41' => 'URL'
);

my $err_status = '<font color="RED">NG</font>';
my $ok_status = '<font color="GREEN">OK</font>';



#�ݒ�f�[�^�擾
my %CONF = &GetConf($MP_CONF);
#�ݒ�f�[�^�̃f�t�H���g�l���`
if($CONF{'LOG_DIR'} eq '') {
	$CONF{'LOG_DIR'} = './logs';
}

#�������e�̎擾
my $action = $q->param('action');

#�p�X���[�h���ݒ肳��Ă��Ȃ���΁A�p�X���[�h�ݒ��ʂ�\��
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
#�F��
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

#��������
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
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=conf1');
} elsif($action eq 'conf2') {
	&PrintConf2;
} elsif($action eq 'setconf2') {
	&SetConf2;
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=conf2');
} elsif($action eq 'itemlist') {
	&PrintItemlist;
} elsif($action eq 'itemaddform') {
	&PrintTemplate($ADDITEM_FILE, '', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemadd') {
	&ItemAdd;
	&PrintTemplate($COMPLETE_FILE, '�ǉ��������܂����B', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemmodform') {
	&PrintItemModForm;
} elsif($action eq 'itemmod') {
	&ItemMod;
	&PrintTemplate($COMPLETE_FILE, '�C�����܂����B', 'admin.cgi?action=itemlist');
} elsif($action eq 'itemdel') {
	&ItemDel;
	&PrintTemplate($COMPLETE_FILE, '�폜�������܂����B', 'admin.cgi?action=itemlist');
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
	&PrintTemplate($COMPLETE_FILE, '�ǉ��������܂����B', 'admin.cgi?action=checklist');
} elsif($action eq 'checkdel') {
	&CheckDel;
	&PrintTemplate($COMPLETE_FILE, '�폜�������܂����B', 'admin.cgi?action=checklist');
} elsif($action eq 'maileditor') {
	&PrintMaileditor;
} elsif($action eq 'mailedit') {
	&MailEdit;
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=maileditor');
} elsif($action eq 'replyeditor') {
	&PrintReplyeditor;
} elsif($action eq 'replyedit') {
	&ReplyEdit;
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=replyeditor');
} elsif($action eq 'confirmeditor') {
	unless($CONF{'CONFIRM_FLAG'}) {
		&ErrorPrint('�m�F��ʂ�\������ݒ�ɂȂ��Ă��Ȃ��ƁA���̃��j���[�͂����p���������܂���B�@�\�ݒ胁�j���[�̊m�F��ʕ\���������m�F�������B');
	}
	&PrintHtmlEditor('CONFIRM');
} elsif($action eq 'confirmedit') {
	&HtmlEdit('CONFIRM');
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=confirmeditor');
} elsif($action eq 'thankseditor') {
	unless($CONF{'THANKS_PAGE_METHOD'} eq '2') {
		&ErrorPrint('��{�ݒ胁�j���[�̊�����ʕ\�����@���Łu�e���v���[�g���g����CGI���o�́v���w�肵�Ȃ��ƁA���̃��j���[�͂����p���������܂���B');
	}
	&PrintHtmlEditor('THANKS');
} elsif($action eq 'thanksedit') {
	&HtmlEdit('THANKS');
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=thankseditor');
} elsif($action eq 'erroreditor') {
	&PrintHtmlEditor('ERROR');
} elsif($action eq 'erroredit') {
	&HtmlEdit('ERROR');
	&PrintTemplate($COMPLETE_FILE, '�ݒ芮�����܂����B', 'admin.cgi?action=erroreditor');
} elsif($action eq 'logadmin') {
	unless($CONF{'LOGING_FLAG'}) {
		&ErrorPrint('���O���o�͂���ݒ�ɂȂ��Ă��Ȃ��ƁA���̃��j���[�͂����p���������܂���B');
	}
	&PrintLogadmin;
} elsif($action eq 'dlform') {
	&PrintDownloadForm;
} elsif($action eq 'download') {
	&Download;
} elsif($action eq 'logdel') {
	&DeleteLog;
	&PrintTemplate($COMPLETE_FILE, '�폜�������܂����B', 'admin.cgi?action=logadmin');
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


##### �T�u���[�`�� ###################################################

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
		&ErrorPrint("���[�U�[������͂��ĉ������B");
	} else {
		if($in_user_name =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("�F�؃G���[");
		}
	}
	if($in_pass eq '') {
		&ErrorPrint("�p�X���[�h����͂��ĉ������B");
	} else {
		if($in_pass =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("�F�؃G���[");
		}
	}
	if($CONF{'USER_NAME'} ne $in_user_name) {
		&ErrorPrint("�F�؃G���[");
	}
	my $salt;
	if($CONF{'PASSWORD'} =~ /^\$1\$([^\$]+)\$/) {
		$salt = $1;
	} else {
		$salt = substr($CONF{'PASSWORD'}, 0, 2);
	}
	my $pass = crypt($in_pass, $salt);
	unless($pass eq $CONF{'PASSWORD'}) {
		&ErrorPrint("�p�X���[�h���Ⴂ�܂��B");
	}
	my $sid = &MakeSessionId;
	&SessionFileSweep;	#�Z�b�V�����t�@�C���̂��|��
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
		&AuthErrorPrint("���łɃ��O�A�E�g���Ă���܂��B");
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
		&AuthErrorPrint("�Z�b�V�����^�C���A�E�g���܂����B������x���O�I�����Ȃ����Ă��������B");
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
		&ErrorPrint("�Z�b�V�����t�@�C�������Ɏ��s���܂����B�ēx�A���O�I�����Ȃ����Ă݂ĉ������B");
	}
	unless(open(SESSION, ">$session_file")) {
		&ErrorPrint("�Z�b�V�����t�@�C�������Ɏ��s���܂����B�t�H���_�[ session �̃p�[�~�b�V������ 707 �ɂ��ĉ������B: $!");
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
  <title>�V�X�e���f�f</title>
</head>
<body bgcolor="#FFFFFF">
<p>�V�X�e���f�f���J�n���܂��B��肪����ꍇ�ɂ́A�Ԏ��ŕ\\������܂��B�f�f����������܂ł��΂炭���҂����������B</p>
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
	&SysCheckLinePrint('�� CGI �̎��s����', $executer, $ok_status);
	print "\n";

	my $rc = &GetReturnCode("./admin.cgi");
	&SysCheckLinePrint('�� CGI �t�@�C�� ./admin.cgi �̉��s�R�[�h', $rc, $ok_status);
	my $perl_path = &GetPerlPath("./admin.cgi");
	&SysCheckLinePrint('�� CGI �t�@�C�� ./admin.cgi �� Perl �p�X', $perl_path, $ok_status);
	my $permission = sprintf("%o",(stat("./admin.cgi"))[2] & 0777);
	&SysCheckLinePrint('�� CGI �t�@�C�� ./admin.cgi �̃p�[�~�b�V����', $permission, $ok_status);
	print "\n";

	&ExistCheck('./mpmail.cgi', 'CGI �t�@�C��');
	&ReturnCodeCheck('./mpmail.cgi', 'CGI �t�@�C��', $rc);
	&PerlPathCheck('./mpmail.cgi', $perl_path);
	&PermissionCheck('./mpmail.cgi', $executer, $permission);
	print "\n";

	&DirExistCheck('./lib', '���C�u�����[�i�[�t�H���_');
	&ExistCheck('./lib/Jcode.pm', '�����R�[�h�ϊ����C�u�����[');
	&ReturnCodeCheck('./lib/Jcode.pm', '�����R�[�h�ϊ����C�u�����[', $rc);
	&ExistCheck('./lib/Digest/Perl/MD5.pm', 'MD5���W���[��');
	&ReturnCodeCheck('./lib/Digest/Perl/MD5.pm', 'MD5���W���[��', $rc);
	&DirExistCheck('./lib/help', '�w���v�t�@�C���i�[�t�H���_');
	print "\n";

	&DirExistCheck('./session', '�Z�b�V�����t�@�C���i�[�t�H���_');
	&DirWriteCheck('./session', '�Z�b�V�����t�@�C���i�[�t�H���_');
	print "\n";

	&DirExistCheck("$CONF{'LOG_DIR'}", '���O�i�[�t�H���_');
	&DirWriteCheck("$CONF{'LOG_DIR'}", '���O�i�[�t�H���_');
	print "\n";

	&DirExistCheck('./attachment', '�Y�t�i�[�t�H���_');
	&DirWriteCheck('./attachment', '�Y�t�i�[�t�H���_');
	print "\n";

	&DirExistCheck('./conf', '�e��ݒ�i�[�t�H���_');
	&DirWriteCheck('./conf', '�e��ݒ�i�[�t�H���_');
	&ExistCheck($MP_CONF, 'CGI �ݒ�t�@�C��');
	&ReturnCodeCheck($MP_CONF, 'CGI �ݒ�t�@�C��', $rc);
	&WriteCheck($MP_CONF, 'CGI �ݒ�t�@�C��');
	&ExistCheck($ITEM_CONF, '���͍��ڐݒ�t�@�C��');
	&ReturnCodeCheck($ITEM_CONF, '���͍��ڐݒ�t�@�C��', $rc);
	&WriteCheck($ITEM_CONF, '���͍��ڐݒ�t�@�C��');
	&ExistCheck($CHECK_CONF, '�ē��͐ݒ�t�@�C��');
	&ReturnCodeCheck($CHECK_CONF, '�ē��͐ݒ�t�@�C��', $rc);
	&WriteCheck($CHECK_CONF, '�ē��͐ݒ�t�@�C��');
	print "\n";

	&DirExistCheck('./template', '�e���v���[�g�i�[�t�H���_');
	&ExistCheck($MAIL_FORMAT_FILE, '���[���e���v���[�g');
	&ReturnCodeCheck($MAIL_FORMAT_FILE, '���[���e���v���[�g', $rc);
	&WriteCheck($MAIL_FORMAT_FILE, '���[���e���v���[�g');

	&ExistCheck($REPLY_FORMAT_FILE, '�����ԐM���[���e���v���[�g');
	&ReturnCodeCheck($REPLY_FORMAT_FILE, '�����ԐM���[���e���v���[�g', $rc);
	&WriteCheck($REPLY_FORMAT_FILE, '�����ԐM���[���e���v���[�g');

	&ExistCheck($CONFIRM_TEMP_FILE, '�m�F��ʃe���v���[�g');
	&ReturnCodeCheck($CONFIRM_TEMP_FILE, '�m�F��ʃe���v���[�g', $rc);
	&WriteCheck($CONFIRM_TEMP_FILE, '�m�F��ʃe���v���[�g');

	&ExistCheck($ERROR_TEMP_FILE, '�G���[��ʃe���v���[�g');
	&ReturnCodeCheck($ERROR_TEMP_FILE, '�G���[��ʃe���v���[�g', $rc);
	&WriteCheck($ERROR_TEMP_FILE, '�G���[��ʃe���v���[�g');

	&ExistCheck($THANKS_TEMP_FILE, '������ʃe���v���[�g');
	&ReturnCodeCheck($THANKS_TEMP_FILE, '������ʃe���v���[�g', $rc);
	&WriteCheck($THANKS_TEMP_FILE, '������ʃe���v���[�g');

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
	print "�f�f����<br>\n";
	print "</tt></pre>\n";
	print "</body>\n";
	print "</html>\n\n";

	exit;
}

sub PermissionCheck {
	my($file, , $executer, $permission) = @_;
	my $permission2 = sprintf("%o",(stat("$file"))[2] & 0777);
	my $title = "�� CGI �t�@�C�� $file �� �p�[�~�b�V����";
	my $result = "$permission2";
	my $status;
	my $err_str;
	my $err_flag = 0;
	if($permission2 eq '0' || $permission2 eq '') {
		$result = "�f�f�s��";
		$status = "";
	} elsif($permission eq $permission2) {
		$status = $ok_status;
	} else {
		if($executer eq 'owner') {
			unless($permission2 =~ /^(7|5)/) {
				$err_str = &SysCheckError("$file �� $executer �Ɏ��s����������܂���B�p�[�~�b�V������ $permission �̂悤�� $executer �Ɏ��s����^����悤�ɐݒ肵�Ă��������B");
				$status = $err_status;
				$err_flag = 1;
			} else {
				$status = $ok_status;
			}
		} elsif($executer eq 'other') {
			unless($permission2 =~ /(7|5)$/) {
				$err_str = &SysCheckError("$file �� $executer �Ɏ��s����������܂���B�p�[�~�b�V������ $permission �̂悤�� $executer �Ɏ��s����^����悤�ɐݒ肵�Ă��������B");
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
	my $title = "�� CGI �t�@�C�� $file �� Perl �p�X�ݒ�";
	my $result = "$perl_path2";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if($perl_path eq '' || $perl_path2 eq '') {
		$result = "�f�f�s��";
		$status = "";
	} elsif($perl_path2 eq $perl_path) {
		$status = $ok_status;
	} else {
		$err_str = &SysCheckError("$file �� Perl �p�X���������ݒ肳��Ă��܂���B$file �� 1 �s�ڂ��u$perl_path�v�ɏ��������Ă��������B");
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
	my $title = "�� $str $file �ւ̏�����";
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
		$err_str = &SysCheckError("$file �̃p�[�~�b�V����������������܂���B606 �������� 666 �ɕύX���Ă��������B");
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
	my $title = "�� $str $dir ���̃t�@�C��������";
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
			$err_str = &SysCheckError("�f�B���N�g�� $dir �̃p�[�~�b�V����������������܂���B707 �������� 777 �ɕύX���Ă��������B");
			$err_flag = 1;
		}
		&SysCheckLinePrint($title, $result, $status);
		if($err_flag) {
			print "$err_str\n";
		}
	} else {
		$result = "�f�f�s��";
		$status = "";
		&SysCheckLinePrint($title, $result, $status);
	}
}

sub DirExistCheck {
	my($dir, $str) = @_;
	my $title = "�� $str $dir �̑���";
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
		$err_str = &SysCheckError("�f�B���N�g�� $dir ������܂���B�T�[�o��� $dir ���쐬���Ă��������B");
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub ExistCheck {
	my($file, $str) = @_;
	my $title = "�� $str $file �̑���";
	my $result = "";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if(-e "$file") {
		$status = $ok_status;
	} else {
		$err_flag = 1;
		$status = $err_status;
		$err_str = &SysCheckError("$file ������܂���B�T�[�o�� $file �� �A�b�v���[�h���Ă��������B");
	}
	&SysCheckLinePrint($title, $result, $status);
	if($err_flag) {
		print "$err_str\n";
	}
}

sub ReturnCodeCheck {
	my($file, $str, $rc) = @_;
	my $rc2 = &GetReturnCode("$file");
	my $title = "�� $str $file �̉��s�R�[�h";
	my $result = "$rc2";
	my $status;
	my $err_flag = 0;
	my $err_str;
	if($rc2 eq '' || $rc eq '') {
		$result = "�f�f�s��";
		$status = "";
	} elsif($rc2 eq $rc) {
		$status = $ok_status;
	} else {
		$status = $err_status;
		$err_flag = 1;
		$err_str = &SysCheckError("$file �̉��s�R�[�h������������܂���B$file �� ASCII ���[�h�ŏ㏑���A�b�v���[�h���Ă��������B");
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
		&ErrorPrint("�s���ȃ��N�G�X�g�ł��B");
	}
	if($item eq '') {
		&ErrorPrint("�s���ȃ��N�G�X�g�ł��B");
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
		&ErrorPrint("�폜���������O�t�@�C����I�����ĉ������B");
	}
	for my $log (@target_logs) {
		unless(-e "$CONF{'LOG_DIR'}/$log") {
			&ErrorPrint("���O�t�@�C�� <tt>$CONF{'LOG_DIR'}/$log</tt> �����݂��܂���B");
		}
	}
	for my $log (@target_logs) {
		unlink("$CONF{'LOG_DIR'}/$log") || &ErrorPrint("���O�t�@�C�� <tt>$CONF{'LOG_DIR'}/$log</tt> �̍폜�Ɏ��s���܂����B: $!");
	}
}

sub Download {
	my $file = $q->param('LOGFILE');
	my $ext = $q->param('EXT');
	my $return_code = $q->param('RETURN_CODE');
	my $char_code = $q->param('CHAR_CODE');
	my $first_line = $q->param('FIRST_LINE');

	my $file_size = -s "$CONF{'LOG_DIR'}/$file";
	open(LOG, "$CONF{'LOG_DIR'}/$file") || &ErrorPrint("���O�t�@�C�� <tt>$file</tt> ���I�[�v���ł��܂���ł����B : $!");
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
		#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���
		my @fields;
		if($first_line eq '1') {
			@fields = ('DATE');
			if($CONF{'SIRIAL_FLAG'}) {
				push(@fields, 'SIRIAL');
			}
		} elsif($first_line eq '2') {
			@fields = ('���t');
			if($CONF{'SIRIAL_FLAG'}) {
				push(@fields, '�V���A��');
			}
		}
		for my $no (sort{$a<=>$b} keys %item_data) {
			my @data = split(/<>/, $item_data{$no});
			if($first_line eq '1') {
				#name�����l��t������
				push(@fields, $data[0]);
			} elsif($first_line eq '2') {
				#���ږ���t������
				push(@fields, $data[4]);
			}
		}
		if($first_line eq '1') {
			push(@fields, 'REMOTE_ADDR', 'REMOTE_HOST', 'USERAGENT');
		} elsif($first_line eq '2') {
			push(@fields, 'IP�A�h���X', '�z�X�g��', '���[�U�[�G�[�W�F���g');
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
	opendir(DIR, "$CONF{'LOG_DIR'}") || &ErrorPrint("���O�i�[�f�B���N�g�� <tt>$CONF{'LOG_DIR'}</tt> ���I�[�v���ł��܂���ł����B : $!");
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
	opendir(DIR, "$CONF{'LOG_DIR'}") || &ErrorPrint("���O�i�[�f�B���N�g�� <tt>$CONF{'LOG_DIR'}</tt> ���I�[�v���ł��܂���ł����B : $!");
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
			&ErrorPrint("�����ԐM�@�\\���g���ꍇ�ɂ́A�����ԐM���[���p���M�����[���A�h���X��ݒ肵�Ă��������B");
		}
		unless($SUBJECT_FOR_REPLY) {
			&ErrorPrint("�����ԐM�@�\\���g���ꍇ�ɂ́A�ԐM���[���̃T�u�W�F�N�g��ݒ肵�Ă��������B");
		}
	} else {
		&ErrorPrint("�����ԐM�@�\\���g��Ȃ��ݒ�̏ꍇ�A�ԐM���[���̕ҏW�͂ł��܂���B");
	}
	if($FROM_ADDR_FOR_REPLY) {
		$FROM_ADDR_FOR_REPLY = &ConvZen2Han($FROM_ADDR_FOR_REPLY);
		$FROM_ADDR_FOR_REPLY =~ s/^\s*//;
		$FROM_ADDR_FOR_REPLY =~ s/\s*$//;
		&MailAddressCheck($FROM_ADDR_FOR_REPLY, '�����ԐM���[���p���M�����[���A�h���X');
	}

	$CONF{'REPLY_FLAG'} = $REPLY_FLAG;
	$CONF{'FROM_ADDR_FOR_REPLY'} = $FROM_ADDR_FOR_REPLY;
	$CONF{'SENDER_NAME_FOR_REPLY'} = $SENDER_NAME_FOR_REPLY;
	$CONF{'SUBJECT_FOR_REPLY'} = $SUBJECT_FOR_REPLY;
	&WriteConfData;

	my $MAIL_FORMAT = $q->param('MAIL_FORMAT');
	$MAIL_FORMAT = &UnifyReturnCode($MAIL_FORMAT);
	open(MAIL, ">$REPLY_FORMAT_FILE") || &ErrorPrint("���[���t�H�[�}�b�g�t�@�C�� <tt>$REPLY_FORMAT_FILE</tt> �̏����I�[�v���Ɏ��s���܂����B<tt>$REPLY_FORMAT_FILE</tt> �ƁA�f�B���N�g���u<tt>template</tt>�v�̃p�[�~�b�V�������Ċm�F���ĉ������B");
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
		&ErrorPrint("���[����ҏW����ɂ́A���[���t�H�[�}�b�g���u�J�X�^�}�C�Y�v�ɐݒ肵�Ă��������B");
	}
	$CONF{'FORMAT_CUSTOM_FLAG'} = $FORMAT_CUSTOM_FLAG;
	&WriteConfData;

	my $MAIL_FORMAT = $q->param('MAIL_FORMAT');
	$MAIL_FORMAT = &UnifyReturnCode($MAIL_FORMAT);
	open(MAIL, ">$MAIL_FORMAT_FILE") || &ErrorPrint("���[���t�H�[�}�b�g�t�@�C�� <tt>$MAIL_FORMAT_FILE</tt> �̏����I�[�v���Ɏ��s���܂����B<tt>$MAIL_FORMAT_FILE</tt> �ƁA�f�B���N�g���u<tt>template</tt>�v�̃p�[�~�b�V�������Ċm�F���ĉ������B");
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
		&ErrorPrint("�폜���鍀�ڂɃ`�F�b�N�����Ă��������B");
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
		&ErrorPrint("���� name �������w�肷�邱�Ƃ͂ł��܂���B");
	}
	unless($error) {
		&ErrorPrint("�G���[���b�Z�[�W���w�肵�Ă��������B");
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
		&ErrorPrint("name �����u$name1�v�́A���ɐݒ肳��Ă��܂��B");
	}
	if(grep(/^$name2$/, @name_list)) {
		&ErrorPrint("name �����u$name2�v�́A���ɐݒ肳��Ă��܂��B");
	}
	$check_data{$name1} = "$name2,$error";
	&WriteCheckData(\%check_data);
}


sub WriteCheckData {
	my($data_ref) = @_;
	my $name;
	open(CHECK, ">$CHECK_CONF") || &ErrorPrint("�f�[�^�t�@�C�� $CHECK_CONF �̏����I�[�v���Ɏ��s���܂����B: $!");
	for $name (keys %$data_ref) {
		unless($name) {next;}
		my $value = $data_ref->{$name};
		print CHECK "$name=$value\n";
	}
	close(CHECK);
}


sub PrintChecklist {
	my %item_data = &GetConf($ITEM_CONF);
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���
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
		$list_html .= "  <td bgcolor=\"#FFFFFF\" nowrap><input type=\"checkbox\" name=\"NAMES\" value=\"$name\"> �폜</td>\n";
		$list_html .= "</tr>\n";
		$num ++;
	}
	$html =~ s/\$LIST\$/$list_html/g;
	if($num >= 1) {
		$html =~ s/\$DELBUTTON\$/<input type=\"submit\" value=\"�폜\">/;
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
		&ErrorPrint("�폜���鍀�ڂɃ`�F�b�N�����Ă��������B");
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
			&ErrorPrint("name�����u$name�v�́A�ē��͐ݒ肪����Ă��܂��̂ŁA�폜�ł��܂���B���O�ɁA�ē��͐ݒ���������Ă��������B");
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
		&ErrorPrint2("�e���v���[�g�t�@�C�� <tt>$template</tt> ���I�[�v���ł��܂���ł����B : $!");
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
		&ErrorPrint("���ڔԍ��ɕs���ȕ������܂܂�Ă��܂��B");
	}
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���<>�T�C�Y�����i�o�C�g�j
	my %all_item_data = &GetConf($ITEM_CONF);
	my @item_data = split(/<>/, $all_item_data{$itemno});
	#�w�荀�ڔԍ��̑��݂��`�F�b�N
	unless(exists $all_item_data{$itemno}) {
		&ErrorPrint("�w�肳�ꂽ���ڔԍ��͓o�^����Ă���܂���B: $itemno");
	}
	#�C���t�H�[���̃e���v���[�gHTML��ǂݍ���
	my $html = &ReadTemplate($MODITEM_FILE);
	#�e��p�����[�^��u��
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

	#���ʂ��o�͂���
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $html;
	exit;

}

sub MakeItemConfString {
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���<>�T�C�Y�����i�o�C�g�j
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name �������w�肵�Ă��������B");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> �́Aname �����Ƃ��Ďw��ł��܂���B");
	}
	if($name =~ /[^0-9a-zA-Z\-\_]/) {
		&ErrorPrint("name�����́A���p�p�����������͔��p�n�C�t���A���p�A���_�[�X�R�A�[�Ŏw�肵�ĉ������B");
	}
	my $disp_name = $q->param('DISP_NAME');
	unless($disp_name) {
		&ErrorPrint("���ږ��̂��w�肵�Ă��������B");
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
			&ErrorPrint("���̓��͒l�ϊ��ݒ肪�d�����Ă��܂��B: <tt>\[$CONV_RULES{$conv2}\]</tt>");
		}
		$conf_str .= "$conv2,";
		$for_check_hash{$conv2} = 1;
	}
	if($conv3) {
		if(exists($for_check_hash{$conv3})) {
			&ErrorPrint("���̓��͒l�ϊ��ݒ肪�d�����Ă��܂��B: <tt>\[$CONV_RULES{$conv3}\]</tt>");
		}
		$conf_str .= "$conv3,";
		$for_check_hash{$conv3} = 1;
	}
	if($conv4) {
		if(exists($for_check_hash{$conv4})) {
			&ErrorPrint("���̓��͒l�ϊ��ݒ肪�d�����Ă��܂��B: <tt>\[$CONV_RULES{$conv4}\]</tt>");
		}
		$conf_str .= "$conv4,";
		$for_check_hash{$conv4} = 1;
	}
	if($conv5) {
		if(exists($for_check_hash{$conv5})) {
			&ErrorPrint("���̓��͒l�ϊ��ݒ肪�d�����Ă��܂��B: <tt>\[$CONV_RULES{$conv5}\]</tt>");
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
			&ErrorPrint("���̓��͒l�����ݒ肪�d�����Ă��܂��B: <tt>\[$RESTRICT_RULES{$restrict2}\]</tt>");
		}
		$conf_str .= "$restrict2,";
		$for_check_hash{$restrict2} = 1;
	}
	if($restrict3) {
		if(exists($for_check_hash{$restrict3})) {
			&ErrorPrint("���̓��͒l�����ݒ肪�d�����Ă��܂��B: <tt>\[$RESTRICT_RULES{$restrict3}\]</tt>");
		}
		$conf_str .= "$restrict3,";
	}
	$conf_str =~ s/,$//;
	$conf_str .= "<>$disp_name";

	#�T�C�Y����
	my $input_max_size = $q->param('INPUT_MAX_SIZE');
	if($input_max_size =~ /[^0-9]/) {
		&ErrorPrint("�T�C�Y�����ɂ́A���p�����Ŏw�肵�ĉ������B");
	}
	$conf_str .= "<>$input_max_size";
	#�ݒ�l��Ԃ�
	return $conf_str;
}



sub ItemMod {
	my $itemno = $q->param('itemno');
	if($itemno =~ /[^0-9]/) {
		&ErrorPrint("���ڔԍ��ɕs���ȕ������܂܂�Ă��܂��B");
	}
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���<>�T�C�Y�����i�o�C�g�j
	my %item_data = &GetConf($ITEM_CONF);
	#�w�荀�ڔԍ��̑��݂��`�F�b�N
	unless(exists $item_data{$itemno}) {
		&ErrorPrint("�w�肳�ꂽ���ڔԍ��͓o�^����Ă���܂���B: $itemno");
	}
	#name�������̃`�F�b�N
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name �������w�肵�Ă��������B");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> �́Aname �����Ƃ��Ďw��ł��܂���B");
	}
	for my $key (keys %item_data) {
		my @data = split(/<>/, $item_data{$key});
		if($name eq $data[0] && $key ne $itemno) {
			&ErrorPrint("name ������ $name �́A���łɓo�^����Ă��܂��B");
		}
	}

	my $item_conf_string = &MakeItemConfString;
	$item_data{$itemno} = $item_conf_string;
	&WriteItemData(\%item_data);
}

sub ItemAdd {
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���<>�T�C�Y�����i�o�C�g�j
	my %item_data = &GetConf($ITEM_CONF);
	my $name = $q->param('NAME');
	unless($name) {
		&ErrorPrint("name �������w�肵�Ă��������B");
	}
	if($name =~ /^($FORBIDDEN_NAMES)$/i) {
		&ErrorPrint("<tt>$name</tt> �́Aname �����Ƃ��Ďw��ł��܂���B");
	}
	for my $key (keys %item_data) {
		my @data = split(/<>/, $item_data{$key});
		if($name eq $data[0]) {
			&ErrorPrint("name ������ $name �́A���łɓo�^����Ă��܂��B");
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
		&ErrorPrint("���ڔԍ����w�肳��Ă���܂���B");
	}
	my %item_data = &GetConf($ITEM_CONF);
	unless(exists $item_data{$item_no}) {
		&ErrorPrint("�w��̍��ڂ́A�o�^����Ă���܂���B");
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
	open(ITEM, ">$ITEM_CONF") || &ErrorPrint("���ڃf�[�^�t�@�C�� $ITEM_CONF �̏����I�[�v���Ɏ��s���܂����B: $!");
	for $name (keys %$data_ref) {
		unless($name) {next;}
		my $value = $data_ref->{$name};
		print ITEM "$name=$value\n";
	}
	close(ITEM);
}

sub PrintItemlist {
	my %item_data = &GetConf($ITEM_CONF);
	#���ڔԍ�=name����<>�K�{�t���O<>�ϊ��f�[�^<>�����f�[�^<>���ږ���<>�T�C�Y�����i�o�C�g�j

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
	$list .= "  <td bgcolor=\"#F5F5DC\">����</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	if($CONF{'SIRIAL_FLAG'}) {
		$list .= "<tr>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\">SIRIAL</td>\n";
		$list .= "  <td bgcolor=\"#F5F5DC\">�V���A��</td>\n";
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
		#�K�{�ݒ�
		if($necessary) {
			$list .= "  <td bgcolor=\"#FFFFFF\">�K�{</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#���͒l�ϊ�
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
		#���͒l����
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
		#�T�C�Y����
		if($input_max_size) {
			$list .= "  <td bgcolor=\"#FFFFFF\">${input_max_size} byte</td>\n";
		} else {
			$list .= "  <td bgcolor=\"#FFFFFF\">&nbsp;</td>\n";
		}
		#����
		$list .= "  <td bgcolor=\"#FFFFFF\" nowrap>";
		if($no == $first_no) {
			$list .= "<font color=\"#AAAAAA\">��</font> ";
			$list .= "<a href=\"admin.cgi?action=itemdown&itemno=$no\">��</a>";
		} elsif($no == $last_no) {
			$list .= "<a href=\"admin.cgi?action=itemup&itemno=$no\">��</a> ";
			$list .= "<font color=\"#AAAAAA\">��</font>";
		} else {
			$list .= "<a href=\"admin.cgi?action=itemup&itemno=$no\">��</a> ";
			$list .= "<a href=\"admin.cgi?action=itemdown&itemno=$no\">��</a>";
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
	$list .= "  <td bgcolor=\"#F5F5DC\">IP �A�h���X</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">REMOTE_HOST</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">�z�X�g��</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";
	$column ++;
	$list .= "<tr>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\" align=\"center\">$column</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">USERAGENT</td>\n";
	$list .= "  <td bgcolor=\"#F5F5DC\">���[�U�[�G�[�W�F���g</td>\n";
	for(my $i=0;$i<6;$i++) {
		$list .= "  <td bgcolor=\"#F5F5DC\">&nbsp;</td>\n";
	}
	$list .= "</tr>\n";

	$filestr =~ s/\$LIST\$/$list/;
	if($item_num >= 1) {
		$filestr =~ s/\$DELBUTTON\$/<input type=\"submit\" value=\"�폜\">/;
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
	#�m�F��ʕ\��
	if($CONFIRM_FLAG eq '') {
		&ErrorPrint("�m�F��ʕ\����I�����ĉ������B");
	} else {
		unless($CONFIRM_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("�m�F��ʕ\���ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
	}
	#���[���t�H�[�}�b�g
	if($FORMAT_CUSTOM_FLAG eq '') {
		&ErrorPrint("���[���t�H�[�}�b�g��I�����ĉ������B");
	} else {
		unless($FORMAT_CUSTOM_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("���[���t�H�[�}�b�g�ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
	}
	#�����ԐM���[��
	if($REPLY_FLAG eq '') {
		&ErrorPrint("�����ԐM���[����I�����ĉ������B");
	} else {
		unless($REPLY_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("�����ԐM���[���ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
	}
	#�����ԐM���[���p���M�����[���A�h���X
	if($FROM_ADDR_FOR_REPLY eq '') {
		if($REPLY_FLAG eq '1') {
			&ErrorPrint("�����ԐM�@�\\���g���ꍇ�ɂ́A�����ԐM���[���p���M�����[���A�h���X��ݒ肵�Ă��������B");
		}
	} else {
		$FROM_ADDR_FOR_REPLY = &ConvZen2Han($FROM_ADDR_FOR_REPLY);
		$FROM_ADDR_FOR_REPLY =~ s/^\s*//;
		$FROM_ADDR_FOR_REPLY =~ s/\s*$//;
		unless(&MailAddressCheck($FROM_ADDR_FOR_REPLY)) {
			&ErrorPrint("�����ԐM���[���p���M�����[���A�h���X���s�K�؂ł��B");
		}
	}
	#�����ԐM���[���̃T�u�W�F�N�g
	if($REPLY_FLAG eq '1' && $SUBJECT_FOR_REPLY eq '') {
		&ErrorPrint("�����ԐM�@�\\���g���ꍇ�ɂ́A�ԐM���[���̃T�u�W�F�N�g��ݒ肵�Ă��������B");
	}
	#�����ԐM���[���� CC �I�v�V����
	if($REPLY_FLAG eq '1') {
		if($REPLY_CC_OPTION eq '') {
			&ErrorPrint("�����ԐM���[���� CC �I�v�V������I�����ĉ������B");
		} else {
			unless($REPLY_CC_OPTION =~ /^(0|1|2)$/) {
				&ErrorPrint("�����ԐM���[���� CC �I�v�V�����ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
			}
		}
	}
	#�Y�t�t�@�C���̍폜
	if($ATTACHMENT_DEL_FLAG eq '') {
		&ErrorPrint("�Y�t�t�@�C���̍폜��I�����ĉ������B");
	} else {
		unless($ATTACHMENT_DEL_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("�Y�t�t�@�C���̍폜�ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
	}
	#�Y�t�t�@�C���̃T�C�Y���(�o�C�g�j
	if($ATTACHMENT_MAX_SIZE ne '') {
		$ATTACHMENT_MAX_SIZE = &ConvZen2Han($ATTACHMENT_MAX_SIZE);
		$ATTACHMENT_MAX_SIZE =~ s/^\s*//;
		$ATTACHMENT_MAX_SIZE =~ s/\s*$//;
		if($ATTACHMENT_MAX_SIZE =~ /[^0-9]/) {
			&ErrorPrint("�Y�t�t�@�C���̃T�C�Y����͐����݂̂Ŏw�肵�Ă��������B");
		}
	}
	#�Y�t�t�@�C���̊g���q����
	if($EXT_RESTRICT) {
		$EXT_RESTRICT = &ConvTextarea2ConfFormat($EXT_RESTRICT);
		if($EXT_RESTRICT =~ /[^a-zA-Z0-9\.\|]/) {
			&ErrorPrint("�Y�t�t�@�C���̊g���q����@�́A���p�̉p���A�h�b�g�Ŏw�肵�Ă��������B");
		}
	}
	#���O�o��
	if($LOGING_FLAG eq '') {
		&ErrorPrint("���O�o�͂�I�����ĉ������B");
	} else {
		unless($LOGING_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("���O�o�͂ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
		if($LOGING_FLAG) {
			my $testfile = "$CONF{'LOG_DIR'}/test.cgi";
			unless(open(TEST, ">$testfile")) {
				&ErrorPrint("���O�t�@�C���̒ǉ������I�[�v���Ɏ��s���܂����B���̏�Ԃł̓��O���o�͂��邱�Ƃ��ł��܂���B�f�B���N�g�� $CONF{'LOG_DIR'} �̃p�[�~�b�V�������Ċm�F���Ă��������B");
			}
			close(TEST);
			unlink($testfile);
		}
	}
	if($LOGING_FLAG) {
		#���O���[�e�[�V����
		if($LOTATION eq '') {
			&ErrorPrint("���O���[�e�[�V������I�����ĉ������B");
		} else {
			unless($LOTATION =~ /^[0-9]$/) {
				&ErrorPrint("���O���[�e�[�V�����ɕs���Ȓl�����N�G�X�g����܂����B");
			}
		}
		#���O���[�e�[�V�����T�C�Y
		if($LOTATION eq '9') {
			if($LOTATION_SIZE) {
				$LOTATION_SIZE = &ConvZen2Han($LOTATION_SIZE);
				$LOTATION_SIZE =~ s/^\s*//;
				$LOTATION_SIZE =~ s/\s*$//;
				if($LOTATION_SIZE =~ /[^0-9]/) {
					&ErrorPrint("���[�e�[�V�����T�C�Y�͐����݂̂Ŏw�肵�Ă��������B");
				}
			} else {
				&ErrorPrint("�T�C�Y���w�肵�ă��[�e�[�V��������ꍇ�ɂ́A���[�e�[�V�����T�C�Y���w�肵�Ă��������B");
			}
		}
		#���O�t�@�C���t�H�[�}�b�g
		if($LOG_FORMAT eq '') {
			&ErrorPrint("���O�t�@�C���t�H�[�}�b�g��I�����ĉ������B");
		} else {
			unless($LOG_FORMAT =~ /^[0-9]$/) {
				&ErrorPrint("���O�t�@�C���t�H�[�}�b�g�ɕs���Ȓl�����N�G�X�g����܂����B");
			}
		}
		#���O�t�@�C���̋�؂蕶��
		if($DELIMITER eq '') {
			&ErrorPrint("���O�t�@�C���̋�؂蕶����I�����ĉ������B");
		} else {
			unless($DELIMITER =~ /^[0-9]$/) {
				&ErrorPrint("���O�t�@�C���̋�؂蕶���ɕs���Ȓl�����N�G�X�g����܂����B");
			}
		}
		#���O�t�@�C���̓��t�t�H�[�}�b�g
		if($DATE_FORMAT eq '') {
			&ErrorPrint("���O�t�@�C���̓��t�t�H�[�}�b�g��I�����ĉ������B");
		} else {
			unless($DATE_FORMAT =~ /^[0-9]$/) {
				&ErrorPrint("���O�t�@�C���̓��t�t�H�[�}�b�g�ɕs���Ȓl�����N�G�X�g����܂����B");
			}
		}
		#�e�L�X�g�G���A�̉��s
		if($RETURN_CODE_CONV ne '') {
			if($RETURN_CODE_CONV =~ /[^\x20-\x7E]/) {
				&ErrorPrint("�e�L�X�g�G���A�̉��s�ɂ́A���p�����i���p�J�i������)���w�肵�ĉ������B");
			}
			my $forbidden_char = ',';
			if($DELIMITER eq '1') {
				$forbidden_char = ',';
			} elsif($DELIMITER eq '2') {
				$forbidden_char = ' ';
			}
			if($RETURN_CODE_CONV =~ /$forbidden_char/) {
				&ErrorPrint("�e�L�X�g�G���A�̉��s�ɂ́A���O�t�@�C���̋�؂蕶�����g�����Ƃ��o���܂���B");
			}
		}
	}

	#�V���A���ԍ��̐���
	if($SIRIAL_FLAG eq '') {
		&ErrorPrint("�V���A���ԍ��̐�����I�����ĉ������B");
	} else {
		unless($SIRIAL_FLAG =~ /^(0|1)$/) {
			&ErrorPrint("�V���A���ԍ��̐����ɕs�K�؂Ȑݒ�l�����N�G�X�g����܂����B");
		}
	}
	#���p�֎~�z�X�g
	if($REJECT_HOSTS) {
		$REJECT_HOSTS = &ConvTextarea2ConfFormat($REJECT_HOSTS);
	}
	#���p�֎~�z�X�g����̃A�N�Z�X���ɏo�͂���G���[���b�Z�[�W
	if($REJECT_HOSTS) {
		unless($REJECT_ERR_MSG) {
			&ErrorPrint("�u���p�֎~�z�X�g�v���w�肵�Ă���ꍇ�ɂ́A�u���p�֎~�z�X�g����̃A�N�Z�X���ɏo�͂���G���[���b�Z�[�W�v���w�肵�Ă��������B");
		}
	}
	#�O���T�[�o����̗��p�֎~�ݒ�
	if($ALLOW_FROM_URLS) {
		$ALLOW_FROM_URLS = &ConvTextarea2ConfFormat($ALLOW_FROM_URLS);
		my $url;
		my @urls = split(/\|/, $ALLOW_FROM_URLS);
		for $url (@urls) {
			unless(&IsUrl($url)) {
				&ErrorPrint("�O���T�[�o����̗��p�֎~�ݒ�Ɏw�肵��URL���s�K�؂ł��B");
			}
		}
	}
	#�ȈՉp�����[�h���b�v�E�ܕԕ�����
	if($WRAP) {
		$WRAP = &ConvZen2Han($WRAP);
		$WRAP =~ s/^\s*//;
		$WRAP =~ s/\s*$//;
		if($WRAP =~ /[^0-9]/) {
			&ErrorPrint("�u�ȈՉp�����[�h���b�v�E�ܕԕ������v �͐����݂̂Ŏw�肵�Ă��������B");
		}
	}
	#�ǉ����[���w�b�_�[
	if($MAIL_HEADER_PLUS) {
		$MAIL_HEADER_PLUS =~ s/^\s*//;
		$MAIL_HEADER_PLUS =~ s/\s*$//;
		unless($MAIL_HEADER_PLUS =~ /^[^:]+:[\t\s]+/) {
			&ErrorPrint("���[���w�b�_�[�t�H�[�}�b�g������������܂���B: <tt>$MAIL_HEADER_PLUS</tt>");
		}
	}
	#�G���[���[���̈���A�h���X
	if($ERRORS_TO ne '') {
		$ERRORS_TO = &ConvZen2Han($ERRORS_TO);
		$ERRORS_TO =~ s/^\s*//;
		$ERRORS_TO =~ s/\s*$//;
		unless(&MailAddressCheck($ERRORS_TO)) {
			&ErrorPrint("�G���[���[���̈���A�h���X���s�K�؂ł��B");
		}
	}
	#�A�����e�֎~�ݒ�
	if($REPEATED_POST_FORBIDDEN ne '') {
		$REPEATED_POST_FORBIDDEN = &ConvZen2Han($REPEATED_POST_FORBIDDEN);
		$REPEATED_POST_FORBIDDEN =~ s/^\s*//;
		$REPEATED_POST_FORBIDDEN =~ s/\s*$//;
		if($REPEATED_POST_FORBIDDEN =~ /[^0-9]/) {
			&ErrorPrint("�A�����e�֎~�ݒ�̕b���ݒ�ɂ́A���p�����Ŏw�肵�ĉ������B");
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
		#�e�L�X�g�G���A
		if($key =~ /^(EXT_RESTRICT|REJECT_HOSTS|ALLOW_FROM_URLS)$/) {
			my @items = split(/\|/, $CONF{$key});
			my $itemstr = join("\n", @items);
			$filestr =~ s/\$$key\$/$itemstr/g;
		#�Z���N�g���j���[
		} elsif($key =~ /^(CONFIRM_FLAG|FORMAT_CUSTOM_FLAG|REPLY_FLAG|REPLY_CC_OPTION|ATTACHMENT_DEL_FLAG|LOGING_FLAG|LOTATION|LOG_FORMAT|DELIMITER|DATE_FORMAT|SIRIAL_FLAG)$/) {
			$filestr =~ s/\$$key$CONF{$key}\$/ selected/g;
			$filestr =~ s/\$$key[0-9]+\$//g;
		} else {
			$filestr =~ s/\$$key\$/$CONF{$key}/g;
		}
	}
	#�o�[�W�����A�b�v�ǉ���
	$filestr =~ s/\$REPEATED_POST_FORBIDDEN\$/$CONF{'REPEATED_POST_FORBIDDEN'}/g;
	#���ʂ��o��
	print "Cache-Control: no-cache\n";
	print $q->header(-type=>'text/html; charset=Shift_JIS');
	print $filestr;
	exit;
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
	#���͒l���擾����
	my $mailto = $q->param('MAILTO');
	my $from = $q->param('FROM');
	my $subject = $q->param('SUBJECT');
	my $thanks_page_method = $q->param('THANKS_PAGE_METHOD');
	my $redirect_url = $q->param('REDIRECT_URL');
	my $redirect_method = $q->param('REDIRECT_METHOD');
	my $sendmail = $q->param('SENDMAIL');
	my $log_dir = $q->param('LOG_DIR');
	#���[�����M��A�h���X�̃`�F�b�N
	$mailto = &ConvZen2Han($mailto);
	$mailto =~ s/^\s*//;
	$mailto =~ s/\s*$//;
	if($mailto eq '') {
		&ErrorPrint("���[�����M��A�h���X���w�肵�Ă��������B");
	} else {
		my @mailto_list = split(/,/, $mailto);
		for my $addr (@mailto_list) {
			$addr =~ s/^\s*//;
			$addr =~ s/\s*$//;
			unless(&MailAddressCheck($addr)) {
				&ErrorPrint("���[�����M��A�h���X���s�K�؂ł��B");
			}
		}
	}
	#�f�t�H���g�̃��[�����M���A�h���X�̃`�F�b�N
	$from = &ConvZen2Han($from);
	$from =~ s/^\s*//;
	$from =~ s/\s*$//;
	if($from eq '') {
		&ErrorPrint("�f�t�H���g�̃��[�����M���A�h���X���w�肵�Ă��������B");
	} else {
		unless(&MailAddressCheck($from)) {
			&ErrorPrint("�f�t�H���g�̃��[�����M���A�h���X���s�K�؂ł��B");
		}
	}
	#������ʕ\�����@�̃`�F�b�N
	if($thanks_page_method eq '') {
		&ErrorPrint("������ʕ\�����@��I�����ĉ������B");
	} else {
		unless($thanks_page_method =~ /^(1|2)$/) {
			&ErrorPrint("������ʕ\�����@�ɕs���Ȓl�����M����܂����B");
		}
	}
	#���_�C���N�g�� URL�̃`�F�b�N
	if($thanks_page_method eq '1') {
		if($redirect_url eq '') {
			&ErrorPrint("���_�C���N�g��URL���w�肵�Ă��������B");
		}
		$redirect_url = &ConvZen2Han($redirect_url);
		$redirect_url =~ s/^\s*//;
		$redirect_url =~ s/\s*$//;
		unless(&IsUrl($redirect_url)) {
			&ErrorPrint("���_�C���N�g��URL���s�K�؂ł��B");
		}
	}
	#���_�C���N�g���@�̃`�F�b�N
	if($thanks_page_method eq '1') {
		if($redirect_method eq '') {
			&ErrorPrint("���_�C���N�g���@��I�����ĉ������B");
		} else {
			unless($redirect_method =~ /^(1|2)$/) {
				&ErrorPrint("���_�C���N�g���@�ɕs���Ȓl�����M����܂����B");
			}
		}
	}
	#sendmail�̃p�X�̃`�F�b�N
	if($sendmail ne '') {
		$sendmail = &ConvZen2Han($sendmail);
		$sendmail =~ s/^\s*//;
		$sendmail =~ s/\s*$//;
		if($sendmail =~ /[^a-zA-Z0-9\/\.\-\_]/) {
			&ErrorPrint("sendmail �̃p�X�ɕs�K�؂ȕ������܂܂�Ă��܂��B");
		}
		unless(-e $sendmail) {
			&ErrorPrint("sendmail �̃p�X���Ԉ���Ă��܂��B: $!");
		}
	}
	#���O�i�[�f�B���N�g���̃p�X�̃`�F�b�N
	if($log_dir eq '') {
		&ErrorPrint("���O�i�[�f�B���N�g���̃p�X���w�肵�ĉ������B");
	} else {
		if($log_dir =~ /[^0-9a-zA-Z\_\-\/\.]/) {
			&ErrorPrint("���O�i�[�f�B���N�g���̃p�X�ɕs�K�؂ȕ������܂܂�Ă��܂��B");
		}
		if($log_dir =~ /\/$/) {
			&ErrorPrint("���O�i�[�f�B���N�g���̃p�X�̍Ō�ɂ̓X���b�V�������Ȃ��ŉ������B");
		}

		unless(-d $log_dir) {
			&ErrorPrint("�w�肵�����O�i�[�f�B���N�g���̃p�X�����݂��܂���B���O�Ƀf�B���N�g�����쐬������ŁA�ݒ肵�ĉ������B");
		}
		if( open(TEST, ">${log_dir}/test.cgi") ) {
			close(TEST);
			unlink "${log_dir}/test.cgi";
		} else {
			&ErrorPrint("�w�肵�����O�i�[�f�B���N�g�����Ƀt�@�C���𐶐����邱�Ƃ��ł��܂���B�p�[�~�b�V�������m�F���ĉ������B");
		}
	}
	#�ݒ�l��A�z�z��%CONF�ɃZ�b�g����
	$CONF{'MAILTO'} = $mailto;
	$CONF{'FROM'} = $from;
	$CONF{'SUBJECT'} = $subject;
	$CONF{'THANKS_PAGE_METHOD'} = $thanks_page_method;
	$CONF{'REDIRECT_URL'} = $redirect_url;
	$CONF{'REDIRECT_METHOD'} = $redirect_method;
	$CONF{'SENDMAIL'} = $sendmail;
	$CONF{'LOG_DIR'} = $log_dir;
	#�ݒ����������
	&WriteConfData;
}

sub ConvZen2Han {
	my($str) = @_;
	&Jcode::convert(\$str, 'sjis');
	$str =~ s/\x82([\x4F-\x58]|[\x60-\x79]|[\x81-\x9A])/&sjis_num_alfa_z2h($1)/geo;
	$str =~ s/��/\@/g;
	$str =~ s/�D/\./g;
	$str =~ s/�Q/\_/g;
	$str =~ s/�F/\:/g;
	$str =~ s/�`/\~/g;
	$str =~ s/��/\&/g;
	$str =~ s/��/\%/g;
	$str =~ s/��/\=/g;
	$str =~ s/��/\#/g;
	$str =~ s/�C/,/g;
	$str =~ s/�@/ /g;
	$str =~ s/\x81\x5E/\//g;	#�^
	$str =~ s/\x81\x7C/\-/g;	#�|
	return $str;
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

sub SetPass {
	my $user_name = $q->param('USER_NAME');
	my $pass1 = $q->param('PASSWORD1');
	my $pass2 = $q->param('PASSWORD2');
	if($user_name eq '') {
		&ErrorPrint("���[�U�[�����w�肵�ĉ������B");
	} else {
		if($user_name =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("���[�U�[���ɕs�K�؂ȕ������܂܂�Ă��܂��B���p�p�����A�n�C�t���A�A���_�[�X�R�A�[�ȊO�̕������w�肷�邱�Ƃ͂ł��܂���B");
		}
	}
	if($pass1 eq '' && $pass2 eq '') {
		&ErrorPrint("�p�X���[�h���w�肵�Ă��������B");
	} else {
		unless($pass1 eq $pass2) {
			&ErrorPrint("�p�X���[�h�ē��͂��Ԉ���Ă��܂��B�ēx���ӂ��ē��͂��Ă��������B");
		}
		if($pass1 =~ /[^a-zA-Z0-9\-\_]/) {
			&ErrorPrint("�p�X���[�h�ɕs���ȕ������܂܂�Ă��܂��B�w��ł��镶���́A���p�̉p���A�n�C�t���A�A���_�[�X�R�A�ł��B");
		}
	}
	my $enc_pass = &EncryptPasswd($pass1);
	$CONF{'USER_NAME'} = $user_name;
	$CONF{'PASSWORD'} = $enc_pass;
	&WriteConfData;
}

sub WriteConfData {
	open(CONF, ">$MP_CONF") || &ErrorPrint("�ݒ�t�@�C�� $MP_CONF �ւ̏����݂Ɏ��s���܂����B$MP_CONF �̃p�[�~�b�V������ 606 �ɂ��ĉ������B: $!");
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
	open(FILE, "$file") || &ErrorPrint("�ݒ�t�@�C�� <tt>$file</tt> ���I�[�v���ł��܂���ł����B: $!");
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
		&ErrorPrint("�s���ȃ��N�G�X�g�ł��B");
	}
	my $in = $q->param('HTML');
	$in = &UnifyReturnCode($in);
	if($mode eq 'CONFIRM') {
		unless($in =~ /\$hidden\$/) {
			&ErrorPrint('�u���w���q $hidden$ ��form�^�O���ɓ���ĉ������B');
		}
	}
	open(FILE, ">$in_file") || &ErrorPrint("�e���v���[�g�t�@�C�� $in_file ���I�[�v���ł��܂���ł����B: $!");
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
		&ErrorPrint("�s���ȃ��N�G�X�g�ł��B");
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

