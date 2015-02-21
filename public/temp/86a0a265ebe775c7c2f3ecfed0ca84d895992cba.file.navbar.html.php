<?php /* Smarty version Smarty-3.0.8, created on 2015-02-21 10:40:16
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:189303609854e7f010b31c65-67192230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a0a265ebe775c7c2f3ecfed0ca84d895992cba' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/navbar.html',
      1 => 1424447018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189303609854e7f010b31c65-67192230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- fixed nav -->
    <nav id="my-nav" class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <span id="my-title" class="navbar-brand">梦想 +∞</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" placeholder="夢" id="form-bg" class="form-control" />
            </div>
            <button type="submit" class="btn">寻 夢</button>
          </form>
          <!--  -->
          <ul class="nav navbar-nav navbar-right">
            <li><a id="my-nav1" href="#"> 登录</a></li>
            <li><a id="my-nav2" href="#"> 投稿</a></li>
            <li><a id="my-nav3" href="#"> 收藏</a></li>
          </ul>
          <div class="my-navbar">
            <ul class="nav navbar-nav navbar-right nav-pills">
              <li class="active"><a id="to-Top" href="#Top">顶部</a></li>
              <li><a id="to-Video" href="#Video">视频</a></li>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>