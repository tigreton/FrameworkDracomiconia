<?php
require_once 'librerias/dao/persistent.php';

$entity_usuario=new entity('usuario');
$entity_usuario->addField(new TextField('nombre'));
$entity_usuario->addField(new PasswordField('password'));

class Usuario extends Persistent{
	function __construct($condition=null){
		parent::__construct('usuario',$condition);}}

?>