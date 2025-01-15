<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f9f9f9;
      color: #333;
    }
    .logout-container {
      text-align: center;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 400px;
    }
    h1 {
      color: #4CAF50;
      margin-bottom: 20px;
    }
    p {
      margin-bottom: 30px;
      font-size: 16px;
    }
    .logout-btn {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .logout-btn:hover {
      background-color: #45a049;
    }
    .cancel-btn {
      padding: 10px 20px;
      background-color: #ccc;
      color: #333;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin-left: 10px;
    }
    .cancel-btn:hover {
      background-color: #bbb;
    }
  </style>
</head>
<body>
  <div class="logout-container">
    <h1>Are you sure you want to log out?</h1>
    <p>If you log out, you will need to log in again to access your account.</p>
    <form action="/logout" method="POST">
      <button type="submit" class="logout-btn">Logout</button>
      <button type="button" class="cancel-btn" onclick="window.location.href='/'">Cancel</button>
    </form>
  </div>
</body>
</html>

