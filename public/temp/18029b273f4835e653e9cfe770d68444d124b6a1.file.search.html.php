<?php /* Smarty version Smarty-3.0.8, created on 2015-03-14 01:29:22
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/search.html" */ ?>
<?php /*%%SmartyHeaderCode:205897499255031e72678921-70647800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18029b273f4835e653e9cfe770d68444d124b6a1' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/search.html',
      1 => 1426267755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205897499255031e72678921-70647800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Haku/Documents/Github/BiliFun/common/SpeedPHP/Drivers/Smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<title>搜索页-</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/css/search.css">
</head>
<body>
	<header id="my-header">
		<!-- fixed nav -->
		<nav id="my-nav" class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        		<span id="my-title" class="navbar-brand"><a style="color:#fff;" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('conf')->value['sitename'];?>
</a></span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a id="my-nav1" class="my-login" href="#login-box">登录</a></li>
            <li><a id="my-nav2" href="#"> 投稿</a></li>
            <li><a id="my-nav3" href="#"> 收藏</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	</header>
	
	<!-- 搜索栏 -->
	<div class="text-center main-search">
		<img class="" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/c.png" alt="">
		<form class="navbar-form" role="search" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'search','a'=>'show'),$_smarty_tpl);?>
" method="get">
      <div class="form-group">
        <input name="comfirm_words" type="text" placeholder="在此输入关键字" id="form-bg" class="form-control search-form" />
      </div>
      <button type="submit" class="btn">寻 夢</button>
    </form>
	</div>
	
	<!-- 结果栏 -->
	<div class="container">
		<h4>"<span><?php echo $_smarty_tpl->getVariable('search_words')->value;?>
</span>"的搜索结果</h4>
		<hr>

		<div class="main-result">
		<?php if ($_smarty_tpl->getVariable('result')->value!=''){?>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['search']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('result')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['name'] = 'search';
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total']);
?>
			<div class="audience-result">
	    	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'prod','pid'=>$_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['pid']),$_smarty_tpl);?>
">
	    		<img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/<?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['thumb'];?>
" alt="<?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['description'];?>
" class="img-rounded">
	    		<span><?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['video_name'];?>
</span>
	    	</a>
	    	<p><span>简介：</span><?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['description'];?>
</p>
	    	<p>由<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['author'];?>
</a>投稿于
	    		<span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('result')->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
				</p>
				<hr>
			</div>
		<?php endfor; endif; ?>
		<?php }else{ ?>
			<div class="audience-result">
			<p><span>对不起，没有找到与 "<?php echo $_smarty_tpl->getVariable('search_words')->value;?>
" </span>相关的信息</p>
			</div>
		<?php }?>
		</div>
	</div>

	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</body>
</html>