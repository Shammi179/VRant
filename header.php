<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con, 'VRantDB');

	session_start();
	$page = basename($_SERVER['PHP_SELF']);
?>
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
        <a href="index.php"><img src="img/logo/logoL.png" alt="" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a <?php if($page == 'index.php'){ echo ' class="active"';}?> href="index.php">Home</a></li>
                <li><a <?php if($page == 'food.php'){ echo ' class="active"';}?> href="food.php">Food</a></li>
                <li><a <?php if($page == 'blog.html'){ echo ' class="active"';}?> href="blog.html">Blog</a></li>
                <li><a <?php if($page == 'about.html'){ echo ' class="active"';}?> href="about.html">About</a></li>
                <li><a <?php if($page == 'contact.html'){ echo ' class="active"';}?> href="contact.html">Contact</a></li>
                <li id="lg-bag">
                    <a <?php if($page == 'cart.php'){ echo ' class="active"';}?> href="cart.php">
                        <i class="far fa-shopping-cart"></i>
                        <span class="cart-notification">2</span>
                    </a>
                </li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a <?php if($page == 'cart.php'){ echo ' class="active"';}?> href="cart.php"><i class="far fa-shopping-cart"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
</body>
</html>

<?php
	


?>