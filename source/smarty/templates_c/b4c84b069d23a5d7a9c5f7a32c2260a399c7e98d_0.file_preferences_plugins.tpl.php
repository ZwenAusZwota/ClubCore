<?php
/* Smarty version 5.5.1, created on 2025-06-30 15:18:47
  from 'file:preferences_plugins.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68628eb77d1bf0_76138841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c84b069d23a5d7a9c5f7a32c2260a399c7e98d' => 
    array (
      0 => 'preferences_plugins.tpl',
      1 => 1751289401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68628eb77d1bf0_76138841 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><main class="content">
    <h2>Einstellungen</h2>
	  
	<ul id="tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a id="tabs_nav_common" class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings" data-toggle="tab" role="tab">Allgemein</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_themes" class="nav-link" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
/settings/themes" data-toggle="tab" role="tab">Themes</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_plugins" class="nav-link active" href="<?php echo $_smarty_tpl->getValue('mainURL');?>
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
				<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('plugins'), 'plugin');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plugin')->value) {
$foreach0DoElse = false;
?>
				<div id="panel-common" class="card">
					<div class="card-header" data-toggle="collapse" data-target="#collapse_common">
						<i class="fas fa-cog fa-fw"></i><?php echo $_smarty_tpl->getValue('plugin')->title;?>

					</div>
					<div id="collapse_common" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
						<div class="card-body">
							<form id="common_preferences_form"  role="form" method="post" class="form-preferences form-horizontal form-dialog" >
								<div id="pref_name" class="form-group row form-group-required">
									<label for="name" class="col-sm-3 control-label">
										<?php echo $_smarty_tpl->getValue('i18n')->get("PREF_NAME");?>

									</label>
									<div class="col-sm-9">
										<?php echo $_smarty_tpl->getValue('plugin')->plugin_name;?>

									</div>
								</div>
								<div id="pref_version" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										<?php echo $_smarty_tpl->getValue('i18n')->get("PREF_VERSION");?>

									</label>
									<div class="col-sm-9">
										<?php echo $_smarty_tpl->getValue('plugin')->plugin_version;?>

									</div>
								</div>
								<div id="pref_author" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										<?php echo $_smarty_tpl->getValue('i18n')->get("PREF_AUTHOR");?>

									</label>
									<div class="col-sm-9">
										<a href="<?php echo $_smarty_tpl->getValue('plugin')->author_url;?>
"><?php echo $_smarty_tpl->getValue('plugin')->author;?>
</a>
									</div>
								</div>
								<div id="pref_STATUS" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										<?php echo $_smarty_tpl->getValue('i18n')->get("PREF_STATUS");?>

									</label>
									<div class="col-sm-9">
										<?php if ($_smarty_tpl->getValue('plugin')->active == 1) {
echo $_smarty_tpl->getValue('i18n')->get("SYS_ACTIVE");
} else {
echo $_smarty_tpl->getValue('i18n')->get("SYS_INACTIVE");
}?> <button><?php if ($_smarty_tpl->getValue('plugin')->active == 1) {?> deaktivieren<?php } else { ?>aktivieren<?php }?></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</div>
</main><?php }
}
