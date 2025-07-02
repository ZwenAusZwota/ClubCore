<?php
/* Smarty version 5.5.1, created on 2025-06-04 21:18:10
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68409bf2601815_81259403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382e015bdecd8c61aee5c9c164a7d07f824e4d03' => 
    array (
      0 => 'profile.tpl',
      1 => 1749044647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68409bf2601815_81259403 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/www/htdocs/w00a13e2/ffw_verein/themes/default/templates';
?><div class="content-header">
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
					<?php echo '<script'; ?>
 type="text/javascript">$(function() { $(".form-dialog:first *:input:enabled:visible:not([readonly]):first").focus(); });<?php echo '</script'; ?>
>
					<div id="name_group" class="form-group row ">
						<label for="name" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<p class="form-control-static"><?php echo $_smarty_tpl->getValue('user')['first_name'];?>
 <?php echo $_smarty_tpl->getValue('user')['name'];?>
<i class="fas fa-mars  fa-fw" data-toggle="tooltip" title="" data-original-title="Männlich"/>
							</p>
						</div>
					</div>
					<div id="email_group" class="form-group row ">
						<label for="email" class="col-sm-3 control-label">E-Mail</label>
						<div class="col-sm-9">
							<p class="form-control-static">
								<a href="" title="administrator@admidio.org" style="overflow: visible; display: inline;"><?php echo $_smarty_tpl->getValue('user')['email'];?>
</a>
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
</div><?php }
}
