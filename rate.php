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
  <form action="/submit-rating" method="POST">
    <label for="rating">How would you rate our service?</label>
    <div class="rating">
      <input type="radio" id="star5" name="rating" value="5">
      <label for="star5">&#9733;</label>
      <input type="radio" id="star4" name="rating" value="4">
      <label for="star4">&#9733;</label>
      <input type="radio" id="star3" name="rating" value="3">
      <label for="star3">&#9733;</label>
      <input type="radio" id="star2" name="rating" value="2">
      <label for="star2">&#9733;</label>
      <input type="radio" id="star1" name="rating" value="1">
      <label for="star1">&#9733;</label>
    </div>

    <label for="feedback">Tell us more about your experience (optional):</label>
    <textarea id="feedback" name="feedback" placeholder="Share your thoughts here..."></textarea>

    <button type="submit">Submit Your Feedback</button>
  </form>
</body>
</html>

