/**
* PHP Email Form Validation - v3.6
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!');
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error);
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      if( response.ok ) {
        return response.text();
      } else {
        throw new Error(`${response.status} ${response.statusText} ${response.url}`); 
      }
    })
    .then(data => {
      const Currentdata = JSON.parse(data);
      console.log(Currentdata.message);
      if(Currentdata.message == 'Done'){
        // Decode the base64-encoded PDF file
        var pdfData = atob(Currentdata.pdf);
        var pdfArray = new Uint8Array(pdfData.length);
        for (var i = 0; i < pdfData.length; i++) {
            pdfArray[i] = pdfData.charCodeAt(i);
        }
        
        // Create a blob from the decoded PDF data
        var blob = new Blob([pdfArray], {type: 'application/pdf'});
        var url = URL.createObjectURL(blob);
        var link = document.createElement('a');
        link.href = url;
        link.download = 'reçu.pdf';
        link.click();

        thisForm.querySelector('.loading').classList.remove('d-block');
        thisForm.querySelector('.sent-message').classList.add('d-block');
      }else{
        thisForm.querySelector('.loading').classList.remove('d-block');
        thisForm.querySelector('.error-message').classList.add('d-block');
      }
      //thisForm.reset(); 
    })
    .catch((error) => {
      displayError(thisForm, 'Erreur veuillez réessayer plus tard');
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }

})();
