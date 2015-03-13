<?php /* Smarty version Smarty-3.0.8, created on 2015-03-14 00:41:22
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/message.html" */ ?>
<?php /*%%SmartyHeaderCode:124091935155031332f32210-96697098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55906609b364c1c17003edafc7cce4113ff375ce' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/message.html',
      1 => 1425335874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124091935155031332f32210-96697098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<title>提示页面</title>
	<script type="text/javascript">
		$(document).ready(function() {
			var jumptime = 2;
			setInterval(function() {
				if (jumptime == 0) {
<?php if ($_smarty_tpl->getVariable('url')->value){?>
					location.href = '<?php echo $_smarty_tpl->getVariable('url')->value;?>
';
<?php }else{ ?>
					window.history.back();
<?php }?>
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
			<h3><?php echo $_smarty_tpl->getVariable('message')->value;?>
<h3>
			<p>载入页面还需要 <span class="warning">3</span>秒钟， 请稍候...<br />你也可以选择点击链接直接进入</p>
			<p><a href="<?php if ($_smarty_tpl->getVariable('url')->value){?> <?php echo $_smarty_tpl->getVariable('url')->value;?>
 <?php }else{ ?> javascript:; <?php }?>" class="jumpurl">点击此处</a>直接跳转至指定页面</p>
		</div>
	</div>
</body>
</html>