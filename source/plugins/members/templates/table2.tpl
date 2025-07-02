
<div class="content-header">
	<h1 class="module-headline">Mitglieder</h1>
	
	<a id="btn_save_common"  class=" offset-sm-3 btn btn-primary  margin-bottom" href="/members/add">
        <i class="fa-plus fas" title="add"></i>
		+ Mitglied hinzufügen
	</a>
</div>
<br />
<div class="table-wrapper">
    <div class="table-loading" id="tblLoader">
        <span class="spinner"></span>Daten werden geladen …
    </div>

    <table class="sort-table" id="tblMembers" style="display:none">
        <thead>
            <tr>
				<th class="sortable" data-field="number">Nummer</th>
                <th class="sortable" data-field="name">Name</th>
                <th class="sortable" data-field="first_name">Vorname</th>
				<th class="sortable" data-field="birthday">Geburtstag</th>
            </tr>
        </thead>
        <tbody>
		</tbody>
    </table>
</div>