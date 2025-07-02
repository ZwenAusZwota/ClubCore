<?php

include_once 'functions.php';
include_once 'MenuEntry.class.php';


class PageHandler {

	private $connection;
	private $validLogin = false;
	private $css = [];
	private $js = [];
	private $menu = [];
	private $content = "";
	private $pluginContent = [];
	private $widgets = [];


    public function __construct() {
		global $db;
		global $i18n;
        $this->connection = $db;
		if(isset($_SESSION["user_id"])) $this->validLogin = true;
		if(!$this->validLogin){
			$this->js []= url()."/themes/default/js/modal-login.js";
			$this->css []= url()."/themes/default/css/modal-login.css";
		}
		
		$me = new MenuEntry("home",$i18n->get("SYS_HOME"),"");
		$me->setPosition(0);
		$this->addMenuEntry($me);
		$me = new MenuEntry("settings",$i18n->get("SYS_SETTINGS"),"settings");
		$me->setPosition(99);
		$this->addMenuEntry($me);
		$this->addThemeJS("script.js");
		
    }

	public function run(){
		global $smarty;
		global $i18n;
		$page = isset($_GET['page']) ? $_GET['page'] : 'home';
		$id = isset($_GET['id']) ? intval($_GET['id']) : null;
		$sub = isset($_GET['sub']) ? $_GET['sub'] : '';
		if(!isset($_REQUEST['action'])) $_REQUEST['action'] = "";
		
		switch ($page) {
			case 'home':
				if($this->validLogin){
					$smarty->assign("widgets",$this->widgets);
					$this->content = $smarty->fetch("widgets.tpl");
				}else{
					
				}
			break;
			case 'profile':
				$this->profile();
			break;
			case 'settings':
				$this->settings($sub);
			break;
			case 'logout':
				$this->logout();
			break;
			default:
				if(count($this->pluginContent) > 0){
					$this->content = implode("<br>",$this->pluginContent);
				}else{
					$this->content = $smarty->fetch("404.tpl");
				}
		}
	}
	
	public function addContent($content){
		$this->pluginContent []= $content;
	}
	public function getContent(){
		return $this->content;
	}
	
	public function addWidget($entry){
		$ok = true;
		$pos = $entry->position;
		foreach($this->widgets as $key=>$widget){
			//if($entry->name == $widget->name) $ok = false;
			if($key == $pos) $pos++;
		}

		if($ok){
			$this->widgets[$pos] = $entry;
		}
		ksort($this->widgets);
	}
	
	public function addMenuEntry($entry){
		
		$ok = true;
		$pos = $entry->position;
		foreach($this->menu as $key=>$menu){
			if($entry->name == $menu->name) $ok = false;
			if($key == $pos) $pos++;
		}

		if($ok){
			$this->menu[$pos] = $entry;
		}
	}
	
	public function getMenu(){
		ksort($this->menu);
		return $this->menu;
	}
	
	public function getCSS(){
		return $this->css;
	}
	
	public function getJS(){
		return $this->js;
	}
	
	private function addThemeCss($file){
		global $config;
		$this->css []= url()."/{$config->themeURL}css/{$file}";
	}
	
	public function addPluginCSS($file){
		$this->css []= url()."/plugins/".$file;
	}
	
	private function addThemeJs($file){
		global $config;
		$this->js []= url()."/{$config->themeURL}js/{$file}";
	}
	
	public function addPluginJS($file){
		$this->js []= url()."/plugins/".$file;
	}
	
	private function checkValidLogin(){
		global $i18n;
		global $smarty;
		if(!$this->validLogin){
			$smarty->assign("message",$i18n->get("SYS_NO_RIGHTS"));
			$this->content = $smarty->fetch("message.tpl");
		}
		return $this->validLogin;
	}
	
	private function profile(){
		global $db;
		global $smarty;
		if($this->checkValidLogin()){
			$this->addThemeCss('profile.css');
			$user = $db->getUser();
			$smarty->assign("user",$user);
			$this->content = $smarty->fetch("profile.tpl");
		}
	}
	
	private function logout(){
		global $smarty;
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['user_email']);
		$this->validLogin = false;
		$smarty->assign("validLogin",false);
		header('Location: '.url());
	}
	
	private function settings($sub){
		global $i18n;
		global $smarty;
		global $pluginHandler;
		$this->addThemeCss('preferences.css');
		$this->addThemeJs('preferences.js');
		
		$me = new MenuEntry("settings-themes",$i18n->get("SYS_THEMES"),"settings/themes");
		$me->setParent("settings");
		$me->setCSS("selected");
		$this->addMenuEntry($me);
		
		$me = new MenuEntry("settings-plugins",$i18n->get("SYS_PLUGINS"),"settings/plugins");
		$me->setParent("settings");
		$this->addMenuEntry($me);
		
		switch($sub){
			case "themes":
				$this->content = $smarty->fetch('preferences_themes.tpl');
			break;
			case "plugins":
				$smarty->assign('plugins',$pluginHandler->getPlugins());
				$this->content = $smarty->fetch('preferences_plugins.tpl');
			break;
			case "managers":
				//$smarty->assign('plugins',$pluginHandler->getPlugins());
				$this->content = $smarty->fetch('preferences_managers.tpl');
			break;
			default:
				$this->content = $smarty->fetch('preferences.tpl');
		}
	}
	
}
?>