<div class="form-notice">{$message}</div>
<div class="content-header">
	<h1 class="module-headline">Mitgliedsdaten bearbeiten</h1>
</div>
	<ul id="tabs" class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a id="tabs_nav_common" class="nav-link active" href="#" data-toggle="tab" role="tab">Stammdaten</a>
		</li>

	</ul>

<div id="tab-content" class="tab-content">
	<div class="tab-pane fade" id="tabs-common" role="tabpanel">
		<div class="accordion" id="accordion_preferences">
			<div id="panel-common" class="card">
				<div class="card-header" data-toggle="collapse" data-target="#collapse_common">
					<i class="fas fa-cog fa-fw"></i>Allgemein
				</div>
				<div id="collapse_common" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_preferences">
					<div class="card-body">
						<form id="edit_profile_form" action="/members/{$sub}" role="form" method="post" class="form-preferences form-horizontal form-dialog">
						<input type="hidden" name="member_id" id="member_id" value="{$member.member_id}" />
							<div id="name_group" class="form-group row form-group-required">
								<label for="name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" name="name" id="name" value="{$member.name}" class="form-control" maxlength="100" required="required"/>
								</div>
							</div>
							<div id="first_name_group" class="form-group row form-group-required">
								<label for="first_name" class="col-sm-3 control-label">Vorname</label>
								<div class="col-sm-9">
									<input type="text" name="first_name" id="first_name" value="{$member.first_name}" class="form-control" maxlength="100" required="required"/>
								</div>
							</div>
							<div id="email_group" class="form-group row form-group-required">
								<label for="email" class="col-sm-3 control-label">E-Mail</label>
								<div class="col-sm-9">
									<input type="email" name="email" id="email" value="{$member.email}" class="form-control" maxlength="254"/>
								</div>
							</div>
							<div id="address_group" class="form-group row form-group-required">
								<label for="address" class="col-sm-3 control-label">Adresse</label>
								<div class="col-sm-9">
									<textarea name="address" id="address" class="form-control" cols="30">{$member.address}</textarea>
								</div>
							</div>
							
							{if ($sub=='add')}
							<button id="btn_save_new" name="btn_save_new" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" >
										<i class="fa-check fas" data-toggle="tooltip" title="Währung"></i>
								Speichern + Neu
							</button>
							{/if}
							<button id="btn_save" name="btn_save" class=" offset-sm-3 btn btn-primary  margin-bottom" type="submit" >
										<i class="fa-check fas" data-toggle="tooltip" title="Währung"></i>
								Speichern
							</button>
						</form>
						
					</div>
				</div>
			</div>
			<!-- Zusatzdaten -->
						{if $user_meta_entries|@count > 0}
						<div class="card mt-3">
							<div class="card-header">Zusatzdaten <button id="btn_add_meta" name="btn_add_meta" class=" offset-sm-3 btn btn-primary  margin-bottom">+</button></div>
							<div class="card-body p-0">
								<table class="table table-striped table-hover mb-0">
									<thead class="thead-light">
										<tr>
											<th scope="col">Typ</th>
											<th scope="col">Datum</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$user_meta_entries item=meta}
										<tr>
											<td>{$meta.parameter|escape}</td>
											<td>{$meta.value}</td>
										</tr>
										{/foreach}
									</tbody>
								</table>
							</div>
						</div>
						{/if}
		</div>
	</div>
</div>