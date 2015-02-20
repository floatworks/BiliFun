<?php /* Smarty version Smarty-3.0.8, created on 2015-02-20 23:44:39
         compiled from "D:\wamp\www\BillFun/tpl\navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1514054e75667abb9f2-37047249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445e5cbc21afc99818211e7f5d44713ac9faf343' => 
    array (
      0 => 'D:\\wamp\\www\\BillFun/tpl\\navbar.html',
      1 => 1424447017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514054e75667abb9f2-37047249',
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