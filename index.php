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
    <?php include 'header.php' ?>

    <section id="salad">
        <h4>Grab the offer</h4>
        <h2>Super value deals</h2>
        <h1>On all foods</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Order Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/feature/f1.png" alt="">
            <h6>Free Delivery</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>

    <section id="dish1" class="section-p1">
        <h2>Popular Orders</h2>
        <p>Exclusive dishes for upcoming summer</p>
        <div class="pro-container">
            <?php
            
                $sql = "SELECT * FROM `food` order by `f_id` ASC";
               
                $query = mysqli_query($con, $sql);
                $len = mysqli_num_rows($query);


                while($dish = mysqli_fetch_array($query)){
                    $food_id=$dish['f_id'];
                    if($food_id<9){
                    
                    echo '<a href="sdish.php?id='.$dish['f_id'].'" style="text-decoration: none;">';
                    
                    ?>
                    <div class="pro">
                        <img src="<?php echo $dish['f_img']; ?>" alt="">
                        <div class="des">
                            <span>Homemade</span>
                            <h5><?php echo $dish['f_name']; ?></h5>
                            <div class="star">
                                <?php
                                    for ($x = 0; $x < $dish['f_star']; $x++) {
                                        echo "<i class=\"fas fa-star\"></i>";
                                    }
                                    if($dish['f_star']<5){
                                        for ($x = 0; $x < 5 - $dish['f_star']; $x++) {
                                            echo "<i class=\"far fa-star\"></i>";
                                        }
                                    }
                                ?>
                            </div>
                            <h4><?php echo $dish['f_price']; ?> BDT</h4>
                        </div>
                        
                        <form action="" method="POST">
                            <input type="hidden" name="food_id" value="<?= $food_id ?>">
                            <button type="submit" name="add_cart"><a><i class="far fa-shopping-cart"></i></a></button>
                        </form> 
                    </div>
                                
                    
        <?php
                    }
        echo "</a>";
                }
                
            ?>
            
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Summer Madness</h4>
        <h2>Up to <span>30% Off</span>  - Every Lunch & Dinner</h2>
        <button class="normal" onclick="window.location.href = 'food.php'">Explore More</button>
    </section>

    <section id="dish1" class="section-p1">
        <h2>Special Dishes</h2>
        <p>Our Special Dishes</p>
        <div class="pro-container">
            <?php
            
                $sql = "SELECT * FROM `food` order by `f_id` ASC";
               
                $query = mysqli_query($con, $sql);
                $len = mysqli_num_rows($query);

                while($dish = mysqli_fetch_array($query)){
                    $food_id=$dish['f_id'];
                    if($food_id>8 & $food_id<17){
                    
                    echo '<a href="sdish.php?id='.$dish['f_id'].'" style="text-decoration: none;">';
                    
                    ?>
                    <div class="pro">
                        <img src="<?php echo $dish['f_img']; ?>" alt="">
                        <div class="des">
                            <span>Homemade</span>
                            <h5><?php echo $dish['f_name']; ?></h5>
                            <div class="star">
                                <?php
                                    for ($x = 0; $x < $dish['f_star']; $x++) {
                                        echo "<i class=\"fas fa-star\"></i>";
                                    }
                                    if($dish['f_star']<5){
                                        for ($x = 0; $x < 5 - $dish['f_star']; $x++) {
                                            echo "<i class=\"far fa-star\"></i>";
                                        }
                                    }
                                ?>
                            </div>
                            <h4><?php echo $dish['f_price']; ?> BDT</h4>
                        </div>
                        
                        <form action="" method="POST">
                            <input type="hidden" name="food_id" value="<?= $food_id ?>">
                            <button type="submit" name="add_cart"><a><i class="far fa-shopping-cart"></i></a></button>
                        </form> 
                    </div>
        <?php
                    }
        echo "</a>";
                }
            ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best authentic foods</span>
            <button class="white" onclick="window.location.href = 'food.php'">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best authentic foods</span>
            <button class="white" onclick="window.location.href = 'food.php'">Learn More</button>
        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest food and <span>special offers.</span> </p>

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
            <a href="about.php">About us</a>
            <a href="cart.php">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="cart.php">My Wishlist</a>
            <a href="cart.php">Track My Order</a>
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