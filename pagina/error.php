<?php
require_once('plantillas/pagina.php');

class Error {
	function execute(){
		if( $_SERVER['SERVER_NAME']=='127.0.0.1') $pos=2;
		else $pos=1;
		
		header('Location:'.str_repeat('../',substr_count($_SERVER['REDIRECT_URL'],'/')-$pos));
		exit;
	}
}
?>