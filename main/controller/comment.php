<?php
defined('APP_PATH') or exit ('Access Denied');
require 'base.php';

class comment extends base {
	
	public function add() {
		if (false != spClass('m_comment')->spVerifier($this->spArgs())) {
			$this->error('对不起，留言失败！请重试', spUrl('main', 'prod', array('pid' => $_SESSION['pid'])));
		}
		$rows = $this->spArgs();
		$prod = spClass('m_comment')->spLinker()->find(array('pid' => $_SESSION['pid']));
		if (!isset($_SESSION['username'])) {
			$username = "游客";
		} else {
			$username = $_SESSION['username'];
		}
		$rows = array_merge_recursive($rows, array(
			'replyer' => $username,
			'author_id' => $prod['prod']['author_id'],
			'pid' => $_SESSION['pid']
		));
		if (!($insert = spClass('m_comment')->create($rows))) {
			$this->error('添加留言失败，请稍候再试！', spUrl('main', 'prod', array('pid' => $_SESSION['pid'])));
		}

		$this->success('添加留言成功！', spUrl('main', 'prod', array('pid' => $_SESSION['pid'])));

	}
}