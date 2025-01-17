<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Account Creation</title>
    <link rel="stylesheet" href="css/customer.css">
</head>
<body>
    <div class="hero">

    <nav>
        <img src="images/logo.jpg" style="width:80px; height: 60px;">
        <div class="logo">Dressify</div>
        <ul>
            <li><a href="#"><a href="homepage.php">Home</a></a></li>
            <li><a href="#"><a href="categories.php">Categories</a></a></li>
            <li><a href="#"><a href="designerpage.php">Designer's Area</a></a></li>
            <li><a href="#"><a href="customerpage.php">Customer's Area</a></a></li>
            <li><a href="#"><a href="contactuspage.php">Contact Us</a></a></li>
            <li><a href="#"><a href="feedback.php">Feedback</a></a></li>
        </ul>
        <div class="account-cart">
            <a href="#"><a href="myaccountpage.php">My account</a></a>
        
        </div>
    </nav>
    <div class="container">
        <h1>Create Customer Account</h1>
        <form action="php/customerfunc.php" method="POST">
            <!-- Customer Name -->
            <div class="form-group">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" name="customerName" placeholder="Enter your name" required>
            </div>

            <!-- Customer Bio -->
            <div class="form-group">
                <label for="customerBio">Bio</label>
                <textarea id="customerBio" name="customerBio" rows="4" placeholder="Tell us about your style preferences" required></textarea>
            </div>

            <!-- Contact Email -->
            <div class="form-group">
                <label for="customerEmail">Contact Email</label>
                <input type="email" id="customerEmail" name="customerEmail" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="customerPhoneNumber">contact Number</label>
                <input type="PhoneNumber" id="customerPhoneNumber" name="customerPhoneNumber" placeholder="Enter your phone number" required>
            </div>

            <!-- Upload Custom Design -->
            <div class="form-group">
                <label for="customDesignUpload">Upload Custom Design</label>
                <input type="file" id="customDesignUpload" name="customDesignUpload" accept="image/*" required>
            </div>

            <button type="submit">Submit Design & Create Account</button>
        </form>
    </div>
</div>
</body>
</html>