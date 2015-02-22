<?php
defined('APP_PATH') or exit ('Access Denied');
require 'check.php';

class category extends check {
	public function __construct() {
		parent::__construct();
		// 全局变量
		global $__action;

		$arr = array();
		$cate_rot = $__action == 'upd' ? spClass('m_category')->findAll("id !=" . intval($this->spArgs('id')), 'cid ASC, id ASC') : spClass('m_category')->findAll(null, 'cid ASC, id ASC');

		foreach ($cate_rot as $value) {
			$arr[] = array(
				'id' => $value['id'],
				'name' => $value['name'],
				'stat' => $value['stat'],
				'cid' => $value['cid']
			);
		}
		$obj = spClass('beansupport', array(array('id', 'cid', 'name', 'format')));
		$this->category = $obj->getMother($arr);

	}
	// 分类列表
	public function list() {
		$this->display('video_list.tpl.php');
	}
}
