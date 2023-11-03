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
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
	<title>About Us</title>
	<style type="text/css">
		.ordr{
			padding-left: 50px;
		}
		.section{
			padding-left: 15px;
			padding-right: 15px;
		}
		.quote{
			color: teal;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		#abt-us{
			padding-top: 10px;
			padding-bottom: 10px;
		}
		h3{
			padding-bottom: 20px;
			padding-top: 20px;
		}
	</style>
</head>
<body background="#e6e6e6">
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
			<!-- </ul> -->
		</div>
		<form method="get" action="search_products.php">
			<input type="text" id="search" name="search" placeholder="Search here...">
			<input type="submit" name="submit">
			<i class="fa fa-search"></i>
			<i class="fa fa-times"></i>
		</form>
		</nav>
		<div class="section">
		<center><i><h2 class="quote">"UpHealth is here to make you healthy!"</h2></i></center>
<h1 id="abt-us">About Us</h1>
<h3>What is UpHealth?</h3>
<p>-UpHealth is the best online health care store. With over 18,000 products and over a 1000 brands in our catalogue you will find everything you are looking for. From fresh Fruits to Herb that are needed for your better health and care – we have it all.
Choose from a wide range of options in every category, exclusively handpicked to help you find the best quality available at the lowest prices. Select a time slot for delivery and your order will be delivered right to your doorstep, anywhere in Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Noida, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore and Chandigarh Tricity. You can pay online using your debit / credit card or by cash on delivery.
We guarantee on time delivery, and the best quality!</p>
<h3>Why UpHealth?</h3>
<p>-UpHealth allows you to walk away from the drudgery of shopping and welcome an easy relaxed way of browsing and shopping for products. Discover new products and shop for all your Health problems from the comfort of your home or office. No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep. Taking health care is now easy as every product, is now available online at UpHealth, India’s best online Health care store.</p>
<h3>	How do I order?</h3>
<ol class="ordr"><li>
	Browse/Search for the product
</li>
<li>
	Add to the shopping cart
</li>
<li>
	Choose a payment method
</li>
<li>Hooray!! You are done. Your products will be Home-delivered as per your order.</li>
</ol>
<h3>Where do we operate?</h3>
<p>-We currently offer our services in Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Noida, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore and Chandigarh Tricity city limits.</p>

<center><h2 class="quote">"Health is like a money, we never have a true idea of its value until we Lose it."</h2></center>
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