<?php
defined('APP_PATH') or exit ('Access Denied');

class comment extends base {
	
	public function add() {
		if (false != spClass('m_comment')->spVerifier($this->spArgs())) {
			$this->error('对不起，留言失败！请重试', spUrl('main', 'prod'));
		}
		$rows = $this->spArgs();

		if (!$insert = spClass('m_comment')->create($rows)) {
			$this->error('添加留言失败，请稍候再试！', spUrl('main', 'prod'));
		}

		$this->success('添加留言成功！', spUrl('main', 'prod'));

	}
}