<?php /* Smarty version Smarty-3.0.8, created on 2015-03-03 02:15:41
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/search.html" */ ?>
<?php /*%%SmartyHeaderCode:169743556354f4a8cd9284a9-42184627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18029b273f4835e653e9cfe770d68444d124b6a1' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/search.html',
      1 => 1425320113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169743556354f4a8cd9284a9-42184627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<title>搜索页-</title>
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
            <li><a id="my-nav1" href="#"> 登录</a></li>
            <li><a id="my-nav2" href="#"> 投稿</a></li>
            <li><a id="my-nav3" href="#"> 收藏</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	</header>
	
	<!-- 搜索栏 -->
	<div class="text-center main-search">
		<img class="" src="../assets/img/c.png" alt="">
		<form class="navbar-form" role="search">
      <div class="form-group">
        <input type="text" placeholder="在此输入关键字" id="form-bg" class="form-control search-form" />
      </div>
      <button type="submit" class="btn">寻 夢</button>
    </form>
	</div>
	
	<!-- 结果栏 -->
	<div class="container">
		<h4>"<span>动画</span>"搜索结果</h4>
		<hr>

		<div class="main-result">

			<div class="audience-result">
	    	<a href="">
	    		<img src="../assets/img/anime/img2.png" alt="" class="img-rounded">
	    		<span>动画1</span>
	    	</a>
	    	<p><span>简介：</span>哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
	    	<p>由<a href="">月落丶音阑</a>投稿于
	    		<span class="time">2015-02-22 22:11:43</span>
				</p>
				<hr>
			</div>

			<div class="audience-result">
	    	<a href="">
	    		<img src="../assets/img/anime/img3.png" alt="" class="img-rounded">
	    		<span>动画2</span>
	    	</a>
	    	<p><span>简介：</span>233333333333333333333333333333333333</p>
	    	<p>由<a href="">月落丶音阑</a>投稿于
	    		<span class="time">2015-02-22 22:11:43</span>
				</p>
				<hr>
			</div>

			<div class="audience-result">
	    	<a href="">
	    		<img src="../assets/img/anime/img4.png" alt="" class="img-rounded">
	    		<span>动画3</span>
	    	</a>
	    	<p><span>简介：</span>6666666666666666666666666666</p>
	    	<p>由<a href="">月落丶音阑</a>投稿于
	    		<span class="time">2015-02-22 22:11:43</span>
				</p>
				<hr>
			</div>

		</div>
	</div>

	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</body>
</html>