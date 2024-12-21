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

    $deleteQuery = "DELETE FROM register WHERE id='$id'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $deleteQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <style>
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
            background-color: #8b2dd8;
            padding: 10px;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Delete User</h2>
    <form method="POST">
        <div class="insert-contain">
            <input placeholder='ID'class='letter'type="text" name="id" required><br>
            <center><button class='submit' type="submit">Delete</button></center>
        </div>
    </form>
</body>
</html>