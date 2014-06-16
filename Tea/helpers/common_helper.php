<?php
if(!defined('IS_SAFE') or IS_SAFE!=1)
	die("<html><head><title>403 Forbidden</title></head><body>Directory access is forbidden</body></html>");
/*
 * ------------------------------
 * Tea核心公共方法，自动加载
 * ------------------------------
 */

/**
 * 加载方法
 */
if (!function_exists('load_helper')){
	function load_helper($helper){
		$helper = strtolower($helper);
		$path = TEA_HELPERS.$helper.'_helper.php';
		if(file_exists($path)){
			require_once $path;
		}
	}
}
/**
 * 加载类
 */
if (!function_exists('load_library')){
	function load_library($library,$use=null){
		
		$class="Tea\Uri";
		$dir = './';
		echo PATH_SEPARATOR;
		echo get_include_path();
		set_include_path(get_include_path().PATH_SEPARATOR.$dir);
		$class = str_replace('\\', '/', $class) . '.php';
		echo $class;
		require_once($class);
		exit();
		$library = strtolower($library);
		$path = TEA_LIBRARIES.$library.'_library.php';
		if(file_exists($path)){
			require_once $path;
			$a = new Uri();
			echo $path;
			$library = ucfirst($library);
			$use = empty($use)?$use:ucfirst($use);
			$library = "Uri";
			$a =new $library();
			$class = empty($use)?$library:"{$use}\{$library}";
			return new $class();
		}
	}
}
/**
 * 读取所有php文件
 */
if(!function_exists('read_class')){
	function read_class($dir){
		$data = array();
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					$extension = substr($file, strrpos($file, '.')+1);
					if (strtolower($extension)=='php' && !is_dir($dir.'/'.$file)) {
						$data[] = $file;
					}
				}
				closedir($dh);
			}
		}
		return $data;
	}
}
