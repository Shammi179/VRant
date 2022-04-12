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
            <form action="" method="POST">
			    <input type="number" value="1">
                <input type="hidden" name="food_id" value="<?= $id ?>">
			    <button class="normal" name="add_cart" type="submit">Add To Cart</button>
            </form>
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
                        echo "<i class=\"fas fa-star\"></i>";
                    }
                    if($info['f_star']<5){
                        for ($x = 0; $x < 5 - $info['f_star']; $x++) {
                            echo "<i class=\"far fa-star\"></i>";
                        }
                    }
                ?>
            </div>
            
		</div>
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
                    if($food_id>0 & $food_id<5){
                    
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
