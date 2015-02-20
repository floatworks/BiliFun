<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class main extends base {
	function index(){
		echo "Enjoy, Speed of PHP!";
		$this->display('index.html')
	}
}