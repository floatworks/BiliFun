<?php
defined('APP_PATH') or exit ('Access Denied');

class m_user extends spModel {
	var $table = "user";
	var $pk = "user_id";

	var $verifier = array(
		"rules" => array(
			'username' => array(
				'notnull' => true,
				'minlength' => 2,
				'maxlength' => 20,
			),
			'password' => array(
				'notnull' => true,
				'minlength' => 6,
				'maxlength' => 30,
		    ),
		),
		"messages" => array(
			'username' => array(
				'notnull' => "对不起，用户名不能为空！",
				'minlength' => "对不起，用户名至少为2位",
				'maxlength' => "对不起，用户名不得超过20位",
			),
			'password' => array(
				'notnull' => "对不起，密码不能为空！",
				'minlength' => "对不起，密码至少为6位",
				'maxlength' => "对不起，密码不得超过30位",
		    ),
		)
	);

	public function create($new) {
		$new = array_merge($new, array(
			'user_time' => date("Y-m-d H:i:s")
		));
		parent::create($new);
	}

	public function userLogin($username, $password) {
		$conditions = array(
			'username' => $username,
			'password' => $password,
		);
		if ($result = $this->find($conditions)) {
			spClass('spAcl')->set($result['aclname']);
			$_SESSION["userinfo"] = $result;
			return true;
		} else {
			return false;
		}
	}
}