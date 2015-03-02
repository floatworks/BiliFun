<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class search extends base {

	public function index() {
		$this->display('search.html');
	}

	public function show() {
		$this->search_words = $search_words = $this->spArgs('comfirm_words');
		if (null == $search_words) {
			$this->error('表单提交错误', spUrl('search', 'index'));
		} else {
			$prod = spClass('m_prod')->spLinker()->findAll();
			foreach ($prod as $item) {
				if($search_words == $item['pid']) {
					$this->result = spClass('m_prod')->spLinker()->findAll(array('pid' => $search_words));
					$this->display('search.html');
					exit();
				} elseif ($search_words == $item['author']) {
					$this->result = spClass('m_prod')->spLinker()->findAll(array('author' => $search_words), 'addtime DESC, id ASC');
					$this->display('search.html');
					exit();
				} elseif ($search_words == $item['video_name']) {
					$this->result = spClass('m_prod')->spLinker()->findAll(array('video_name' => $search_words));
					$this->display('search.html');
					exit();
				} else {
					$c = spClass('m_prod');
					$con = $c->escape('%', $search_words, '%');
					$this->result = $c->spLinker()->findAll("$item[description] like $con", 'views DESC, addtime DESC, id ASC');
					if (false == $result) {
						continue;
					} else {
						$this->display('search.html');
						exit();
					}
				}
			}
		}
	}
}