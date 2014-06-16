<?php
namespace Tea;
/**
 * 数据解析收集类
 * @author kevin
 */
class Analyze{
	public static function register(){
		$http_host = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'';
		$request_uri = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'';
		$script_name = isset($_SERVER['SCRIPT_NAME'])?$_SERVER['SCRIPT_NAME']:'';
		
		define("HTTP_HOST", $http_host);
		
		if (strpos($request_uri, $script_name) === 0){
			$request_uri = substr($request_uri, strlen($script_name));
		}elseif (strpos($request_uri, dirname($script_name)) === 0){
			$request_uri = substr($request_uri, strlen(dirname($script_name)));
		}
		$ruri = preg_split('#\?#i', $request_uri, 2);
		$uri = $ruri[0];
		
	}
}