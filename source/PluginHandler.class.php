<?php

include_once 'functions.php';

class PluginHandler{
	
	private $plugins = [];
	
	public function __construct(){
		$this->checkDirectory();
		$this->loadPlugins();
	}
	
	
	private function checkDirectory(){
		global $db;
		$dirs = glob('plugins/*', GLOB_ONLYDIR);
		foreach($dirs as $dir){
			$file = $dir."/plugin.json";
			if (file_exists($file)) {
				$jsonContent = file_get_contents($file);
				$plugin = json_decode($jsonContent);
				
				//prüfen, ob das Plugin ein Objekt ist und die erforderlichen Felder enthält
				
				//prüfen ob es schon in der DB ist
				$query = "SELECT COUNT(1) FROM {$db->prefix}plugin WHERE plugin_name = '{$plugin->name}'";
				//$result = $db->execute($query, [ "s" => &$plugin->name]);
				$result = $db->execute($query);
				if($result->fetch_row()[0] == 0 ){
					//insert 
					$attrs = array(
						"plugin_name" => $plugin->name,
						"plugin_version" => $plugin->version,
						"plugin_path" => $dir
					);
					$db->insert("{$db->prefix}plugin",$attrs);
				}
			}
		}
	}
	
	private function loadPlugins(){
		global $db;
		
		$query = "SELECT * FROM {$db->prefix}plugin";
		$result = $db->execute($query);
		while($p = $result->fetch_assoc()){
			$object = (object)$p;
			$this->plugins[$object->plugin_name] = $this->addData($object);
		}
	}
	
	private function addData($plugin){
		$p = $plugin;
		$file = $plugin->plugin_path."/plugin.json";
		if (file_exists($file)) {
			$jsonContent = file_get_contents($file);
			$data = json_decode($jsonContent);
			$p->title = $data->title ;
			$p->author = $data->author ;
			$p->author_url = $data->author_url ;
			$p->plugin_url = $data->plugin_url ;
			$p->description = $data->description ;
		}
		return $p;
	}
	
	public function getPlugins(){
		return $this->plugins;
	}
	
	public function loadMenus(){
		
	}
	
	public function run(){
		foreach($this->plugins as $plugin){
			if($plugin->active){
				$runFile = $plugin->plugin_path."/run.php";
				if (file_exists($runFile)) {
					include_once $runFile;
				}
			}
		}
	}
	
	public function handleAJAX($plugin){
		try{
			$plugin = $this->plugins[$plugin];
			//load Plugin
			if($plugin->active){
				$path = $plugin->plugin_path."/".ucwords(strtolower($plugin->plugin_name)).".php";
				$class = ucwords(strtolower($plugin->plugin_name));
				include_once($path);
				$o = new $class();
			
				return $o->handleAjax($_REQUEST);
			}else return ['status' => 'error', 'message' => "Plugin '{$plugin}' not activated!", 'valid' => false];
		} catch (Exception $e) {
			return ['status' => 'error', 'message' => "Error in ajax request at plugin '{$plugin}'", 'valid' => false];
		}
	}
}

?>