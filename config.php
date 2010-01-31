<?php
//datos de acceso y nombre de la base de datos.
if( $_SERVER['SERVER_NAME']=='127.0.0.1') {
	define('SERVER','127.0.0.1');
	define('USER','root');
	define('PASS','');
	define('DBNAME','dracoframework');
}
else{
	define('SERVER','127.0.0.1');
	define('USER','root');
	define('PASS','');
	define('DBNAME','dracoframework');
}


	if (!($link=mysql_connect(''.SERVER.'',''.USER.'',''.PASS.''))){
      echo 'Error conectando a la base de datos.';
      exit;
   }
	if (!mysql_select_db(''.DBNAME.'',$link)){
      echo 'Error seleccionando la base de datos.';
      exit;
   }
?>