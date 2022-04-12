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
    <?php include 'header.php' ?>


    <section id="page-header" class="about-header">
        
        <h2>#let's_talk</h2>
        
        <p>Leave a Message, We love to hear from you!</p>
        
    </section>

	<section id="contact-details" class="section-p1">
		<div class="details">
			<span>GET IN TOUCH</span>
			<h2>Visit one of our branch locations or contact us today</h2>
			<h3>Head Office</h3>
			<div>
				<li>
					<i class="fal fa-map"></i>
					<p>Dhanmondi, Dhaka-1205</p>
				</li>
				<li>
					<i class="far fa-envelope"></i>
					<p>shumaiya15-12179@diu.edu.bd, sajal15-12381@diu.edu.bd</p>
				</li>
				<li>
					<i class="fal fa-phone-alt"></i>
					<p>+8801521256661, +8801843441269</p>
				</li>
				<li>
					<i class="fal fa-clock"></i>
					<p>Sunday to Thursday: 9.00 am to 10.00 pm</p>
				</li>
			</div>

		</div>

		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.036944850948!2d90.36710723789339!3d23.7470500444253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1648124885189!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

	</section>

	<section id="form-details">
		<form action="">
			<span>LEAVE A MESSAGE</span>
			<h2>We love to hear from you</h2>
			<input type="text" placeholder="Your name">
			<input type="text" placeholder="E-mail">
			<input type="text" placeholder="Subject">
			<textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
			<button class="normal">Submit</button>
		</form>

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

