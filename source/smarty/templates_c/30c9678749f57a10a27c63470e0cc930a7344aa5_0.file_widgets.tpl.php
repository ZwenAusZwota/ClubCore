<?php
/* Smarty version 5.5.1, created on 2025-07-02 14:13:17
  from 'file:widgets.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6865225dbff094_16868978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c9678749f57a10a27c63470e0cc930a7344aa5' => 
    array (
      0 => 'widgets.tpl',
      1 => 1749806480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6865225dbff094_16868978 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><div class="widget-container">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('widgets'), 'widget');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('widget')->value) {
$foreach0DoElse = false;
?>
	<div class="widget">
		<div class="widget-header"><?php echo $_smarty_tpl->getValue('widget')->title;?>
</div>
		<div class="widget-content">
		  <p><?php echo $_smarty_tpl->getValue('widget')->content;?>
</p>
		</div>
	</div>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
