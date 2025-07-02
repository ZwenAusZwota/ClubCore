/* modal-login.js
 * Öffnet das Login-Modal, führt den Login per AJAX durch
 * und aktualisiert die Seite nach erfolgreicher Anmeldung.
 * benötigt jQuery ≥ 3.5
 */

$(function () {

  /* ---------- Elemente ---------- */
  const $modal       = $('#loginModal');
  const $loginBtn    = $('#login-button');
  const $closeBtn    = $modal.find('.close-modal');
  const $form        = $modal.find('form');
  const $firstInput  = $('#login_name');
  const $submitBtn   = $form.find('button[type="submit"]');
  const $errorBox    = $('<div class="login-error" />').prependTo($form); // Fehlerfeld

  /* ---------- Modal öffnen ---------- */
  $loginBtn.on('click', function (e) {
    e.preventDefault();
    $modal.css('display', 'flex').hide().fadeIn(200);
    $('body').addClass('modal-open');
    $errorBox.empty();                // alte Fehlermeldungen löschen
    $firstInput.trigger('focus');
  });

  /* ---------- Modal schließen ---------- */
  function closeModal () {
    $modal.fadeOut(200, () => $modal.hide());
    $('body').removeClass('modal-open');
    $loginBtn.trigger('focus');
  }
  $closeBtn.on('click', closeModal);
  $modal.on('click', e => { if ($(e.target).is($modal)) closeModal(); });
  $(document).on('keyup', e => { if (e.key === 'Escape' && $modal.is(':visible')) closeModal(); });

  /* ---------- AJAX-Login ---------- */
  $form.on('submit', function (e) {
    e.preventDefault();

    $submitBtn.prop('disabled', true).text('Anmelden …');
    $errorBox.empty();

	var data = $form.serialize();
    $.ajax({
      type:     'POST',
      url:      $form.attr('action')+"?action=login",
      data:     data,
      dataType: 'html'             
    })
    .done(function (json) {

      /* Erfolg feststellen:
         - umleiten bei Erfolg per 302 auf die Startseite.
         - per AJAX erhalten wir stattdessen das Ziel-HTML.
         -> einfach Seite neu laden, um Menü & Sidebar zu aktualisieren. */
		data = JSON.parse(json);
		if(data.valid){
			location.reload();
		}
    })
    .fail(function (jqXHR) {
      /* HTTP-Fehler (selten) */
      $errorBox.text('Serverfehler (' + jqXHR.status + '). Bitte später erneut versuchen.');
      $submitBtn.prop('disabled', false).text('Anmelden');
    })
    .always(function () {
      /* Wenn Admidio falsche Daten liefert, kommt trotzdem .done()
         mit einem Formular, das eine Fehlermeldung enthält.
         Wir prüfen, ob das Wort "login_error" (Admidio-Sprache) vorkommt. */
    })
    .done(function (data) {
		console.log(data);
      if (data.message.length) {
        /* hat eine Fehlermeldung ausgegeben */
        const msg = $(html).find('#message').text().trim() || 'Anmeldung fehlgeschlagen.';
        $errorBox.text(msg);
        $submitBtn.prop('disabled', false).text('Anmelden');
      }
      /* wenn #message nicht existiert → reload oben greift */
    });
  });

});
