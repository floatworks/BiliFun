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
			'allow_php_tag' => true,
		),
		'debugging' => TRUE,
	),
	'launch' => array(
		/* 路由前执行点 */
		'router_prefilter' => array(array('spUrlRewrite','setRewrite'), array('spAcl','mincheck'),),
		'function_url' => array(array('spUrlRewrite','getRewrite')),
	),
	/* 伪静态 */
	'ext' => array(
		'spUrlRewrite' => array(
			'suffix' => '',
			'sep' => '/',
			'map' => array(
				'v' => 'main@prod',
				// 'user' => 'user@index',
				'imgvc' => 'main@imgvc',
			),
			'args' => array(
				'v' => array('pid', 'id'),
				// 'user' => array('user_id'),
				'pages' => array('id'),
			)
		)
	),
	'include_path' => array('/common/include'),
	'dispatcher_error' => 'header("Location:/");exit;'
);