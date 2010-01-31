<?php
require_once("vStyleElement.php");

class vContainer extends vStyleElement{
	private $componentList = array();

	function __construct($contents=array(),$class='',$id=''){
		parent::__construct($class,$id);
		if(is_array($contents))
			foreach($contents as $c)
				$this->add($c);
		else $this->add($contents);
	}
	
	function getComponents(){
		return $this->componentList;
	}

	function add($component){
		$this->componentList[] = $component;
	}
}
?>