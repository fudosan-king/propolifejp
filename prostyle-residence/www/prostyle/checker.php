<?php

/*********************************************************************

 freo | Checker (2010/09/01)

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

 @Link http://freo.jp/
 @Copyright(C) 2009-2010 freo.jp
 @Author Knight <info at favorite-labo dot org>

*********************************************************************/

define('CHECKER_CONFIG_FILE', 'config.php');
define('CHECKER_LIBS_CONFIG_FILE', 'libs/freo/config.php');
define('CHECKER_LIBS_COMMON_FILE', 'libs/freo/common.php');
define('CHECKER_LIBS_INITIALIZE_FILE', 'libs/freo/initialize.php');

if (file_exists(CHECKER_CONFIG_FILE)) {
	require_once CHECKER_CONFIG_FILE;
}
if (file_exists(CHECKER_LIBS_CONFIG_FILE)) {
	require_once CHECKER_LIBS_CONFIG_FILE;
}
if (file_exists(CHECKER_LIBS_COMMON_FILE)) {
	require_once CHECKER_LIBS_COMMON_FILE;
}
if (defined('FREO_INITIALIZE_MODE') and FREO_INITIALIZE_MODE and file_exists(CHECKER_LIBS_INITIALIZE_FILE)) {
	require_once CHECKER_LIBS_INITIALIZE_FILE;
}

if (defined('FREO_PERMISSION_MODE') and FREO_PERMISSION_MODE) {
	if (@chmod(FREO_TEMPLATE_COMPILE_DIR, 0707)) {
		$chmod = true;
	} else {
		$chmod = false;
	}
}

?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>' . "\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<title>PHP Checker</title>
	<style tyle="text/css">

	body, div, h1, h2, h3, h4, h5, h6, p, ul, ol, li, dl, dt, dd, pre, blockquote, th, td, form, fieldset, input, textarea {
		margin: 0;
		padding: 0;
	}
	h1, h2, h3, h4, h5, h6 {
		font-size: 100%;
		font-weight: normal;
	}
	em, strong, code, address, th {
		font-weight: normal;
		font-style: normal;
	}
	ul, ol {
		list-style: none;
	}
	q:before, q:after {
		content: "";
	}
	abbr, acronym {
		border: 0;
	}
	table {
		border-collapse: collapse;
		border-spacing: 0;
	}
	th {
		text-align: left;
	}
	fieldset, img {
		border: 0;
	}

	html {
		overflow-y: scroll;
	}
	body {
		line-height: 1.4;
		margin: 0 auto;
		padding: 20px;
		background-color: #FFFFFF;
		color: #222222;
		font-size: 80%;
		font-family: "Hiragino Kaku Gothic Pro", Meiryo, sans-serif;
	}

	h1 {
		margin-bottom: 10px;
		font-size: 200%;
		font-family: "Arial Black" Arial;
	}
	h2 {
		margin: 10px 0;
		font-size: 180%;
	}

	em {
		color: #FF0000;
		font-style: normal;
		font-weight: bold;
	}

	table tr th {
		padding: 5px;
		border: 1px solid #999999;
		background-color: #EEEEEE;
		font-weight: bold;
	}
	table tr td {
		padding: 5px;
		border: 1px solid #999999;
	}

	</style>
</head>

