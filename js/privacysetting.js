// privacySettings.js

// Load saved settings from localStorage (mocked for demo purposes)
document.addEventListener('DOMContentLoaded', () => {
    const savedSettings = JSON.parse(localStorage.getItem('privacySettings')) || {
      profileVisibility: false,
      emailSharing: false,
      promotionalEmails: false,
    };
  
    document.getElementById('profileVisibility').checked = savedSettings.profileVisibility;
    document.getElementById('emailSharing').checked = savedSettings.emailSharing;
    document.getElementById('promotionalEmails').checked = savedSettings.promotionalEmails;
  });
  
  // Handle form submission
  document.getElementById('privacySettingsForm').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent default form submission
  
    const profileVisibility = document.getElementById('profileVisibility').checked;
    const emailSharing = document.getElementById('emailSharing').checked;
    const promotionalEmails = document.getElementById('promotionalEmails').checked;
  
    const successElement = document.getElementById('success');
    const errorElement = document.getElementById('error');
  
    // Clear previous messages
    successElement.textContent = '';
    errorElement.textContent = '';
  
    try {
      // Mock API call to save settings
      const response = await fetch('/api/update-privacy-settings', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Authorization: `Bearer ${localStorage.getItem('authToken')}`, // Include auth token if required
        },
        body: JSON.stringify({
          profileVisibility,
          emailSharing,
          promotionalEmails,
        }),
      });
  
      const data = await response.json();
  
      if (response.ok) {
        // Save settings locally for persistence
        localStorage.setItem(
          'privacySettings',
          JSON.stringify({ profileVisibility, emailSharing, promotionalEmails })
        );
  
        successElement.textContent = 'Privacy settings updated successfully!';
      } else {
        errorElement.textContent = data.message || 'Failed to update privacy settings.';
      }
    } catch (err) {
      errorElement.textContent = 'An error occurred. Please try again.';
      console.error(err);
    }
  });
  