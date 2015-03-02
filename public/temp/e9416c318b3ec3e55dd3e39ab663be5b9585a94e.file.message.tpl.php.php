<?php /* Smarty version Smarty-3.0.8, created on 2015-03-03 03:07:13
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/message.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:183292336654f4b4e1931039-28986651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9416c318b3ec3e55dd3e39ab663be5b9585a94e' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/message.tpl.php',
      1 => 1425319469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183292336654f4b4e1931039-28986651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php defined('APP_PATH') or exit ('Access Denied'); ?<?php ?>>
<!DOCTYPE html>
<html>
<head>
	<title>提示页面</title>
	<<?php ?>?php include 'header.html'; ?<?php ?>>
	<script type="text/javascript">
		$(document).ready(function() {
			var jumptime = 2;
			setInterval(function() {
				if (jumptime == 0) {
					<<?php ?>?php if($url) ?<?php ?>>
					location.href = '<<?php ?>?php echo $url ?<?php ?>>';
				<<?php ?>?php } else { ?<?php ?>>
					window.history.back();
				<<?php ?>?php } ?<?php ?>>
				} else {
					$("span").html(jumptime);
				}
				jumptime--;
			}, 1000);
		});
	</script>
</head>
<body>
	<div class="message">
		<div class="con">
			<h2>温馨提示</h2>
			<h3><<?php ?>?php echo $message; ?<?php ?>></h3>
			<p>载入页面还需要 <span class="warning">3</span>秒钟， 请稍候...<br />你也可以选择点击链接直接进入</p>
			<p><a href="<<?php ?>?php if ($url) { echo $url; } else {?<?php ?>>javascript:;<<?php ?>?php } ?<?php ?>>" class="jumpurl">点击此处</a>直接跳转至指定页面</p>
		</div>
	</div>
</body>
</html>