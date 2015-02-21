<?php /* Smarty version Smarty-3.0.8, created on 2015-02-21 15:57:40
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:90739657354e83a74e96d36-09003371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee46e5796236f3f833b6d7a2a57f29022b83153e' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/index.html',
      1 => 1424505456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90739657354e83a74e96d36-09003371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<title><?php echo $_smarty_tpl->getVariable('conf')->value['sitename'];?>
</title>
</head>

<body>
  <div id="particleground"></div>
  <header id="my-header">
    <?php $_template = new Smarty_Internal_Template("navbar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <!-- swap -->
    <div id="Top" class="container my-swap">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['bfa'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('swap')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['bfa']->key => $_smarty_tpl->tpl_vars['bfa']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?> <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(count($_smarty_tpl->getVariable('swap')->value), null, null);?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration']<$_smarty_tpl->getVariable('i')->value){?>
        <li>
          <div id="my-swap<?php echo $_smarty_tpl->tpl_vars['bfa']->value['id'];?>
" class="text-center">
        <?php if ($_smarty_tpl->tpl_vars['bfa']->value['status']==0){?>
          <div class="jumbotron">
            <h1><?php echo $_smarty_tpl->tpl_vars['bfa']->value['title'];?>
</h1>
            <?php echo $_smarty_tpl->tpl_vars['bfa']->value['description'];?>

          </div>
        <?php }elseif($_smarty_tpl->tpl_vars['bfa']->value['status']==1){?>
          <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bfa']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bfa']->value['description'];?>
">
        <?php }else{ ?>
          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['name'] = 'ator';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('swap')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ator']['total']);
?><?php if ($_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['status']==2){?>
          <div class="col-md-6">
            <a href="<?php echo $_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['url'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/<?php echo $_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['thumb'];?>
" alt="<?php echo $_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['info'];?>
" class="img-circle"></a>
            <p><a href="<?php echo $_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['url'];?>
"><?php echo $_smarty_tpl->getVariable('swap')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ator']['index']]['info'];?>
</a></p>
          </div> <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value-1, null, null);?>
          <?php }?><?php endfor; endif; ?>
        <?php }?>
          </div>
        </li>
        <?php }?>
        <?php }} ?>
      </ul>
    </div>
  </header>
  

  <!-- notice -->
  <div id="my-notice">
    <div id="notice-button" class="text-center">梦の轻语</div>
    <div id="notice-content">
      <p class="text-center">这里是梦想汇聚的地方，我们的征途是星辰大海</p>
      <p class="text-center">梦想 +∞</p>
    </div>
  </div>

  <!-- main -->
  <section id="Video"> 
    <!-- anime -->
    <div id="my-anime" class="my-list">
      <div class="dark"></div>
    </div>
    <div id="anime-content" class="my-content">
      <div class="row row-1">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img1.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
          
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img2.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-2">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img3.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img4.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-3">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img5.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img6.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
    </div>

    <!-- music -->
    <div id="my-music" class="my-list">
      <div class="dark"></div>
    </div>
    <div id="music-content" class="my-content">
      <div class="row row-1">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img1.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img2.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-2">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img3.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img4.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-3">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img5.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img6.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
    </div>

    <!-- entertainment -->
    <div id="my-entertainment" class="my-list">
      <div class="dark"></div>
    </div>
    <div id="entertainment-content" class="my-content">
      <div class="row row-1">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img1.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img2.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-2">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img3.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img4.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-3">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img5.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img6.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
    </div>

    <!-- technology -->
    <div id="my-technology" class="my-list">
      <div class="dark"></div>
    </div>
    <div id="technology-content" class="my-content">
      <div class="row row-1">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img1.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img2.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-2">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img3.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img4.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-3">
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img5.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-6">
          <a href="#" class="thumbnail">
            <img src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/anime/img6.png" data-src="holder.js/100%x180" alt="...">
            <img class="pic-hover" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/img/icon/play.png" alt="">
            <span>...</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script>
  $('.my-swap').slider({
    fluid: true,
    dots: true,
  });
  $('.my-swap').css('width', '100%');
</script>

<script>
  $('body').scrollspy({
    target: '.my-navbar'
  });
</script>

</body>
</html>