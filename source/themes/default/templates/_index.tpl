<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>{$title}</title>
  
  {* Additional header informations that will be displayed if the header was set through $page->addHeader() *}
    {$additionalHeaderData}
  
  <link rel="stylesheet" type="text/css" href="{$urlTheme}/css/styles.css" />
  <link rel="stylesheet" type="text/css" href="{$urlTheme}/css/modal-login.css">
  <link rel="stylesheet" type="text/css" href="{$urlTheme}/css/preferences.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{$urlTheme}/js/modal-login.js"></script>
  <script src="{$urlTheme}/js/preferences.js"></script>
</head>
<body id={$id} >

	<div id="2025-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>

  <header>
    <h1>Förderverein der Freiwilligen Feuerwehr Ottendorf e.V.</h1>
  </header>

  <nav class="top-nav">
    {if $validLogin}
      <a class="nav-link" href="{$urlAdmidio}/adm_program/modules/profile/profile.php">{$l10n->get('SYS_MY_PROFILE')}</a>
      <a class="nav-link" href="{$urlAdmidio}/adm_program/system/logout.php">{$l10n->get('SYS_LOGOUT')}</a>
    {else}
		<a class="nav-link" href="#" id="login-button">{$l10n->get('SYS_LOGIN')}</a>
		<a class="nav-link" href="{$urlAdmidio}/adm_program/system/login.php">{$l10n->get('SYS_LOGIN')}</a>
    {/if}
  </nav>

  <div class="layout">
    <aside class="sidebar">
		{if $validLogin}
      <ul>
        <li><a href="{$urlAdmidio}">Home</a></li>
        <li><a href="{$urlAdmidio}/adm_program/modules/members/members.php">Mitglieder</a></li>
        <li><a href="#">Beiträge</a></li>
        <li><a href="{$urlAdmidio}/adm_program/modules/preferences/preferences.php">Einstellungen</a></li>
      </ul>
	  {/if}
    </aside>

    <main class="content">
      <h2>{$headline}</h2>
	  {$content}
    </main>
	
  </div>

{*  ---------- Modal Login ---------- *}
{if !$validLogin}
	{include 'login.tpl'}
{/if}
</body>
</html>
