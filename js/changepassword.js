document.getElementById('changePasswordForm').addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent default form submission
  
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorElement = document.getElementById('error');
    const successElement = document.getElementById('success');
  
    // Clear previous messages
    errorElement.textContent = '';
    successElement.textContent = '';
  
    // Validate new passwords
    if (newPassword !== confirmPassword) {
      errorElement.textContent = 'New passwords do not match!';
      return;
    }
  
    if (newPassword.length < 8) {
      errorElement.textContent = 'New password must be at least 8 characters long!';
      return;
    }
  
    try {
      // Simulate an API call to update the password
      const response = await fetch('/api/change-password', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Authorization: `Bearer ${localStorage.getItem('authToken')}` // Include auth token if required
        },
        body: JSON.stringify({
          currentPassword,
          newPassword
        })
      });
  
      const data = await response.json();
  
      if (response.ok) {
        successElement.textContent = 'Password changed successfully!';
        document.getElementById('changePasswordForm').reset();
      } else {
        errorElement.textContent = data.message || 'Failed to change password.';
      }
    } catch (err) {
      errorElement.textContent = 'An error occurred. Please try again.';
      console.error(err);
    }
  });