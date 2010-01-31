<?php

class Proceso{
	var $usuario;
	
	function __construct(){
		if(isset($_SESSION['id'])) $this->usuario=new Usuario($_SESSION['id']);
	}

	function execute(){
	}
	
	function getParam($param,$default=null){
		if(isset($_GET[$param])) return $_GET[$param];
		else if(isset($_POST[$param])) return $_POST[$param];
		else return $default;
	}
	
	function formError($dir,$error){
		header('Location:'.$dir.'?error='.$error);
		exit;
	}
	
	protected function getRelativeDir($dir){
		if( $_SERVER['SERVER_NAME']=='127.0.0.1') $dir='/dracomiconia/'.$dir;
		$dir=explode('/',$dir);
		
		if(isset($_SERVER['REDIRECT_URL']))
			$b=explode('/',$_SERVER['REDIRECT_URL']);
		else $b=array();
		foreach($dir as $i=>$folder)
			if($i>=count($b) or $folder!=$b[$i]) break;
		return ((count($b)-$i-1>0)?str_repeat('../',count($b)-$i-1):'').implode('/',array_slice($dir,$i));
	}
	
	function title(){
		return 'Dracomiconia framework';
	}
}
?>