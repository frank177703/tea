<?php
namespace Tea;
if(!defined('IS_SAFE') or IS_SAFE!=1)
	die("<html><head><title>403 Forbidden</title></head><body>Directory access is forbidden</body></html>");
class Tea{
	private $uri;
	function __construct(){
	}
	public function run(){
		require_once TEA_HELPERS.'common_helper.php';
		require_once TEA_CORE.'Analyze.php';
		$ana = new Analyze();
		$ana::register();
		//$this->uri = load_library('uri');
		//$uri = $this->uri->gain_uri();
	}
	private static function autoload(){
		self::helper('common');
		self::library('uri');
	}
	function __destruct(){
		
	}
}
