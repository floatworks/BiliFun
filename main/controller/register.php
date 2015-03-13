<?php
defined('APP_PATH') or exit ('Access Denied');
require('base.php');

class register extends base {
	
	public function show() {
		$this->display('register.html');
	}

	public function reg() {

		if(false != spClass('m_user')->spVerifier($this->spArgs()))	{
			$this->error('数据验证错误！',spUrl('register','show'));
		}
		$rows = $this->spArgs();
		if(isset($rows['password2'])) {
			unset($rows['password2']);
		}

		$rows['password'] = md5($rows['password']);
		$rows['time'] = time();
		$rows['kysj'] = strtotime($rows['kysj']);

		if(false != spClass('m_user')->create($rows)) {

			$this->success('注册成功！',spUrl('user','lis'));
		} else {
			$this->error('注册失败！',spUrl('user','add'));
		}
	}

	//检测账号唯一性
	public function checkcode(){
		if(!$usercode = trim($this->spArgs('usercode'))) {
			exit;
		}
		
		if(false != spClass('m_user')->find(array('usercode'=>$usercode))){
			exit('1');     //账号已存在
		}
		$this->jump(spUrl('register', 'reg', $this->spArgs()));
		exit('0');
	}

}