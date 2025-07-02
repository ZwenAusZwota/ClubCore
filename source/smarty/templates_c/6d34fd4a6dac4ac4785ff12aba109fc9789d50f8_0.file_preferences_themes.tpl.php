<?php
/* Smarty version 5.5.1, created on 2025-06-30 15:18:49
  from 'file:preferences_themes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68628eb9480d79_35636629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d34fd4a6dac4ac4785ff12aba109fc9789d50f8' => 
    array (
      0 => 'preferences_themes.tpl',
      1 => 1751289420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68628eb9480d79_35636629 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><main class="content">
    <h2>Einstellungen</h2>
	  
	<ul id="tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a id="tabs_nav_common" class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings" data-toggle="tab" role="tab">Allgemein</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_themes" class="nav-link active href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings/themes" data-toggle="tab" role="tab">Themes</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_plugins" class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings/plugins" data-toggle="tab" role="tab">Plugins</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_managers" class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings/managers" data-toggle="tab" role="tab">Vorstand</a>
		</li>
	</ul>

	<div id="preferences-tab-content" class="tab-content">
		<div class="tab-pane fade" id="tabs-common" role="tabpanel">
			<div class="accordion" id="accordion_preferences">
			<div id="panel-common" class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapse_common">
					<i class="fas fa-cog fa-fw"></i>Allgemein
				</div>
				<div id="collapse_common" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
					<div class="card-body">
						<div class="form-required-notice">
							<span>Erforderliche Eingabe</span>
						</div>
						<form id="common_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=common" role="form" method="post" class="form-preferences form-horizontal form-dialog">
							
								<div id="theme_group" class="form-group row form-group-required">
									<label for="theme" class="col-sm-3 control-label">
										Theme
									</label>
									<div class="col-sm-9">
										<select class="form-control" id="theme" name="theme" required="required">
											<option value="">- Bitte wählen -</option>
											<option value="simple">simple</option>
											<option value="2025" selected="selected">2025</option>
										</select>
                                         <div class="help-block">
											Das aktuelle Layout kann hier ausgewählt werden. Es werden alle Layouts aus dem Ordner adm_themes angezeigt. (Voreinstellung: simple)</div>
										</div>
									</div>
<div id="homepage_logout_group" class="form-group row form-group-required">
    <label for="homepage_logout" class="col-sm-3 control-label">
                Startseite<br>(Besucher:innen)
            </label>
    <div class="col-sm-9">
                <input type="text" name="homepage_logout" id="homepage_logout" value="adm_program/home.php" class="form-control" maxlength="250" required="required">
            
                                    <div class="help-block">Diese Seite ist die Standard-Startseite von Admidio auf die Gäste geleitet werden. Der Pfad zu der Seite muss relativ zum Verzeichnis angegeben werden.<br>(Beispiel: adm_program/index.php)</div>
            </div>
</div>
<div id="homepage_login_group" class="form-group row form-group-required">
    <label for="homepage_login" class="col-sm-3 control-label">
                Startseite<br>(Angemeldete Benutzer:innen)
            </label>
    <div class="col-sm-9">
                <input type="text" name="homepage_login" id="homepage_login" value="adm_program/admin_home.php" class="form-control" maxlength="250" required="required">
            
                                    <div class="help-block">Auf diese Seite wird die Benutzerin oder der Benutzer geleitet, sobald er/sie sich angemeldet hat. Der Pfad zu der Seite muss relativ zum Verzeichnis angegeben werden.<br>(Beispiel: adm_program/index.php)</div>
            </div>
</div>
<div id="enable_rss_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_rss" id="enable_rss" value="1" class="" checked="checked">
                                        Web-Feeds aktivieren
                                </label>
                                                    <div class="help-block">Admidio kann Web-Feeds für verschiedene Module (Ankündigungen, Veranstaltungen, Gästebuch, Fotogalerien und Weblinks) auf den jeweiligen Übersichtsseiten bereitstellen, die dann über den Browser einem Feedreader zugeordnet werden können. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="system_cookie_note_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_cookie_note" id="system_cookie_note" value="1" class="" checked="checked">
                                        Hinweis auf Nutzung von Cookies anzeigen
                                </label>
                                                    <div class="help-block">Besucher:innen und angemeldete Benutzer:innen erhalten beim erstmaligen Aufruf der Webseite einen Hinweis, dass diese Seite Cookies nutzt. Dieser Hinweis muss von der Benutzerin oder dem Benutzer einmalig bestätigt werden, danach erhält er/sie auf diesem Gerät und Browser keinen Hinweis mehr.</div>
                    </div>
    </div>
</div><div id="system_search_similar_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_search_similar" id="system_search_similar" value="1" class="" checked="checked">
                                        Ähnliche Namen finden
                                </label>
                                                    <div class="help-block">Beim Anlegen neuer Benutzer:innen oder bei der Zuordnung von Registrierungen sucht Admidio nach existierenden Benutzern und Benutzerinnen, die einen ähnlichen Vor- und Nachnamen haben, um doppelte Datensätze zu vermeiden. Wird diese Funktion abgeschaltet, dann wird nur nach identischen Namen gesucht. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="system_show_create_edit_group" class="form-group row ">
    <label for="system_show_create_edit" class="col-sm-3 control-label">
                Ersteller und Zeitstempel anzeigen
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="system_show_create_edit" name="system_show_create_edit">
                                                        <option value="0">Nicht anzeigen</option>
                                            <option value="1" selected="selected">Vorname und Nachname</option>
                                            <option value="2">Anmeldename</option>
                                </select>

                                                <div class="help-block">An einigen Stellen wird die Erstellerin bzw. der Ersteller zusammen mit der Benutzerin bzw. der Benutzer mit der letzten Änderung zu einem Datensatz zusammen mit einem Zeitstempel angezeigt. Mit dieser Einstellung kann festgelegt werden, ob diese Informationen überhaupt angezeigt werden und ob die Benutzerin oder der Benutzer mit dem Anmeldenamen oder mit ihrem Vor- und Nachnamen angezeigt werden soll.</div>
            </div>
</div>
<div id="system_url_data_protection_group" class="form-group row ">
    <label for="system_url_data_protection" class="col-sm-3 control-label">
                Datenschutz
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_url_data_protection" id="system_url_data_protection" value="" class="form-control" maxlength="250">
            
                                    <div class="help-block">Hier kann die URL zu deiner Seite mit den Datenschutzhinweisen hinterlegt werden. Diese Seite wird innerhalb des Hinweises auf die Verwendung von Cookies für weitere Informationen verlinkt. Sofern das gewählte Theme dies unterstützt, wird auch ein Link auf den Seiten angezeigt. (Beispiel: https://www.example.com/data_protection.html)</div>
            </div>
</div>
<div id="system_url_imprint_group" class="form-group row ">
    <label for="system_url_imprint" class="col-sm-3 control-label">
                Impressum
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_url_imprint" id="system_url_imprint" value="" class="form-control" maxlength="250">
            
                                    <div class="help-block">Hier kann die URL zum Impressum deiner Seite hinterlegt werden. Sofern das gewählte Theme dies unterstützt, wird ein Link auf den Seiten angezeigt. (Beispiel: https://www.example.com/imprint.html)</div>
            </div>
</div>
<div id="system_js_editor_color_group" class="form-group row ">
    <label for="system_js_editor_color" class="col-sm-3 control-label">
                Farbe Javascript-Editor
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_js_editor_color" id="system_js_editor_color" value="#96c4cb" class="form-control form-control-small" maxlength="10">
            
                                    <div class="help-block">Hier wird die Hintergrundfarbe des Javascript-Editors angegeben. Dies kann ein hexadezimaler Farbwert sein z.B. #ffa500 oder ein RGB-Wert z.B. rgb(255, 185,0).</div>
            </div>
</div>
<div id="system_js_editor_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_js_editor_enabled" id="system_js_editor_enabled" value="1" class="" checked="checked">
                                        Javascript-Editor benutzen
                                </label>
                                                    <div class="help-block">Ein umfangreicher Javascript-Editor wird an vielen Stellen im Programm genutzt, damit die Benutzerin oder der Benutzer Beschreibungen z.B. für Ankündigungen, Veranstaltungen oder ähnliches komfortabler eingeben kann. Wird der Editor deaktiviert, so wird ein einfaches mehrzeiliges Textfeld dargestellt.</div>
                    </div>
    </div>
</div><div id="system_browser_update_check_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_browser_update_check" id="system_browser_update_check" value="1" class="">
                                        Update Meldung für veraltete Browser
                                </label>
                                                    <div class="help-block">Nach Aktivierung wird Benutzerinnen und Benutzern mit veraltetem Browser geraten ein Browserupdate durchzuführen. Neuere Browser schützen besser vor Betrug, Viren, Trojanern, Datendiebstahl und anderen Bedrohungen Ihrer Privatsphäre und Sicherheit. Jede neue Browsergeneration verbessert die Geschwindigkeit und die Unterstützung neuer Webtechniken, mit der Webseiten besser dargestellt werden können. Hierzu wird das Service von https://browser-update.org/ verwendet.</div>
                    </div>
    </div>
</div><button id="btn_save_common" name="btn_save_common" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Update Meldung für veraltete Browser"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-security" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_security">
                <i class="fas fa-shield-alt fa-fw"></i>Sicherheit
            </div>
            <div id="collapse_security" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="security_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=security" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="logout_minutes_group" class="form-group row ">
    <label for="logout_minutes" class="col-sm-3 control-label">
                Automatischer Logout nach
            </label>
    <div class="col-sm-9">
                <input type="number" name="logout_minutes" id="logout_minutes" value="20" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Dieser Wert gibt an, nach wievielen Minuten ein:e inaktive:r Benutzer:in automatisch ausgeloggt wird. Inaktiv ist ein:e Benutzer:in solange er keine Seite des Systems aufruft. Diese Einstellung wird ignoriert, falls die Benutzerin oder der Benutzer <strong>Angemeldet bleiben</strong> ausgewählt hat. (Voreinstellung: 20 Minuten)</div>
            </div>
</div>
<div id="password_min_strength_group" class="form-group row ">
    <label for="password_min_strength" class="col-sm-3 control-label">
                Passwort Sicherheit
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="password_min_strength" name="password_min_strength">
                                                        <option value="0">Keine</option>
                                            <option value="1" selected="selected">Niedrig</option>
                                            <option value="2">Mittel</option>
                                            <option value="3">Hoch</option>
                                            <option value="4">Sehr hoch</option>
                                </select>

                                                <div class="help-block">Hier kannst du festlegen wie sicher und komplex Passwörter mindestens sein müssen.<br>Der Wert in Klammern gibt an, wieviele Versuche durchschnittlich nötig sind, bis das Passwort ermittelt wurde.<br><br>Keine: riskantes Passwort. (&lt;10^3)<br>Niedrig: Schutz gegen gedrosselte Online-Angriffe. (&lt;10^6)<br>Mittel: Schutz gegen ungedrosselte Online-Angriffe. (&lt;10^8)<br>Hoch: Mäßiger Schutz gegen Offline-Hashing-Angriffe. (&lt;10^10)<br>Sehr hoch: Starker Schutz gegen Offline-Hashing-Angriffe. (&gt;=10^10)</div>
            </div>
</div>
<div id="enable_auto_login_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_auto_login" id="enable_auto_login" value="1" class="" checked="checked">
                                        Automatisch anmelden
                                </label>
                                                    <div class="help-block">Benutzer:innen können beim Anmelden festlegen, ob die Anmeldung auf dem Rechner gespeichert werden soll. Bei einem weiteren Besuch der Homepage sind diese Benutzer:innen dann automatisch angemeldet. Dies kann allerdings auch dazu führen, dass Benutzer:innen diese Option unbedacht einsetzen und so evtl. fremde Personen Zugriff auf die Daten bekommen. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="enable_password_recovery_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_password_recovery" id="enable_password_recovery" value="1" class="" checked="checked">
                                        Passwort vergessen?
                                </label>
                                <div class="help-block">Hat die Benutzerin oder der Benutzer sein Passwort vergessen, kann er sich einen Link zuschicken lassen, über den er auf dieser Webseite ein neues Passwort für seinen Account vergeben kann. Ist diese Option deaktiviert, kann die Benutzerin oder der Benutzer nur eine Anfrage per E-Mail an die Administratorinnen und Administratoren stellen, damit dieser ein neues Passwort hinterlegt. Damit das Passwort zugesendet werden kann, muss zusätzlich die Einstellung <strong>Systembenachrichtigungen aktivieren</strong> gesetzt sein. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="security_login_email_address_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="security_login_email_address_enabled" id="security_login_email_address_enabled" value="1" class="">
                                        Erlaube E-Mail-Adresse anstelle des Benutzernamens
                                </label>
                                                    <div class="help-block">Wenn ein:e Benutzer:in eine E-Mail-Adresse angegeben hat (und diese im System eindeutig ist), kann anstelle des Benutzernamens auch die E-Mail-Adresse für den Login benutzt werden. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><button id="btn_save_security" name="btn_save_security" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Erlaube E-Mail-Adresse anstelle des Benutzernamens"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-organization" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_organization">
                <i class="fas fa-sitemap fa-fw"></i>Organisation
            </div>
            <div id="collapse_organization" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <div class="form-required-notice"><span>Erforderliche Eingabe</span></div><form id="organization_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=organization" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="org_shortname_group" class="form-group row ">
    <label for="org_shortname" class="col-sm-3 control-label">
                Name (Abkürzung)
            </label>
    <div class="col-sm-9">
                <input type="text" name="org_shortname" id="org_shortname" value="FVO" class="form-control form-control-small" disabled="disabled">
            
                            </div>
</div>
<div id="org_longname_group" class="form-group row form-group-required">
    <label for="org_longname" class="col-sm-3 control-label">
                Name
            </label>
    <div class="col-sm-9">
                <input type="text" name="org_longname" id="org_longname" value="Förderverein der Freiwilligen Feuerwehr Ottendorf" class="form-control" maxlength="60" required="required">
            
                            </div>
</div>
<div id="org_homepage_group" class="form-group row ">
    <label for="org_homepage" class="col-sm-3 control-label">
                Webseite
            </label>
    <div class="col-sm-9">
                <input type="text" name="org_homepage" id="org_homepage" value="https://verein.fw-ottendorf.de" class="form-control" maxlength="60">
            
                            </div>
</div>
<div id="email_administrator_group" class="form-group row ">
    <label for="email_administrator" class="col-sm-3 control-label">
                E-Mail Administrator:in
            </label>
    <div class="col-sm-9">
                <input type="email" name="email_administrator" id="email_administrator" value="sven.schuberth@gmx.de" class="form-control" maxlength="50">
            
                                    <div class="help-block">Die E-Mail-Adresse eines Administrierenden wird im System immer dann angezeigt, wenn ein unerwartetes Ereignis eingetreten ist. Es erfolgt der Hinweis, das man Kontakt mit einem Administrator aufnehmen sollte.</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Neue Organisation</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" id="add_another_organization" href="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?mode=2">
            <i class="fas fa-plus-circle"></i>Weitere Organisation hinzufügen</a>
                                                <div class="help-block">Fügt eine neue Organisation mit ihren Stammdaten in der Datenbank hinzu. Der/Die aktuelle Benutzer:in wird dort automatisch zur/zum Administrator:in ernannt und kann die weitere Einrichtung durchführen. Benutzer:innen, die sich dann am System anmelden, müssen die entsprechende Organisation auswählen.</div>
            <div id="email_administrator_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_organization" name="btn_save_organization" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Neue Organisation"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-regional_settings" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_regional_settings">
                <i class="fas fa-globe fa-fw"></i>Regionaleinstellungen
            </div>
            <div id="collapse_regional_settings" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <div class="form-required-notice"><span>Erforderliche Eingabe</span></div><form id="regional_settings_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=regional_settings" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="system_timezone_group" class="form-group row ">
    <label for="system_timezone" class="col-sm-3 control-label">
                Zeitzone
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_timezone" id="system_timezone" value="Europe/Berlin" class="form-control form-control-small" disabled="disabled">
            
                                    <div class="help-block">Dies ist die festgelegte Zeitzone. Wird diese später in der Konfigurationsdatei config.php von Admidio geändert, so werden bereits erfasste Daten und Uhrzeiten nicht an die neue Zeitzone angepasst.</div>
            </div>
</div>
<div id="system_language_group" class="form-group row form-group-required">
    <label for="system_language" class="col-sm-3 control-label">
                Sprache
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="system_language" name="system_language" required="required">
                                                        <option value="">- Bitte wählen -</option>
                                            <option value="zh">Chinese - 中文</option>
                                            <option value="da">Danish - Dansk</option>
                                            <option value="bg">Bulgarian - Български</option>
                                            <option value="nl">Dutch - Nederlands</option>
                                            <option value="en">English</option>
                                            <option value="et">Estonian - Eesti keel</option>
                                            <option value="fi">Finnish - Suomalainen</option>
                                            <option value="fr">French - Français</option>
                                            <option value="de" selected="selected">German - Deutsch (du)</option>
                                            <option value="de-DE">German - Deutsch (Sie)</option>
                                            <option value="el">Greek - Ελληνικά</option>
                                            <option value="hu">Hungarian - Magyar</option>
                                            <option value="id">Indonesian - bahasa Indonesia</option>
                                            <option value="it">Italian - Italiano</option>
                                            <option value="nb">Norwegian Bokmål - Norsk Bokmål</option>
                                            <option value="pl">Polish - Polski</option>
                                            <option value="pt">Portuguese - Português</option>
                                            <option value="pt-BR">Portuguese (Brazil) - Português (Brasil)</option>
                                            <option value="ru">Russian - Русский</option>
                                            <option value="es">Spanish - Español</option>
                                            <option value="sv">Swedish - Svenska</option>
                                            <option value="th">Thai - แบบไทย</option>
                                            <option value="uk">Ukrainian - український</option>
                                </select>

                            <div class="help-block">Fehlt deine Sprache oder möchtest du weitere Texte übersetzen oder vorhandene Übersetzungen verbessern? Dann schau auf <a href="https://www.admidio.org/dokuwiki/doku.php?id=en:entwickler:uebersetzen">Wiki-Seite von Admidio</a> nach, wie du bei der Übersetzung mitarbeiten kannst.</div>
            </div>
</div>
<div id="default_country_group" class="form-group row ">
    <label for="default_country" class="col-sm-3 control-label">
                Standard-Land
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="default_country" name="default_country">
                                                        <option value=""></option>
                                            <option value="AFG">Afghanistan</option>
                                            <option value="ALB">Albanien</option>
                                            <option value="DZA">Algerien</option>
                                            <option value="AND">Andorra</option>
                                            <option value="AGO">Angola</option>
                                            <option value="AIA">Anguilla</option>
                                            <option value="ATG">Antigua und Barbuda</option>
                                            <option value="ARG">Argentinien</option>
                                            <option value="ARM">Armenien</option>
                                            <option value="ABW">Aruba</option>
                                            <option value="AZE">Aserbaidschan</option>
                                            <option value="AUS">Australien</option>
                                            <option value="BHS">Bahamas</option>
                                            <option value="BHR">Bahrain</option>
                                            <option value="BGD">Bangladesch</option>
                                            <option value="BRB">Barbados</option>
                                            <option value="BEL">Belgien</option>
                                            <option value="BLZ">Belize</option>
                                            <option value="BEN">Benin</option>
                                            <option value="BMU">Bermuda</option>
                                            <option value="BTN">Bhutan</option>
                                            <option value="BOL">Bolivien</option>
                                            <option value="BIH">Bosnien und Herzegowina</option>
                                            <option value="BWA">Botswana</option>
                                            <option value="BVT">Bouvetinsel</option>
                                            <option value="BRA">Brasilien</option>
                                            <option value="BRN">Brunei Darussalam</option>
                                            <option value="BGR">Bulgarien</option>
                                            <option value="BFA">Burkina Faso</option>
                                            <option value="BDI">Burundi</option>
                                            <option value="CHL">Chile</option>
                                            <option value="CHN">China</option>
                                            <option value="CRI">Costa Rica</option>
                                            <option value="DEU" selected="selected">Deutschland</option>
                                            <option value="DMA">Dominica</option>
                                            <option value="DOM">Dominikanische Republik</option>
                                            <option value="DJI">Dschibuti</option>
                                            <option value="DNK">Dänemark</option>
                                            <option value="ECU">Ecuador</option>
                                            <option value="SLV">El Salvador</option>
                                            <option value="ERI">Eritrea</option>
                                            <option value="EST">Estland</option>
                                            <option value="FLK">Falklandinseln</option>
                                            <option value="FJI">Fidschi</option>
                                            <option value="FIN">Finnland</option>
                                            <option value="FRA">Frankreich</option>
                                            <option value="GAB">Gabun</option>
                                            <option value="GMB">Gambia</option>
                                            <option value="GEO">Georgien</option>
                                            <option value="GHA">Ghana</option>
                                            <option value="GIB">Gibraltar</option>
                                            <option value="GRD">Grenada</option>
                                            <option value="GRC">Griechenland</option>
                                            <option value="GBR">Großbritannien</option>
                                            <option value="GRL">Grönland</option>
                                            <option value="GLP">Guadeloupe</option>
                                            <option value="GUM">Guam</option>
                                            <option value="GTM">Guatemala</option>
                                            <option value="GIN">Guinea</option>
                                            <option value="GNB">Guinea-Bissau</option>
                                            <option value="GUY">Guyana</option>
                                            <option value="HTI">Haiti</option>
                                            <option value="HND">Honduras</option>
                                            <option value="HKG">Hongkong</option>
                                            <option value="IND">Indien</option>
                                            <option value="IDN">Indonesien</option>
                                            <option value="IMN">Insel Man</option>
                                            <option value="IRQ">Irak</option>
                                            <option value="IRN">Iran</option>
                                            <option value="IRL">Irland</option>
                                            <option value="ISL">Island</option>
                                            <option value="ISR">Israel</option>
                                            <option value="ITA">Italien</option>
                                            <option value="JAM">Jamaika</option>
                                            <option value="JPN">Japan</option>
                                            <option value="YEM">Jemen</option>
                                            <option value="JOR">Jordanien</option>
                                            <option value="CYM">Kaimaninseln</option>
                                            <option value="KHM">Kambodscha</option>
                                            <option value="CMR">Kamerun</option>
                                            <option value="CAN">Kanada</option>
                                            <option value="KAZ">Kasachstan</option>
                                            <option value="QAT">Katar</option>
                                            <option value="KEN">Kenia</option>
                                            <option value="KGZ">Kirgisistan</option>
                                            <option value="KIR">Kiribati</option>
                                            <option value="CCK">Kokosinseln</option>
                                            <option value="COL">Kolumbien</option>
                                            <option value="COM">Komoren</option>
                                            <option value="COG">Kongo</option>
                                            <option value="HRV">Kroatien</option>
                                            <option value="CUB">Kuba</option>
                                            <option value="KWT">Kuwait</option>
                                            <option value="LAO">Laos</option>
                                            <option value="LSO">Lesotho</option>
                                            <option value="LVA">Lettland</option>
                                            <option value="LBN">Libanon</option>
                                            <option value="LBR">Liberia</option>
                                            <option value="LBY">Libyen</option>
                                            <option value="LIE">Liechtenstein</option>
                                            <option value="LTU">Litauen</option>
                                            <option value="LUX">Luxemburg</option>
                                            <option value="MAC">Macao</option>
                                            <option value="MDG">Madagaskar</option>
                                            <option value="MWI">Malawi</option>
                                            <option value="MYS">Malaysia</option>
                                            <option value="MDV">Malediven</option>
                                            <option value="MLI">Mali</option>
                                            <option value="MLT">Malta</option>
                                            <option value="MAR">Marokko</option>
                                            <option value="MHL">Marshallinseln</option>
                                            <option value="MTQ">Martinique</option>
                                            <option value="MRT">Mauretanien</option>
                                            <option value="MUS">Mauritius</option>
                                            <option value="MYT">Mayotte</option>
                                            <option value="MEX">Mexiko</option>
                                            <option value="FSM">Mikronesien</option>
                                            <option value="MDA">Moldawien</option>
                                            <option value="MCO">Monaco</option>
                                            <option value="MNG">Mongolei</option>
                                            <option value="MNE">Montenegro</option>
                                            <option value="MSR">Montserrat</option>
                                            <option value="MOZ">Mosambik</option>
                                            <option value="MMR">Myanmar</option>
                                            <option value="NAM">Namibia</option>
                                            <option value="NRU">Nauru</option>
                                            <option value="NPL">Nepal</option>
                                            <option value="NCL">Neukaledonien</option>
                                            <option value="NZL">Neuseeland</option>
                                            <option value="NIC">Nicaragua</option>
                                            <option value="NLD">Niederlande</option>
                                            <option value="NER">Niger</option>
                                            <option value="NGA">Nigeria</option>
                                            <option value="NIU">Niue</option>
                                            <option value="PRK">Nordkorea</option>
                                            <option value="MKD">Nordmazedonien</option>
                                            <option value="NFK">Norfolkinsel</option>
                                            <option value="NOR">Norwegen</option>
                                            <option value="OMN">Oman</option>
                                            <option value="PAK">Pakistan</option>
                                            <option value="PAN">Panama</option>
                                            <option value="PNG">Papua-Neuguinea</option>
                                            <option value="PRY">Paraguay</option>
                                            <option value="PER">Peru</option>
                                            <option value="PHL">Philippinen</option>
                                            <option value="PCN">Pitcairninseln</option>
                                            <option value="POL">Polen</option>
                                            <option value="PRT">Portugal</option>
                                            <option value="PRI">Puerto Rico</option>
                                            <option value="RWA">Ruanda</option>
                                            <option value="ROU">Rumänien</option>
                                            <option value="RUS">Russische Föderation</option>
                                            <option value="BLM">Saint-Barthélemy</option>
                                            <option value="SLB">Salomonen</option>
                                            <option value="ZMB">Sambia</option>
                                            <option value="WSM">Samoa</option>
                                            <option value="SMR">San Marino</option>
                                            <option value="SAU">Saudi-Arabien</option>
                                            <option value="SWE">Schweden</option>
                                            <option value="CHE">Schweiz</option>
                                            <option value="SEN">Senegal</option>
                                            <option value="SRB">Serbien</option>
                                            <option value="SYC">Seychellen</option>
                                            <option value="SLE">Sierra Leone</option>
                                            <option value="ZWE">Simbabwe</option>
                                            <option value="SGP">Singapur</option>
                                            <option value="SVK">Slowakei</option>
                                            <option value="SVN">Slowenien</option>
                                            <option value="SOM">Somalia</option>
                                            <option value="ESP">Spanien</option>
                                            <option value="LKA">Sri Lanka</option>
                                            <option value="SDN">Sudan</option>
                                            <option value="SUR">Suriname</option>
                                            <option value="SWZ">Swasiland</option>
                                            <option value="SYR">Syrien</option>
                                            <option value="ZAF">Südafrika</option>
                                            <option value="KOR">Südkorea</option>
                                            <option value="TJK">Tadschikistan</option>
                                            <option value="TWN">Taiwan</option>
                                            <option value="TZA">Tansania</option>
                                            <option value="THA">Thailand</option>
                                            <option value="TGO">Togo</option>
                                            <option value="TKL">Tokelau</option>
                                            <option value="TON">Tonga</option>
                                            <option value="TTO">Trinidad und Tobago</option>
                                            <option value="TCD">Tschad</option>
                                            <option value="CZE">Tschechische Republik</option>
                                            <option value="TUN">Tunesien</option>
                                            <option value="TKM">Turkmenistan</option>
                                            <option value="TUV">Tuvalu</option>
                                            <option value="TUR">Türkei</option>
                                            <option value="UGA">Uganda</option>
                                            <option value="UKR">Ukraine</option>
                                            <option value="HUN">Ungarn</option>
                                            <option value="URY">Uruguay</option>
                                            <option value="UZB">Usbekistan</option>
                                            <option value="VUT">Vanuatu</option>
                                            <option value="VAT">Vatikanstadt</option>
                                            <option value="VEN">Venezuela</option>
                                            <option value="ARE">Vereinigte Arabische Emirate</option>
                                            <option value="USA">Vereinigte Staaten von Amerika</option>
                                            <option value="VNM">Vietnam</option>
                                            <option value="BLR">Weißrussland</option>
                                            <option value="ESH">Westsahara</option>
                                            <option value="CAF">Zentralafrikanische Republik</option>
                                            <option value="CYP">Zypern</option>
                                            <option value="EGY">Ägypten</option>
                                            <option value="GNQ">Äquatorialguinea</option>
                                            <option value="ETH">Äthiopien</option>
                                            <option value="AUT">Österreich</option>
                                </select>

                                                <div class="help-block">Angabe eines Landes in dessen Umfeld die Organisation hauptsächlich arbeitet. Dieses wird z.B. bei der Registrierung oder beim Anlegen neuer Benutzer:innen vorausgewählt. Es soll die Eingabe erleichtern und kann aber auch von der Benutzerin oder dem Benutzer beliebig geändert werden. (Voreinstellung: Deutschland)</div>
            </div>
</div>
<div id="system_date_group" class="form-group row ">
    <label for="system_date" class="col-sm-3 control-label">
                Datumsformat
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_date" id="system_date" value="d.m.Y" class="form-control form-control-small" maxlength="20">
            
                                    <div class="help-block">Das Format entspricht der PHP-Funktion <a href="https://www.php.net/manual/en/function.date.php">date()</a>. (Voreinstellung: d.m.Y)</div>
            </div>
</div>
<div id="system_time_group" class="form-group row ">
    <label for="system_time" class="col-sm-3 control-label">
                Zeitformat
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_time" id="system_time" value="H:i" class="form-control form-control-small" maxlength="20">
            
                                    <div class="help-block">Das Format entspricht der PHP-Funktion <a href="https://www.php.net/manual/en/function.date.php">date()</a>. (Voreinstellung: H:i)</div>
            </div>
</div>
<div id="system_currency_group" class="form-group row ">
    <label for="system_currency" class="col-sm-3 control-label">
                Währung
            </label>
    <div class="col-sm-9">
                <input type="text" name="system_currency" id="system_currency" value="€" class="form-control form-control-small" maxlength="20">
            
                                    <div class="help-block">Kennzeichen der Währung, die benutzt wird. Dieses Zeichen wird hinter allen Beträgen angezeigt.</div>
            </div>
</div>
<button id="btn_save_regional_settings" name="btn_save_regional_settings" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Währung"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-registration" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_registration">
                <i class="fas fa-file-signature fa-fw"></i>Registrierung
            </div>
            <div id="collapse_registration" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="registration_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=registration" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="registration_enable_module_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="registration_enable_module" id="registration_enable_module" value="1" class="">
                                        Registrierung aktivieren
                                </label>
                                                    <div class="help-block">Die Registrierung durch Besucher:innen der Homepage kann über diese Einstellung aktiviert oder deaktiviert werden. Welche Profilfelder bei der Registrierung angezeigt werden, kann in den Profilfeld-Einstellungen je Feld konfiguriert werden. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="registration_manual_approval_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="registration_manual_approval" id="registration_manual_approval" value="1" class="" checked="checked">
                                        Manuelle Freigabe
                                </label>
                                <div class="help-block">Neue Registrierungen müssen manuell von Rollenmitgliedern mit dem Recht <strong>Registrierungen verwalten und zuordnen</strong> freigegeben werden. Erst danach ist es für das neue Mitglied möglich sich am System anzumelden. Wird die Einstellung deaktiviert, so können sich neue Mitglieder nach erfolgreicher Registrierung direkt am System anmelden. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="registration_enable_captcha_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="registration_enable_captcha" id="registration_enable_captcha" value="1" class="" checked="checked">
                                        Captcha aktivieren
                                </label>
                                                    <div class="help-block">Bei der Registrierung wird für alle Benutzer:innen bei aktiviertem Captcha ein alphanumerischer Code oder eine einfache Rechenaufgabe eingeblendet. Diesen muss die Benutzerin oder der Benutzer vor der Registrierung korrekt eingeben. Dies soll sicherstellen, dass das Formular nicht von Spammern missbraucht werden kann. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="registration_adopt_all_data_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="registration_adopt_all_data" id="registration_adopt_all_data" value="1" class="" checked="checked">
                                        Alle Daten aus Registrierung bei existierendem Benutzer:innen übernehmen
                                </label>
                                                    <div class="help-block">Existiert eine neu registrierte Benutzerin oder ein neu registrierter Benutzer bereits in der Datenbank, so werden bei gesetzter Einstellung alle Daten aus der Registrierung in den bestehenden Datensatz übernommen. Wenn diese Einstellung nicht gesetzt ist, werden nur der Anmeldename und das Passwort übernommen. Bei Benutzerinnen und Benutzern, welche bisher noch nicht vorhanden waren, werden unabhängig von dieser Einstellung immer alle Daten aus der Registrierung übernommen. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="registration_send_notification_email_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="registration_send_notification_email" id="registration_send_notification_email" value="1" class="" checked="checked">
                                        E-Mail-Benachrichtigung
                                </label>
                                <div class="help-block">Mitglieder aller Rollen mit der Berechtigung <strong>Registrierungen verwalten und zuordnen</strong> erhalten eine E-Mail, sobald sich eine neue Benutzerin oder ein neuer Benutzer am System registriert hat. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><button id="btn_save_registration" name="btn_save_registration" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="E-Mail-Benachrichtigung"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-email_dispatch" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_email_dispatch">
                <i class="fas fa-envelope fa-fw"></i>E-Mailversand
            </div>
            <div id="collapse_email_dispatch" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="email_dispatch_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=email_dispatch" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="mail_send_method_group" class="form-group row ">
    <label for="mail_send_method" class="col-sm-3 control-label">
                Versenden über
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_send_method" name="mail_send_method">
                                                        <option value="phpmail" selected="selected">PHP mail()</option>
                                            <option value="SMTP">SMTP</option>
                                </select>

                                                <div class="help-block">Die mail()-Funktion von PHP wird von einigen Hostern eingeschränkt und führt gelegentlich zu Spamverdacht. Daher wird in der Regel der Versand von einer existierenden E-Mail-Adresse über einen SMTP-Server empfohlen. Die SMTP-Einstellungen können weiter unten konfiguriert werden. (Voreinstellung: PHP mail())</div>
            </div>
</div>
<div id="mail_sendmail_address_group" class="form-group row ">
    <label for="mail_sendmail_address" class="col-sm-3 control-label">
                Absender:in E-Mail
            </label>
    <div class="col-sm-9">
                <input type="text" name="mail_sendmail_address" id="mail_sendmail_address" value="" class="form-control" maxlength="50">
            
                                    <div class="help-block">Manche Provider erlauben die Nutzung unbekannter E-Mail-Adressen als Absender:in nicht. In diesem Fall kann hier eine Adresse eingetragen werden, von der aus dann alle E-Mails aus dem E-Mailmodul verschickt werden, (z.B. mailversand@verein.fw-ottendorf.de).<br>Bleibt das Feld leer wird die Adresse der Absenderin bzw. des Absenders genutzt. (Voreinstellung: leer)</div>
            </div>
</div>
<div id="mail_sendmail_name_group" class="form-group row ">
    <label for="mail_sendmail_name" class="col-sm-3 control-label">
                Absendername
            </label>
    <div class="col-sm-9">
                <input type="text" name="mail_sendmail_name" id="mail_sendmail_name" value="" class="form-control" maxlength="50">
            
                                    <div class="help-block">Name der Absenderin bzw. des Absenders zur verwendeten E-Mail-Adresse. Dieses Feld muss nur gefüllt werden, wenn auch eine Absender:in E-Mail-Adresse gepflegt ist. (Voreinstellung: leer)</div>
            </div>
</div>
<div id="mail_sending_mode_group" class="form-group row ">
    <label for="mail_sending_mode" class="col-sm-3 control-label">
                Versandmodus
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_sending_mode" name="mail_sending_mode">
                                                        <option value="0" selected="selected">Gebündelt</option>
                                            <option value="1">Einzeln</option>
                                </select>

                                                <div class="help-block">Im Modus ’Gebündelt’ werden E-Mails an mehrere Empfänger zusammengefasst. Eine E-Mail erhält dann eine konfigurierte Anzahl an Empfänger im TO oder BCC Feld. Dies ist sinnvoll, wenn der Hoster den Versand von vielen E-Mails nicht erlaubt. Im Modus ’Einzeln’ erhält jeder Empfänger eine separate E-Mail. In diesem Modus können dem E-Mail-Text verschiedene Platzhalter mit den Empfängerdaten hinzugefügt werden.</div>
            </div>
</div>
<div id="mail_recipients_with_roles_group" class="form-group row ">
    <label for="mail_recipients_with_roles" class="col-sm-3 control-label">
                Mehrere Empfänger:innen
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_recipients_with_roles" name="mail_recipients_with_roles">
                                                        <option value="0">Versteckt</option>
                                            <option value="1" selected="selected">Absender:in</option>
                                            <option value="2">Administrator:in</option>
                                </select>

                                                <div class="help-block">E-Mails an mehrere Empfänger:innen enthalten alle Empfänger:innen im BCC-Feld. Damit ist sichergestellt, dass keiner die E-Mail-Adressen der anderen Empfänger:innen sieht. Das TO-Feld muss allerdings auch befüllt werden. Über diese Einstellung kann festgelegt werden, was im Empfängerfeld (TO) hinterlegt wird. Dies kann ein versteckter Wert "Undisclosed Recipients" sein, was aber bei manchen Providern zu Problemen führt. Alternativ kann das Empfängerfeld (TO) mit der Absenderadresse bzw. der Administrator:innen-Adresse aus den Systembenachrichtigungen gefüllt werden. Hinweis: Alle Emails an mehrere Empfänger:innen werden dann auch an die E-Mail-Adresse im Empfängerfeld (TO) geschickt. (Voreinstellung: Absender:in)</div>
            </div>
</div>
<div id="mail_into_to_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_into_to" id="mail_into_to" value="1" class="">
                                        Empfänger:innen im TO-Feld und nicht im BCC-Feld auflisten
                                </label>
                                                    <div class="help-block">Geht eine E-Mail an mehrere Personen, dann werden die Empfänger:innen bei gesetzter Einstellung alle im TO-Feld der E-Mail aufgelistet. Dadurch kann jeder Empfangende die Namen und E-Mail-Adressen der anderen Empfangenden sehen. Außerdem hat er die Möglichkeit auf diese E-Mail an alle anderen Empfänger:innen zu antworten. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><div id="mail_number_recipients_group" class="form-group row ">
    <label for="mail_number_recipients" class="col-sm-3 control-label">
                Anzahl der Empfänger:innen
            </label>
    <div class="col-sm-9">
                <input type="number" name="mail_number_recipients" id="mail_number_recipients" value="50" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Die Anzahl in diesem Feld gibt die maximale Anzahl an Empfängerinnen oder Empfängern in einer E-Mail an. Diese Anzahl kann von Providern beschränkt werden. Soll eine E-Mail an mehr Empfänger gesendet werden als die hier eingestellte Anzahl, so werden mehrere E-Mails erzeugt. Die Anzahl der möglichen zu versendenden E-Mails innerhalb eines Zeitraums kann auch von Providern beschränkt werden. (Voreinstellung: 50)</div>
            </div>
</div>
<div id="mail_character_encoding_group" class="form-group row ">
    <label for="mail_character_encoding" class="col-sm-3 control-label">
                Zeichenkodierung
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_character_encoding" name="mail_character_encoding">
                                                        <option value="iso-8859-1">ISO-8859-1</option>
                                            <option value="utf-8" selected="selected">UTF-8</option>
                                </select>

                                                <div class="help-block">Angabe der Zeichenkodierung in der eine E-Mail von Admidio verschickt wird. Da ggf. nicht alle E-Mail-Clients UTF-8 richtig verarbeiten können, kann hier alternativ auch ISO-8859-1 eingestellt werden.</div>
            </div>
</div>
<div id="mail_smtp_host_group" class="form-group row ">
    <label for="mail_smtp_host" class="col-sm-3 control-label">
                SMTP Host
            </label>
    <div class="col-sm-9">
                <input type="text" name="mail_smtp_host" id="mail_smtp_host" value="" class="form-control" maxlength="50">
            
                                    <div class="help-block">Adresse des zu verwendenden SMTP-Servers.</div>
            </div>
</div>
<div id="mail_smtp_auth_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_smtp_auth" id="mail_smtp_auth" value="1" class="" checked="checked">
                                        SMTP Authentifizierung
                                </label>
                                                    <div class="help-block">Falls eine Authentifizierung am SMTP-Server stattfinden soll, müssen auch die Felder Anmeldename und Passwort ausgefüllt werden.  (Voreinstellung: Ja)</div>
                    </div>
    </div>
</div><div id="mail_smtp_port_group" class="form-group row ">
    <label for="mail_smtp_port" class="col-sm-3 control-label">
                SMTP Port
            </label>
    <div class="col-sm-9">
                <input type="number" name="mail_smtp_port" id="mail_smtp_port" value="587" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Angabe des Ports über den die SMTP-Verbindung aufgebaut werden soll. (Voreinstellung: 587)</div>
            </div>
</div>
<div id="mail_smtp_secure_group" class="form-group row ">
    <label for="mail_smtp_secure" class="col-sm-3 control-label">
                SMTP Verschlüsselung
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_smtp_secure" name="mail_smtp_secure">
                                                        <option value="">ohne</option>
                                            <option value="ssl">SSL</option>
                                            <option value="tls" selected="selected">TLS</option>
                                </select>

                                                <div class="help-block">Hier kann ausgewählt werden, ob und wie die SMTP-Verbindung verschlüsselt werden soll. (Voreinstellung: TLS)</div>
            </div>
</div>
<div id="mail_smtp_authentication_type_group" class="form-group row ">
    <label for="mail_smtp_authentication_type" class="col-sm-3 control-label">
                SMTP-Authentifizierungstyp 
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_smtp_authentication_type" name="mail_smtp_authentication_type">
                                                        <option value="" selected="selected">Automatische Erkennung</option>
                                            <option value="LOGIN">Login</option>
                                            <option value="PLAIN">Plain</option>
                                            <option value="CRAM-MD5">CRAM-MD5</option>
                                </select>

                            <div class="help-block">SMTP kennt verschiedene Authentifizierungsmethoden. Gib hier die Authentifizierungsmethode ein, die dein SMTP-Server unterstützt. Wenn du dir nicht sicher bist, welche Methode unterstützt wird, wähle <strong>Automatische Erkennung</strong>. Admidio wird dann nacheinander die verschiedenen Authentifizierungsmethoden ausprobieren, bis eine Anmeldung erfolgreich war. (Voreinstellung: automatisch)</div>
            </div>
</div>
<div id="mail_smtp_user_group" class="form-group row ">
    <label for="mail_smtp_user" class="col-sm-3 control-label">
                SMTP Anmeldename
            </label>
    <div class="col-sm-9">
                <input type="text" name="mail_smtp_user" id="mail_smtp_user" value="" class="form-control" maxlength="100">
            
                                    <div class="help-block">Der Anmeldename, der bei der SMTP-Authentifizierung verwendet wird.</div>
            </div>
</div>
<div id="mail_smtp_password_group" class="form-group row ">
    <label for="mail_smtp_password" class="col-sm-3 control-label">
                SMTP Passwort
            </label>
    <div class="col-sm-9">
                    <input type="password" name="mail_smtp_password" id="mail_smtp_password" value="" class="form-control" maxlength="100">
                        
                                    <div class="help-block">Das Passwort, das bei der SMTP-Authentifizierung verwendet wird.</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Testmail</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" id="send_test_mail" href="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?mode=5">
            <i class="fas fa-envelope"></i>Testmail versenden</a>
                            <div class="help-block">Bevor du diese Funktion aufrufst, müssen alle Einstellungen für den E-Mail-Versand gespeichert werden!<br>Es wird eine einfache E-Mail mit dem Betreff <strong>Förderverein der Freiwilligen Feuerwehr Ottendorf Funktionstest E-Mail</strong> an die E-Mail-Adresse der angemeldeten Benutzerin bzw. des angemeldeten Benutzers auf Grundlage der gespeicherten E-Mail-Einstellungen versendet. Dabei wird beim SMTP-Versand ein Versandprotokoll ausgegeben, welches bei Problemen helfen kann.</div>
            </div>
</div>
<button id="btn_save_email_dispatch" name="btn_save_email_dispatch" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Testmail"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-system_notification" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_system_notification">
                <i class="fas fa-broadcast-tower fa-fw"></i>Systembenachrichtigungen
            </div>
            <div id="collapse_system_notification" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="system_notification_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=system_notification" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="system_notifications_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_notifications_enabled" id="system_notifications_enabled" value="1" class="" checked="checked">
                                        Systembenachrichtigungen aktivieren
                                </label>
                                                    <div class="help-block">Hier können die Systembenachrichtigungen von Admidio deaktiviert werden. Systembenachrichtigungen werden versendet, wenn sich zum Beispiel ein:e neue:r Benutzer:in angemeldet hat. Aber auch Registrierungsbestätigungen werden als Systembenachrichtigungen verschickt. Dieses Feature sollte in der Regel nicht deaktiviert werden. Es sei denn der Server unterstützt keinen E-Mailversand. Das E-Mailmodul ist durch die Deaktivierung nicht betroffen. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="system_notifications_new_entries_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_notifications_new_entries" id="system_notifications_new_entries" value="1" class="">
                                        Benachrichtigung bei neuen oder geänderten Einträgen
                                </label>
                                                    <div class="help-block">Mitglieder mit der hinterlegten Benachrichtigungsrolle erhalten eine Systembenachrichtigung bei neuen oder geänderten Einträgen in den Modulen Ankündigungen, Veranstaltungen, Dokumente &amp; Dateien, Fotos, Weblinks und Gästebuch. (Standard: nein)</div>
                    </div>
    </div>
</div><div id="system_notifications_profile_changes_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="system_notifications_profile_changes" id="system_notifications_profile_changes" value="1" class="">
                                        Benachrichtigung bei Profiländerungen
                                </label>
                                                    <div class="help-block">Mitglieder der hinterlegten Rolle für Benachrichtigungen erhalten eine Systembenachrichtigung, wenn die Profildaten eines Mitglieds von einem Benutzer erstellt, geändert oder gelöscht werden. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><div id="system_notifications_role_group" class="form-group row ">
    <label for="system_notifications_role" class="col-sm-3 control-label">
                Rolle für Benachrichtigungen
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="system_notifications_role" name="system_notifications_role">
                                                                                <optgroup label="Allgemein">
                                                    <option value="b44cb3ad-3fc8-4aa5-828b-8867a98349f5" selected="selected">Administrator:in</option>
                                            <option value="46496790-22bc-4259-973d-daa1cc27394f">Vorstand</option>
                        </optgroup>        </select>

                            <div class="help-block">Mitglieder dieser Rolle erhalten die Benachrichtigungen über neue oder geänderte Einträge in den Modulen und Änderungen in den Profildaten der Mitglieder. Aus Datenschutzgründen können nur Rollen hinterlegt werden, die das Rollenrecht <strong>Mitgliederlisten aller Rollen und alle Mitgliederprofile einsehen</strong> haben.</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Systembenachrichtigungen</label>
        <div class="col-sm-9">
        <p>Hier können die Texte aller Systembenachrichtigungen angepasst werden. Die Texte sind in zwei Teile unterteilt (Betreff und Inhalt) und werden durch #subject# und #content# gekennzeichnet. Der Inhalt für jeden Abschnitt folgt. Wenn du keine dieser Benachrichtigungen senden möchtest, lass das Textfeld leer.<br><br>In jeder Mail können die folgenden Platzhalter verwendet werden. Sie werden zur Laufzeit durch den entsprechenden Inhalt ersetzt.:</p>
    <p><strong>#user_first_name#</strong> - Vorname der Benutzerin oder des Benutzers aus dem jeweiligen E-Mailkontext<br>
    <strong>#user_last_name#</strong> - Nachname der Benutzerin oder des Benutzers aus dem jeweiligen E-Mailkontext<br>
    <strong>#user_login_name#</strong> - Anmeldename der Benutzerin oder des Benutzers aus dem jeweiligen E-Mailkontext<br>
    <strong>#user_email#</strong> - E-Mail-Adresse der Benutzerin oder des Benutzers aus dem jeweiligen E-Mailkontext<br>
    <strong>#administrator_email#</strong> - Systememailadresse der Organisation<br>
    <strong>#organization_short_name#</strong> - Kurzbezeichnung der Organisation<br>
    <strong>#organization_long_name#</strong> - Name der Organisation<br>
    <strong>#organization_homepage#</strong> - URL der Webseite der Organisation</p>
                    </div>
</div>
    <div id="SYSMAIL_REGISTRATION_CONFIRMATION_group" class="form-group row ">
        <label for="SYSMAIL_REGISTRATION_CONFIRMATION" class="col-sm-3 control-label">
                        Benachrichtigung zur Bestätigung der Registrierung
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_REGISTRATION_CONFIRMATION" id="SYSMAIL_REGISTRATION_CONFIRMATION" class="form-control" rows="7" cols="80">#subject# Deine Registrierung bei #organization_long_name#
#content# Hallo #user_first_name#,
wir freuen uns sehr, dass du dich auf unserer Website #organization_homepage# registriert hast.

Um deine Registrierung abzuschließen, bitten wir dich, auf den folgenden Link zu klicken: #variable1#. Durch das Klicken auf den Link wirst du automatisch zu unserer Website weitergeleitet und deine Registrierung wird bestätigt.

Sobald du deine Registrierung bestätigt hast, wird diese von uns geprüft. Du erhältst innerhalb weniger Stunden eine Antwort, ob deine Registrierung angenommen und du dich mit deinen Anmeldedaten einloggen kannst oder ob deine Registrierung abgelehnt wurde.

Viele Grüße
Das Team von #organization_long_name#</textarea>
                                            </div>
    </div>
    <div id="SYSMAIL_REGISTRATION_NEW_group" class="form-group row ">
        <label for="SYSMAIL_REGISTRATION_NEW" class="col-sm-3 control-label">
                        Benachrichtigung nach einer neuen Registrierung
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_REGISTRATION_NEW" id="SYSMAIL_REGISTRATION_NEW" class="form-control" rows="7" cols="80">#subject# Neue Registrierung bei #organization_long_name#
#content# Es hat sich eine neue Benutzerin oder ein neuer Benutzer auf #organization_homepage# registriert.

Nachname: #user_last_name#
Vorname:  #user_first_name#
E-Mail:   #user_email#


Diese Nachricht wurde automatisch erzeugt.</textarea>
                                            </div>
    </div>
    <div id="SYSMAIL_REGISTRATION_APPROVED_group" class="form-group row ">
        <label for="SYSMAIL_REGISTRATION_APPROVED" class="col-sm-3 control-label">
                        Benachrichtigung zur Freigabe einer Registrierung
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_REGISTRATION_APPROVED" id="SYSMAIL_REGISTRATION_APPROVED" class="form-control" rows="7" cols="80">#subject# Anmeldung bei #organization_long_name# bestätigt
#content# Hallo #user_first_name#,

deine Anmeldung auf #organization_homepage# wurde bestätigt.

Nun kannst du dich mit deinem Anmeldenamen #user_login_name# und deinem Passwort auf der Homepage anmelden.

Solltest du noch Fragen haben, schreib eine E-Mail an #administrator_email#.

Viele Grüße
Das Team von #organization_long_name#</textarea>
                                            </div>
    </div>
    <div id="SYSMAIL_REGISTRATION_REFUSED_group" class="form-group row ">
        <label for="SYSMAIL_REGISTRATION_REFUSED" class="col-sm-3 control-label">
                        Benachrichtigung bei einer Ablehnung der Registrierung
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_REGISTRATION_REFUSED" id="SYSMAIL_REGISTRATION_REFUSED" class="form-control" rows="7" cols="80">#subject# Registrierung bei #organization_long_name# abgelehnt
#content# Hallo #user_first_name#,

deine Anmeldung auf #organization_homepage# wurde abgelehnt.

Registrierungen werden in der Regel nur von Mitgliedern akzeptiert. Falls du Mitglied bist und deine Registrierung dennoch abgelehnt wurde, kann es daran liegen, dass du als Mitglied nicht identifiziert wurdest.
Zur Klärung der Gründe für die Ablehnung wende dich bitte an eine:n Administrator:in #administrator_email# von #organization_homepage#.

Viele Grüße
Das Team von #organization_long_name#</textarea>
                                            </div>
    </div>
    <div id="SYSMAIL_NEW_PASSWORD_group" class="form-group row ">
        <label for="SYSMAIL_NEW_PASSWORD" class="col-sm-3 control-label">
                        Neues Passwort zuschicken
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_NEW_PASSWORD" id="SYSMAIL_NEW_PASSWORD" class="form-control" rows="7" cols="80">#subject# Zugangsdaten für #organization_long_name#
#content# Hallo #user_first_name#,

du erhältst deine Zugangsdaten für die Webseite #organization_homepage#.
Anmeldename: #user_login_name#
Passwort: #variable1#

Das Passwort wurde automatisch generiert.
Du solltest es nach deiner Anmeldung auf #organization_homepage# in deinem Profil ändern.

Viele Grüße
Das Team von #organization_long_name#</textarea>
                                            <div class="help-block">Zusätzliche Variablen:<br><strong>#variable1#</strong> - Neues Passwort der Benutzerin oder des Benutzers</div>
                    </div>
    </div>
    <div id="SYSMAIL_PASSWORD_RESET_group" class="form-group row ">
        <label for="SYSMAIL_PASSWORD_RESET" class="col-sm-3 control-label">
                        Passwort vergessen?
                    </label>
        <div class="col-sm-9">
            <textarea name="SYSMAIL_PASSWORD_RESET" id="SYSMAIL_PASSWORD_RESET" class="form-control" rows="7" cols="80">#subject# Passwort zurücksetzen für #organization_long_name#
#content# Hallo #user_first_name#,

wir haben eine Anfrage zum Zurücksetzen deines Passwortes auf #organization_homepage# erhalten.

Falls die Anfrage von dir gekommen ist, kannst du über den folgenden Link dein Passwort zurücksetzen und ein neues Passwort vergeben: 
#variable1#

Viele Grüße
Das Team von #organization_long_name#</textarea>
                                            <div class="help-block">Zusätzliche Variablen:<br><strong>#variable1#</strong> - Aktivierungslink für das neue Passwort</div>
                    </div>
    </div>
<button id="btn_save_system_notification" name="btn_save_system_notification" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Passwort vergessen?"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-captcha" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_captcha">
                <i class="fas fa-font fa-fw"></i>Captcha
            </div>
            <div id="collapse_captcha" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="captcha_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=captcha" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="captcha_type_group" class="form-group row ">
    <label for="captcha_type" class="col-sm-3 control-label">
                Captcha Art
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="captcha_type" name="captcha_type">
                                                        <option value="pic" selected="selected">Zufällige Zeichen</option>
                                            <option value="calc">Rechenaufgabe</option>
                                            <option value="word">Wörter (englisch)</option>
                                </select>

                                                <div class="help-block">Hier kann die Art des Captchas gewählt werden. Das Captcha wird als Bild angezeigt und kann aus zufälligen Zeichen, aus einer kleinen Rechenaufgabe oder aus 2 Wörtern bestehen. Mit den weiteren Einstellungen kann das Bild angepasst werden. (Voreinstellung: Zufällige Zeichen)</div>
            </div>
</div>
<div id="captcha_fonts_group" class="form-group row ">
    <label for="captcha_fonts" class="col-sm-3 control-label">
                Schriftart
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="captcha_fonts" name="captcha_fonts">
                                                        <option value="AHGBold.ttf" selected="selected">AHGBold.ttf</option>
                                            <option value="astigma.ttf">astigma.ttf</option>
                                            <option value="indoctrine.ttf">indoctrine.ttf</option>
                                            <option value="kingthings.ttf">kingthings.ttf</option>
                                            <option value="mrphone.ttf">mrphone.ttf</option>
                                            <option value="sorundow.ttf">sorundow.ttf</option>
                                </select>

                                                <div class="help-block">Hier kann die Schriftart für den Captcha-Code ausgewählt werden. (Voreinstellung: AHGBold.ttf)</div>
            </div>
</div>
<div id="captcha_width_group" class="form-group row ">
    <label for="captcha_width" class="col-sm-3 control-label">
                Breite (Pixel)
            </label>
    <div class="col-sm-9">
                <input type="number" name="captcha_width" id="captcha_width" value="215" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Angabe der Breite in Pixel des Captcha-Bildes. Die Höhe wird proportional zur Breite errechnet. Über diese Einstellung wird auch die Größe der Zeichen bestimmt. (Voreinstellung: 215)</div>
            </div>
</div>
<div id="captcha_lines_numbers_group" class="form-group row ">
    <label for="captcha_lines_numbers" class="col-sm-3 control-label">
                Anzahl Linien
            </label>
    <div class="col-sm-9">
                <input type="number" name="captcha_lines_numbers" id="captcha_lines_numbers" value="5" class="form-control" min="1" max="25" step="1">
            
                                    <div class="help-block">Die Linien auf dem Captcha sollen es Skripten/Bots erschweren diese zu lösen. Je mehr Linien gezeichnet werden, desto schwieriger ist es dieses zu lösen. Leider gilt dies aber auch für Menschen. (Voreinstellung: 5)</div>
            </div>
</div>
<div id="captcha_perturbation_group" class="form-group row ">
    <label for="captcha_perturbation" class="col-sm-3 control-label">
                Verzerrung
            </label>
    <div class="col-sm-9">
                <input type="string" name="captcha_perturbation" id="captcha_perturbation" value="0.75" class="form-control form-control-small">
            
                                    <div class="help-block">Dieser Wert gibt an, wie stark die Zeichen verzerrt werden sollen. 0 bedeutet keine Verzerrung, 3 ist bereits eine so starke Verzerrung, dass einzelne Zeichen nicht mehr erkannt werden können. (Voreinstellung: 0.75)</div>
            </div>
</div>
<div id="captcha_background_image_group" class="form-group row ">
    <label for="captcha_background_image" class="col-sm-3 control-label">
                Hintergrundbild
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="captcha_background_image" name="captcha_background_image">
                                                        <option value="" selected="selected"></option>
                                            <option value="bg3.jpg">bg3.jpg</option>
                                            <option value="bg4.jpg">bg4.jpg</option>
                                            <option value="bg5.jpg">bg5.jpg</option>
                                            <option value="bg6.png">bg6.png</option>
                                </select>

                                                <div class="help-block">Es kann ein Hintergrundbild ausgewählt werden, welches als Grundlage für das Captcha-Bild dient. Die Farben der Zeichen sollten dann so darauf abgestimmt werden, dass das Captcha weiterhin lesbar ist. (Voreinstellung: kein Bild)</div>
            </div>
</div>
<div id="captcha_background_color_group" class="form-group row ">
    <label for="captcha_background_color" class="col-sm-3 control-label">
                Hintergrundfarbe
            </label>
    <div class="col-sm-9">
                <input type="text" name="captcha_background_color" id="captcha_background_color" value="#B6D6DB" class="form-control form-control-small" maxlength="7">
            
                            </div>
</div>
<div id="captcha_text_color_group" class="form-group row ">
    <label for="captcha_text_color" class="col-sm-3 control-label">
                Zeichenfarbe
            </label>
    <div class="col-sm-9">
                <input type="text" name="captcha_text_color" id="captcha_text_color" value="#707070" class="form-control form-control-small" maxlength="7">
            
                            </div>
</div>
<div id="captcha_line_color_group" class="form-group row ">
    <label for="captcha_line_color" class="col-sm-3 control-label">
                Linienfarbe
            </label>
    <div class="col-sm-9">
                <input type="text" name="captcha_line_color" id="captcha_line_color" value="#707070" class="form-control form-control-small" maxlength="7">
            
                                    <div class="help-block">Die Hintergrundfarbe sollte sich von der Zeichenfarbe absetzen. Sind Linienfarbe und Zeichenfarbe identisch ist es für Skripte und Bots schwieriger das Captcha zu lösen. Die einzelnen Farben müssen als <a href="https://en.wikipedia.org/wiki/Web_colors">hexadezimaler Wert</a> angegeben werden.</div>
            </div>
</div>
<div id="captcha_charset_group" class="form-group row ">
    <label for="captcha_charset" class="col-sm-3 control-label">
                Zulässige Zeichen
            </label>
    <div class="col-sm-9">
                <input type="text" name="captcha_charset" id="captcha_charset" value="23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxy" class="form-control" maxlength="80">
            
                                    <div class="help-block">Hier können die zu verwendenden Captcha-Zeichen angegeben werden. Zeichen, welche leicht verwechselt werden können, wie z.B. l oder I sollten dabei vermieden werden.</div>
            </div>
</div>
<div id="captcha_signature_group" class="form-group row ">
    <label for="captcha_signature" class="col-sm-3 control-label">
                Captcha Untertitel
            </label>
    <div class="col-sm-9">
                <input type="text" name="captcha_signature" id="captcha_signature" value="Powered by Admidio.org" class="form-control" maxlength="60">
            
                                    <div class="help-block">Hier kann der Untertitel des Captchas festgelegt werden. Es wird die Standard-Schriftart aus dem aktuellen Theme verwendet.</div>
            </div>
</div>

<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-admidio_update" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_admidio_update">
                <i class="fas fa-cloud-download-alt fa-fw"></i>Admidio Update
            </div>
            <div id="collapse_admidio_update" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="admidio_update_preferences_form" action="" role="form" method="post" class=" form-horizontal form-dialog">
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Version</label>
        <div class="col-sm-9">
        <span id="admidio_version_content">4.3.15
            <a id="link_check_for_update" href="#link_check_for_update" title="nach Update suchen">nach Update suchen</a>
         </span>
                    </div>
</div>
<div id="last_update_step_group" class="form-group row ">
    <label for="last_update_step" class="col-sm-3 control-label">
                Letzter Update-Schritt
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>1260 / 1260</strong></span></p>

                    </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Admidio unterstützen</label>
        <div class="col-sm-9">
        <a id="donate" href="https://www.admidio.org/donate.php" target="_blank">
            <i class="fas fa-heart"></i>Spenden</a>
                                                <div class="help-block">Wir würden uns freuen, wenn du die weitere Entwicklung von Admidio mit einer Spende unterstützen würdest!</div>
            </div>
</div>
</form>
                </div>
            </div>
        </div>
    
        <div id="panel-php" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_php">
                <i class="fab fa-php fa-fw"></i>PHP
            </div>
            <div id="collapse_php" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="php_preferences_form" action="" role="form" method="post" class=" form-horizontal form-dialog">
<div id="php_version_group" class="form-group row ">
    <label for="php_version" class="col-sm-3 control-label">
                PHP-Version
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>8.4.4-nmm1</strong></span></p>

                    </div>
</div>
<div id="post_max_size_group" class="form-group row ">
    <label for="post_max_size" class="col-sm-3 control-label">
                max. POST-Größe
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>512 MiB</strong></span></p>

                    </div>
</div>
<div id="memory_limit_group" class="form-group row ">
    <label for="memory_limit" class="col-sm-3 control-label">
                Arbeitsspeicher
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>512 MiB</strong></span></p>

                    </div>
</div>
<div id="file_uploads_group" class="form-group row ">
    <label for="file_uploads" class="col-sm-3 control-label">
                Dateiuploads
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>an</strong></span></p>

                    </div>
</div>
<div id="upload_max_filesize_group" class="form-group row ">
    <label for="upload_max_filesize" class="col-sm-3 control-label">
                max. Uploadgröße
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>512 MiB</strong></span></p>

                    </div>
</div>
<div id="pseudo_random_number_generator_group" class="form-group row ">
    <label for="pseudo_random_number_generator" class="col-sm-3 control-label">
                Pseudo-Zufallszahlen Generator
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>Sicher</strong></span></p>

                    </div>
</div>
<div id="php_info_group" class="form-group row ">
    <label for="php_info" class="col-sm-3 control-label">
                alle PHP-Einstellungen
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><a href="https://verein.fw-ottendorf.de/adm_program/system/phpinfo.php" target="_blank">phpinfo()</a> <i class="fas fa-external-link-alt"></i></p>

                    </div>
</div>
</form>
                </div>
            </div>
        </div>
    
        <div id="panel-system_information" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_system_information">
                <i class="fas fa-info-circle fa-fw"></i>Systeminformationen
            </div>
            <div id="collapse_system_information" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
                <div class="card-body">
                    <form id="system_information_preferences_form" action="" role="form" method="post" class=" form-horizontal form-dialog">
<div id="operating_system_group" class="form-group row ">
    <label for="operating_system" class="col-sm-3 control-label">
                Betriebssystem
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><strong>Linux</strong> (Linux dd14700 6.5.0-45-generic #45~22.04.1-Ubuntu SMP PREEMPT_DYNAMIC Mon Jul 15 16:40:02 UTC 2 x86_64)</p>

                    </div>
</div>
<div id="64bit_group" class="form-group row ">
    <label for="64bit" class="col-sm-3 control-label">
                64bit
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>Ja</strong></span></p>

                    </div>
</div>
<div id="unix_group" class="form-group row ">
    <label for="unix" class="col-sm-3 control-label">
                UNIX
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><strong>Ja</strong></p>

                    </div>
</div>
<div id="directory_separator_group" class="form-group row ">
    <label for="directory_separator" class="col-sm-3 control-label">
                Verzeichnis Trenner
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><strong>"/"</strong></p>

                    </div>
</div>
<div id="path_separator_group" class="form-group row ">
    <label for="path_separator" class="col-sm-3 control-label">
                Pfad Trenner
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><strong>":"</strong></p>

                    </div>
</div>
<div id="max_path_length_group" class="form-group row ">
    <label for="max_path_length" class="col-sm-3 control-label">
                Max Pfadlänge
            </label>
    <div class="col-sm-9">
        <p class="form-control-static">4096</p>

                    </div>
</div>
<div id="database_version_group" class="form-group row ">
    <label for="database_version" class="col-sm-3 control-label">
                MySQL-Version
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>10.6.22-MariaDB-0ubuntu0.22.04.1-log</strong></span></p>

                    </div>
</div>
<div id="directory_protection_group" class="form-group row ">
    <label for="directory_protection" class="col-sm-3 control-label">
                Verzeichnisschutz
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>an</strong></span></p>

                    </div>
</div>
<div id="max_processable_image_size_group" class="form-group row ">
    <label for="max_processable_image_size" class="col-sm-3 control-label">
                max. bearbeitbare Bildgröße
            </label>
    <div class="col-sm-9">
        <p class="form-control-static">178.96 Megapixel</p>

                    </div>
</div>
<div id="debug_mode_group" class="form-group row ">
    <label for="debug_mode" class="col-sm-3 control-label">
                Debug-Ausgabe
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-danger"><strong>an</strong></span></p>

                    </div>
</div>
<div id="import_mode_group" class="form-group row ">
    <label for="import_mode" class="col-sm-3 control-label">
                Import Modus
            </label>
    <div class="col-sm-9">
        <p class="form-control-static"><span class="text-success"><strong>aus</strong></span></p>

                    </div>
</div>
<div id="disk_space_group" class="form-group row ">
    <label for="disk_space" class="col-sm-3 control-label">
                Speicherplatz
            </label>
    <div class="col-sm-9">
        <p class="form-control-static">
    </p><div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="2.04599052288E+12" aria-valuemin="0" aria-valuemax="3.93208163533E+12" style="width: 52%;">
            1.861 TiB / 3.576 TiB
        </div>
    </div><p></p>

                    </div>
</div>
</form>
                </div>
            </div>
        </div>
    
        </div>
    </div>
    <div class="tab-pane fade" id="tabs-modules" role="tabpanel">
        <div class="accordion" id="accordion_modules">
        <div id="panel-announcements" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_announcements">
                <i class="fas fa-newspaper fa-fw"></i>Ankündigungen
            </div>
            <div id="collapse_announcements" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="announcements_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=announcements" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="announcements_module_enabled_group" class="form-group row ">
    <label for="announcements_module_enabled" class="col-sm-3 control-label">
                Zugriff auf Modul
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="announcements_module_enabled" name="announcements_module_enabled">
                                                        <option value="0">Deaktiviert</option>
                                            <option value="1" selected="selected">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Das Modul kann über diese Einstellung komplett deaktiviert oder nur für angemeldete Benutzer:innen freigegeben werden. Haben nur angemeldete Benutzer:innen Zugriff, so wird das Modul für Gäste ausgeblendet. Der Web-Feed ist dann allerdings für beide Gruppen nicht mehr aufrufbar. (Voreinstellung: Aktiviert)</div>
            </div>
</div>
<div id="announcements_per_page_group" class="form-group row ">
    <label for="announcements_per_page" class="col-sm-3 control-label">
                Anzahl Einträge pro Seite
            </label>
    <div class="col-sm-9">
                <input type="number" name="announcements_per_page" id="announcements_per_page" value="10" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 10)</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Kategorien bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/categories/categories.php?type=ANN">
            <i class="fas fa-th-large"></i>Wechsel zur Kategorie Verwaltung</a>
                                                <div class="help-block">Hier können Kategorien angelegt und bearbeitet werden.</div>
            <div id="announcements_per_page_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_announcements" name="btn_save_announcements" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Kategorien bearbeiten"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-contacts" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_contacts">
                <i class="fas fa-address-card fa-fw"></i>Kontakte
            </div>
            <div id="collapse_contacts" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="contacts_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=contacts" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="contacts_list_configuration_group" class="form-group row ">
    <label for="contacts_list_configuration" class="col-sm-3 control-label">
                Listenkonfiguration
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="contacts_list_configuration" name="contacts_list_configuration">
                                                        <option value="1">Adressliste</option>
                                            <option value="3">Kontaktdaten</option>
                                            <option value="6" selected="selected">Kontakte</option>
                                            <option value="2">Telefonliste</option>
                                </select>

                                                <div class="help-block">Eine der hier vorgegebenen Konfigurationen kann für die Anzeige der Mitgliederverwaltung genutzt werden. Es werden anschließend in der Mitgliederverwaltung die Spalten der ausgewählten Listenkonfiguration angezeigt.</div>
            </div>
</div>
<div id="contacts_per_page_group" class="form-group row ">
    <label for="contacts_per_page" class="col-sm-3 control-label">
                Anzahl der Kontakte pro Seite
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="contacts_per_page" name="contacts_per_page">
                                                        <option value="10">10</option>
                                            <option value="25" selected="selected">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                </select>

                            <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 25)</div>
            </div>
</div>
<div id="contacts_field_history_days_group" class="form-group row ">
    <label for="contacts_field_history_days" class="col-sm-3 control-label">
                Standardzeitraum in der Änderungshistorie (Tage)
            </label>
    <div class="col-sm-9">
                <input type="number" name="contacts_field_history_days" id="contacts_field_history_days" value="365" class="form-control" min="0" max="9999999999" step="1">
            
                                    <div class="help-block">Zeitraum in Tagen in denen in der Änderungshistorie der Profilfelder die Veränderungen angezeigt werden. Dies ist der Standardfilter, welcher durch die Benutzerin oder den Benutzer nachher beliebig geändert werden kann. Bei großen Datenbanken dient dies dazu die Datenmenge bei normalen Aufruf der Änderungshistorie einzuschränken. (Voreinstellung: 365)</div>
            </div>
</div>
<div id="contacts_show_all_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="contacts_show_all" id="contacts_show_all" value="1" class="" checked="checked">
                                        Optional alle Kontakte anzeigen
                                </label>
                                                    <div class="help-block">Ist diese Option gesetzt, können neben den aktiven Kontakten der aktuellen Organisation optional auch ehemalige Kontakte und Kontakte anderer Organisationen in der Mitgliederverwaltung angezeigt werden. Ansonsten werden nur aktive Kontakte der aktuellen Organisation angezeigt. Beim Anlegen neuer Kontakte oder beim Zuweisen von Registrierungen wird jedoch weiterhin die gesamte Datenbank aller Organisationen nach bestehenden Kontakten durchsucht. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="contacts_user_relations_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="contacts_user_relations_enabled" id="contacts_user_relations_enabled" value="1" class="" checked="checked">
                                        Beziehungen pflegen und anzeigen
                                </label>
                                                    <div class="help-block">Wenn diese Option aktiviert ist, können Beziehungen zwischen Kontakten gepflegt und angezeigt werden. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div class="form-group form-custom-content row">
        <label class="col-sm-3">Beziehungen</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/userrelations/relationtypes.php">
            <i class="fas fa-people-arrows"></i>Wechsel zur Beziehungskonfiguration</a>
                                                <div class="help-block">Es können Beziehungstypen (Elternteil - Kind) definiert werden. Zu jeder definierten Beziehung wird der Typ (asymmetrisch, symmetrisch oder unidirektional) hinterlegt, sowie die Profilbearbeitungsrechte innerhalb der Beziehung festgelegt.</div>
            <div id="contacts_user_relations_enabled_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_contacts" name="btn_save_contacts" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Beziehungen"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-documents-files" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_documents-files">
                <i class="fas fa-file-download fa-fw"></i>Dokumente &amp; Dateien
            </div>
            <div id="collapse_documents-files" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="documents_files_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=documents-files" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="documents_files_module_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="documents_files_module_enabled" id="documents_files_module_enabled" value="1" class="" checked="checked">
                                        Aktiviere Dokumente &amp; Dateien
                                </label>
                                                    <div class="help-block">Das Modul Dokumente &amp; Dateien kann über diese Einstellung aktiviert oder deaktiviert werden. (Standard: ja)</div>
                    </div>
    </div>
</div><div id="documents_files_max_upload_size_group" class="form-group row ">
    <label for="documents_files_max_upload_size" class="col-sm-3 control-label">
                Maximale Dateigröße (MB)
            </label>
    <div class="col-sm-9">
                <input type="number" name="documents_files_max_upload_size" id="documents_files_max_upload_size" value="3" class="form-control" min="0" max="999999999" step="1">
            
                                    <div class="help-block">Benutzer:innen können nur Dateien hochladen, bei denen die Dateigröße kleiner als der hier angegebene Wert ist. Steht hier 0, so ist der Upload deaktiviert. (Voreinstellung: 3MB)</div>
            </div>
</div>
<button id="btn_save_documents_files" name="btn_save_documents_files" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Maximale Dateigröße (MB)"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-photos" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_photos">
                <i class="fas fa-image fa-fw"></i>Fotos
            </div>
            <div id="collapse_photos" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="photos_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=photos" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="photo_module_enabled_group" class="form-group row ">
    <label for="photo_module_enabled" class="col-sm-3 control-label">
                Zugriff auf Modul
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="photo_module_enabled" name="photo_module_enabled">
                                                        <option value="0">Deaktiviert</option>
                                            <option value="1" selected="selected">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Das Modul kann über diese Einstellung komplett deaktiviert oder nur für angemeldete Benutzer:innen freigegeben werden. Haben nur angemeldete Benutzer:innen Zugriff, so wird das Modul für Gäste ausgeblendet. Der Web-Feed ist dann allerdings für beide Gruppen nicht mehr aufrufbar. (Voreinstellung: Aktiviert)</div>
            </div>
</div>
<div id="photo_show_mode_group" class="form-group row ">
    <label for="photo_show_mode" class="col-sm-3 control-label">
                Fotodarstellung
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="photo_show_mode" name="photo_show_mode">
                                                        <option value="1" selected="selected">Modales Fenster</option>
                                            <option value="2">Gleiches Fenster</option>
                                            <option value="0">Popup-Fenster</option>
                                </select>

                                                <div class="help-block">Hier kann eingestellt werden, wie die Fotos im Fotomodul präsentiert werden sollen. Dies kann als modales Fenster geschehen, dann wird im vorhandenen Browserfenster ein neues Fenster geöffnet. Im Hintergrund bleibt die ausgewählte Fotovorschau weiterhin aktiv. Sollen die Bilder im gleichen Fenster dargestellt werden, dann wird die aktuelle Fotovorschau verlassen und eine neue Seite mit dem ausgewählten Foto angezeigt. Soll ein Popup-Fenster erzeugt werden, dann wird ein neues Browserfenster geöffnet in dem das ausgewählte Foto angezeigt wird. Dieses kann dann unabhängig vom Browserfenster mit der Fotovorschau bedient werden. (Voreinstellung: Modales Fenster)</div>
            </div>
</div>
<div id="photo_albums_per_page_group" class="form-group row ">
    <label for="photo_albums_per_page" class="col-sm-3 control-label">
                Anzahl Alben pro Seite
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_albums_per_page" id="photo_albums_per_page" value="24" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 10)</div>
            </div>
</div>
<div id="photo_thumbs_page_group" class="form-group row ">
    <label for="photo_thumbs_page" class="col-sm-3 control-label">
                Vorschaubilder pro Seite
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_thumbs_page" id="photo_thumbs_page" value="24" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Der angegebene Wert bestimmt wieviele kleine Vorschaubilder auf einer Seite angezeigt werden. Hat ein Album mehr Bilder, so wird automatisch eine Seitennavigation hinzugefügt. (Voreinstellung: 16)</div>
            </div>
</div>
<div id="photo_thumbs_scale_group" class="form-group row ">
    <label for="photo_thumbs_scale" class="col-sm-3 control-label">
                Skalierung Vorschaubild
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_thumbs_scale" id="photo_thumbs_scale" value="500" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Hier kann festgelegt werden auf welchen Wert die längere Bildseite des Vorschaubildes skaliert werden soll. Vorsicht: Werden die Vorschaubilder zu breit, passen weniger nebeneinander. Ggf. weniger Vorschaubildspalten einstellen. (Voreinstellung: 160Pixel)</div>
            </div>
</div>
<div id="photo_show_width_group" class="form-group row ">
    <label for="photo_show_width" class="col-sm-3 control-label">
                Maximale Bildbreite
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_show_width" id="photo_show_width" value="1200" class="form-control" min="1" max="9999" step="1">
            
                            </div>
</div>
<div id="photo_show_height_group" class="form-group row ">
    <label for="photo_show_height" class="col-sm-3 control-label">
                Maximale Bildhöhe
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_show_height" id="photo_show_height" value="1200" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Die angegebenen Werte bestimmen die maximale Größe, die ein Bild in der Breite bzw. Höhe haben darf. Die Fotos werden beim Hochladen auf diese Größe skaliert. Bei einem Modalen-Fenster oder Popup-Fenster wird das Fenster automatisch in die Größe des Foto angepasst. (Voreinstellung: 1000 x 800 Pixel)</div>
            </div>
</div>
<div id="photo_image_text_group" class="form-group row ">
    <label for="photo_image_text" class="col-sm-3 control-label">
                Zeige Wasserzeichen
            </label>
    <div class="col-sm-9">
                <input type="text" name="photo_image_text" id="photo_image_text" value="© verein.fw-ottendorf.de" class="form-control" maxlength="60">
            
                                    <div class="help-block">Der eingegebene Text wird in allen angezeigten Fotos angezeigt, ab einer Größe von 200 Pixel der längeren Seite. Wenn der Fotograf im Album hinterlegt wurde, wird anstelle dieses Textes der Name des Fotografen mit Copyright angezeigt. Wenn kein Bildtext angezeigt werden soll, kann dieses Feld leer gelassen werden (Standard: © verein.fw-ottendorf.de).</div>
            </div>
</div>
<div id="photo_image_text_size_group" class="form-group row ">
    <label for="photo_image_text_size" class="col-sm-3 control-label">
                Größe des Bildtextes
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_image_text_size" id="photo_image_text_size" value="40" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Die Größe des Bildtextes wird proportional zur Bildgröße, nach der Formel "Bildgröße/Devisor" berechnet. Durch Erhöhung des Devisors verringert sich die Schriftgröße. (Voreinstellung: 40)</div>
            </div>
</div>
<div id="photo_download_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="photo_download_enabled" id="photo_download_enabled" value="1" class="">
                                        Download aktivieren
                                </label>
                                <div class="help-block">Erlaubt es einzelne Fotos sowie komplette Alben als Zip-Datei herunterzuladen. Dabei wird bei jedem Album als auch bei jedem Foto ein entsprechender Link angezeigt. Ist die Option <strong>Originale zusätzlich speichern</strong> aktiviert, dann werden nur die Originalfotos heruntergeladen.</div>
                    </div>
    </div>
</div><div id="photo_keep_original_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="photo_keep_original" id="photo_keep_original" value="1" class="">
                                        Originale zusätzlich speichern
                                </label>
                                <div class="help-block">Speichert alle hochgeladenen Fotos zusätzlich zur eingestellten Auflösung auch in der Originalgröße des Fotos ab. Ist zusätzlich die Option <strong>Download aktivieren</strong> aktiviert, werden die Originalfotos herunterladen. Diese Option verbraucht deutlich mehr Speicherplatz auf dem Webserver und sollte nur gewählt werden, wenn genügend Speicherplatz zur Verfügung steht.</div>
                    </div>
    </div>
</div><div id="photo_ecard_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="photo_ecard_enabled" id="photo_ecard_enabled" value="1" class="" checked="checked">
                                        Grußkarten aktivieren
                                </label>
                                                    <div class="help-block">Grußkarten können über diese Einstellung aktiviert oder deaktiviert werden. Falls der Server keinen E-Mailversand unterstützt, sollte das Modul deaktiviert werden. Dieses Modul ist generell nur für angemeldete Benutzerinnen und Benutzern verfügbar. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="photo_ecard_scale_group" class="form-group row ">
    <label for="photo_ecard_scale" class="col-sm-3 control-label">
                Skalierung Vorschaubild
            </label>
    <div class="col-sm-9">
                <input type="number" name="photo_ecard_scale" id="photo_ecard_scale" value="500" class="form-control" min="1" max="9999" step="1">
            
                                    <div class="help-block">Der angegebene Wert bestimmen die maximale Größe in Pixel, die die längere Seite des Bildes in der Grußkarte haben darf. (Voreinstellung: 500 Pixel)</div>
            </div>
</div>
<div id="photo_ecard_template_group" class="form-group row ">
    <label for="photo_ecard_template" class="col-sm-3 control-label">
                Template
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="photo_ecard_template" name="photo_ecard_template">
                                                        <option value="">- Keine Vorlage -</option>
                                            <option value="Postcard" selected="selected">Postcard</option>
                                            <option value="Greeting card">Greeting card</option>
                                            <option value="Postcard separate photo">Postcard separate photo</option>
                                </select>

                                                <div class="help-block">Hier wird das Standard Template festgelegt. (Voreinstellung: Postcard)</div>
            </div>
</div>
<button id="btn_save_photos" name="btn_save_photos" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Template"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-guestbook" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_guestbook">
                <i class="fas fa-book fa-fw"></i>Gästebuch
            </div>
            <div id="collapse_guestbook" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="guestbook_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=guestbook" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="enable_guestbook_module_group" class="form-group row ">
    <label for="enable_guestbook_module" class="col-sm-3 control-label">
                Zugriff auf Modul
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="enable_guestbook_module" name="enable_guestbook_module">
                                                        <option value="0" selected="selected">Deaktiviert</option>
                                            <option value="1">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Das Modul kann über diese Einstellung komplett deaktiviert oder nur für angemeldete Benutzer:innen freigegeben werden. Haben nur angemeldete Benutzer:innen Zugriff, so wird das Modul für Gäste ausgeblendet. Der Web-Feed ist dann allerdings für beide Gruppen nicht mehr aufrufbar. (Voreinstellung: Aktiviert)</div>
            </div>
</div>
<div id="guestbook_entries_per_page_group" class="form-group row ">
    <label for="guestbook_entries_per_page" class="col-sm-3 control-label">
                Anzahl Einträge pro Seite
            </label>
    <div class="col-sm-9">
                <input type="number" name="guestbook_entries_per_page" id="guestbook_entries_per_page" value="10" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 10)</div>
            </div>
</div>
<div id="enable_guestbook_captcha_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_guestbook_captcha" id="enable_guestbook_captcha" value="1" class="" checked="checked">
                                        Captcha aktivieren
                                </label>
                                                    <div class="help-block">Für nicht angemeldete Benutzer:innen wird im Gästebuchformular bei aktiviertem Captcha ein alphanumerischer Code oder eine einfache Rechenaufgabe eingeblendet. Diesen muss die Benutzerin oder der Benutzer vor dem Absenden des Formularinhalts korrekt eingeben. Dies soll sicherstellen, dass das Formular nicht von Spammern missbraucht werden kann. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="enable_guestbook_moderation_group" class="form-group row ">
    <label for="enable_guestbook_moderation" class="col-sm-3 control-label">
                Moderation aktivieren für
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="enable_guestbook_moderation" name="enable_guestbook_moderation">
                                                        <option value="0" selected="selected">Niemand</option>
                                            <option value="1">Nur Besucher:innen</option>
                                            <option value="2">Alle</option>
                                </select>

                                                <div class="help-block">Gästebucheinträge werden erst nach einer Sichtprüfung einer Administratorin oder eines Administrators publiziert. Hier kann eingestellt werden, ob die Prüfung nur bei Gästen, auch bei angemeldeten Benutzer:innen oder bei niemandem durchgeführt werden soll.  (Voreinstellung: Niemand)</div>
            </div>
</div>
<div id="enable_gbook_comments4all_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_gbook_comments4all" id="enable_gbook_comments4all" value="1" class="">
                                        Anonyme Kommentare erlauben
                                </label>
                                                    <div class="help-block">Nicht angemeldete Benutzer:innen können nach Aktivierung dieser Option Einträge im Gästebuch kommentieren. Die Rechtevergabe für diese Funktion über die Rollenverwaltung wird dann ignoriert. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><div id="enable_intial_comments_loading_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_intial_comments_loading" id="enable_intial_comments_loading" value="1" class="">
                                        Kommentare direkt anzeigen
                                </label>
                                                    <div class="help-block">Wenn diese Option aktiviert ist, werden beim Aufruf der Gästebuchseite die Kommentare direkt geladen und angezeigt. Im anderen Fall muss die Benutzerin oder der Benutzer auf einen Link klicken um die Kommentare zu sehen. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><div id="flooding_protection_time_group" class="form-group row ">
    <label for="flooding_protection_time" class="col-sm-3 control-label">
                Flooding Protection Intervall
            </label>
    <div class="col-sm-9">
                <input type="number" name="flooding_protection_time" id="flooding_protection_time" value="60" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Für nicht angemeldete Benutzer:innen wird bei Einträgen im Gästebuch überprüft, ob sie innerhalb des eingestellten Intervalls bereits einen Eintrag getätigt haben. Damit soll verhindert werden, dass Benutzer:innen in zu kurzen Zeitabständen hintereinander unerwünschte Einträge erzeugen. Ist das Intervall auf 0 gesetzt wird diese Überprüfung nicht durchgeführt. (Voreinstellung: 60 Sekunden)</div>
            </div>
</div>
<button id="btn_save_guestbook" name="btn_save_guestbook" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Flooding Protection Intervall"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-groups-roles" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_groups-roles">
                <i class="fas fa-users fa-fw"></i>Gruppen &amp; Rollen
            </div>
            <div id="collapse_groups-roles" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="groups_roles_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=groups-roles" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="groups_roles_enable_module_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="groups_roles_enable_module" id="groups_roles_enable_module" value="1" class="" checked="checked">
                                        Gruppen &amp; Rollen aktivieren
                                </label>
                                                    <div class="help-block">Zeigt die Gruppen und Rollen der Organisation an und ermöglicht die freie Konfiguration von Gruppen und Rollen. Eigene Liste können konfiguriert und angewendet werden. Dieses Modul ist generell nur für angemeldete Benutzerinnen und Benutzern verfügbar. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="groups_roles_members_per_page_group" class="form-group row ">
    <label for="groups_roles_members_per_page" class="col-sm-3 control-label">
                Anzahl Teilnehmende pro Seite
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="groups_roles_members_per_page" name="groups_roles_members_per_page">
                                                        <option value="10">10</option>
                                            <option value="25" selected="selected">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                </select>

                                                <div class="help-block">Anzahl der Mitglieder, die in der HTML-Ansicht dargestellt werden. Weitere Mitglieder können durch das Weiterblättern erreicht werden. Die Druckvorschau und der Export sind von diesem Wert nicht betroffen. (Voreinstellung: 25)</div>
            </div>
</div>
<div id="groups_roles_default_configuration_group" class="form-group row ">
    <label for="groups_roles_default_configuration" class="col-sm-3 control-label">
                Standardkonfiguration
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="groups_roles_default_configuration" name="groups_roles_default_configuration">
                                                        <option value="1" selected="selected">Adressliste</option>
                                            <option value="3">Kontaktdaten</option>
                                            <option value="6">Kontakte</option>
                                            <option value="4">Mitgliedschaft</option>
                                            <option value="5">Teilnehmende</option>
                                            <option value="2">Telefonliste</option>
                                </select>

                                                <div class="help-block">Eine der hier vorgegebenen Konfigurationen kann zur Standardkonfiguration für Listen dieser Organisation gemacht werden. Mitgliederlisten von Rollen, die keine Listenkonfiguration hinterlegt haben, werden mit dieser Konfiguration angezeigt.</div>
            </div>
</div>
<div id="groups_roles_show_former_members_group" class="form-group row ">
    <label for="groups_roles_show_former_members" class="col-sm-3 control-label">
                Zeige ehemalige Mitglieder
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="groups_roles_show_former_members" name="groups_roles_show_former_members">
                                                        <option value="0">Niemand</option>
                                            <option value="1">Benutzer:innen mit dem Recht "Rollen verwalten und zuordnen"</option>
                                            <option value="2" selected="selected">Benutzer:innen mit dem Recht "Profildaten aller Kontakte bearbeiten"</option>
                                </select>

                            <div class="help-block">Mit dieser Einstellung kann festgelegt werden, wer ehemalige Rollenmitglieder sehen darf. Die Benutzerin bzw. der Benutzer muss allerdings auch das Recht haben die Rolle selber zu sehen. Leiter:innen einer Rolle dürfen die Ehemaligen ihrer Rolle auch sehen, wenn sie für die Rolle dasselbe Recht gesetzt bekommen haben, welches hier eingestellt ist. (Voreinstellung: Benutzer:innen mit dem Recht <strong>Profildaten aller Kontakte bearbeiten</strong>)</div>
            </div>
</div>
<div id="groups_roles_export_group" class="form-group row ">
    <label for="groups_roles_export" class="col-sm-3 control-label">
                Listen exportieren
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="groups_roles_export" name="groups_roles_export">
                                                        <option value="0">Niemand</option>
                                            <option value="1" selected="selected">Alle</option>
                                            <option value="2">Benutzer:innen mit dem Recht "Profildaten aller Kontakte bearbeiten"</option>
                                </select>

                                                <div class="help-block">Listen von Gruppen und Rollen können von Benutzerinnen und Benutzern exportiert werden, sofern sie das Recht haben diese Listen zu sehen. Mit dieser Einstellung kann die Exportfunktion eingeschränkt werden. (Voreinstellung: Alle)</div>
            </div>
</div>
<div id="groups_roles_edit_lists_group" class="form-group row ">
    <label for="groups_roles_edit_lists" class="col-sm-3 control-label">
                Listen konfigurieren
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="groups_roles_edit_lists" name="groups_roles_edit_lists">
                                                        <option value="1" selected="selected">Alle</option>
                                            <option value="2">Benutzer:innen mit dem Recht "Profildaten aller Kontakte bearbeiten"</option>
                                            <option value="3">Administrierende</option>
                                </select>

                                                <div class="help-block">Benutzer können ihre eigenen Listen mit ausgewählten Profilfeldern erstellen und diese dann auf Gruppen und Rollen anwenden. Es sind nur Profilfelder und Gruppen oder Rollen verfügbar, die der aktuelle Benutzer sehen darf. Mit dieser Einstellung können Sie festlegen, wer solche Listen erstellen darf. (Voreinstellung: Alle)</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Kategorien bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/categories/categories.php?type=ROL">
            <i class="fas fa-th-large"></i>Wechsel zur Kategorie Verwaltung</a>
                                                <div class="help-block">Hier können Kategorien angelegt und bearbeitet werden.</div>
            <div id="groups_roles_edit_lists_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_lists" name="btn_save_lists" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Kategorien bearbeiten"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-category-report" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_category-report">
                <i class="fas fa-list fa-fw"></i>Kategoriereport
            </div>
            <div id="collapse_category-report" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="category_report_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=category-report" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="category_report_enable_module_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="category_report_enable_module" id="category_report_enable_module" value="1" class="" checked="checked">
                                        Kategoriereport aktivieren
                                </label>
                                <div class="help-block">Der Kategoriereport erstellt eine Liste aller Rollen und Kategorien, der ein Mitglied zugeordnet ist. Die Berechtigung <strong>Mitgliederlisten aller Rollen und alle Mitgliederprofile einsehen</strong> ist für den Zugriff auf den Kategoriereport erforderlich. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="category_report_default_configuration_group" class="form-group row ">
    <label for="category_report_default_configuration" class="col-sm-3 control-label">
                Standardkonfiguration
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="category_report_default_configuration" name="category_report_default_configuration">
                                                        <option value="1" selected="selected">Allgemeine Rollenzuordnung</option>
                                </select>

                                                <div class="help-block">Eine der hier vorgegebenen Konfigurationen kann zur Standardkonfiguration für den Kategorienreport dieser Organisation gemacht werden. Die gewählte Konfiguration wird beim Aufruf des Reports direkt angezeigt.</div>
            </div>
</div>
<button id="btn_save_documents_files" name="btn_save_documents_files" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Standardkonfiguration"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-messages" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_messages">
                <i class="fas fa-comments fa-fw"></i>Nachrichten
            </div>
            <div id="collapse_messages" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="messages_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=messages" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="enable_mail_module_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_mail_module" id="enable_mail_module" value="1" class="" checked="checked">
                                        E-Mails aktivieren
                                </label>
                                                    <div class="help-block">E-Mails innerhalb des Nachrichten-Moduls können über diese Einstellung aktiviert oder deaktiviert werden. Falls der Server keinen E-Mailversand unterstützt, sollte das Modul deaktiviert werden. (Voreinstellung: Aktiviert)</div>
                    </div>
    </div>
</div><div id="enable_pm_module_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_pm_module" id="enable_pm_module" value="1" class="" checked="checked">
                                        Private Nachrichten aktivieren
                                </label>
                                                    <div class="help-block">Private Nachrichten können über diese Einstellung aktiviert oder deaktiviert werden. (Voreinstellung: Aktiviert)</div>
                    </div>
    </div>
</div><div id="enable_mail_captcha_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="enable_mail_captcha" id="enable_mail_captcha" value="1" class="" checked="checked">
                                        Captcha aktivieren
                                </label>
                                                    <div class="help-block">Für nicht angemeldete Benutzer:innen wird im E-Mailformular bei aktiviertem Captcha ein alphanumerischer Code eingeblendet. Diesen muss die Benutzerin oder der Benutzer vor dem E-Mailversand korrekt eingeben. Dies soll sicherstellen, dass das Formular nicht von Spammern missbraucht werden kann. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="mail_template_group" class="form-group row ">
    <label for="mail_template" class="col-sm-3 control-label">
                E-Mail-Vorlage
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_template" name="mail_template">
                                                        <option value="">- Keine Vorlage -</option>
                                            <option value="Example">Example</option>
                                            <option value="Default" selected="selected">Default</option>
                                </select>

                            <div class="help-block">Hier kann eine HTML-Vorlagendatei aus dem Ordner <strong>adm_my_files/mail_templates</strong> ausgewählt werden. Beim Versand einer E-Mail wird der Inhalt dieser Datei in die E-Mail kopiert und folgende Variablen ersetzt: #sender#, #message#, #recipients#, #organization_name#, #organization_shortname#, #organization_website#. Weitere Informationen zu der Nutzung von E-Mail-Vorlagen findest du in der <a href="https://www.admidio.org/dokuwiki/doku.php?id=en:2.0:e-mail-templates">Dokumentation</a>.</div>
            </div>
</div>
<div id="mail_max_receiver_group" class="form-group row ">
    <label for="mail_max_receiver" class="col-sm-3 control-label">
                Maximale Anzahl Empfänger:innen für E-Mails
            </label>
    <div class="col-sm-9">
                <input type="number" name="mail_max_receiver" id="mail_max_receiver" value="10" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Dieser Wert gibt an, wie viele Empfänger:innen man für ein E-Mail auswählen kann. Eine Rolle wird als ein einzelner Empfänger verstanden.</div>
            </div>
</div>
<div id="mail_send_to_all_addresses_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_send_to_all_addresses" id="mail_send_to_all_addresses" value="1" class="" checked="checked">
                                        E-Mails an alle E-Mail-Adressen der Benutzerin bzw. des Benutzers senden
                                </label>
                                                    <div class="help-block">Ist diese Einstellung aktiviert, werden E-Mails an alle im Profil hinterlegten E-Mail-Adressen der Benutzerin bzw. des Benutzers gesendet. Ist die Einstellung deaktiviert, werden E-Mails nur an die E-Mail-Adresse aus dem Profilfeld mit dem internen Namen EMAIL gesendet. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="mail_show_former_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_show_former" id="mail_show_former" value="1" class="" checked="checked">
                                        E-Mails an Ehemalige senden
                                </label>
                                                    <div class="help-block">Ist diese Einstellung gesetzt, dann können E-Mails an einzelne ehemalige Mitglieder, sowie an alle ehemaligen Mitglieder einer Rolle gesendet werden. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="max_email_attachment_size_group" class="form-group row ">
    <label for="max_email_attachment_size" class="col-sm-3 control-label">
                Maximale Dateigröße für Anhänge (MB)
            </label>
    <div class="col-sm-9">
                <input type="number" name="max_email_attachment_size" id="max_email_attachment_size" value="1" class="form-control" min="0" max="999999" step="1">
            
                                    <div class="help-block">Benutzer:innen können nur Dateien anhängen, bei denen die Dateigröße kleiner als der hier angegebene Wert ist. Steht hier 0, so sind keine Anhänge im E-Mailmodul möglich. (Voreinstellung: 5MB)</div>
            </div>
</div>
<div id="mail_save_attachments_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_save_attachments" id="mail_save_attachments" value="1" class="" checked="checked">
                                        Anhänge speichern
                                </label>
                                                    <div class="help-block">E-Mail-Anhänge werden auf dem Webspace gespeichert und können nach dem Versand weiterhin in der gespeicherten E-Mail aufgerufen werden. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="mail_html_registered_users_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="mail_html_registered_users" id="mail_html_registered_users" value="1" class="" checked="checked">
                                        HTML-Mails
                                </label>
                                                    <div class="help-block">Die Erstellung und der Versand von HTML-Mails kann für registrierte Benutzer:innen aktiviert werden. Anstelle des normalen Textfeldes wird dann ein Javascript-Editor angezeigt über den der Text komfortabel editiert werden kann. Aus Sicherheitsgründen ist diese Funktion nicht für Gäste möglich.</div>
                    </div>
    </div>
</div><div id="mail_delivery_confirmation_group" class="form-group row ">
    <label for="mail_delivery_confirmation" class="col-sm-3 control-label">
                Lesebestätigung anfordern
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="mail_delivery_confirmation" name="mail_delivery_confirmation">
                                                        <option value="0" selected="selected">Deaktiviert</option>
                                            <option value="1">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Ist diese Option aktiviert, hat der Verfasser einer E-Mail die Möglichkeit eine Lesebestätigung anzufordern. Es hängt allerdings von den Einstellungen des E-Mailprogramms des Empfangenden ab, ob eine Lesebestätigung versendet wird. Der Empfangende kann dies auf seinen Wunsch unterdrücken.</div>
            </div>
</div>
<button id="btn_save_messages" name="btn_save_messages" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Lesebestätigung anfordern"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-profile" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_profile">
                <i class="fas fa-user fa-fw"></i>Profil
            </div>
            <div id="collapse_profile" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="profile_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=profile" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Profilfelder bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/profile-fields/profile_fields.php">
            <i class="fas fa-th-list"></i>Wechsel zur Profilfeld-Konfiguration</a>
                                                <div class="help-block">Neue Profilfelder und deren Eigenschaften können definiert, sowie von vorhandenen Profilfelder verändert werden. Die Felder können Kategorien zugeordnet und mit Rechten versehen werden, welche Rollen welche Profilfelder sehen oder bearbeiten können.</div>
            <div id="csrf-token_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<div id="profile_log_edit_fields_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="profile_log_edit_fields" id="profile_log_edit_fields" value="1" class="" checked="checked">
                                        Änderungen protokollieren
                                </label>
                                                    <div class="help-block">Änderungen in Profilfeldern werden für jede:n Benutzer:in und jedes Feld mitgeschrieben. Dabei wird der bisherige und der neue Wert, sowie die Benutzerin bzw. der Benutzer, der die Änderung durchgeführt hat, mit Zeitstempel gespeichert. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="profile_show_map_link_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="profile_show_map_link" id="profile_show_map_link" value="1" class="">
                                        Kartenlink anzeigen
                                </label>
                                                    <div class="help-block">Ist die Adresse im Profil hinterlegt, so werden neben der Adresse zwei Links zu Google-Maps angezeigt. Es wird der Wohnort der Benutzerin oder des Benutzers verlinkt und es wird die Route vom eigenen Wohnort zum Wohnort der angezeigten Benutzerin bzw. des angezeigten Benutzers verlinkt. Beim Aufruf der Links werden folgende Informationen der Profile an Google übertragen: Straße, Postleitzahl, Ort und Land. (Voreinstellung: nein)</div>
                    </div>
    </div>
</div><div id="profile_show_roles_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="profile_show_roles" id="profile_show_roles" value="1" class="" checked="checked">
                                        Rollenmitgliedschaften anzeigen
                                </label>
                                                    <div class="help-block">Es wird ein Kasten mit allen Rollen dieser Organisation angezeigt, bei denen die Benutzerin oder der Benutzer Mitglied ist. Dazu werden die entsprechenden Berechtigungen und das Eintrittsdatum aufgelistet. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="profile_show_former_roles_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="profile_show_former_roles" id="profile_show_former_roles" value="1" class="" checked="checked">
                                        Ehemalige Rollenmitgliedschaften anzeigen
                                </label>
                                                    <div class="help-block">Es wird ein Kasten mit allen Rollen dieser Organisation angezeigt, bei denen die Benutzerin oder der Benutzer Mitglied war. Dazu wird das entsprechende Eintritts- und Austrittsdatum angezeigt. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="profile_photo_storage_group" class="form-group row ">
    <label for="profile_photo_storage" class="col-sm-3 control-label">
                Speicherort der Profilbilder
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="profile_photo_storage" name="profile_photo_storage">
                                                        <option value="0" selected="selected">Datenbank</option>
                                            <option value="1">Ordner</option>
                                </select>

                                                <div class="help-block">Hier kann ausgewählt werden, ob die Profilbilder in der Datenbank oder im Ordner adm_my_files gespeichert werden. Beim Wechsel zwischen den Einstellungen werden die bisherigen Bilder nicht übernommen. (Voreinstellung: Datenbank)</div>
            </div>
</div>
<button id="btn_save_profile" name="btn_save_profile" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Speicherort der Profilbilder"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-events" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_events">
                <i class="fas fa-calendar-alt fa-fw"></i>Veranstaltungen
            </div>
            <div id="collapse_events" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="events_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=events" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="events_module_enabled_group" class="form-group row ">
    <label for="events_module_enabled" class="col-sm-3 control-label">
                Zugriff auf Modul
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="events_module_enabled" name="events_module_enabled">
                                                        <option value="0">Deaktiviert</option>
                                            <option value="1" selected="selected">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Das Modul kann über diese Einstellung komplett deaktiviert oder nur für angemeldete Benutzer:innen freigegeben werden. Haben nur angemeldete Benutzer:innen Zugriff, so wird das Modul für Gäste ausgeblendet. Der Web-Feed ist dann allerdings für beide Gruppen nicht mehr aufrufbar. (Voreinstellung: Aktiviert)</div>
            </div>
</div>
<div id="events_view_group" class="form-group row ">
    <label for="events_view" class="col-sm-3 control-label">
                Standard-Darstellung
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="events_view" name="events_view">
                                                        <option value="detail" selected="selected">Detailliert</option>
                                            <option value="compact">Kompakt</option>
                                            <option value="participants">Kompakt - Teilnehmende</option>
                                            <option value="description">Kompakt - Beschreibung</option>
                                </select>

                            <div class="help-block">Es kann ein Anzeigemodus für die Veranstaltungen vorausgewählt werden. Im Modus <strong>Detailliert</strong> werden alle Informationen zu einer Veranstaltung in einem Kasten angezeigt. Im Anzeigemodus <strong>Kompakt</strong> werden die wichtigsten Veranstaltungsinformationen in einer kompakten Liste angezeigt. (Standardeinstellung: Detailliert)</div>
            </div>
</div>
<div id="events_per_page_group" class="form-group row ">
    <label for="events_per_page" class="col-sm-3 control-label">
                Anzahl Einträge pro Seite
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="events_per_page" name="events_per_page">
                                                        <option value="10" selected="selected">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                </select>

                            <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 10)</div>
            </div>
</div>
<div id="events_ical_export_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="events_ical_export_enabled" id="events_ical_export_enabled" value="1" class="" checked="checked">
                                        iCal-Export ermöglichen
                                </label>
                                                    <div class="help-block">Ist diese Funktion aktiviert, lassen sich einzelne Veranstaltungen oder alle Veranstaltungen in einem festgelegten Zeitraum herunterladen. Auch das Abonnieren der Veranstaltungen mit einer Kalendersoftware wird möglich. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="events_ical_days_past_group" class="form-group row ">
    <label for="events_ical_days_past" class="col-sm-3 control-label">
                Anzahl iCal Tage Vergangenheit
            </label>
    <div class="col-sm-9">
                <input type="number" name="events_ical_days_past" id="events_ical_days_past" value="30" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Tage in der Vergangenheit, die in einem iCal-Download oder -Abo einbezogen werden sollen. Wird der iCal-Download innerhalb des Veranstaltungsmoduls gestartet, dann wird diese Einstellung ignoriert und die gefilterten Veranstaltungen exportiert. (Voreinstellung: 30)</div>
            </div>
</div>
<div id="events_ical_days_future_group" class="form-group row ">
    <label for="events_ical_days_future" class="col-sm-3 control-label">
                Anzahl iCal Tage Zukunft
            </label>
    <div class="col-sm-9">
                <input type="number" name="events_ical_days_future" id="events_ical_days_future" value="365" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Tage in der Zukunft, die in einem iCal-Download oder -Abo einbezogen werden sollen. Wird der iCal-Download innerhalb des Veranstaltungsmoduls gestartet, dann wird diese Einstellung ignoriert und die gefilterten Veranstaltungen exportiert. (Voreinstellung: 365)</div>
            </div>
</div>
<div id="events_show_map_link_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="events_show_map_link" id="events_show_map_link" value="1" class="" checked="checked">
                                        Kartenlink anzeigen
                                </label>
                                                    <div class="help-block">Wird ein Ort angegeben, so wird versucht ein Link zu Google-Maps zu erstellen, welcher den Ort anzeigt, sowie eine Routenlink ausgehend vom eigenen Wohnort. (Voreinstellung: ja)</div>
                    </div>
    </div>
</div><div id="events_list_configuration_group" class="form-group row ">
    <label for="events_list_configuration" class="col-sm-3 control-label">
                Standardkonfiguration der Liste aller Teilnehmenden
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="events_list_configuration" name="events_list_configuration">
                                                        <option value="1">Adressliste</option>
                                            <option value="3">Kontaktdaten</option>
                                            <option value="6">Kontakte</option>
                                            <option value="4">Mitgliedschaft</option>
                                            <option value="5" selected="selected">Teilnehmende</option>
                                            <option value="2">Telefonliste</option>
                                </select>

                                                <div class="help-block">Eine der hier vorgegebenen Konfigurationen kann zur Standardkonfiguration für die Liste aller Teilnehmenden an Veranstaltungen dieser Organisation gemacht werden. Teilnehmende von Veranstaltungen werden mit dieser Konfiguration angezeigt.</div>
            </div>
</div>
<div id="events_save_cancellations_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="events_save_cancellations" id="events_save_cancellations" value="1" class="" checked="checked">
                                        Absagen zu Veranstaltungen speichern
                                </label>
                                                    <div class="help-block">Absagen von Teilnehmenden zu Veranstaltungen können gespeichert werden. Die Absagen werden dann in der Liste der Teilnehmenden ebenfalls angezeigt. Wird diese Option deaktiviert, dann werden Absagen nicht gespeichert und können in der Liste der Teilnehmenden auch nicht eingesehen werden. Diese Option gilt ab dem Zeitpunkt der Einstellung und kann rückwirkend nicht mehr angewendet werden! (Voreinstellung : Ja)</div>
                    </div>
    </div>
</div><div id="events_may_take_part_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="events_may_take_part" id="events_may_take_part" value="1" class="">
                                        Mit Vorbehalt teilnehmen
                                </label>
                                <div class="help-block">Wenn diese Option aktiviert ist, ist bei der Anmeldung zu einer Veranstaltung eine dritte Option <strong>Unter Vorbehalt</strong> zusätzlich zu <strong>Teilnehmen</strong> und <strong>Absagen</strong> verfügbar. (Standard: deaktiviert)</div>
                    </div>
    </div>
</div><div class="form-group form-custom-content row">
        <label class="col-sm-3">Kalender bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/categories/categories.php?type=EVT">
            <i class="fas fa-th-large"></i>Wechsel zur Kalenderverwaltung</a>
                                                <div class="help-block">Hier können Kalender angelegt und bearbeitet werden.</div>
            <div id="events_may_take_part_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<div id="events_rooms_enabled_group" class="form-group row ">
    <div class="offset-sm-3 col-sm-9">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="events_rooms_enabled" id="events_rooms_enabled" value="1" class="">
                                        Räume zuordnen
                                </label>
                                                    <div class="help-block">Es wird eine Auswahlbox für die verfügbaren Räume angezeigt, damit der Ersteller einer Veranstaltung einen Raum auswählen kann (Standardantwort: nein).</div>
                    </div>
    </div>
</div><div class="form-group form-custom-content row">
        <label class="col-sm-3">Räume bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/rooms/rooms.php">
            <i class="fas fa-home"></i>Wechsel zur Raumverwaltung</a>
                                                <div class="help-block">Hier können Räume für Veranstaltungen angelegt und bearbeitet werden.</div>
            <div id="events_rooms_enabled_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_events" name="btn_save_events" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Räume bearbeiten"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        <div id="panel-links" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapse_links">
                <i class="fas fa-link fa-fw"></i>Weblinks
            </div>
            <div id="collapse_links" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_modules">
                <div class="card-body">
                    <form id="links_preferences_form" action="https://verein.fw-ottendorf.de/adm_program/modules/preferences/preferences_function.php?form=links" role="form" method="post" class="form-preferences form-horizontal form-dialog">
<div id="enable_weblinks_module_group" class="form-group row ">
    <label for="enable_weblinks_module" class="col-sm-3 control-label">
                Zugriff auf Modul
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="enable_weblinks_module" name="enable_weblinks_module">
                                                        <option value="0">Deaktiviert</option>
                                            <option value="1" selected="selected">Aktiviert</option>
                                            <option value="2">Nur für angemeldete Benutzer:innen</option>
                                </select>

                                                <div class="help-block">Das Modul kann über diese Einstellung komplett deaktiviert oder nur für angemeldete Benutzer:innen freigegeben werden. Haben nur angemeldete Benutzer:innen Zugriff, so wird das Modul für Gäste ausgeblendet. Der Web-Feed ist dann allerdings für beide Gruppen nicht mehr aufrufbar. (Voreinstellung: Aktiviert)</div>
            </div>
</div>
<div id="weblinks_per_page_group" class="form-group row ">
    <label for="weblinks_per_page" class="col-sm-3 control-label">
                Anzahl Einträge pro Seite
            </label>
    <div class="col-sm-9">
                <input type="number" name="weblinks_per_page" id="weblinks_per_page" value="0" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Anzahl der Einträge, die auf einer Seite angezeigt werden. Sind mehr Einträge vorhanden, wird der Seite eine Funktion zum Blättern hinzugefügt. Wenn der Wert 0 ist, werden alle Einträge auf einer Seite aufgelistet und Funktion zum Blättern ist deaktiviert. (Standardeinstellung: 0)</div>
            </div>
</div>
<div id="weblinks_target_group" class="form-group row ">
    <label for="weblinks_target" class="col-sm-3 control-label">
                Linkziel
            </label>
    <div class="col-sm-9">
        <select class="form-control" id="weblinks_target" name="weblinks_target">
                                                        <option value="_self">Gleiches Fenster</option>
                                            <option value="_blank" selected="selected">Neues Fenster</option>
                                </select>

                                                <div class="help-block">Hier wird angegeben, ob die ausgewählte Webseite im selben Browserfenster wie Admidio oder in einem neuen Browserfenster angezeigt werden soll.</div>
            </div>
</div>
<div id="weblinks_redirect_seconds_group" class="form-group row ">
    <label for="weblinks_redirect_seconds" class="col-sm-3 control-label">
                Anzeige Weiterleitung
            </label>
    <div class="col-sm-9">
                <input type="number" name="weblinks_redirect_seconds" id="weblinks_redirect_seconds" value="10" class="form-control" min="0" max="9999" step="1">
            
                                    <div class="help-block">Hier kann die automatische Weiterleitung für Links aktiviert werden. Es wird bei Aufruf eines Links aus dem Linkmodul zunächst eine Hinweisseite angezeigt, die auf das Verlassen der Admidioseiten hinweist. Nach vorgegebener Zeit in Sekunden wird dann der eigentliche Link aufgerufen. Wird der Redirect auf 0 gesetzt wird der Link ohne Anzeige der Hinweisseite direkt aufgerufen. (Voreinstellung: 10 Sekunden)</div>
            </div>
</div>
<div class="form-group form-custom-content row">
        <label class="col-sm-3">Kategorien bearbeiten</label>
        <div class="col-sm-9">
        <a class="btn btn-secondary" href="https://verein.fw-ottendorf.de/adm_program/modules/categories/categories.php?type=LNK">
            <i class="fas fa-th-large"></i>Wechsel zur Kategorie Verwaltung</a>
                            <div class="help-block">Hier können Kategorien angelegt und bearbeitet werden.</div>
            <div id="weblinks_redirect_seconds_alert" class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Beim Wechsel in diese Ansicht gehen alle nicht gespeicherten Einstellungen verloren.
    </div>
    </div>
</div>
<button id="btn_save_links" name="btn_save_links" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" data-admidio="">
            <i class="fa-check fas" data-toggle="tooltip" title="Kategorien bearbeiten"></i>
    Speichern
</button>



<div class="form-alert" style="display: none;">&nbsp;</div></form>
                </div>
            </div>
        </div>
    
        </div>
    </div>
</div>
    </main><?php }
}
