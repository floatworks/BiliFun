<?php
defined('APP_PATH') or exit ('Access Denied');

class m_tags extends spModel {
	public $table = "tags";
	public $pk = "id";

	public $linker = array(
		array(
			'type' => 'hasone',
			'map' => 'prod',
			'mapkey' => 'video_id', // 标签id
			'fclass' => 'm_prod',
			'fkey' => 'pid',
			'enabled' => true,
		),
	);
	
}