<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class main extends base {
	function index(){
		// 首页大图幻灯
		$this->swap = spClass('m_swap')->findAll(null, 'shownum ASC, id DESC');

		$this->display('index.html');
	}
}