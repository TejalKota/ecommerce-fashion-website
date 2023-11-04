<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="nav.css">
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }

        header, nav, main, footer {
            background-color: #333;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #555;
        }

        tr:nth-child(even) {
            background-color: #444;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }


        @media (max-width: 600px) {
            table {
                font-size: 12px;
            }
            th, td {
                padding: 6px;
            }
        }


        .table-container {
            max-width: 100%;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            <?php
            session_start();
            $user = $_SESSION['user'];
            echo $user['name'];
            ?> Shopping Cart
        </h1>
    </header>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="shop.php">Fashion</a>
            </div>
            <ul class="menu">
                <li>
                    <a href="shop.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Products</a>
                </li>
                <li>
                    <a href="mailto:kotatejal12@gmail.com">Contact Us</a>
                </li>
                <li>
                    <a href="cart.php">Cart</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <section>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "shp";

            
                    $conn = new mysqli($servername, $username, $password, $dbname);

                   
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $total = 0;

                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $product_id => $quantity) {
                            $sql = "SELECT * FROM products WHERE id = $product_id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $name = $row['name'];
                                $price = $row['price'];
                                $item_total = $quantity * $price;
                                $total += $item_total;

                                $image_filename = "img/product" . $product_id . ".png"; 

                                echo "<tr>";
                                echo "<td><img src='$image_filename' alt='$name' width='100' height='100'></td>"; 
                                echo "<td>$name</td>";
                                echo "<td>$quantity</td>";
                                echo "<td>$price $</td>";
                                echo "<td>$item_total $</td>";
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='5'>Your cart is empty.</td></tr>";
                    }
                    echo "<tr>";
                    echo "<td colspan='4'>Total:</td>";
                    echo "<td>$total $</td>";
                    echo "</tr>";
                    ?>
                </table>
            </div>
            <form action="checkout.php" method="post">
                <input type="submit" value="Checkout" class="button" />
            </form>
        </section>
    </main>

    <footer>
        <p>&COPY; Shopping Web Application</p>
    </footer>
</body>

</html>
