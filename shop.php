<?php
session_start();

if (isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];
    $product_quantity = $_POST["product_quantity"];
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
        header("location:cart.php");
    }
    $_SESSION["cart"][$product_id] = $product_quantity;
    header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping Web Application</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="nav.css">


</head>

<body>




    <nav>
        <div class="container">
            <div class="logo">
                <a href="shop.php">Fashion</a>
            </div>
            <ul class="menu">
                <li><a href="shop.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="logout.php">Logout</a></li>


            </ul>
        </div>
    </nav>


    <div class="text-container">
        <h1>Fashion</h1>
    </div>

    <section class="hero-section">
        <div class="content">
            <img class="logo" alt="">
            <p class="sub-heading">best fashion collection</p>
        </div>
    </section>



    <main>
        <section>
            <h2>Women dresses</h2>
            <ul>
                <li>
                    <h3>Women dress</h3>
                    <img src="img/product1.png" alt="Product 1">
                    <p>long off shoulder dress </p>
                    <p><span>₹1990</span></p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="1">
                        <label for="product1_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product1_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart</button>
                    </form>
                </li>
                <li>
                    <h3>Women dress</h3>
                    <img src="img/product2.png" alt="Product 2">
                    <p>Long Gathered Sheer Cami Dress</p>
                    <p>
                        <span>₹999</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="2">
                        <label for="product2_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <li>
                    <h3>Women dress</h3>
                    <img src="img/product3.png" alt="Product 3">
                    <p>Lace Bodycon Dress With Ruffle</p>
                    <p>
                        <span>₹2999</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="3">
                        <label for="product3_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product3_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>

                <li>
                    <h3>Women dress</h3>
                    <img src="img/product4.png" alt="Product 4">
                    <p>Asymmetric Knit Dress</p>
                    <p>
                        <span>₹1445</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="4">
                        <label for="product4_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product4_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <li>
                    <h3>Women dress</h3>
                    <img src="img/product5.png" alt="Product 5">
                    <p>Knit Dress</p>
                    <p>
                        <span>₹1999</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="5">
                        <label for="product5_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product5_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <li>
                    <h3>Women dress</h3>
                    <img src="img/product6.png" alt="Product 6">
                    <p>Long Flared Chiffon Dress With Cold Shoulders</p>
                    <p>
                        <span>₹2999</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden" name="product_id" value="6">
                        <label for="product6_quantity">
                            Quantity:
                        </label>
                        <input type="number" id="product6_quantity" name="product_quantity" value="" min="0" max="10">
                        <button type="submit" name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>

                    <li>
                        <h3>Women top</h3>
                        <img src="img/product7.png" alt="Product 7">
                        <p>Solids: Sage Green</p>
                        <p>
                            <span>₹599</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="7">
                            <label for="product7_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product7_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>
                    <li>
                        <h3>Women top</h3>
                        <img src="img/product8.png" alt="Product 8">
                        <p>Solids: Mustard</p>
                        <p>
                            <span>₹399</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="8">
                            <label for="product8_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product8_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>
                    <li>
                        <h3>Women top</h3>
                        <img src="img/product9.png" alt="Product 9">
                        <p>Aqua (Colourblock)</p>
                        <p>
                            <span>₹799</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="9">
                            <label for="product9_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product9_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>
               
                    <li>
                        <h3>Women tshirt</h3>
                        <img src="img/product10.png" alt="Product 10">
                        <p>Disney: Cute Maleficent</p>
                        <p>
                            <span>₹549</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="10">
                            <label for="product10_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product10_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>

                    <li>
                        <h3>Women tshirt</h3>
                        <img src="img/product11.png" alt="Product 11">
                        <p>Solids: White</p>
                        <p>
                            <span>₹599</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="11">
                            <label for="product11_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product11_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>

                    <li>
                        <h3>Women tshirt</h3>
                        <img src="img/product12.png" alt="Product 12">
                        <p>Tie Dye: Grey & Black</p>
                        <p>
                            <span>₹699</span>
                        </p>

                        <form method="post" action="shop.php">
                            <input type="hidden" name="product_id" value="12">
                            <label for="product12_quantity">
                                Quantity:
                            </label>
                            <input type="number" id="product12_quantity" name="product_quantity" value="" min="0"
                                max="10">
                            <button type="submit" name="add_to_cart">
                                Add to Cart
                            </button>
                        </form>
                    </li>




            </ul>
        </section>



    </main>
    <footer>
        <p>&copy;Shopping Web Application</p>
    </footer>
    <script src="shop.php"></script>
</body>

</html>