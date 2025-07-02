<?php
/* Smarty version 5.5.1, created on 2025-07-02 16:50:00
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686547183bf7d7_55084128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bda4ccc5651b1ab8ee7a5be5be75ebb9867e923' => 
    array (
      0 => 'index.tpl',
      1 => 1749105132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_686547183bf7d7_55084128 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/ClubCore/source/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div id="2025-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"></div>
	</div>
</div>
<header>
	<h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>
</header>

<nav class="top-nav">
    <?php if ($_smarty_tpl->getValue('validLogin')) {?>
      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/profile"><?php echo $_smarty_tpl->getValue('i18n')->get('SYS_MY_PROFILE');?>
</a>
      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/logout"><?php echo $_smarty_tpl->getValue('i18n')->get('SYS_LOGOUT');?>
</a>
    <?php } else { ?>
		<a class="nav-link" href="#" id="login-button"><?php echo $_smarty_tpl->getValue('i18n')->get('SYS_LOGIN');?>
</a>
    <?php }?>
</nav>

<div class="layout">
    <aside class="sidebar">
		<?php if ($_smarty_tpl->getValue('validLogin')) {?>
      <ul>
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu'), 'entry');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('entry')->value) {
$foreach1DoElse = false;
?>
		<?php if ($_smarty_tpl->getValue('entry')->parent == '') {?><li class="level_0"><a href="<?php echo $_smarty_tpl->getValue('entry')->path;?>
"><?php echo $_smarty_tpl->getValue('entry')->title;?>
</a></li><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu'), 'sub');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sub')->value) {
$foreach2DoElse = false;
if ($_smarty_tpl->getValue('sub')->parent != '') {
if ($_smarty_tpl->getValue('sub')->parent == $_smarty_tpl->getValue('entry')->name) {?><ul><li class="level_1"><a href="<?php echo $_smarty_tpl->getValue('sub')->path;?>
"><?php echo $_smarty_tpl->getValue('sub')->title;?>
</a></li></ul><?php }
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>
	  <?php }?>
    </aside>

    <main class="content">
      <h2><?php echo $_smarty_tpl->getValue('headline');?>
</h2>
	  <?php echo $_smarty_tpl->getValue('content');?>

    </main>
	
</div>

<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
