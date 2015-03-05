<?php
defined('APP_PATH') or exit('Access Denied');

class base extends spController {
	// 构造函数
	public function __construct() {
		parent::__construct();

		$server = array('127.0.0.1');
		if (!in_array($_SERVER['SERVER_ADDR'], $server)) {
			exit('Server - Access Denied');
		}

		$domain = array('localhost');
		$billfun = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'].($SERVER['SERVER_PORT'] == 80 ? '' : ':' . $_SERVER['SERVER_PORT']));

		if (!in_array($billfun, $domain)) {
			exit('Domain - Access Denied');
		}

		$this->conf = $conf = spClass('m_siteConfig')->find();

		if ($conf['close']) {
			exit($conf['message']);
		} else {
			$this->__SITE = rtrim($conf['siteurl'], '/');
			$this->__RESOURCE = $this->__SITE . '/' . 'assets';
			$this->__VIDEO = $this->__SITE . '/' . 'public/video';

		};
	}

	public function success($message, $url = '') {
		$this->message = $message;
		$this->url = $url;

		$this->display('message.html');

		exit;
	}

	public function error($message, $url = '') {
		$this->message = $message;
		$this->url = $url;

		$this->display('message.html');

		exit;
	}

	public function imgvc() {
		require 'common/include/image.php';
		Image::buildImageVerify();
	}
	
}