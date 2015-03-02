<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class search extends base {

	public function index() {
		$this->display('search.html');
	}

	public function show() {
		$search_words = $this->spArgs('comfirm_words');
		if (null == $search_words) {
			$this->error('表单提交错误', spUrl('search', 'index'));
		} else {
			$search_arr = array();
			$prod = spClass('m_prod')->spLinker()->findAll();
		}
	}
}