<?php
/* Smarty version 5.5.1, created on 2025-06-02 16:17:37
  from 'file:/www/htdocs/w00a13e2/ffw_verein/themes/default/templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_683db281111c86_10586295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a4ccea0626fb2699ce34557e4b3d798af91aff' => 
    array (
      0 => '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates/index.tpl',
      1 => 1748865961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
))) {
function content_683db281111c86_10586295 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
  
      <?php echo $_smarty_tpl->getValue('additionalHeaderData');?>

  
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('urlTheme');?>
/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('urlTheme');?>
/css/modal-login.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('urlTheme');?>
/css/preferences.css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('urlTheme');?>
/js/modal-login.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('urlTheme');?>
/js/preferences.js"><?php echo '</script'; ?>
>
</head>
<body id=<?php echo $_smarty_tpl->getValue('id');?>
 >

	<div id="2025-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>

  <header>
    <h1>Förderverein der Freiwilligen Feuerwehr Ottendorf e.V.</h1>
  </header>

  <nav class="top-nav">
    <?php if ($_smarty_tpl->getValue('validLogin')) {?>
      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
/adm_program/modules/profile/profile.php"><?php echo $_smarty_tpl->getValue('l10n')->get('SYS_MY_PROFILE');?>
</a>
      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
/adm_program/system/logout.php"><?php echo $_smarty_tpl->getValue('l10n')->get('SYS_LOGOUT');?>
</a>
    <?php } else { ?>
		<a class="nav-link" href="#" id="login-button"><?php echo $_smarty_tpl->getValue('l10n')->get('SYS_LOGIN');?>
</a>
		<a class="nav-link" href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
/adm_program/system/login.php"><?php echo $_smarty_tpl->getValue('l10n')->get('SYS_LOGIN');?>
</a>
    <?php }?>
  </nav>

  <div class="layout">
    <aside class="sidebar">
		<?php if ($_smarty_tpl->getValue('validLogin')) {?>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
/adm_program/modules/members/members.php">Mitglieder</a></li>
        <li><a href="#">Beiträge</a></li>
        <li><a href="<?php echo $_smarty_tpl->getValue('urlAdmidio');?>
/adm_program/modules/preferences/preferences.php">Einstellungen</a></li>
      </ul>
	  <?php }?>
    </aside>

    <main class="content">
      <h2><?php echo $_smarty_tpl->getValue('headline');?>
</h2>
	  <?php echo $_smarty_tpl->getValue('content');?>

    </main>
	
  </div>

<?php if (!$_smarty_tpl->getValue('validLogin')) {?>
	<?php $_smarty_tpl->renderSubTemplate('file:login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>
</body>
</html>
<?php }
}
