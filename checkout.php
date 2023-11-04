<!DOCTYPE html>
<html>

<head>
    <title>Checkout Page</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
</head>
<style>
    body {
        background-color: #000;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #000;
        color: #fff; 
        padding: 20px;
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    nav li {
        display: inline-block;
        margin-right: 20px;
    }

    nav a {
        color: #fff; 
        text-decoration: none;
    }

    nav a:hover {
        text-decoration: underline;
    }

    section {
        max-width: 100%;
        padding: 20px;
    }

    h1 {
        color: #fff; 
        font-size: 28px;
        margin-bottom: 20px;
    }

    h2 {
        color: #fff; 
        font-size: 24px;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #666666;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #222; 
    }

    footer {
        background-color: #000;
        color: #fff; 
        padding: 20px;
        text-align: center;
    }

    @media (max-width: 768px) {
        header {
            padding: 10px;
        }

        nav ul {
            text-align: center;
            padding-top: 10px;
        }

        nav li {
            display: block;
            margin: 0;
            padding: 10px 0;
        }

        section {
            padding: 10px;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
        }
    }
</style>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="shop.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>
                    <a href="cart.php">Cart</a>
                </li>
                <li>
				<a href="mailto:kotatejal12@gmail.com">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Checkout</h1>
        <form action="thanks.php" method="post">
            <h2>Billing Information</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="state">State:</label>
            <input type="text" id="state" name="state" required>

            <label for="zip">Zip Code:</label>
            <input type="text" id="zip" name="zip" required>

            <h2>Payment Information</h2>
            <label for="cardholder">Name on Card:</label>
            <input type="text" id="cardholder" name="cardholder" required>

            <label for="cardnumber">Card Number:</label>
            <input type="text" id="cardnumber" name="cardnumber" required pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required>

            <label for="expmonth">Expiration Month:</label>
            <input type="text" id="expmonth" name="expmonth" required>

            <label for="expyear">Expiration Year:</label>
            <input type="text" id="expyear" name="expyear" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <input type="submit" value="Place Order">
        </form>
    </section>

    <footer>
        <p>&copy; Shopping Web Application</p>
    </footer>
</body>

</html>
