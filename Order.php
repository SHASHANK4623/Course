<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizza Menu</title>
    <style>
        body {
            background-image: url('https://i.fbcd.co/products/original/timorouseclectic-strawberrysnacksoutlineclipartcover-c479eb0912782029381bb4244edb4d861b549070612fe4b7714669474a20d67f.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 20%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar button {
            background-color: black;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            cursor: pointer;
            text-align: left;
            width: 100%;
            font-size: 16px;
            border-radius: 4px;
        }

        .sidebar button:hover {
            background-color: #ffb411;
        }

        .content-area {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            overflow-y: auto;
        }

        .content {
            display: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #fff;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: rgba(255, 255, 255, 0.2);
        }

        button#total-btn {
            background-color: #ffb411;
            color: black;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 4px;
            font-size: 16px;
        }

        button#total-btn:hover {
            background-color: #ffb411;
        }

        .bill-section {
            width: 20%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
        }

        .bill-section h2 {
            margin-top: 0;
            text-align: center;
        }

        .bill-list {
            list-style: none;
            padding: 0;
            margin: 0;
            max-height: 60vh;
            overflow-y: auto;
        }

        .bill-list li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .bill-list .price {
            margin-left: 10px;
        }

        .bill-section p {
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        @media (max-width: 1200px) {
            .container {
                flex-direction: column;
            }

            .sidebar,
            .content-area,
            .bill-section {
                width: 100%;
                height: auto;
            }

            .bill-section {
                order: -1;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <h2>Pizza Menu</h2>
            <button onclick="showContent('italianContent')">Italian Pizzas</button>
            <button onclick="showContent('usContent')">United States Pizzas</button>
            <button onclick="showContent('japaneseContent')">Japanese Pizzas</button>
            <button onclick="showContent('turkishContent')">Turkish Pizzas</button>
            <button onclick="showContent('indianContent')">Indian Pizzas</button>
            <button onclick="showContent('brazilianContent')">Brazilian Pizzas</button>
            <button onclick="showContent('australianContent')">Australian Pizzas</button>
        </div>

        <div class="content-area">
            <!-- Italian Pizzas -->
            <div id="italianContent" class="content">
                <center>
                    <h1 style="color: #ffb411;">Italian Pizzas</h1>
                </center>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Margherita</td>
                        <td>₹400</td>
                        <td><input type="checkbox" value="400" data-item="Margherita"></td>
                    </tr>
                    <tr>
                        <td>Pizza alla Bufala</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Pizza alla Bufala"></td>
                    </tr>
                    <tr>
                        <td>Capricciosa</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Capricciosa"></td>
                    </tr>
                    <tr>
                        <td>Prosciutto Crudo e Rucola</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Prosciutto Crudo e Rucola"></td>
                    </tr>
                    <tr>
                        <td>Calzone</td>
                        <td>₹550</td>
                        <td><input type="checkbox" value="550" data-item="Calzone"></td>
                    </tr>
                    <tr>
                        <td>Quattro Formaggi</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Quattro Formaggi"></td>
                    </tr>
                    <tr>
                        <td>Pizza Quattro Stagioni</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Pizza Quattro Stagioni"></td>
                    </tr>
                    <tr>
                        <td>Salsiccia e Broccoli</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Salsiccia e Broccoli"></td>
                    </tr>
                    <tr>
                        <td>Pizza con Patate</td>
                        <td>₹450</td>
                        <td><input type="checkbox" value="450" data-item="Pizza con Patate"></td>
                    </tr>
                    <tr>
                        <td>Nutella Pizza</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Nutella Pizza"></td>
                    </tr>
                </table>
            </div>

            <div id="usContent" class="content">
                <h2>United States Pizzas</h2>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Pepperoni Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Pepperoni Pizza"></td>
                    </tr>
                    <tr>
                        <td>Cheese Pizza</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Cheese Pizza"></td>
                    </tr>
                    <tr>
                        <td>BBQ Chicken Pizza</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="BBQ Chicken Pizza"></td>
                    </tr>
                    <tr>
                        <td>Hawaiian Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Hawaiian Pizza"></td>
                    </tr>
                    <tr>
                        <td>Meat Lovers Pizza</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Meat Lovers Pizza"></td>
                    </tr>
                    <tr>
                        <td>Veggie Pizza</td>
                        <td>₹550</td>
                        <td><input type="checkbox" value="550" data-item="Veggie Pizza"></td>
                    </tr>
                    <tr>
                        <td>Buffalo Chicken Pizza</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Buffalo Chicken Pizza"></td>
                    </tr>
                    <tr>
                        <td>Deep Dish Pizza</td>
                        <td>₹900</td>
                        <td><input type="checkbox" value="900" data-item="Deep Dish Pizza"></td>
                    </tr>
                    <tr>
                        <td>Margherita Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Margherita Pizza"></td>
                    </tr>
                    <tr>
                        <td>White Pizza</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="White Pizza"></td>
                    </tr>
                </table>
            </div>

            <!-- Japanese Pizzas -->
            <div id="japaneseContent" class="content">
                <h2>Japanese Pizzas</h2>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Miso Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Miso Pizza"></td>
                    </tr>
                    <tr>
                        <td>Teriyaki Chicken Pizza</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Teriyaki Chicken Pizza"></td>
                    </tr>
                    <tr>
                        <td>Seafood Pizza</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Seafood Pizza"></td>
                    </tr>
                    <tr>
                        <td>Wasabi Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Wasabi Pizza"></td>
                    </tr>
                    <tr>
                        <td>Japanese Curry Pizza</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Japanese Curry Pizza"></td>
                    </tr>
                    <tr>
                        <td>Okonomiyaki Pizza</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Okonomiyaki Pizza"></td>
                    </tr>
                    <tr>
                        <td>Tuna Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Tuna Pizza"></td>
                    </tr>
                    <tr>
                        <td>Pork Katsu Pizza</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Pork Katsu Pizza"></td>
                    </tr>
                    <tr>
                        <td>Shiitake Mushroom Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Shiitake Mushroom Pizza"></td>
                    </tr>
                    <tr>
                        <td>Matcha Dessert Pizza</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Matcha Dessert Pizza"></td>
                    </tr>
                </table>
            </div>
            <div id="turkishContent" class="content">
                <h2>Turkish Pizzas</h2>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Lahmacun</td>
                        <td>₹400</td>
                        <td><input type="checkbox" value="400" data-item="Lahmacun"></td>
                    </tr>
                    <tr>
                        <td>Pide</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Pide"></td>
                    </tr>
                    <tr>
                        <td>Kumpir Pizza</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Kumpir Pizza"></td>
                    </tr>
                    <tr>
                        <td>Sucuk Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Sucuk Pizza"></td>
                    </tr>
                    <tr>
                        <td>Vegetable Pide</td>
                        <td>₹550</td>
                        <td><input type="checkbox" value="550" data-item="Vegetable Pide"></td>
                    </tr>
                    <tr>
                        <td>Cheese Pide</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Cheese Pide"></td>
                    </tr>
                    <tr>
                        <td>Meat Pide</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Meat Pide"></td>
                    </tr>
                    <tr>
                        <td>Spinach and Feta Pide</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Spinach and Feta Pide"></td>
                    </tr>
                    <tr>
                        <td>Eggplant Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Eggplant Pizza"></td>
                    </tr>
                    <tr>
                        <td>Turkish Sausage Pizza</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Turkish Sausage Pizza"></td>
                    </tr>
                </table>
            </div>

            <div id="indianContent" class="content">
                <h2>Indian Pizzas</h2>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Paneer Tikka Pizza</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Paneer Tikka Pizza"></td>
                    </tr>
                    <tr>
                        <td>Tandoori Chicken Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Tandoori Chicken Pizza"></td>
                    </tr>
                    <tr>
                        <td>Veggie Delight Pizza</td>
                        <td>₹450</td>
                        <td><input type="checkbox" value="450" data-item="Veggie Delight Pizza"></td>
                    </tr>
                    <tr>
                        <td>Butter Chicken Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Butter Chicken Pizza"></td>
                    </tr>
                    <tr>
                        <td>Masala Dosa Pizza</td>
                        <td>₹550</td>
                        <td><input type="checkbox" value="550" data-item="Masala Dosa Pizza"></td>
                    </tr>
                    <tr>
                        <td>Chaat Pizza</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Chaat Pizza"></td>
                    </tr>
                    <tr>
                        <td>Egg Curry Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Egg Curry Pizza"></td>
                    </tr>
                    <tr>
                        <td>Palak Paneer Pizza</td>
                        <td>₹550</td>
                        <td><input type="checkbox" value="550" data-item="Palak Paneer Pizza"></td>
                    </tr>
                    <tr>
                        <td>Dal Makhani Pizza</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Dal Makhani Pizza"></td>
                    </tr>
                </table>
            </div>

            <div id="brazilianContent" class="content">
                <h2>Brazilian Pizzas</h2>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Select</th>
                    </tr>
                    <tr>
                        <td>Pizza de Frango com Catupiry</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Pizza de Frango com Catupiry"></td>
                    </tr>
                    <tr>
                        <td>Pizza Portuguesa</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Pizza Portuguesa"></td>
                    </tr>
                    <tr>
                        <td>Calabresa Pizza</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Calabresa Pizza"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Queijo</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Pizza de Queijo"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Palmito</td>
                        <td>₹650</td>
                        <td><input type="checkbox" value="650" data-item="Pizza de Palmito"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Atum</td>
                        <td>₹600</td>
                        <td><input type="checkbox" value="600" data-item="Pizza de Atum"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Bacon</td>
                        <td>₹700</td>
                        <td><input type="checkbox" value="700" data-item="Pizza de Bacon"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Frutos do Mar</td>
                        <td>₹800</td>
                        <td><input type="checkbox" value="800" data-item="Pizza de Frutos do Mar"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Carne Seca</td>
                        <td>₹750</td>
                        <td><input type="checkbox" value="750" data-item="Pizza de Carne Seca"></td>
                    </tr>
                    <tr>
                        <td>Pizza de Nutella</td>
                        <td>₹500</td>
                        <td><input type="checkbox" value="500" data-item="Pizza de Nutella"></td>
                    </tr>
                </table>
            </div>
            <div id="australianContent" class="content">
                <div>Australian Pizzas</h>
                    <center>
                        <table>
                            <tr>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Select</th>
                            </tr>
                            <tr>
                                <td>Meat Pie Pizza</td>
                                <td>₹700</td>
                                <td><input type="checkbox" value="700" data-item="Meat Pie Pizza"></td>
                            </tr>
                            <tr>
                                <td>Prawn Pizza</td>
                                <td>₹800</td>
                                <td><input type="checkbox" value="800" data-item="Prawn Pizza"></td>
                            </tr>
                            <tr>
                                <td>BBQ Chicken Pizza</td>
                                <td>₹750</td>
                                <td><input type="checkbox" value="750" data-item="BBQ Chicken Pizza"></td>
                            </tr>
                            <tr>
                                <td>Vegemite Pizza</td>
                                <td>₹600</td>
                                <td><input type="checkbox" value="600" data-item="Vegemite Pizza"></td>
                            </tr>
                            <tr>
                                <td>Sweet Potato Pizza</td>
                                <td>₹650</td>
                                <td><input type="checkbox" value="650" data-item="Sweet Potato Pizza"></td>
                            </tr>
                            <tr>
                                <td>Surf and Turf Pizza</td>
                                <td>₹900</td>
                                <td><input type="checkbox" value="900" data-item="Surf and Turf Pizza"></td>
                            </tr>
                            <tr>
                                <td>Caprese Pizza</td>
                                <td>₹650</td>
                                <td><input type="checkbox" value="650" data-item="Caprese Pizza"></td>
                            </tr>
                            <tr>
                                <td>Chicken Parmigiana Pizza</td>
                                <td>₹700</td>
                                <td><input type="checkbox" value="700" data-item="Chicken Parmigiana Pizza"></td>
                            </tr>
                            <tr>
                                <td>Greek Pizza</td>
                                <td>₹600</td>
                                <td><input type="checkbox" value="600" data-item="Greek Pizza"></td>
                            </tr>
                            <tr>
                                <td>Fruit Pizza</td>
                                <td>₹500</td>
                                <td><input type="checkbox" value="500" data-item="Fruit Pizza"></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
            <center>
                <div class="bill-section">
                    <h2>Bill</h2>
                    <ul id="bill-list" class="bill-list"></ul>
                    <p>Total Cost: ₹<span id="total">0</span></p>
                    <button id="total-btn" onclick="calculateTotal()">Calculate Total</button>
                </div>
            </center>
        </div>
    </div>
    <script>
        function showContent(contentId) {
            // Hide all content divs
            const contents = document.querySelectorAll('.content');
            contents.forEach(content => {
                content.style.display = 'none';
            });

            // Show the selected content
            document.getElementById(contentId).style.display = 'block';
        }

        function calculateTotal() {
            let total = 0;
            const selectedItems = document.querySelectorAll('.content-area input[type="checkbox"]:checked');

            const billList = document.getElementById('bill-list');
            billList.innerHTML = ''; // Clear previous list

            selectedItems.forEach(item => {
                const price = parseInt(item.value);
                const itemName = item.getAttribute('data-item');

                total += price;

                const listItem = document.createElement('li');
                listItem.textContent = `${itemName}: ₹${price}`;
                billList.appendChild(listItem);
            });

            document.getElementById('totalCost').textContent = `Total Cost: ₹${total}`;
        }
    </script>
</body>

</html>