<?php
require_once 'dconf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['customerName'];
    $bio = $_POST['customerBio'];
    $email = $_POST['customerEmail'];
    $phoneno = $_POST['customerPhoneNumber'];
    $image = $_FILES['customDesignUpload'];

    if ($image['error'] === 0) {
        $imageName = uniqid() . "-" . basename($image['name']);
        $uploadDir = "uploads/";
        $uploadFilePath = $uploadDir . $imageName;

        if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
            // Save to database
            $stmt = $conn->prepare("INSERT INTO Customers (name, bio , email , phone_no , image_url) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $name, $bio, $email, $phoneno, $uploadFilePath);

            if ($stmt->execute()) {
                echo "Dress uploaded successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Error uploading image.";
    }
}

$conn->close();
?>
