<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "@2468Shashank";
$dbname = "student";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the session contains a username
if (!isset($_SESSION['username'])) {
    echo "You must be logged in to view this page.";
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];

// Query the database for the user's profile data
$stmt = $conn->prepare("SELECT id, name, email, phone, address, photo, created_at FROM register WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if a user was found
if ($result->num_rows === 0) {
    echo "No user found with the provided username.";
    exit;
}

// Fetch the user data
$row = $result->fetch_assoc();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile - Student Portal</title>
    <style>
        * {
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f6f8fb;
            margin: 0;
            padding: 0;
        }
        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-container img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .profile-container table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .profile-container table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .profile-container .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <center>
            <!-- Display Profile Photo -->
            <img src="uploads/<?php echo htmlspecialchars($row['photo'], ENT_QUOTES, 'UTF-8'); ?>" alt="Profile Picture">
        </center>
        <h1><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>'s Profile</h1>
        <table>
            <tr>
                <td><strong>Email:</strong></td>
                <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <td><strong>Phone:</strong></td>
                <td><?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td><?php echo nl2br(htmlspecialchars($row['address'], ENT_QUOTES, 'UTF-8')); ?></td>
            </tr>
            <tr>
                <td><strong>Joined On:</strong></td>
                <td><?php echo htmlspecialchars($row['created_at'], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
        </table>
        <center>
            <a href="home.php" class="back-button">Back to Home</a>
        </center>
    </div>
</body>
</html>
