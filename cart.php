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

    <section id="page-header" class="about-header">
        
        <h2>#cart</h2>
        
        <p>Add your coupon code & SAVE upto 70%!</p>
        
    </section>
    
    
    
    <?php
        if(isset($_POST['remove'])){
            
            if($_GET['action']=='remove'){
                foreach($_SESSION['cart'] as $key=>$value){
                    if($value['food_id'] == $_GET['id']){
                        unset($_SESSION['cart'][$key]);
                        echo "<script>alert('Dish has been Removed!');</script>";
                        echo "<script>window.location='cart.php'</script>";

                    }
                }
            }
        }

    if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
        $f_id = array_column($_SESSION['cart'], "food_id");
        $sql = "SELECT * FROM `food`";
        $query = mysqli_query($con, $sql);
        $total = 0;
        echo "
        <section id=\"cart\" class=\"section-p1\">
            <table width=\"100%\">
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
        ";
        while($row = mysqli_fetch_array($query)){
            foreach($f_id as $id){
                if($row['f_id']==$id){
    ?>
    <form action="cart.php?action=remove&id=<?php echo $id; ?>" method="post">
                    <tr>
                        <td><button type="submit" name="remove"><a><i class="far fa-times-circle"></a></i></button></td>
                    
                        <td><img src="<?php echo $row['f_img']; ?>"></td>
                        <td><?php echo $row['f_name']; ?></td>
                        <td>
                            <?php echo $row['f_price']; ?> BDT
                            <input type="hidden" class="iprice" value="<?php echo $row['f_price']; ?>">
                        </td>
                        <td><input type="number" onchange="subTotal()" value="1" min="1" class="iquantity"></td>
                        <td class="isubTotal"></td>
                    </tr>
    <?php
                    $total=$total + $row['f_price'];
                }
            }
        }
    ?>
        </table>
        </form>
    
        </section>
        <section id="cart-add" class="section-p1">
                <div id="coupon">
                    <h3>Personal Information</h3>
                    <form action="" method="POST">
                    <div>
                        <input type="text" name="fname" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                        <input type="text" name="phone" placeholder="Enter Your Phone" required>
                        <textarea name="address" rows="2" placeholder="Enter Your Address" required></textarea>
                        <!-- <input type="text" name="" placeholder="Enter Your Coupon">
                        <button class="normal">Apply</button> -->
                    </div>
                    
                </div>
                <div id="subtotal">
                    <h3>Cart Totals</h3>
                    <table>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td id="gtotal"></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td ><strong id="atotal"></strong></td>
                        </tr>
                    </table>
                    <div>
                        <input type="radio" checked>
                        <label>Cash on Delivery</label>
                    </div>

                    <button class="normal" name="purchase">Confirm Order</button>
                </div>
                </form>
            </section>
    <?php
    }
    // elseif(empty($_SESSION['cart'])){
    //     echo "<h2  style=\"text-align: center; margin: 50px;\">Cart is Empty.</h2>";
    // }
    else{
        echo "<h2  style=\"text-align: center; margin: 50px;\">Cart is Empty.</h2>";
    }
    if(isset($_POST['purchase'])){
        
        $sql1 = "INSERT INTO `orders` (`full_name`, `email`, `phone`, `address`) VALUES ('$_POST[fname]','$_POST[email]','$_POST[phone]','$_POST[address]')";

        if(mysqli_query($con,$sql1)){
            unset($_SESSION['cart']);
            echo "<h2  style=\"text-align: center; margin: 50px; color: #ff8200;\">Order Confirmed!</h2>";
        }
        else{
            echo "<h2  style=\"text-align: center; margin: 50px; color: red;\">Order Not Confirmed!</h2>";
        }
    }


    ?>
    
        
    
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
    <script>
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var isubTotal = document.getElementsByClassName('isubTotal');
        var gtotal = document.getElementById('gtotal');
        var atotal = document.getElementById('atotal');

        function subTotal(){
            gt = 0;
            for(i=0;i<iprice.length;i++){
                isubTotal[i].innerText = (iprice[i].value)*(iquantity[i].value) + " BDT";
                gt = gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt + " BDT";
            atotal.innerText=gt + " BDT";
        }
        subTotal();

    </script>
</body>
</html>


