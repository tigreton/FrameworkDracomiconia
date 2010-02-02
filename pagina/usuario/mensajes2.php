<?php
require_once ('plantillas/pagina.php');

class UsuarioMensajes2 extends Pagina{

	function content(){

$nombre=$this->usuario->nombre;
$hostname_frame = "localhost";
$database_frame = "dracoframework";
$username_frame = "root";
$password_frame = "";
$frame = mysql_pconnect($hostname_frame, $username_frame, $password_frame);
mysql_select_db($database_frame, $frame);
$query_probando = "SELECT * FROM mensajes WHERE emisario='$nombre'";
$probando = mysql_query($query_probando, $frame) or die(mysql_error());
$row_probando = mysql_fetch_assoc($probando);
do {
return new vParagraph(array(
				new vHeader('Mostrando mensajes de: '.$this->usuario->nombre),
				new vParagraph('Id mensaje'.$row_probando['id']),
				new vParagraph('Quien manda el mensaje: '.$row_probando['emisario']),
				
)); 
} while ($row_probando = mysql_fetch_assoc($probando));
			
	}

}

?>