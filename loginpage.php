<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressify Login Form</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="back">
    <div class="login-container">
        <div class="overlay"></div>
        <div class="login-box">
            <h2>Welcome to Dressify</h2>
            <form action="php/loginfunc.php" method="POST">
                <div class="input-box">
                    <label for="username">Username:</label>
                    <input type="text" name='user' placeholder="Username" required>
                </div>
                <div class="input-box">
                    <label for="password">Password:</label>
                    <input type="password" name='password' placeholder="Password" required>
                </div>
                <button type="submit" name='login' class="login-btn">Login</button>
                <a href="#" class="forgot-password">Forgot password?</a>
            </form>
            <div class="social-login">
                <p>or login with</p>
                <a href="#" class="social-btn facebook">Sign in with Google</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>