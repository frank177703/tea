<?php
use Tea\Tea;
if(!defined('IS_SAFE') or IS_SAFE!=1)
	die("<html><head><title>403 Forbidden</title></head><body>Directory access is forbidden</body></html>");
//开始记录php运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);

//检测PHP环境
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0');

//系统常量定义
defined('ROOT_PATH') or define('ROOT_PATH', substr(__DIR__,0,-3));
define('ROOT_DATA', ROOT_PATH.'Data/');
define('ROOT_CONFIG', ROOT_PATH.'Config/');
define('ROOT_TEA', ROOT_PATH.'Tea/');
define('ROOT_APP', ROOT_PATH.'Application/');
define('DATA_LOGS', ROOT_DATA.'logs/');
define('TEA_CORE', ROOT_TEA.'core/');
define('TEA_HELPERS', ROOT_TEA.'helpers/');
define('TEA_LIBRARIES', ROOT_TEA.'libraries/');

//引入全局配置
require ROOT_CONFIG."config.php";
//引入框架核心文件
require TEA_CORE."Tea.php";
$tea = new Tea();
$tea->run();