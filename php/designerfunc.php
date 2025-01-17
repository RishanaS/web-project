<?php
require_once 'dconf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['designerName'];
    $bio = $_POST['designerBio'];
    $email = $_POST['designerEmail'];
    $phoneno = $_POST['designercontactNumber'];
    $image = $_FILES['designUpload'];

    if ($image['error'] === 0) {
        $imageName = uniqid() . "-" . basename($image['name']);
        $uploadDir = "uploads/";
        $uploadFilePath = $uploadDir . $imageName;

        if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
            // Save to database
            $stmt = $conn->prepare("INSERT INTO Designers (name, bio , email , phone_no , image_url) VALUES (?, ?, ?, ?)");
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
