<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You Page</title>

    <style>
        body {
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #008000;
            font-size: 2.5em;
            text-align: center;
            margin-top: 50px;
        }

        p {
            font-size: 1.2em;
            text-align: center;
            margin-top: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1,
        p {
            color: #fff;
        }

        body {
            background-color: #121212;
        }

        .login-button {
            display: block;
            margin: 20px auto;
            background-color: #008000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #006600;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        session_start();

        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $customerName = $user['name'];
        } else {
            $customerName = "Valued Customer";
        }

        echo "<h1>Thank You, $customerName!</h1>";
        echo "<p>Your order has been received and will be delivered soon.</p>";
        ?>
        <a href="login.html" class="login-button">Login to Shop More</a>
    </div>
</body>

</html>
