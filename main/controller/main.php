<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class main extends base {
	function index(){
		$this->display('index.html');
	}
}