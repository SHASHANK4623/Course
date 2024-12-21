<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "@2468Shashank"; // Replace with your MySQL password
$dbname = "student"; // Replace with your database name

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all registered users
$registerQuery = "SELECT * FROM register";
$registerResult = $conn->query($registerQuery);

// Close connection at the end of the script to free up resources
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Styling for tables and buttons */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid rgb(255, 255, 255);
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgba(255, 255, 255, 0.277);
        }
        h2 {
            margin-top: 30px;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .table-container {
            display: none; /* Hide tables by default */
        }
        .insert-contain{
            background-color: rgba(255, 255, 255, 0.277);
            border: 2px solid white;
            padding: 20px;
            border-radius: 25px;
            width: 50%;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://th.bing.com/th/id/OIP.V70cJXWWFaiWaZa-5ld5iwHaE8?pid=ImgDet&w=198&h=132&c=7&dpr=1.3'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .submit{
            background-color: #8b2dd8;
            padding: 10px;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
        .sub{
            width: 100%;
        }
    </style>
    <script>
        function showTable(tableId) {
            // Hide all tables
            document.getElementById('registerTable').style.display = 'none';
            
            // Show the selected table
            document.getElementById(tableId).style.display = 'block';
        }
    </script>
</head>
<body>
<h1>Admin Panel</h1>
    <div class="insert-contain">
        <div class="sub">
            <button class='submit' onclick="showTable('registerTable')">View Registered Users</button>
            <button class='submit' onclick="location.href='insert.php'">Insert User</button>
            <button class='submit' onclick="location.href='update.php'">Update User</button>
            <button class='submit' onclick="location.href='delete.php'">Delete User</button>
        </div>
    </div>

    <!-- Display Registered Users Table -->
    <div id="registerTable" class="table-container">
        <h2>Registered Users</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Photo</th>
            </tr>
            <?php if ($registerResult->num_rows > 0): ?>
                <?php while($row = $registerResult->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['photo']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No registered users found.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>

</body>
</html>