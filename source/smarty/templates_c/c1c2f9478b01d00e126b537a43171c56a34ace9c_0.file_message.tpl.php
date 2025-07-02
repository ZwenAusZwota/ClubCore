<?php
/* Smarty version 5.5.1, created on 2025-06-04 21:18:04
  from 'file:message.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68409bec587cc7_27961800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c2f9478b01d00e126b537a43171c56a34ace9c' => 
    array (
      0 => 'message.tpl',
      1 => 1749063448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68409bec587cc7_27961800 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><div class="content-header">
	<h1 class="module-headline"><?php echo $_smarty_tpl->getValue('i18n')->get('SYS_MESSAGE');?>
</h1>
	<?php echo $_smarty_tpl->getValue('message');?>

</div><?php }
}
