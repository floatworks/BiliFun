<?php
defined('APP_PATH') or exit ('Access Denied');

class m_swap extends spModel {
	public $table = 'swap';
	public $pk = 'id';

	public $verify = array(
		'rules' => array(
			'status' => array(
				'notnull' => true,
			),
			'title' => array(
				'notnull' => true,
			),
			'url' => array(
				'notnull' => true,
			),
			'thumb' => array(
				'notnull' => true,
			),
		),
	);
}