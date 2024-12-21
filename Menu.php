<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Menu</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('https://th.bing.com/th/id/OIP.V70cJXWWFaiWaZa-5ld5iwHaE8?pid=ImgDet&w=198&h=132&c=7&dpr=1.3');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Container */
        .container {
            display: flex;
            width: 100%;  /* Set width to 100% */
            max-width: 1200px;  /* Optional: Set a max-width to avoid large content overflow */
            height: 80%;
            backdrop-filter: blur(10px);
            border-radius: 12px;
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 25%;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow-y: auto;  /* Allow vertical scrolling if needed */
        }

        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li button {
            width: 100%;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .sidebar ul li button:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Main Content Styling */
        .main-content {
            width: 75%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            overflow-y: auto;  /* Allow vertical scrolling if needed */
            height: 100%;
        }

        .main-content h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .pizza-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));  /* Allow flexibility in column size */
            gap: 20px;
            width: 100%;
            padding: 20px;
            overflow-y: auto;
        }

        .pizza-box {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            transition: transform 0.3s ease, background 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            padding: 10px;
        }

        .pizza-box img {
            width: 100%; /* Make image responsive */
            height: auto;  /* Maintain aspect ratio */
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .pizza-name {
            flex-grow: 1;
        }

        .pizza-price {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .pizza-box:hover {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
        }

        .footer {
            background-color: #3333334f;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .bill-section {
            margin-top: 30px;
            color: white;
        }

        .bill-list {
            list-style: none;
            padding: 0;
        }

        .bill-list li {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }

        .price {
            font-weight: bold;
        }

        .order {
            padding: 15px;
            cursor: pointer;
            border: 1px solid white;
            background-color: rgba(255, 255, 255, 0);
            color: white;
            font-size: x-large;
            border-radius: 30px;
            width: 160%;
            margin-bottom: 20px;
            position: relative;
        }

        .order:hover {
            background-color: white;
            color: rgba(167, 1, 204, 0.749);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Pizza Menu</h2>
            <ul>
                <li><button onclick="showContent('Italian')">Italian</button></li>
                <li><button onclick="showContent('United States')">United States</button></li>
                <li><button onclick="showContent('Indian')">Indian</button></li>
                <li><button onclick="showContent('Japanese')">Japanese</button></li>
                <li><button onclick="showContent('Turkish')">Turkish</button></li>
                <li><button onclick="showContent('Australian')">Australian</button></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1 id="content-title">Italian Pizza</h1>
            <div class="pizza-options" id="pizza-options">
                <!-- Pizza Options (with checkboxes for the bill calculation) -->
            </div>

            <!-- Bill Section -->
            <div class="bill-section">
                <center>
                    <h2>Bill</h2>
                </center>
                <ul id="bill-list" class="bill-list"></ul>
                <center>
                    <p id="totalCost">Total Cost: 0</p>
                </center>
                <center><button class='order' id="total-btn" onclick="calculateTotal()">Calculate Total</button></center>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2023 Pizza Paradise. All rights reserved.
    </div>

    <script>
        function showContent(cuisine) {
            const title = document.getElementById('content-title');
            const pizzaOptions = document.getElementById('pizza-options');
            title.textContent = cuisine + " Pizza";

            // Clear existing pizza options
            pizzaOptions.innerHTML = '';

            // Define pizza options based on cuisine
            const pizzas = {
                Italian: [
                    { name: 'Margherita', price: 10, imageUrl: 'https://recipes.net/wp-content/uploads/2023/07/pizza-margherita-classic-italian-pizza-topped-with-fresh-tomatoes-mozzarella-cheese-and-basil_38a035581b3d5a197bd03ec8a67a2ca2.jpeg' },
                    { name: 'Pepperoni', price: 12, imageUrl: 'https://www.thoughtco.com/thmb/nBQ2nj2XVhYYm2jHFvEiKJrMSHU=/3864x2577/filters:fill(auto,1)/pepperoni-pizza-523744202-59f175f3396e5a00104e0f9e.jpg' },
                    { name: 'Four Cheese', price: 15, imageUrl: 'https://img.freepik.com/premium-photo/four-cheese-pizza_198067-95939.jpg' },
                    { name: 'Vegetarian', price: 9, imageUrl: 'https://cdn.loveandlemons.com/wp-content/uploads/2023/02/vegetarian-pizza-1024x1024.jpg' },
                    { name: 'Hawaiian', price: 11, imageUrl: 'https://delugo.co.za/wp-content/uploads/2022/08/Hawaiian-Pizza-1024x1024.jpg' },
                    { name: 'Meat Lover', price: 14, imageUrl: 'https://www.bing.com/images/search?view=detailV2&ccid=AXO%2f27Sy&id=1EDCC75402731278CD1BE0C358C4E43A4A7C8C03&thid=OIP.AXO_27SycbiPJr9ddK5ODgHaEJ&mediaurl=https%3a%2f%2fimg.freepik.com%2fpremium-photo%2fmeat-lovers-pizza-with-variety-savory-toppings_1007506-5012.jpg&exph=351&expw=626&q=Meat+Lover+pizza+1024+x+1024+image&simid=608005355311623349&FORM=IRPRST&ck=651A65529D0E3E716EEA1521AE6F9731&selectedIndex=79&itb=0' }
                ],
                'United States': [
                    { name: 'Chicago Deep Dish', price: 18 },
                    { name: 'New York Style', price: 15 },
                    { name: 'Buffalo Chicken', price: 13 }
                ],
                Indian: [
                    { name: 'Tandoori Chicken', price: 12 },
                    { name: 'Paneer Tikka', price: 11 }
                ],
                Japanese: [
                    { name: 'Teriyaki Chicken', price: 13 },
                    { name: 'Seafood Delight', price: 15 }
                ],
                Turkish: [
                    { name: 'Lahmacun', price: 10 },
                    { name: 'Pide', price: 12 }
                ],
                Australian: [
                    { name: 'Aussie BBQ', price: 14 },
                    { name: 'Vegemite Pizza', price: 9 }
                ]
            };

            // Populate pizza options based on selected cuisine
            if (pizzas[cuisine]) {
                pizzas[cuisine].forEach(pizza => {
                    const pizzaBox = document.createElement('div');
                    pizzaBox.className = 'pizza-box';
                    
                    // Check if image URL exists for the pizza
                    let pizzaImageHTML = '';
                    if (pizza.imageUrl) {
                        pizzaImageHTML = `<img src="${pizza.imageUrl}" alt="${pizza.name}">`;
                    }

                    pizzaBox.innerHTML = `
                        ${pizzaImageHTML}
                        <input type="checkbox" value="${pizza.price}" data-item="${pizza.name}" onchange="updateBill()">
                        <div class="pizza-name">${pizza.name}</div>
                        <div class="pizza-price">$${pizza.price}</div>
                    `;
                    pizzaOptions.appendChild(pizzaBox);
                });
            }
        }

        function updateBill() {
            const billList = document.getElementById('bill-list');
            billList.innerHTML = '';
            let total = 0;

            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                const itemName = checkbox.getAttribute('data-item');
                const itemPrice = parseFloat(checkbox.value);
                total += itemPrice;

                const li = document.createElement('li');

                const spanName = document.createElement('span');
                spanName.textContent = itemName;

                const spanPrice = document.createElement('span');
                spanPrice.textContent = '$' + itemPrice;
                spanPrice.classList.add('price');

                li.appendChild(spanName);
                li.appendChild(spanPrice);
                billList.appendChild(li);
            });

            document.getElementById('totalCost').innerText = 'Total Cost: $' + total;
        }

        function calculateTotal() {
            alert('Total Cost Calculated!');
        }

        window.onload = function() {
            showContent('Italian');
        };
    </script>
</body>

</html>