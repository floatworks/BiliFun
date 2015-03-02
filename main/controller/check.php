<?php
defined('APP_PATH') or exit ('Access Denied');

class check extends spController {
	public function __construct() {
		parent::__construct();

		$server = array('localhost');
		if (!in_array($_SERVER['SERVER_ADDR'], $server)) {
			exit('Server - Access Denied');
		}

		$domain = array('localhost');
		$billfun = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'].($SERVER['SERVER_PORT'] == 80 ? '' : ':' . $_SERVER['SERVER_PORT']));

		if (!in_array($billfun, $domain)) {
			exit('Domain - Access Denied');
		}

		if (empty($_SESSION['username'])) {
			$this->jump(spUrl('open', 'login'));
		}

		if (false == spClass('m_aacl'))->check() {
			$this->error('你没有权限执行此操作！', spUrl('site', 'info'));
		}

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
}