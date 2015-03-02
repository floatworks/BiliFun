<?php
/**
*  @author 
*  @copyright
*  @version
*  @link
*/
defined('APP_PATH') or exit('Access Denied');
// 取得域名
function get_ip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} elseif (getenv("HTTP_X_FORWARDER_FOR") && strcasecmp(getenv("HTTP_X_FORWARDER_FOR"), "unknown")) {
		$ip = getenv("HTTP_X_FORWARDER_FOR");
	} elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
		$ip = getenv("REMOTE_ADDR");
	} elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
		$ip = $_SERVER['REMOTE_ADDR'];
	} else {
		$ip = "unknown";
	}

	return $ip;

}
// 转换字符串
function sub_str($str, $start = 0, $length, $more = null) {
	$utf8 = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
	preg_match_all($utf8, $str, $match);
	$slice = join("", array_slice($match[0], $start, $length));

	return $slice . $more;

}

// 上传文件到指定位置
function moveUpload_file($fileName, $targetName = '') {
	if (function_exists('move_uploaded_file')) {
		if (move_uploaded_file($fileName, $targetName)) {
			@chmod($targetName, 0755);
		} else {
			if (copy($fileName, $targetName)) {
				@chmod($targetName, 0755);
				return true;
			}
		}
	} elseif (copy($fileName, $targetName)) {
		@chmod($targetName, 0755);
		return true;
	}
	return false;
}

// 随机密码
function get_random_passwd($length = 8) {

	$passwd_characters = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjklmnpqrstuvwxyz';   // 去掉英文字母I,O
	$total_passwd_char = strlen($passwd_characters) - 1;
	$digit = modrand(0, $length - 1);
	$newpasswd = '';
	for ($i = 0; $i < $length; $i++) { 
		if ($i == $digit) {
			$newpasswd = chr(modrand(48, 57));
			continue;
		}
		$newpasswd .= $passwd_characters{
			modrand(0, $total_passwd_char)
		};
	}
	return $newpasswd;

}
/**
 *  @param $min 最小值
 *  @param $max 最大值
 *  @param $seed 随机器种子
 *
**/
function modrand($min = 0, $max = 0, $seed = -1) {
	mt_rand(crc32(microtime()));
	if ($max and $max <= mt_getrandmax()) {
		$number = mt_rand($min, $max);
	} else {
		$number = mt_rand();
	}
	mt_srand();

	return $number;
}
