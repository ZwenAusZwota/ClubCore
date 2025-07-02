<?php
/* Smarty version 5.5.1, created on 2025-07-02 10:22:04
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6864ec2c64a789_31327849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bd5bb5207e59a24d172dc75b775530d731b055' => 
    array (
      0 => 'login.tpl',
      1 => 1749064277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6864ec2c64a789_31327849 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?>
<div id="loginModal" class="modal" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
    <button class="close-modal" aria-label="Schließen">&times;</button>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('mainURL');?>
/ajax.php">
      <h2 id="loginTitle">Anmeldung</h2>

      <label for="usr_email">Benutzername</label>
      <input type="text" name="usr_email" id="login_name" required>

      <label for="usr_password">Passwort</label>
      <input type="password" name="usr_password" id="login_password" required>

      <label class="stay-signed">
        <input type="checkbox" name="autologin" value="1">
        Angemeldet bleiben
      </label>

      <button type="submit">Anmelden</button>

      <div class="modal-links">
        <a href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/password_reset">
          Passwort vergessen?
        </a>
      </div>

    </form>
  </div>
</div><?php }
}
