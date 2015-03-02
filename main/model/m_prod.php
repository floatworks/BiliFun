<?php
defined('APP_PATH') or exit ('Access Denied');

class m_prod extends spModel {
	public $table = 'prod';
	public $pk = 'id';

	public $verifier = array(
		'rules' => array(
			'pid' => array(
				'notnull' => true,
			),
			'name' => array(
				'notnull' => true,
				'minlength' => 2,
				'maxlength' => 10,
			),
			'thumb' => array(
				'notnull' => true,
			),
		),
	);

	public $linker = array(
		array(
			'type' => 'hasone',
			'map' => 'category',
			'mapkey' => 'channel_id',     // 视频频道id
			'fclass' => 'm_category',
			'fkey' => 'cid',
			'enabled' => true,
		),
	);
}