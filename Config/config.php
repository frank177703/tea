<?php
/*
*---------------------------------------------------------------
* 全局配置文件
*---------------------------------------------------------------
*/
//开始记录php运行时间
$GLOBALS['_beginTime'] = microtime(TRUE);

//检测PHP环境
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0');

//设置默认app目录
define("APP_HOME", "Home");

//是否是调试模式
define('APP_DEBUG',      false);

//设置数据库
$database = array(
		'type'=>'mysql',
		'host'=>'localhost',
		'dataname'=>'tea',
		'username'=>'root',
		'password'=>'',
		'port'=>'3306',
		'charset'=>'UTF-8',
		'prefix'=>''
);
defined('DATABASE') or define("DATABASE", json_encode($database));

//设置环境 production，develop,test
define('ENVIRONMENT', 'develop');

if(defined('ENVIRONMENT')){
	switch (ENVIRONMENT){
		case 'develop':
			error_reporting(E_ALL);
			break;
		case 'test':
		case 'production':
			error_reporting(0);
			break;
		default:
			exit('The application environment is not set correctly.');
	}
}

