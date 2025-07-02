<?php

session_start();
include 'config.php';
include 'functions.php';
include 'PageHandler.class.php';
include 'DataBaseHandler.class.php';
include 'I18N.class.php';
include 'PluginHandler.class.php';
include_once('Widget.class.php');
require_once 'libs/smarty/libs/Smarty.class.php';

$validLogin = isset($_SESSION["user_id"]) ? true : false;
global $validLogin;

$mainURL = url();
global $mainURL;

$db = new DataBaseHandler($conn);
global $db;
$config = $db->getConfig();
global $config;

$i18n = new I18N($config->system_language, $config->themeURL);
global $i18n;

$smarty = new \Smarty\Smarty();
global $smarty;

//$smarty->debug = false;
$smarty->force_compile = true;
$smarty->caching = false;

$pageHandler = new PageHandler();
global $pageHandler;

$pluginHandler = new PluginHandler();
$pluginHandler->run();


$smarty->assign("validLogin",$validLogin);


$smarty->assign('themeURL', $config->themeURL);
$templateDir = "{$config->themeURL}templates";
$smarty->setTemplateDir($templateDir);


$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

//prepare attributes

$smarty->assign('title', $config->title);
$smarty->assign('i18n', $i18n);
$smarty->assign('mainURL',url());


$pageHandler->run();

$smarty->assign('css', $pageHandler->getCSS());
$smarty->assign('js', $pageHandler->getJS());
$smarty->assign('content', $pageHandler->getContent());
$smarty->assign('menu', $pageHandler->getMenu());

// print_r($pageHandler->getMenu());

//show content
$smarty->display('index.tpl');

// die();
// $page = isset($_GET['page']) ? $_GET['page'] : 'home';
// $id = isset($_GET['id']) ? intval($_GET['id']) : null;
// if(!isset($_REQUEST['action'])) $_REQUEST['action'] = "";





// if (!isLoggedIn() && $page != 'home' && $page != 'register') {
    // header('Location: /');
    // exit();
// }

// if (!isLoggedIn() && !in_array($page, ['home', 'register', 'login'])) {
    // header('Location: /login');
    // exit();
// }

// $handler->handle($page);

?>
