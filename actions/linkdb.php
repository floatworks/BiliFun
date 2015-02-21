<?php

$spConfig['db'] = array(
	'driver' => 'pdo_mysql',   // 驱动类型
	'host' => 'mysql:host=localhost;dbname=billfun',
	'login' => 'root',
	'password' => 'rEVCMFhs4deve6Rr',
	'prefix' => 'bf_'  // 数据库前缀
);

$spConfig['db_driver_path'] = SP_PATH.'/Drivers/pdo.php';