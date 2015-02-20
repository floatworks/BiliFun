<?php
defined('APP_PATH') or exit ('Access Denied');

class m_siteConfig extends spModel {
	public $table = 'conf';
	public $pk = 'sitename';
}