<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: frontpage.php");
    exit;
}

include 'dconf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $name = $_POST['designerName'] ?? ''; 
    $email = $_POST['designerBio'] ?? ''; 
    $model = $_POST['model'] ?? ''; 
    $location = $_POST['location'] ?? '';
    $year = $_POST['year'] ?? null; 
    $color = $_POST['color'] ?? ''; 
    $price = $_POST['price'] ?? 0.0; 
    $phone1 = $_POST['phone1'] ?? null; 
    $phone2 = $_POST['phone2'] ?? null; 
    $description = htmlspecialchars($_POST['description']);
    //var_dump($_POST['description']);

    
    $category = $_POST['category'] ?? ''; 

    
    if (empty($category)) {
        echo "<script>alert('Please select a category for the vehicle.'); window.location.href='addvehicle.php';</script>";
        exit;
    }

    $approved = 0;  
    $status = 'available';  
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    
    
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = $_FILES['image']['type'];
    
    if (!in_array($file_type, $allowed_types)) {
        echo "<script>alert('Invalid file type. Only JPEG, PNG, and GIF are allowed.'); window.location.href='addvehicle.php';</script>";
        exit;
    }
    
    
    $target_file = $target_dir . basename($image);
    
  
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        echo "<script>alert('Failed to upload image. Please try again later.'); window.location.href='addvehicle.php';</script>";
        exit;
    }
    
    
    $sql = "INSERT INTO vehicles (owner_id, model, year, color, price, description, approved, status, created_at, phone1, phone2, image, category, location) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?)";
    
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        echo "<script>alert('Server error. Please contact support.'); window.location.href='addvehicle.php';</script>";
        exit;
    }
    
    
    $stmt->bind_param("isisdssssssss", $_SESSION['user_id'], $model, $year, $color, $price, $description, $approved, $status, $phone1, $phone2, $image, $category, $location);

    
    if ($stmt->execute()) {
        echo "<script>alert('Vehicle successfully added for approval.'); window.location.href='vehicles.php';</script>";
    } else {
        echo "<script>alert('Failed to add vehicle. Try again.'); window.location.href='addvehicle.php';</script>";
    }
    
    
    $stmt->close();
    $conn->close();
}
?>