<?php

include_once 'functions.php';

class MenuEntry{
	
	public $name;
	public $title;
	public $path;
	public $position=50;
	public $parent='';
	public $css='';
	
	
	public function __construct($name,$title,$path){
		$this->name = $name;
		$this->title = $title;
		$this->path = url()."/".$path;
	}
	
	public function setPosition($position){
		$this->position = $position;
	}
	
	public function setParent($parent){
		$this->parent = $parent;
	}
	
	public function setCSS($css){
		$this->css = $css;
	}
	
}

?>