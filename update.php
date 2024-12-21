<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "@2468Shashank";
    $dbname = "student";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $photo = $_POST['photo'];

    $updateQuery = "UPDATE register SET name='$name', email='$email', address='$address', photo='$photo' WHERE id='$id'";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $updateQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://thumbs.dreamstime.com/z/different-tipes-pizza-family-friends-pizza-party-flat-lay-different-types-pizza-red-wine-over-rustic-wooden-table-206677540.jpg?w=992'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .insert-contain{
            background-color: rgba(255, 255, 255, 0.277);
            border: 2px solid white;
            padding: 20px;
            border-radius: 25px;
            width: 100%;
        }
        .letter{
            margin: 8px;
            border: 0px;
            border-color: rgba(255, 255, 255, 0);
            background-color: transparent;
            border-bottom: 1px solid rgba(254, 251, 251, 0.605);
            padding: 20px;
            font-size: 20px;
            outline: none;
        }
        .letter::placeholder{
            color: white;
        }
        .submit{
            background-color: #d8ad2d;
            padding: 10px;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Update User</h2>
    <form method="POST">
        <div class="insert-contain">
            <input placeholder='ID'class='letter'type="text" name="id" required><br>
            <input placeholder='Name'class='letter'type="text" name="name"><br>
            <input placeholder='Email'class='letter'type="email" name="email"><br>
            <input placeholder='Address'class='letter'type="text" name="address"><br>
            <input placeholder='Photo'class='letter'type="file" name="photo"><br>
            <center><button class='submit' type="submit">Update</button></center>
        </div>
    </form>
</body>
</html>
