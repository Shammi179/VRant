<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRant</title>
    <link rel="stylesheet" href="CSS/style.css">
    
    <!-- <script src="https://kit.fontawesome.com/cf695930be.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <section id="header">
        <a href=""><img src="img/logo/logoL.png" alt="" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="food.php">Food</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-cart"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        
        <h2>#cart</h2>
        
        <p>Add your coupon code & SAVE upto 70%!</p>
        
    </section>
    <?php include 'connection.php';?>

    <?php
        if(isset($_POST['add_cart'])){
            
            if(isset($_SESSION['cart'])){
                $session_array = array_column($_SESSION['cart'], "id");
                echo $session_array;
            }
        }

    ?>


    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Food</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/order/1.png" alt=""></td>
                <td>Fruit Salad</td>
                <td>300 BDT</td>
                <td><input type="number" value="1"></td>
                <td>300 BDT</td>
            </tr>

        </table>

    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>

        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>300 BDT</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>300 BDT</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to Checkout</button>

        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo/logoL.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Dhanmondi, Dhaka-1205</p>
            <p><strong>Phone:</strong> +8801521256661, +8801843441269</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <!-- App Install Not added -->
        <div class="col">
            <h4>Secured Payment Gateways</h4>
            <img src="img/pay/pay.png" alt="">
        </div>


        <div class="copyright">
            <p>	&copy; 2022, Dynamic DUO - VRant Ltd.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>