<body>
	<h1>PHP Checker</h1>
	<h2>PHP</h2>
	<table summary="PHP">
		<tr>
			<th>PHP Version</th>
			<td><?php echo phpversion() >= 5 ? phpversion() : '<em>' . phpversion() . '</em>' ?></td>
		</tr>
	</table>
	<h2>PDO</h2>
	<table summary="PDO">
		<tr>
			<th>PDO</th>
			<td><?php echo class_exists('pdo') ? 'OK' : '<em>NG</em>' ?></td>
		</tr>
		<tr>
			<th>PDO Version</th>
			<td><?php echo phpversion('pdo') ?></td>
		</tr>
		<tr>
			<th>PDO_MYSQL Version</th>
			<td><?php echo phpversion('pdo_mysql') ? phpversion('pdo_mysql') : '<em>NG</em>' ?></td>
		</tr>
		<tr>
			<th>PDO_SQLITE Version</th>
			<td><?php echo phpversion('pdo_sqlite') ? phpversion('pdo_sqlite') : '<em>NG</em>' ?></td>
		</tr>
	</table>
	<h2>GD</h2>
	<table summary="GD">
		<tr>
			<th>GD</th>
			<td><?php echo function_exists('gd_info') ? 'OK' : '<em>NG</em>' ?></td>
		</tr>
	</table>
	<h2>MultiByte</h2>
	<table summary="MultiByte">
		<tr>
			<th>MultiByte</th>
			<td><?php echo function_exists('mb_language') ? 'OK' : '<em>NG</em>' ?></td>
		</tr>
	</table>
	<?php if (defined('FREO_PERMISSION_MODE') and FREO_PERMISSION_MODE) : ?>
	<h2>Chmod</h2>
	<table summary="Chmod">
		<tr>
			<th>Chmod</th>
			<td><?php echo $chmod ? 'OK' : '<em>NG</em>' ?></td>
		</tr>
	</table>
	<?php endif; ?>
	<h2>Charset</h2>
	<table summary="Charset">
		<tr>
			<th>default_charset</th>
			<td><?php echo ini_get('default_charset') ? ini_get('default_charset') : 'NONE' ?></td>
		</tr>
		<tr>
			<th>mbstring.input_encoding</th>
			<td><?php echo ini_get('mbstring.input_encoding') ? ini_get('mbstring.input_encoding') : 'NONE' ?></td>
		</tr>
		<tr>
			<th>mbstring.internal_encoding</th>
			<td><?php echo ini_get('mbstring.internal_encoding') ? ini_get('mbstring.internal_encoding') : 'NONE' ?></td>
		</tr>
		<tr>
			<th>mbstring.output_encoding</th>
			<td><?php echo ini_get('mbstring.output_encoding') ? ini_get('mbstring.output_encoding') : 'NONE' ?></td>
		</tr>
		<tr>
			<th>mbstring.language</th>
			<td><?php echo ini_get('mbstring.language') ? ini_get('mbstring.language') : 'NONE' ?></td>
		</tr>
		<tr>
			<th>mbstring.substitute_character</th>
			<td><?php echo ini_get('mbstring.substitute_character') ? ini_get('mbstring.substitute_character') : 'NONE' ?></td>
		</tr>
	</table>
	<h2>Session</h2>
	<table summary="Session">
		<tr>
			<th>session.use_trans_sid</th>
			<td><?php echo ini_get('session.use_trans_sid') ? 'ON' : 'OFF' ?></td>
		</tr>
		<tr>
			<th>session.use_cookies</th>
			<td><?php echo ini_get('session.use_cookies') ? 'ON' : 'OFF' ?></td>
		</tr>
		<tr>
			<th>session.use_only_cookies</th>
			<td><?php echo ini_get('session.use_only_cookies') ? 'ON' : 'OFF' ?></td>
		</tr>
		<tr>
			<th>session.auto_start</th>
			<td><?php echo ini_get('session.auto_start') ? 'ON' : 'OFF' ?></td>
		</tr>
		<tr>
			<th>session.cache_limiter</th>
			<td><?php echo ini_get('session.cache_limiter') ? ini_get('session.cache_limiter') : 'NONE' ?></td>
		</tr>
	</table>
	<h2>Other</h2>
	<table summary="Other">
		<tr>
			<th>register_globals</th>
			<td><?php echo ini_get('register_globals') ? 'ON' : 'OFF' ?></td>
		</tr>
		<tr>
			<th>magic_quotes_gpc</th>
			<td><?php echo ini_get('magic_quotes_gpc') ? 'ON' : 'OFF' ?></td>
		</tr>
	</table>
	<h2>Details</h2>
	<table summary="Details">
		<tr>
			<th>Directive</th>
			<th>global_value</th>
			<th>local_value</th>
			<th>access</th>
		</tr>
		<?php foreach (ini_get_all() as $key => $value) : ?>
		<tr>
			<td><?php echo htmlspecialchars($key, ENT_QUOTES) ?></td>
			<td><?php echo htmlspecialchars($value['global_value'], ENT_QUOTES) ?></td>
			<td><?php echo htmlspecialchars($value['local_value'], ENT_QUOTES) ?></td>
			<td><?php echo htmlspecialchars($value['access'], ENT_QUOTES) ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>
