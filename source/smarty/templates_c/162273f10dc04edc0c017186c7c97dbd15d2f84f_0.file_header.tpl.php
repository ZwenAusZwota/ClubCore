<?php
/* Smarty version 5.5.1, created on 2025-07-02 16:50:00
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686547183c6dd5_90011177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '162273f10dc04edc0c017186c7c97dbd15d2f84f' => 
    array (
      0 => 'header.tpl',
      1 => 1749729415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686547183c6dd5_90011177 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/ClubCore/source/themes/default/templates';
?><!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title><?php echo $_smarty_tpl->getValue('title');?>
</title>
	  
				<?php echo $_smarty_tpl->getValue('additionalHeaderData');?>

	  
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css">-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/solid.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css">
				
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/<?php echo $_smarty_tpl->getValue('themeURL');?>
css/styles.css" />
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('css'), 'url');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('url')->value) {
$foreach3DoElse = false;
?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('url');?>
">
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		<!--
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('themeURL');?>
/css/modal-login.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('themeURL');?>
/css/preferences.css">
		-->
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('js'), 'url');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('url')->value) {
$foreach4DoElse = false;
?>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('url');?>
"><?php echo '</script'; ?>
>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		
		<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('themeURL');?>
/js/modal-login.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('themeURL');?>
/js/preferences.js"><?php echo '</script'; ?>
>-->
	</head>
	<body id=<?php echo $_smarty_tpl->getValue('id');?>
 ><?php }
}
