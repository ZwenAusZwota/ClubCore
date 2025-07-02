/*  ---------------------------------------------------------
    table-sort.js  –  AJAX-Laden + Sortieren mit Fehlerhandling
    --------------------------------------------------------- */

$(function () {

  const $table   = $("#tblMembers");
  const $tbody   = $table.find("tbody");
  const $loader  = $("#tblLoader");
  let   dataCache = [];
  let   currentCol = null;
  let   currentDir = "asc";

  /* ---------- 1 | Daten abrufen -------------------------------- */
  $.ajax({
      url:        "/ajax.php",       // <–– passe ggf. deinen Endpunkt an
      method:     "GET",
      dataType:   "json",
      timeout:    10000,                // 10 s Timeout
	  data: { "plugin":"members", "action":"get_list" }
  })
  .done(result => {
      /* A) Formatprüfung */
      /*if (!Array.isArray(result)) {
          showError("Unerwartetes Datenformat vom Server.<br>"+result.message);
          console.error("Erwartetes Array, erhalten:", result);
          return;
      }*/
	  if(!result.list){
		  showError("Unerwartetes Datenformat vom Server.<br>"+result.message);
	  }
      /* B) Leerprüfung */
      if (result.list.length === 0) {
          showError("Es wurden keine Daten zurückgegeben.");
          console.warn("Leeres Array vom Backend.");
          return;
      }

      dataCache = result.list;
      renderRows(result.list);
      showTable();
  })
  .fail((jqXHR, textStatus, errorThrown) => {
      /* Netzwerkfehler, Timeout, HTTP 4xx/5xx … */
      let msg = "Unbekannter Fehler.";
      if (textStatus === "timeout") {
          msg = "Zeitüberschreitung – der Server antwortet nicht.";
      } else if (jqXHR.status >= 400) {
          msg = `Serverfehler (${jqXHR.status}) – bitte später erneut versuchen.`;
      } else if (textStatus === "parsererror") {
          msg = "Fehler beim Verarbeiten der Serverantwort.";
      } else if (textStatus === "error") {
          msg = "Netzwerk- oder Serverfehler.";
      }
      showError(msg);
      console.error("AJAX-Fehler:", textStatus, errorThrown, jqXHR);
  });

  /* ---------- 2 | Hilfsfunktionen ------------------------------ */

  function renderRows(arr) {
      $tbody.empty();
      arr.forEach(o => {
          $tbody.append(`
              <tr>
				  <td>${o.member_id}</td>
                  <td><a href="/members/edit/${o.member_id}">${o.name}</a></td>
                  <td>${o.first_name}</td>
				  <td>${o.birthday}</td>
              </tr>`);
      });
  }

  function showTable() {
      $loader.hide();
      $table.show();
  }

  function showError(message) {
      $loader
          .html(`<span class="spinner" style="display:none"></span>${message}`)
          .css("color", "var(--fvo-red-dark)");
  }

  /* ---------- 3 | Klick-Sortierung ----------------------------- */
  $table.on("click", ".sortable", function () {
      const field = $(this).data("field");

      if (currentCol === field) {
          currentDir = currentDir === "asc" ? "desc" : "asc";
      } else {
          currentCol = field;
          currentDir = "asc";
          $(".sortable").removeClass("asc desc");
      }

      $(this).removeClass("asc desc").addClass(currentDir);

      const sorted = [...dataCache].sort((a, b) => {
          const v1 = (a[field] ?? "").toString().toLowerCase();
          const v2 = (b[field] ?? "").toString().toLowerCase();
          if (v1 === v2) return 0;
          return (v1 > v2 ? 1 : -1) * (currentDir === "asc" ? 1 : -1);
      });

      renderRows(sorted);
  });

});
