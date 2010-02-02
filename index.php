<?php
require_once ('config.php');
require_once ('model.php');

session_start();

// Si no recibimos ninguna direcci�n, mostramos el index
if(!isset($_SERVER['REDIRECT_URL'])){
	$path = 'index.php';
	$class='Index';
}
else{
	// En caso contrario dividimos la direcci�n por las barras (/) para obtener los segmentos de la url
	$url = explode ('/',$_SERVER['REDIRECT_URL']);
	
	if( $_SERVER['SERVER_NAME']=='127.0.0.1') $pos=2;
	else $pos=1;
	$path = implode ('/',array_slice($url,$pos)).'.php';
	
	$class='';
	foreach(array_slice($url,$pos) as $item)
		$class.=ucfirst($item);
}

if(!file_exists('pagina/'.$path)){
	$path='error.php';
	$class='Error';
}

require_once('pagina/'.$path);
$process=new $class();
$process->execute();
?>