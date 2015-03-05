<?php /* Smarty version Smarty-3.0.8, created on 2015-03-05 16:21:16
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/register.html" */ ?>
<?php /*%%SmartyHeaderCode:4980914054f811fc3e9118-67346893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15b575a3b930421bfd4573d183cff6245559e3a' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/register.html',
      1 => 1425542836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4980914054f811fc3e9118-67346893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<title><?php echo $_smarty_tpl->getVariable('prow')->value['video_name'];?>
</title>
</head>

<body>
	<header id="my-header">
		<?php $_template = new Smarty_Internal_Template("navbar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</header>
	
	<!-- main -->
	<h1 class="text-center">——————————注册——————————</h1>
	<div class="text-center container register form-group">
		<input type="text" placeholder=" 昵称">
		<input type="text" placeholder=" 邮箱">
    <input type="text" placeholder=" 密码">
	</div>  
  <button id="btn-2" class="btn login-btn">注册</button>

	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


</body>
</html>