{* /adm_themes/2025/templates/login.tpl *}

<div id="loginModal" class="modal" aria-hidden="true">
  <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
    <button class="close-modal" aria-label="Schließen">&times;</button>

    <form method="post" action="{$mainURL}/ajax.php">
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
        <a href="{$mainURL}/password_reset">
          Passwort vergessen?
        </a>
      </div>

    </form>
  </div>
</div>