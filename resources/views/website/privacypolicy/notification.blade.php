<div id="popup-overlay" class="popup-overlay">
    <div class="popup-content">
      <h2>Cookie Consent</h2>
      <p>This website uses cookies to ensure you get the best experience. By continuing to use this site, you consent to the use of cookies.</p>
      <label>
        <input type="checkbox" id="consentCheckbox">
        I agree
      </label>
      <button id="acceptButton" disabled>Accept</button>
    </div>
  </div>
  
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var popupOverlay = document.getElementById('popup-overlay');
    var consentCheckbox = document.getElementById('consentCheckbox');
    var acceptButton = document.getElementById('acceptButton');
  
    consentCheckbox.addEventListener('change', function() {
      if (consentCheckbox.checked) {
        acceptButton.disabled = false;
      } else {
        acceptButton.disabled = true;
      }
    });
  
    acceptButton.addEventListener('click', function() {
      popupOverlay.style.display = 'none';
      // Store the user's consent in a cookie or session
    });
  
    // Check if the user has already given consent
    var userConsent = getCookie('cookie_consent');
    if (!userConsent) {
      popupOverlay.style.display = 'flex';
    }
  });
  
  
  </script>