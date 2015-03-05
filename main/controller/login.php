<?php
defined('APP_PATH') or exit ('Access Denied');
require('base.php');

class login extends base {

	public function __construct() {
		parent::__construct();
		if (empty($this->spArgs('username')) || empty($this->spArgs('password'))) {
			$this->error('请先登录！', spUrl('main', 'index'));
		}
	}

	public function index() {
		if ($username = $this->spArgs('username')) {
			$this->username = $username;
			$this->passwd = $password = $this->spArgs('password');
			$this->jump(spUrl('user', 'login'));
		}
	}

}