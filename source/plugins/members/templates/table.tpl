<div class="content-header">
	<h1 class="module-headline">Mitglied - Adressliste</h1>
	<ul class="nav menu-function-node">
		<li class="nav-item">
			<a id="menu_item_lists_print_view" class="nav-link btn btn-secondary" href="javascript:void(0);">
				<i class="fas fa-print fa-fw"/>Druckvorschau
		</a>
		</li>
		<li class="nav-item">
			<a id="menu_item_lists_assign_members" class="nav-link btn btn-secondary" href="https://www.admidio.org/demo/adm_program/modules/groups-roles/members_assignment.php?role_uuid=d1dc4c6e-eb17-4d1a-a491-237257f6b1fb">
				<i class="fas fa-user-plus fa-fw"/>Mitglied hinzufügen
		</a>
		</li>
		<li class="nav-item">
			<a id="menu_item_mail_to_list" class="nav-link btn btn-secondary" href="javascript:void(0);">
				<i class="fas fa-envelope fa-fw"/>E-Mail an Liste
		</a>
		</li>
	</ul>
</div>
<h5 class="content-subheader">Allgemein</h5>
<div id="adm_lists_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<div class="dataTables_length" id="adm_lists_table_length">
				<label>
					<select name="adm_lists_table_length" aria-controls="adm_lists_table" class="custom-select custom-select-sm form-control form-control-sm">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select> Zeilen anzeigen</label>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div id="adm_lists_table_filter" class="dataTables_filter">
				<label>Suche:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="adm_lists_table"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table id="adm_lists_table" class="table table-condensed table-hover dataTable no-footer dtr-inline" width="100%" aria-describedby="adm_lists_table_info" style="width: 100%;">
					<thead>
						<tr>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 83px;" aria-label="Nr.: aktivieren, um Spalte aufsteigend zu sortieren">Nr.</th>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 199px;" aria-label="Nachname: aktivieren, um Spalte aufsteigend zu sortieren">Nachname</th>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 173px;" aria-label="Vorname: aktivieren, um Spalte aufsteigend zu sortieren">Vorname</th>
							<!--<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 207px;" aria-label="Geburtstag: aktivieren, um Spalte aufsteigend zu sortieren">Geburtstag</th>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 298px;" aria-label="Straße: aktivieren, um Spalte aufsteigend zu sortieren">Straße</th>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 97px;" aria-label="PLZ: aktivieren, um Spalte aufsteigend zu sortieren">PLZ</th>
							<th class="text-left sorting" tabindex="0" aria-controls="adm_lists_table" rowspan="1" colspan="1" style="width: 238px;" aria-label="Ort: aktivieren, um Spalte aufsteigend zu sortieren">Ort</th>-->
						</tr>
					</thead>
					<tbody>
					{foreach $members as $member}
						<tr nobr="true" class="odd">
							<td class="text-left dtr-control" tabindex="0">
								<a href="">{$member.member_id}</a>
							</td>
							<td class="text-left">
								<a href="">{$member.name}</a>
							</td>
							<td class="text-left">
								{$member.first_name}
							</td>
							<!--<td class="text-left">05.06.2000</td>
							<td class="text-left">Blumenwiese 23</td>
							<td class="text-left">12345</td>
							<td class="text-left">Müllerhausen</td>-->
						</tr>
						{/foreach}
						<!--<tr nobr="true" class="even">
							<td class="text-left dtr-control" tabindex="0">
								<a href="https://www.admidio.org/demo/adm_program/modules/profile/profile.php?user_uuid=f4361cf5-0b58-4602-b6f9-9ce4535b111f">2</a>
							</td>
							<td class="text-left">
								<a href="https://www.admidio.org/demo/adm_program/modules/profile/profile.php?user_uuid=f4361cf5-0b58-4602-b6f9-9ce4535b111f">Allegre</a>
							</td>
							<td class="text-left">
								<a href="https://www.admidio.org/demo/adm_program/modules/profile/profile.php?user_uuid=f4361cf5-0b58-4602-b6f9-9ce4535b111f">Dagobert</a>
							</td>
							<td class="text-left">02.01.1988</td>
							<td class="text-left">Blumenwiese 24</td>
							<td class="text-left">12345</td>
							<td class="text-left">Müllerhausen</td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="dataTables_info" id="adm_lists_table_info" role="status" aria-live="polite">1 bis 25 von 147 Einträgen</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="dataTables_paginate paging_simple_numbers" id="adm_lists_table_paginate">
					<ul class="pagination">
						<!--<li class="paginate_button page-item previous disabled" id="adm_lists_table_previous">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="previous" tabindex="0" class="page-link">Zurück</a>
						</li>
						<li class="paginate_button page-item active">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="0" tabindex="0" class="page-link">1</a>
						</li>
						<li class="paginate_button page-item ">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="1" tabindex="0" class="page-link">2</a>
						</li>
						<li class="paginate_button page-item ">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="2" tabindex="0" class="page-link">3</a>
						</li>
						<li class="paginate_button page-item ">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="3" tabindex="0" class="page-link">4</a>
						</li>
						<li class="paginate_button page-item ">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="4" tabindex="0" class="page-link">5</a>
						</li>
						<li class="paginate_button page-item ">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="5" tabindex="0" class="page-link">6</a>
						</li>
						<li class="paginate_button page-item next" id="adm_lists_table_next">
							<a href="#" aria-controls="adm_lists_table" data-dt-idx="next" tabindex="0" class="page-link">Nächste</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>