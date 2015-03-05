<?php /* Smarty version Smarty-3.0.8, created on 2015-03-05 16:17:43
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:7961818454f81127139a30-07695454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6d8ef89ae524d49a37bbdc040a699b5f2aa7e1' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/footer.html',
      1 => 1425543461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7961818454f81127139a30-07695454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- footer -->
  <footer style="background: none;">
    <div id="my-footer">
      <ul class="list-inline text-center">
        <li>当前版本: v3.0.0</li>
        <li>|</li>
        <li><a href="#">关于</a></li>
        <li>|</li>
        <li><a href="#">联系我们</a></li>
        <li>|</li>
        <li><a href="#">侵权申诉</a></li>
      </ul>
    </div>
  </footer>
  

  <div id="login-box" class="downbox" style="display: none; overflow : hidden;">
    <div class="down_box_t">
      <h5 class="text-center">——————用户登录——————</h5>
    </div>
    <div class="down_box_b row">
      <div class="box-side" style="border-right: 1px #777 solid;">
        <p>还没有账号吗&gt;_ &lt; ?</p>
        <p>快来加入我们吧&gt;w &lt; ~</p>
        <button class="btn login-btn" onclick="window.location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'register','a'=>'show'),$_smarty_tpl);?>
';">立即注册</button>
      </div>
      <div class="box-side">
      <form role="login" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'login','a'=>'index'),$_smarty_tpl);?>
" method="post">
        <input name="username" type="text" placeholder=" 账号" class=""><p></p>
        <input name="password" type="text" placeholder=" 密码" class=""><p></p>
        <button id="btn-1" class="btn login-btn">登陆</button>
      </form>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://apps.bdimg.com/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
  <script>
      $(function() {
        $(".my-login").fancybox({
          fitToView: false,
          width: 625,
          height: 365,
          autoSize: false,
          closeClick : false,
          openEffect: 'fade',
          closeEffect: 'none'
        });
      });
    </script>