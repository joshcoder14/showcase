(function () {
  "use strict";

  const forms = document.querySelectorAll('.php-email-form');

  forms.forEach(function(form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const thisForm = this;
      const formSuccess = document.getElementById('formSuccess');
      const action = thisForm.getAttribute('action');
      const recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      const submitButton = thisForm.querySelector('#submit-button');
      
      if (!action) {
        showError('Form submission error: No action URL specified');
        return;
      }

      // Reset UI state
      if (formSuccess) formSuccess.style.display = 'none';
      showError(null);

      // Disable submit button during submission
      if (submitButton) submitButton.disabled = true;

      const formData = new FormData(thisForm);

      const handleSubmission = (token = null) => {
        if (token) formData.set('recaptcha-response', token);
        
        fetch(action, {
          method: 'POST',
          body: formData,
          headers: {'X-Requested-With': 'XMLHttpRequest'}
        })
        .then(response => {
          if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
          return response.text();
        })
        .then(data => {
          // Success handling
          if (data.trim() === 'OK' || data.includes('success')) {
            if (thisForm) thisForm.style.display = 'none';
            if (formSuccess) formSuccess.style.display = 'block';
            if (thisForm) thisForm.reset();
          } else {
            throw new Error(data || 'Form submission failed');
          }
        })
        .catch((error) => {
          console.error('Submission error:', error);
          showError('Message failed to send. Please try again later.');
        })
        .finally(() => {
          // Re-enable button if it exists
          if (submitButton) submitButton.disabled = false;
        });
      };

      if (recaptcha) {
        if (typeof grecaptcha !== "undefined") {
          grecaptcha.ready(() => {
            grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(handleSubmission)
              .catch(error => {
                console.error('reCAPTCHA error:', error);
                showError('Security verification failed. Please try again.');
                if (submitButton) submitButton.disabled = false;
              });
          });
        } else {
          showError('Security features not loaded. Please refresh the page.');
          if (submitButton) submitButton.disabled = false;
        }
      } else {
        handleSubmission();
      }
    });
  });

  function showError(message) {
    let errorContainer = document.getElementById('formError');
    if (!errorContainer) {
      errorContainer = document.createElement('div');
      errorContainer.id = 'formError';
      errorContainer.style.cssText = `
        color: #dc3545;
        background: #f8d7da;
        padding: 15px;
        margin: 20px 0;
        border-radius: 5px;
        display: none;
      `;
      const formsContainer = document.querySelector('.contact-form');
      if (formsContainer) formsContainer.prepend(errorContainer);
    }

    if (errorContainer) {
      errorContainer.textContent = message || '';
      errorContainer.style.display = message ? 'block' : 'none';
    }
  }
})();