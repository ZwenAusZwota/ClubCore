<?php
/* Smarty version 5.5.1, created on 2025-07-02 16:50:00
  from 'file:widgets.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686547183ad792_87976423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d83d5325f34b091e2b09f9363f98b1f27a7da41' => 
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
function content_686547183ad792_87976423 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/ClubCore/source/themes/default/templates';
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
