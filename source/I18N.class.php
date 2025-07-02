<?php

class I18N{
	
	private $language = '';
	private $file = '';
	private $words = [];
	
	public function __construct($language,$themeURL){
		//lade die Internationalisierung für die eingestellt Sprache
		$this->language = $language;
		$this->file = $themeURL . "i18n/{$language}.json";
		$this->loadLanguage();
	}
	
	public function get($key){	

		if (!array_key_exists($key, $this->words)) {
			$this->words[$key] = "";
			file_put_contents($this->file, json_encode($this->words, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
			return $key;
		}elseif (empty($this->words[$key])){
			return $key;
		}
		else{
			return $this->words[$key];
		}
	}
	
	private function loadLanguage(){
		if (file_exists($this->file)) {
			$jsonContent = file_get_contents($this->file);
			$this->words = (array)json_decode($jsonContent);
		}
	}
}
?>