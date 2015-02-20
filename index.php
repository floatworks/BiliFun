<?php
/**
*  @author 
*  @copyright
*  @version
*  @link
*/
header("Content-type:text/html;charset=utf-8;");
@date_default_timezone_set('PRC');

define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/common/SpeedPHP');
// $spConfig = array(

// );
require('/actions/config.php');
require('/actions/linkdb.php');
require('/common/include/tools.php');

require(SP_PATH."/SpeedPHP.php");
spRun();