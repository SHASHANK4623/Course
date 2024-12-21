<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "@2468Shashank";
    $dbname = "student";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $photo = $_POST['photo']; // Assume a URL or filename for simplicity

    $insertQuery = "INSERT INTO register (name, email, address, photo) VALUES ('$name', '$email', '$address', '$photo')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img.freepik.com/premium-photo/pizza-dark-brown-background-surrounded-by-bowls-spices-fresh-vegetables_124507-28472.jpg?w=900'); 
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
    <h2>Insert New User</h2>
    <form method="POST">
        <div class="insert-contain">
            <input placeholder="Name" class="letter" type="text" name="name" required><br>
            <input placeholder="Email" class="letter" type="email" name="email" required><br>
            <input placeholder="Address" class="letter" type="text" name="address" required><br>
            <center><input placeholder="Photo" class="letter" type="file" name="photo" required><br></center>
            <center><button class='submit' type="submit">Submit</button></center>
        </div>
    </form>
</body>
</html>









