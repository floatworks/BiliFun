<?php
defined('APP_PATH') or exit ('Access Denied');
require('base.php');

class user extends base {

	public function __construct() {
		parent::__construct();

		if (empty($_SESSION['username'])) {
			$this->jump(spUrl('main', 'index'));
		}
	}

	public function index() {
		$userinfo = $_SESSION['userinfo'];
		$user_id = $userinfo['user_id'];
		$id_arr = array('user_id' => $user_id);

		$this->display('usercenter.html');
	}
	public function login() {
		if (!empty($_SESSION['userinfo'])) {
			$this->jump(spUrl('main', 'index'));
		}
		if ($username = $this->spArgs('username')) {
			$user_passwd = $this->spArgs('password');
			$arr = array('username' => $username, 'password' => $user_passwd);
			if (false == spClass('m_user')->userLogin($username, $user_passwd)) {
				$this->error("对不起，你输入的密码或用户名有误！", spUrl('main', 'index'));
			} else {
				$acl = spClass('spAcl')->get();
				$this->success("恭喜你，登录成功", spUrl('user', 'index'));
			}
		} else {
			$this->error("对不起，登录失败！", spUrl('main', 'index'));
		}
	}
}