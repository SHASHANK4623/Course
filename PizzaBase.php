<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Pie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://thumbs.dreamstime.com/b/marvelous-mosaic-pizza-buffet-overhead-shot-featuring-pizzas-various-sizes-flavors-classic-margherita-to-277916800.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .welcome {
            margin-bottom: 20px;
            text-align: center;
        }

        .welcome h1 {
            margin: 0;
            color: rgb(255, 255, 255);
        }

        .container {
            width: 50%;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h3 {
            cursor: pointer;
            margin: 0;
        }

        .content {
            display: none;
        }

        .active {
            display: block;
        }

        .btn-login {
            padding: 10px 20px;
            background-color: rgb(255, 196, 0);
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-login:hover {
            background-color: rgb(255, 196, 0);
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="tel"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        footer {
            background-color: rgb(255, 196, 0);
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
            font-size: 1.2em;
        }
        .form_container{
            position: absolute;
        }
    </style>
</head>
<body>

    <div class="welcome">
        <h1>Welcome to Pizza Pie</h1>
    </div>

    <div class="container">
        <div class="header">
            <h3 id="homeTab">Home</h3>
            <h3 id="userTab">User </h3>
            <h3 id="adminTab">Admin</h3>
            <h3 id="registerTab">Register</h3>
        </div>

        <!-- Home Section -->
        <div id="homeContent" class="content active">
            <button class="btn-login" onclick="location.href='Pizzahut.php'">Login</button>
        </div>

        <!-- User Section -->
        <div id="userContent" class="content">
            <form action="User.php" method="POST">
                <input type="text" placeholder="User  Email" id="userEmail" name="userEmail" required>
                <input type="password" placeholder="Password" id="userPassword" name="userPassword" required>
                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>

        <!-- Admin Section -->
        <div id="adminContent" class="content">
            <input type="text" placeholder="Admin Name" id="adminEmail">
            <input type="password" placeholder="Password" id="adminPassword">
            <button class="btn-login" onclick="location.href='Admin.php'">Login</button>
        </div>

                <!-- Registration Section -->
                <div id="registerContent" class="content">
            <div class="form-container">
                <h2>Registration Form</h2>
                <form action="Registration.php" method="post" enctype="multipart/form-data">
                    <label>Name:</label>
                    <input type="text" placeholder = 'Name' name="name" required><br><br>
                    <label>Email:</label>
                    <input type="text" placeholder="User  Email" id="userEmail" name="userEmail" required>
                    <label>Password:</label>
                    <input type="password" placeholder = "Enter a Strong password"name="password" required><br><br>
                    <label>Phone:</label>
                    <input type="number_format" id = 'phone' placeholder = "+91 "name="phone" required><br><br>
                    <label>Address:</label>
                    <textarea name="address" placeholder = "Enter your address"required></textarea><br><br>
                    <label>Photo:</label>
                    <input type="file" name="photo"><br><br>
                    <button type="submit" class="btn-login">Register</button>
                </form>
            </div>
        </div>

    </div>

    <script>
        // Get elements
        const homeTab = document.getElementById('homeTab');
        const userTab = document.getElementById('userTab');
        const adminTab = document.getElementById('adminTab');
        const registerTab = document.getElementById('registerTab');

        const homeContent = document.getElementById('homeContent');
        const userContent = document.getElementById('userContent');
        const adminContent = document.getElementById('adminContent');
        const registerContent = document.getElementById('registerContent');
        function valid_phone(){
            const phone = document.getElementById('phone').value;
            const error = document.getElementById('error');
            const regex = /^\d{10}$/;
            if (regex.test(phone)){
                error.textContent = '';
                alert ("Phone number is valid");
            } else {
                error.textContent = 'Please enter a 10 digit no';
                error.style.color = 'red';
            }
        }

        // Tab click events
        homeTab.addEventListener('click', function () {
            homeContent.classList.add('active');
            userContent.classList.remove('active');
            adminContent.classList.remove('active');
            registerContent.classList.remove('active');
        });

        userTab.addEventListener('click', function () {
            homeContent.classList.remove('active');
            userContent.classList.add('active');
            adminContent.classList.remove('active');
            registerContent.classList.remove('active');
        });

        adminTab.addEventListener('click', function () {
            homeContent.classList.remove('active');
            userContent.classList.remove('active');
            adminContent.classList.add('active');
            registerContent.classList.remove('active');
        });

        registerTab.addEventListener('click', function () {
            homeContent.classList.remove('active');
            userContent.classList.remove('active');
            adminContent.classList.remove('active');
            registerContent.classList.add('active');
        });
    </script>

    <footer>
        <p>Pizza Pie &copy; 2024</p>
    </footer>
</body>
</html>    