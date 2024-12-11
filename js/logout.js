
// Function to handle user logout
function logout() {
  // Remove authentication tokens
  localStorage.removeItem('authToken'); // Assuming the token is stored in localStorage
  sessionStorage.removeItem('authToken'); // For sessionStorage (if used)

  // Optional: Clear other user-related data
  localStorage.removeItem('userInfo'); // Clear user info
  sessionStorage.clear(); // Clear session storage completely

  // Redirect to login page
  window.location.href = 'login.html';
}

// Execute logout on page load
window.onload = logout;
