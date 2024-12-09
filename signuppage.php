<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
        </div>
        <div class="right-section">
            <h2>Sign Up</h2>
            <form action = "myfunc.php" method = "POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Name...">

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email address...">

                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Username...">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password...">

                <label for="repeat-password">Repeat Password</label>
                <input type="password" id="repeat-password" placeholder="Repeat Password...">

                <div class="terms">
                    <input type="checkbox" id="terms">
                    <label for="terms">I agree to the <a href="#">Terms of User</a></label>
                </div>

                <button type="submit" class="sign-up-btn"><a href="homepage.html">Sign Up</a></button>
            </form>
        </div>
    </div>
    <?php
    require_once 'dbconf.php';	
    require_once 'myfunc.php';	
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //echo "Got the POST request from client";
        
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            AddSignupDetails($connect,$name,$email,$user_name,$password);
}
?>
</body>
</html>