<?php
require_once 'dconf.php';
$sql = "SELECT * FROM Customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div style='display: flex; flex-wrap: wrap; gap: 20px;'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; width: 200px;'>";
        echo "<img src='" . $row['image_url'] . "' alt='Dress Image' style='width: 100%; height: auto;'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p><strong>details:</strong> $" . $row['bio'] . "</p>";
        echo "<p>" . $row['email'] . "</p>";
        echo "<p>" . $row['phone_no'] . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No dresses found.";
}

$conn->close();
?>
