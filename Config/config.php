<?php
/*
 *---------------------------------------------------------------
* 全局配置文件
*---------------------------------------------------------------
*
*/

//检测PHP环境
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0');

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