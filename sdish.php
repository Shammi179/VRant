<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRant</title>
    <link rel="stylesheet" href="CSS/style.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo/logoL.png" alt="" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a class="active" href="food.php">Food</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-cart"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <?php include 'connection.php';?>
	<section id="prodetails" class="section-p1">

        <?php 
            $id = $_GET['id'];
            $sql = "SELECT `f_id`, `f_img`, `f_name`, `f_star`, `f_price`, `f_details`, `f_category`, `f_nutrition` FROM `food` WHERE `f_id` = $id";
            $query = mysqli_query($con, $sql);

            $info = mysqli_fetch_array($query);
        ?>
		<div class="single-pro-image">
			<img src="<?php echo $info['f_img']; ?>" width="100%" id="MainImg">
		</div>

		<div class="single-pro-details">
			<h6><?php echo $info['f_category']; ?></h6>
			<h4><?php echo $info['f_name']; ?></h4>
            
			<h2><span>&#2547; </span><?php echo $info['f_price'];?></h2>
			<input type="number" value="1">
			<button class="normal">Add To Cart</button>
			<h4>Food Dteails</h4>
			<span>
            <?php echo $info['f_details'];?>
			</span>
            <h4>Nutritional Information (APPROX)</h4>
			<span>
            <?php echo $info['f_nutrition'];?> 
            </span>
            <h4>Review</h4>
            <div class="star">
                <?php
                    for ($x = 0; $x < $info['f_star']; $x++) {
                        echo "<i class='fas fa-star'>"; echo "</i>";
                    }
                ?>
            </div>
            
		</div>
	</section>

	<section id="dish1" class="section-p1">
        <h2>Special Dishes</h2>
        <p>Exclusive dishes for upcoming summer</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/order/1.png" alt="">
                <div class="des">
                    <span>Homemade</span>
                    <h5>Fruit Salad</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>500 BDT</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/order/2.png" alt="">
                <div class="des">
                    <span>Homemade</span>
                    <h5>Vegetable Salad</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>450 BDT</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                
            </div>
            <div class="pro">
                <img src="img/order/3.png" alt="">
                <div class="des">
                    <span>Homemade</span>
                    <h5>Ilish Panta</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>200 BDT</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/order/4.png" alt="">
                <div class="des">
                    <span>Homemade</span>
                    <h5>Yougurt with Fruit & Almond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>550 BDT</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>

        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo/logoL.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Lakecircus Road, Kalabagan, Dhaka-1205</p>
            <p><strong>Phone:</strong> +8801521256661 / +8801843441269</p>
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
            <p>	&copy; 2021, Dynamic DUO - VRant Ltd.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
