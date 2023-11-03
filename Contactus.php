<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/e6b6d419d1.js"></script>
	<link rel="stylesheet" href="./style.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' /> <!--added this link in about us faq and hospital-->
	<title>Contact Us</title>
	<style>
		.section{
			padding-left: 10px;
		}
		#cont-us{
			padding-top: 20px;
			padding-bottom: 10px;
		}
		#ctnt{
			padding-top: 20px;
		}
		#addrs{
			padding-top: 20px;
			padding-bottom: 20px;
		}
	</style>
</head>
<body>
	<div>
		<nav>
			<button></button>
			<div class="logo"><h1>Uphealth</h1></div>
			<div class="menu">
				<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Aboutus.php">About</a></li>
				<li><a href="hospital.php">Hospitals</a></li>
			</ul>
			<ul>
                <!-- <a href="cart.php"><li><i class="fa fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger"></span></a>	 -->
                    <li>
                    	<?php if (!isset($_SESSION["loggedIn"])) : ?>
                 <li id="login"><a href="login.php">Login/Register</a></li>
            <?php endif ?>
            <?php if (isset($_SESSION["loggedIn"])) : ?>
                <li id="logout">
                    <a href="logout.php"> 
					<?php echo $_SESSION['email'];?>&nbsp;<i class="fa fa-user"></i>  
                    </a>
                </li> 
            <?php endif ?>
                    </li>
			</ul>
		</div>
		<form method="get" action="search_products.php">
			<input type="text" id="search" name="search" placeholder="Search here...">
			<input type="submit" name="submit">
			<i class="fa fa-search"></i>
			<i class="fa fa-times"></i>
		</form>
		</nav>
	<div class="section">
		<h1 id="cont-us">Contact Us</h1>
	<p id="ctnt">To reach our customer service team please email us at: <a href="mailto:support@uphealth.com">support@uphealth.com</a></p>
	<p id="ctnt">All calls to our customer support number 1860-123-1000 will be recorded for internal training and quality purposes.</p>
	<h3 id="addrs">Office Address:</h3>
	<address>Supermarket Grocery Supplies Pvt. Ltd.<br>
		2nd Floor,<br>
		Fairway Business Park,<br>
		Embassy Golf Link,<br> 
		Challaghatta,<br>
		Bangalore, Karnataka 560071<br>
		Tel: 1860-123-1000</address>
	</div>
		<div class="footer">
			<div class="inner-footer">
	
				<div class="footer-items">
					<h1 id="foot-logo">Uphealth</h1>
					<p>
						Our company aim is to give you the best quality and hygienic products so that you are Fit and Strong after all health is wealth
					</p>
				</div>
	
				<div class="footer-items">
					<h2 id="links-header">Quick Links</h2>
					<div class="border"></div>
					<ul class="footer-list">
						<a href="index.php"><li>Home</li></a>
					<a href="Aboutus.php"><li>About Us</li></a>
					<a href="Contactus.php"><li>Contact Us</li></a>
					<a href="hospital.php"><li>Hospital</li></a>
					<a href="FAQ.php"><li>FAQ</li></a>
					</ul>
				</div>
	
				<div class="footer-items">
					<h2 id="links-header">Categories</h2>
					<div class="border"></div>
					<ul class="footer-list">
						<a href=""><li>Skin Diseases</li></a>
						<a href=""><li>Heart Diseases</li></a>
						<a href=""><li>Diabetes</li></a>
						<a href=""><li>Crohn's & Colitis</li></a>
						<a href=""><li>Allergies & Asthama</li></a>
					</ul>
				</div>
	
				<div class="footer-items">
					<h2 id="links-header">Contact Us</h2>
					<div class="border"></div>
					<ul class="footer-list">
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>112, Santacruz, Mumbai</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9930421406</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i>support@uphealth.com</li>
					</ul>
					<p>Please Follow us on our social media platform</p>
					<div class="social-media">
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				Copyright &copy; Uphealth 2020. All rights reserved.
			</div>
	</div>
	
</body>
</html>

<script type="text/javascript">

	var  searchIcon = document.querySelector('.fa-search');
	var  closeIcon = document.querySelector('.fa-times');
	var  search = document.getElementById('search');

	searchIcon.onclick = ()=>{
		search.classList.add('expand');
	}
	closeIcon.onclick = ()=>{
		search.classList.remove('expand');
	}

	var button = document.querySelector('button');
	var menu = document.querySelector('.menu');
	button.onclick = ()=>{
		menu.classList.toggle('expand-mobile');
		button.classList.toggle('expand-icon');

	}
</script>