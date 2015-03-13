<?php
defined('APP_PATH') or exit('Access Denied');

class m_comment extends spModel {
	public $table = 'comment';
	public $pk = 'id';

	var $verifier = array(
		"rules" => array(
			'message' => array(
				'notnull' => TRUE,
				'minlength' => 15,
			),
		),
		"messages" => array(
			'message' => array(
				'minlength' => "回复留言请勿低于十五字之下.",
			),
		),
	);

	var $linker = array(
		array(
			'type' => 'hasone',
			'map' => 'prod',
			'mapkey' => 'pid',
			'fclass' => 'm_prod',
			'fkey' => 'pid',
			'enabled' => true,
		),
	);

	// 覆写CREATE
	public function create($new) {
		$t = date("Y-m-d H:i:s", time());
		$arr = array(
			'addtime' => $t
		);
		$newArr = array_merge_recursive($new, $arr);
		return parent::create($newArr);
	}
}