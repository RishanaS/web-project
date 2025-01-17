<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rate Our Fashion Design Services</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 20px;
      background-color: #f9f9f9;
      color: #333;
    }
    h1 {
      text-align: center;
      color: #4CAF50;
    }
    form {
      max-width: 500px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .rating {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }
    .rating input[type="radio"] {
      display: none;
    }
    .rating label {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
    }
    .rating label:hover,
    .rating label:hover ~ label,
    .rating input[type="radio"]:checked ~ label {
      color: #FFD700;
    }
    textarea {
      width: 100%;
      height: 120px;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      resize: vertical;
    }
    button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Rate Your Experience</h1>
  <form action="php/feedbackfunc.php" method="POST">
  <input type="text" placeholder="Username" name='username' required>
  <input type="email" placeholder="Email" name='email' required>

    <label for="feedback">Tell us more about your experience (optional):</label>
    <textarea id="feedback" name="feedback" placeholder="Share your thoughts here..."></textarea>

    <button type="submit">Submit Your Feedback</button>
  </form>
</body>
</html>

