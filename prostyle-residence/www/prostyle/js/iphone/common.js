/*********************************************************************

 freo | 共通関数 (2012/01/25)

 Copyright(C) 2009-2012 freo.jp

*********************************************************************/

$(document).ready(function() {
	//メディア管理
	$("#media").tablesorter({
		headers: {
			2: { sorter: 'digit' },
			3: { sorter: false }
		}
	});

	//メディア挿入
	$('a.insert').click(function() {
		window.opener.$('#text').val(window.opener.$('#text').val() + '\n' + $(this).attr('title'));
		window.close();

		return false;
	});

	//公開終了
	if ($('#article_close_set').val() == '0') {
		$('#article_close').hide();
	}
	$('#article_close_set').change(function() {
		if ($(this).val() == '1') {
			$('#article_close').show();
		} else {
			$('#article_close').hide();
		}
	});

	//閲覧制限
	if ($('#article_restriction').val() == 'group') {
		$('#article_password').hide();
	} else if ($('#article_restriction').val() == 'password') {
		$('#article_group').hide();
	} else {
		$('#article_group, #article_password').hide();
	}
	$('#article_restriction').change(function() {
		if ($(this).val() == 'group') {
			$('#article_group').show();
			$('#article_password').hide();
		} else if ($(this).val() == 'password') {
			$('#article_group').hide();
			$('#article_password').show();
		} else {
			$('#article_group, #article_password').hide();
		}
	});

	//検証
	if ($('#option_type').val() != 'text') {
		$('#option_validate').hide();
	}
	$('#option_type').change(function() {
		if ($(this).val() == 'text') {
			$('#option_validate').show();
		} else {
			$('#option_validate').hide();
		}
	});

	//承認確認
	$('a[rel=approve]').click(function() {
		return confirm('本当に承認してもよろしいですか？');
	});
	$('form[rel=approve]').submit(function() {
		return confirm('本当に承認してもよろしいですか？');
	});

	//削除確認
	$('a[rel=delete]').click(function() {
		return confirm('本当に削除してもよろしいですか？');
	});
	$('form[rel=delete]').submit(function() {
		return confirm('本当に削除してもよろしいですか？');
	});

	//設定確認
	$('a[rel=config]').click(function() {
		return confirm('本当に設定してもよろしいですか？');
	});
	$('form[rel=config]').submit(function() {
		return confirm('本当に設定してもよろしいですか？');
	});

	//ColorBox
	var extensions = ['gif', 'GIF', 'jpeg', 'JPEG', 'jpg', 'JPG', 'jpe', 'JPE', 'png', 'PNG'];

	var target = '';
	$.each(extensions, function() {
		if (target) {
			target += ',';
		}
		target += 'a[href$=\'.' + this + '\']';
	});
	$(target).colorbox();

	$('a.colorbox').colorbox({ width:'90%', height:'90%', iframe:true });

	//テキストエリア
	$('textarea').autoresize({
		padding: 4
	});

	//画像調整
	$('img').not('table tr td img').removeAttr('width').removeAttr('height');
	$('img').not('table tr td img').css('max-width', '300px');

	//閉じる
	$('a[rel=close]').click(function() {
		window.close();

		return false;
	});

	//戻る
	var url = location.href;

	url = url.replace(RegExp('^http://' + location.hostname), '');
	url = url.replace(RegExp('index.php$'), '');

	if (url == freo_path) {
		$('header nav#back').hide();
	} else {
		$('a[rel=back]').click(function() {
			history.back();

			return false;
		});
	}

	//アドレスバー調整
	if (!url.match(/#/)) {
		setTimeout(function() {
			scrollTo(0, 1)
		}, 100);
	}
});

window.onunload = function() {
};
