<div class="content-header">
	<h1 class="module-headline">Mein Profil</h1>
	<ul class="nav menu-function-node">
		<li class="nav-item">
			<a id="menu_item_profile_edit" class="nav-link btn btn-secondary" href="https://www.admidio.org/demo/adm_program/modules/profile/profile_new.php?user_uuid=7a854ed2-50db-49ee-9379-31d07f467d47">
				<i class="fas fa-edit fa-fw"/>Profil bearbeiten
                </a>
		</li>
		<li class="nav-item">
			<a id="menu_item_profile_password" class="nav-link btn btn-secondary openPopup" href="javascript:void(0);" data-href="https://www.admidio.org/demo/adm_program/modules/profile/password.php?user_uuid=7a854ed2-50db-49ee-9379-31d07f467d47">
				<i class="fas fa-key fa-fw"/>Passwort ändern
                </a>
		</li>
	</ul>
</div>
<div class="card field-group" id="user_data_panel">
	<div class="card-header">Basisdaten</div>
	<div class="card-body">
		<div class="row">
			<div class="col-sm-8">
				<form id="profile_basic_data_form" action="" role="form" method="post" class=" form-horizontal form-dialog">
					<input type="text" name="csrf-token" id="csrf-token" value="SivE2oWH9rUYRBHmSaGDAWVPkpXtxM" class="form-control invisible" hidden="hidden" />
					<script type="text/javascript">$(function() { $(".form-dialog:first *:input:enabled:visible:not([readonly]):first").focus(); });</script>
					<div id="name_group" class="form-group row ">
						<label for="name" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<p class="form-control-static">{$user.first_name} {$user.name}<i class="fas fa-mars  fa-fw" data-toggle="tooltip" title="" data-original-title="Männlich"/>
							</p>
						</div>
					</div>
					<div id="email_group" class="form-group row ">
						<label for="email" class="col-sm-3 control-label">E-Mail</label>
						<div class="col-sm-9">
							<p class="form-control-static">
								<a href="" title="administrator@admidio.org" style="overflow: visible; display: inline;">{$user.email}</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="card field-group" id="profile_roles_box">
	<div class="card-header">Rollenmitgliedschaften<a class="btn btn-secondary float-right openPopup" id="profile_role_memberships_change" data-class="modal-lg" href="javascript:void(0);" data-href="https://www.admidio.org/demo/adm_program/modules/profile/roles.php?user_uuid=7a854ed2-50db-49ee-9379-31d07f467d47&amp;inline=1">
		<i class="fas fa-edit"/>Bearbeiten</a>
	</div>
	<div class="card-body" id="profile_roles_box_body">
		<ul class="list-group list-roles-assign" id="role_list">
			<li class="list-group-item" id="role_1">
				<span><a href="https://www.admidio.org/demo/adm_program/modules/groups-roles/lists_show.php?rol_ids=1" title="Gruppe aller Administratorinnen und Administratoren des Systems">Administrator:in</a>&nbsp;
				</span>
				<span class="float-right text-right">
					<a>
						<i class="fas fa-edit invisible"/>
					</a>
					<a>
						<i class="fas fa-trash-alt invisible"/>
					</a>
				</span>
			</li>
			<li class="list-group-item" id="role_2">
				<span><a href="https://www.admidio.org/demo/adm_program/modules/groups-roles/lists_show.php?rol_ids=2" title="Alle Mitglieder der Organisation">Mitglied</a>&nbsp;
				</span>
				<span class="float-right text-right">
					<a class="icon-link" style="cursor:pointer;" href="javascript:profileJS.toggleDetailsOn('46da7d44-9209-45cb-acaa-f4b9ba7fa40b')">
						<i class="fas fa-edit" data-toggle="tooltip" title="" data-original-title="Datum ändern"/>
					</a>
					<a class="icon-link openPopup" href="javascript:void(0);" data-href="https://www.admidio.org/demo/adm_program/system/popup_message.php?type=pro_role&amp;element_id=role_2&amp;database_id=46da7d44-9209-45cb-acaa-f4b9ba7fa40b&amp;name=Mitglied">
						<i class="fas fa-trash-alt" data-toggle="tooltip" title="" data-original-title="Mitgliedschaft beenden"/>
					</a>
				</span>
			</li>
			<li class="list-group-item" id="role_3">
				<span><a href="https://www.admidio.org/demo/adm_program/modules/groups-roles/lists_show.php?rol_ids=3" title="Vorstand des Vereins">Vorstand</a>&nbsp;
				</span>
				<span class="float-right text-right">
					<a class="icon-link" style="cursor:pointer;" href="javascript:profileJS.toggleDetailsOn('9af70a15-fc26-4a3f-af48-733b3f5cde39')">
						<i class="fas fa-edit" data-toggle="tooltip" title="" data-original-title="Datum ändern"/>
					</a>
					<a class="icon-link openPopup" href="javascript:void(0);" data-href="https://www.admidio.org/demo/adm_program/system/popup_message.php?type=pro_role&amp;element_id=role_3&amp;database_id=9af70a15-fc26-4a3f-af48-733b3f5cde39&amp;name=Vorstand">
						<i class="fas fa-trash-alt" data-toggle="tooltip" title="" data-original-title="Mitgliedschaft beenden"/>
					</a>
				</span>
			</li>
		</ul>
	</div>
</div>