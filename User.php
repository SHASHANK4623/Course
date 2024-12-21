<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "@2468Shashank";
$dbname = "pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    // Query to check if email and password match
    $sql = "SELECT * FROM `register` WHERE `email` = ? AND `password` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // If user exists with matching email and password
    if ($result->num_rows > 0) {
        // Redirect to pizzahut.php
        header("Location: pizzahut.php");
        exit();
    } else {
        // Error message for invalid email or password
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>