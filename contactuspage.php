<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    
     <div class="hero">


    <nav>
        <img src="images/logo.jpg" style="width:80px; height: 60px;">
        <div class="logo">Dressify</div>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="designerpage.php">Designer's Area</a></li>
            <li><a href="customerpage.php">Customer's Area</a></li>
            <li><a href="contactuspage.php">Contact Us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <div class="account-cart">
            <a href="myaccountpage.php">My account</a>
        
        </div>
    </nav>

    <section>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact us</h2>
            <p><strong>ADDRESS:</strong> Airport Road,Pathtameni,Atchvely,Jaffna.</p>
            <p><strong>PHONE:</strong> 0758210174</p>
            <p><strong>EMAIL:</strong> shanaranjan02@gmail.com</p>
        </div>
        
        <div class="contact-form">
            <h2>Get in touch</h2>
            <form action="php/contactfunc.php" method="POST">
                <input type="text" placeholder="Username" name='username' required>
                <input type="email" placeholder="Email" name='email' required>
                <input type="text" placeholder="Subject" name='subject' required>
                <textarea placeholder="Message" name='message' required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>
</div>
</body>
</html>