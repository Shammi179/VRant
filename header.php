<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con, 'VRantDB');

	session_start();
	$page = basename($_SERVER['PHP_SELF']);

    if(isset($_POST['add_cart'])){
                    
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'], "food_id");
            if(in_array($_POST['food_id'], $item_array_id)){
                echo "<script>alert('This dish is already added')</script>";
                echo "<script>window.location=''</script>";
            }
            else{
                $count=count($_SESSION['cart']);
                
                $item_array = array(
                    'food_id'=>$_POST['food_id']
                );
                $_SESSION['cart'][$count]=$item_array;
            }
        }
        else{
            $item_array = array(
                'food_id'=>$_POST['food_id']
            );
            $_SESSION['cart'][0]=$item_array;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRant</title>
    <link rel="icon" type="image/png" href="img/logo/fav.png">
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
                <li><a <?php if($page == 'blog.php'){ echo ' class="active"';}?> href="blog.php">Blog</a></li>
                <li><a <?php if($page == 'about.php'){ echo ' class="active"';}?> href="about.php">About</a></li>
                <li><a <?php if($page == 'contact.php'){ echo ' class="active"';}?> href="contact.php">Contact</a></li>
                <li id="lg-bag">
                    <a <?php if($page == 'cart.php'){ echo ' class="active"';}?> href="cart.php">
                        <i class="far fa-shopping-cart"></i>
                        <?php
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                            if($count>0){
                                echo "<span class=\"cart-notification\"> $count </span>";
                            }
                        }
                        ?>
                        
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