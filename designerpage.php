<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Account Creation</title>
     <link rel="stylesheet" href="css/designer.css">
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
    <section>
    <div class="container">
        <h1>Designer's Area</h1>
        <form action="php/designerfunc.php" method="POST">
            <div class="form-group">
                <label for="designerName">Designer Name</label>
                <input type="text" id="designerName" name="designerName" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="designerBio">Bio</label>
                <textarea id="designerBio" name="designerBio" rows="4" placeholder="Tell us about yourself" required></textarea>
            </div>
            <div class="form-group">
                <label for="designerEmail">Contact Email</label>
                <input type="email" id="designerEmail" name="designerEmail" placeholder="Enter your email" required>
            </div>


            <div class="form-group">
                <label for="designercontactnumber">Contact Number</label>
                <input type="contactNumber" id="designercontactNumber" name="designercontactNumber" placeholder="Enter your phone number" required>
            </div>
    
            <div class="form-group">
                <label for="designUpload">Upload Design</label>
                <input type="file" id="designUpload" name="designUpload" accept="image/*" required>
            </div>

            <button type="submit">Create Account & Upload Design</button>
        </form>

    </div>
    <img src="images/fashiondesigner.png" class="feature-img">
</section>
    </div>
</body>
</html>