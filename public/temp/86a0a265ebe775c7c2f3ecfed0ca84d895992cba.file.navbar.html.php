<?php /* Smarty version Smarty-3.0.8, created on 2015-03-14 00:27:22
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:35054993355030fea98c940-27021811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a0a265ebe775c7c2f3ecfed0ca84d895992cba' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/navbar.html',
      1 => 1425335874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35054993355030fea98c940-27021811',
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
          <span id="my-title" class="navbar-brand"><a style="color:#fff;" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->getVariable('conf')->value['sitename'];?>
</a></span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-left" role="search" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'search','a'=>'show'),$_smarty_tpl);?>
" method="get">
            <div class="form-group">
              <input name="comfirm_words" type="text" placeholder="夢" id="form-bg" class="form-control" />
            </div>
            <button type="submit" class="btn">寻 夢</button>
          </form>
          <!--  -->
          <ul class="nav navbar-nav navbar-right">
            <li><a id="my-nav1" class="my-login" href="#login-box">登录</a></li>
            <li><a id="my-nav2" href="#">投稿</a></li>
            <li><a id="my-nav3" href="#">收藏</a></li>
          </ul>
          <div class="my-navbar">
            <ul class="nav navbar-nav navbar-right nav-pills">
            <?php  $_smarty_tpl->tpl_vars['bfc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['bfc']->key => $_smarty_tpl->tpl_vars['bfc']->value){
?><?php if ($_smarty_tpl->tpl_vars['bfc']->value['stat']>=0){?>
              <li <?php if ($_smarty_tpl->tpl_vars['bfc']->value['stat']==1){?> class="active" <?php }?>><a id="to-<?php echo $_smarty_tpl->tpl_vars['bfc']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['bfc']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['bfc']->value['category'];?>
</a></li>
            <?php }?><?php }} ?>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>