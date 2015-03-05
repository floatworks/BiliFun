<?php
defined('APP_PATH') or exit ('Access Denied');
require('base.php');

class register extends base {
	
	public function show() {
		$this->display('register.html');
	}

}