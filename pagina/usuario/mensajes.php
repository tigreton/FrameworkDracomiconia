<?php
require_once ('plantillas/pagina.php');

class UsuarioMensajes extends Pagina{

   function content(){

$nombre=$this->usuario->nombre;
$hostname_frame = "localhost";
$database_frame = "dracoframework";
$username_frame = "root";
$password_frame = "";
$frame = mysql_pconnect($hostname_frame, $username_frame, $password_frame);
mysql_select_db($database_frame, $frame);
$query_probando = "SELECT * FROM mensajes WHERE emisario='$nombre' ORDER BY id DESC";
$probando = mysql_query($query_probando, $frame);
$row_probando = mysql_fetch_array($probando);


$result=new vContainer();
$cantidad=count($row_probando);

do{

$result->add(new vParagraph(array(
            new vHeader('Titulo mensajes: '.$row_probando['titulo']),
            new vParagraph('Id mensaje'.$row_probando['id']),
            new vParagraph('Quien manda el mensaje: '.$row_probando['emisario']),
new vParagraph('Mensaje: '.$row_probando['mensaje']),))); 


}

while ($row_probando = mysql_fetch_array($probando));





return $result;
mysql_free_result($probando);

         
   }


}

?>