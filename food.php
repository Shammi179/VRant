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
    <?php include 'header.php';?>

    <section id="page-header">
        
        <h2>#stayhome</h2>
        
        <p>Enjoy Authentic food with delicious taste</p>
        
    </section>
    

    <section id="search">
		<div class="search-container">
			<div class="search-box">
                <form action="" method="POST">
                    <input type="text" placeholder="Search..." name="search-text" value="<?php if (isset($_POST['search-text'])) echo $_POST['search-text']; ?>" >
                    <button class="btn" type="submit" name="search_submit"><i class="fas fa-search"></i></button>
                </form>
			</div>
		</div>
    </section>
    
    <section id="dish1" class="section-p1">
        <div class="pro-container">
            <?php
            
                if(isset($_POST['search_submit'])){
                    $search_text = $_POST['search-text'];
                    $sql = "SELECT `f_id`, `f_img`, `f_name`, `f_star`, `f_price` FROM `food` WHERE `f_name` LIKE '%{$search_text}%' order by `f_id` ASC";
                }
                else{
                    $sql = "SELECT `f_id`, `f_img`, `f_name`, `f_star`, `f_price` FROM `food` order by `f_id` ASC";
                }
                $query = mysqli_query($con, $sql);
                $len = mysqli_num_rows($query);

                if($len > 0){

                    while($dish = mysqli_fetch_array($query)){
                        
                        echo '<a href="sdish.php?id='.$dish['f_id'].'" style="text-decoration: none;">';
                        $food_id=$dish['f_id'];
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
            echo "</a>";
                    }
                }
                else{
                    echo "No results found";
                }
                
            ?>
            
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