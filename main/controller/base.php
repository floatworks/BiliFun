<?php
defined('APP_PATH') or exit('Access Denied');
class base extends spController {
	// 构造函数
	public function __construct() {
		parent::__construct();

		// $this->conf = $conf = spClass('site_config')->find();
		// $this->__SITE = rtrim($conf['siteurl'], '/');
		// $this->__PUBLIC = $this->__SITE . '/' . 'public';
		
	}
}