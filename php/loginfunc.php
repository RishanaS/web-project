<?php
require_once 'dconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["user"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT user_name, password FROM user WHERE user_name = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            //session_start(); // Start the session
            
           // $_SESSION["user_name"] = $row["username"]; // Save username in session
            
            header("Location: ../homepage.html");
            exit; // Ensure no further code runs after redirection
        } else {
            echo '<p class="error-message">Invalid username or password.</p>';
        }
    } else {
        echo '<p class="error-message">Invalid username or password.</p>';
    }

    $connect->close(); // Close the database connection
    header("Location: ../loginpage.html?error=" . urlencode($error));
    exit;
}
?>