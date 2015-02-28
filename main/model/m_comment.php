<?php
defined('APP_PATH') or exit('Access Denied');

class m_comment extends spModel {
	public $table = 'comment';
	public $pk = 'id';

	var $verifier = array(
		"rules" => array(
			'replyer' => array(
				'notnull' => true,
				'minlength' => 2,
				'maxlength' => 20,
			),
			'contents' => array(
				'notnull' => true,
				'minlength' => 15,
			),
		),
		"messages" => array(
			'contents' => array(
				'minlength' => "回复留言请勿低于十五字之下.",
			),
		),
	);

	// 覆写CREATE
	public function create($new) {
		$new = array_merge($new, array(
			'addtime' => date("Y-m-d H:i:s")
		));
		parent::create($new);
	}
}