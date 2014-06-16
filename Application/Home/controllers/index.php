<?php
namespace Home;
use Tea\Controller;
class Index_Controller extends Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		echo "index";
	}
}