// updateEmail.js

document.getElementById('updateEmailForm').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent form submission
  
    const currentEmail = document.getElementById('currentEmail').value;
    const newEmail = document.getElementById('newEmail').value;
    const errorElement = document.getElementById('error');
    const successElement = document.getElementById('success');
  
    // Clear previous messages
    errorElement.textContent = '';
    successElement.textContent = '';
  
    // Basic validation for email format
    if (!validateEmail(newEmail)) {
      errorElement.textContent = 'Please enter a valid email address.';
      return;
    }
  
    try {
      // Simulate an API call to update the email
      const response = await fetch('/api/update-email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Authorization: `Bearer ${localStorage.getItem('authToken')}` // Include auth token if required
        },
        body: JSON.stringify({
          currentEmail,
          newEmail
        })
      });
  
      const data = await response.json();
  
      if (response.ok) {
        successElement.textContent = 'Email updated successfully!';
        document.getElementById('newEmail').value = ''; // Clear the input field
      } else {
        errorElement.textContent = data.message || 'Failed to update email.';
      }
    } catch (err) {
      errorElement.textContent = 'An error occurred. Please try again.';
      console.error(err);
    }
  });
  
  // Utility function to validate email format
  function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  // Prefill the current email (mock for demo purposes)
  document.getElementById('currentEmail').value = localStorage.getItem('userEmail') || 'user@example.com';
  