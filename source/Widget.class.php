<?php

class Widget{
	public $position = 99;
	public $content = "";
	public $title = "";
	
	public function __construct($title, $content, $position=99){
		$this->title = $title;
		$this->content = $content;
		$this->position = $position;
	}
}


?>