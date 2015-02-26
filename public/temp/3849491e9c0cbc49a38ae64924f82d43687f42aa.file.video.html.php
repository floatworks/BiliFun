<?php /* Smarty version Smarty-3.0.8, created on 2015-02-26 14:25:11
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/video.html" */ ?>
<?php /*%%SmartyHeaderCode:162552224854eebc47cc03b8-05140825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3849491e9c0cbc49a38ae64924f82d43687f42aa' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/video.html',
      1 => 1424931908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162552224854eebc47cc03b8-05140825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Haku/Documents/Github/BiliFun/common/SpeedPHP/Drivers/Smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
	<div class="container my-content">

		<!-- 视频信息 -->
		<div class="row">
			<div class="col-md-10">
				<p class="lead"><?php echo $_smarty_tpl->getVariable('prow')->value['channel'];?>
</p>
				<span class="person-name"><?php echo $_smarty_tpl->getVariable('prow')->value['author'];?>
</span><span>发布于</span><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('prow')->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
			</div>
			<div class="col-md-2">
				<a href="#">收藏</a>
				<a href="#">评论</a>
			</div>
		</div>

		<!-- 播放器 -->
		<div class="video">
			<video src="../public/video/【kwaimay】你所停驻的季节.mp4" class="my-video" controls="controls">
				您的浏览器不支持 video 标签。
			</video>
			<!-- 弹幕 -->
			<div class="barrage">
				<marquee behavior="slide" direction="left">233333333333</marquee>
				<marquee behavior="slide" direction="left">hhhhhhhhhhhh</marquee>
			</div>
			<input type="text" class="my-input" placeholder="此处填装弹幕">
			<button type="submit" class="btn shoot">发射！</button>
		</div>

		<!-- 标签 -->
		<div class="video-tag">
			<p><span> 标签：</span><a href="#"> hhhh </a></p>
			<hr>
			<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
		</div>

		<hr>

		<!-- 评论区 -->
		<div>
			<p>说两句呗~o(*￣▽￣*)ブ</p>
			<form class="say-form">
				<textarea class="form-control" rows="4" name="message"></textarea>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<h6>评论区</h6>
			<hr>
			<div class="panel panel-default">
		  	<div class="panel-body">
		   	<h6>
		    	<a href="">月落丶音阑</a>
		    </h6>
		    <p>沙发~~~~~~</p>
		    <span class = "time">...</span>
		  	</div>
			</div>
	</div>
	
	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</body>
</html>