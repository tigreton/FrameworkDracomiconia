<?php
require_once("vStyleElement.php");

class vTable extends vStyleElement{
	private $rows = array();
	private $headers = array();

	function __construct($headers=array(),$class=''){
		parent::__construct($class);
		if(is_array($headers))
			foreach($headers as $c)
				$this->addHeader($c);
		else $this->addHeader($headers);
	}

	function add($element){
		if(get_class($element)!='vRow')
			$this->rows[] = new vRow($element);
		else $this->rows[] = $element;
	}

	function getRows(){
		return $this->rows;
	}

	function addHeader($element){
		if(get_class($element)!='vContainer'){
			$container=new vContainer();
			$container->add($element);
			$this->headers[] = $container;
		}
		else $this->headers[] = $element;
	}

	function getHeaders(){
		return $this->headers;
	}
}

class vRow extends vStyleElement{
	private $elements=array();

	function __construct($elements=array(),$class='',$id=''){
		parent::__construct($class,$id);
		if(is_array($elements))
			foreach($elements as $c)
				$this->add($c);
		else $this->add($elements);
	}
	
	function add($element,$class=''){
		$container=new vContainer(array(),$class);
		$container->add($element);
		$this->elements[] = $container;
	}

	function getElements(){
		return $this->elements;
	}
}
?>