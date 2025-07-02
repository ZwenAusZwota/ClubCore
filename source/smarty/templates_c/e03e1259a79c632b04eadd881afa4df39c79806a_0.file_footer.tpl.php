<?php
/* Smarty version 5.5.1, created on 2025-07-02 16:50:00
  from 'file:footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686547183c9769_08563030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e03e1259a79c632b04eadd881afa4df39c79806a' => 
    array (
      0 => 'footer.tpl',
      1 => 1749036778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
))) {
function content_686547183c9769_08563030 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/ClubCore/source/themes/default/templates';
if (!$_smarty_tpl->getValue('validLogin')) {?>
	<?php $_smarty_tpl->renderSubTemplate('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>
<div id="imprint">Powered by <a href="">CoolerSystemName</a> © ZwenAusZwota&nbsp;&nbsp;-&nbsp;&nbsp;
	<a href="https://www.admidio.org/imprint.php">Impressum</a>&nbsp;&nbsp;-&nbsp;&nbsp;
	<a href="https://www.admidio.org/data_protection.php">Datenschutz</a>
</div>
</body>
</html><?php }
}
