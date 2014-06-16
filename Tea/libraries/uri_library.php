<?php
namespace Tea;
class Uri{
	private $app = "";
	private $class = "";
	private $method = "";
	private $uri="";
	public function gain_uri(){
		if (! isset($_SERVER['REQUEST_URI']) || ! isset($_SERVER['SCRIPT_NAME'])){
			return '';
		}
		$uri = $_SERVER['REQUEST_URI'];
		$name = $_SERVER['SCRIPT_NAME'];
		if (strpos($uri, $name) === 0){
			$uri = substr($uri, strlen($name));
		}elseif (strpos($uri, dirname($name)) === 0){
			$uri = substr($uri, strlen(dirname($name)));
		}
		$uris = preg_split('#\?#i', $uri, 2);
		
		$data = array();
		$data['uri'] = isset($uris[0])?$uris[0]:'/';
		$data['app'] = isset($_GET['app'])?$_GET['app']:"";
		$data['class'] = isset($_GET['class'])?$_GET['class']:"";
		$data['method'] = isset($_GET['method'])?$_GET['method']:"";
		
		return $data;
	}
	public function set_uri(){
		
	}
	public function get_uri(){
		
	}
}