<main class="content">
    <h2>Einstellungen</h2>
	  
	<ul id="tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a id="tabs_nav_common" class="nav-link" href="{$mainURL}/settings" data-toggle="tab" role="tab">Allgemein</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_themes" class="nav-link" href="{$mainURL}/settings/themes" data-toggle="tab" role="tab">Themes</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_plugins" class="nav-link active" href="{$mainURL}/settings/plugins" data-toggle="tab" role="tab">Plugins</a>
		</li>
		<li class="nav-item">
			<a id="tabs_nav_managers" class="nav-link" href="{$mainURL}/settings/managers" data-toggle="tab" role="tab">Vorstand</a>
		</li>
	</ul>

	<div id="preferences-tab-content" class="tab-content">
		<div class="tab-pane fade" id="tabs-common" role="tabpanel">
			<div class="accordion" id="accordion_preferences">
				{foreach $plugins as $plugin}
				<div id="panel-common" class="card">
					<div class="card-header" data-toggle="collapse" data-target="#collapse_common">
						<i class="fas fa-cog fa-fw"></i>{$plugin->title}
					</div>
					<div id="collapse_common" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
						<div class="card-body">
							<form id="common_preferences_form"  role="form" method="post" class="form-preferences form-horizontal form-dialog" >
								<div id="pref_name" class="form-group row form-group-required">
									<label for="name" class="col-sm-3 control-label">
										{$i18n->get("PREF_NAME")}
									</label>
									<div class="col-sm-9">
										{$plugin->plugin_name}
									</div>
								</div>
								<div id="pref_version" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										{$i18n->get("PREF_VERSION")}
									</label>
									<div class="col-sm-9">
										{$plugin->plugin_version}
									</div>
								</div>
								<div id="pref_author" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										{$i18n->get("PREF_AUTHOR")}
									</label>
									<div class="col-sm-9">
										<a href="{$plugin->author_url}">{$plugin->author}</a>
									</div>
								</div>
								<div id="pref_STATUS" class="form-group row form-group-required">
									<label class="col-sm-3 control-label">
										{$i18n->get("PREF_STATUS")}
									</label>
									<div class="col-sm-9">
										{if $plugin->active == 1}{$i18n->get("SYS_ACTIVE")}{else}{$i18n->get("SYS_INACTIVE")}{/if} <button>{if $plugin->active == 1} deaktivieren{else}aktivieren{/if}</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
</main>