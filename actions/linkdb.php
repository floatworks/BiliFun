<?php

$spConfig['db'] = array(
	// 'driver' => 'pdo_mysql',   // 驱动类型
	'driver' => 'mysqli',
	// 'host' => 'mysql:dbname=billfun;host=127.0.0.1',
	'host' => 'localhost',
	'login' => 'root',
	'password' => '',
	'database' => 'billfun',
	'prefix' => 'bf_'  // 数据库前缀
);