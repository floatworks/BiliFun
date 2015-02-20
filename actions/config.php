<?php
/**
*  @author 
*  @copyright
*  @version
*  @link
*/
$spConfig = array(
	// 'mode' => 'release',
	'mode' => 'debug',
	'model_path' => APP_PATH.'/main/model',
	'controller_path' => APP_PATH.'/main/controller',
	'view' => array(
		'enable' => TRUE,   // 开启Smarty支持
		'config' => array(
			'template_dir' => APP_PATH . '/tpl',   // 模板文件目录
			'compile_dir' => APP_PATH . '/public/temp',
			'cache_dir' => APP_PATH . '/public/cache',
			/* 结束符变量: 指明在查找模板变量时的左右分割符。 */
			'left_delimiter' => '<{',
			'right_delimiter' => '}>',
		),
	),
	'launch' => array(
		/* 路由前执行点 */
		'router_prefilter' => array(array('spUrlRewrite','setRewrite')),
		'function_url' => array(array('spUrlRewrite','getRewrite')),
	),
	/* 伪静态 */
	'ext' => array(
		'spUrlRewrite' => array(
			'suffix' => '.html',
			'sep' => '-',
			'map' => array(
				'article' => 'main@news',
				'product' => 'main@prod',
				'pages' => 'main@spag',
				'guestbook' => 'main@mess',
				'message' => 'main@subms',
				'imgvc' => 'main@imgvc'
			),
			'args' => array(
				'article' => array('id','cid'),
				'product' => array('id','cid'),
				'pages' => array('id'),
			)
		)
	),
	'include_path' => array('/common/include'),
	'dispatcher_error' => 'header("Location:/");exit;'
);