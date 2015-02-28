<?php
defined('APP_PATH') or exit ('Access Denied');

class m_tags extends spModel {
	public $table = "tags";
	public $pk = "id";

	public $linker = array(
		array(
			'type' => 'hasone',
			'map' => 'category',
			'mapkey' => 'tid', // 标签id
			'fclass' => 'm_category',
			'fkey' => 'cid',
			'enabled' => true,
		),
	);
	
}