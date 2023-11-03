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
	<title>FAQ's</title>
	<style type="text/css">
		#faq{
			padding: 10px;
		}
		.faq-content{
			padding-left: 50px;
			padding-right: 10px;
		}
		.faq-content li{
			color: green;
			padding-bottom: 20px;
			padding-top: 20px;
			animation-name: question;
			animation-play-state: alternate;
			animation-iteration-count: infinite;
			animation-direction: alternate-reverse;
			animation-duration: 1s;
		}
		@keyframes question{
			from{color: black};
			to{color: green}
		}
		.faq-heading{
			color: red;
			padding-left: 20px;
			padding-top: 20px;
			animation-name: heading;
			animation-play-state: alternate;
			animation-iteration-count: infinite;
			animation-direction: alternate-reverse;
			animation-duration: 1s;
		}
		@keyframes heading{
			from{color: black};
			to{color: red}
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
	<h1 id="faq">FAQ's</h1> 
	<h3 class="faq-heading">Registration</h3>
	<ul class="faq-content">
		<li>
			<h4>How do I register?</h4>
		</li>
		<p>
			You can register by clicking on the "Sign Up" link at the top right corner of the homepage. Please provide the information in the form that appears. You can review the terms and conditions, provide your payment mode details and submit the registration information.
		</p>
		<li>
			<h4>Are there any charges for registration?</h4>
		</li>
		<p>
			No. Registration on UpHealth is absolutely free.
		</p>
		<li>
			<h4>Do I have to necessarily register to shop on UpHealth?</h4>
		</li>
		<p>
			You can surf and add products to the cart without registration but only registered shoppers will be able to checkout and place orders. Registered members have to be logged in at the time of checking out the cart, they will be prompted to do so if they are not logged in.
		</p>
		<li>
			<h4>Can I have multiple registrations?</h4>
		</li>
		<p>
			Each email address and contact phone number can only be associated with one UpHealth account.
		</p>
		<li>
			<h4>Can I add more than one delivery address in an account?</h4>
		</li>
		<p>
			Yes, you can add multiple delivery addresses in your UpHealth account. However, remember that all items placed in a single order can only be delivered to one address. If you want different products delivered to different address you need to place them as separate orders.
		</p>
		<li>
			<h4>Can I have multiple accounts with same mobile number and email id?</h4>
		</li>
		<p>
			Each email address and phone number can be associated with one UpHealth account only.
		</p>
		
	</ul>
	<h3 class="faq-heading">Payment</h3>
	<ul class="faq-content">
		<li>
			<h4>What are the modes of payment?</h4>
		</li>
		<p>
			You can pay for your order on UpHealth using the following modes of payment:a. Cash on delivery (COD)b. Credit and debit cards (VISA / Mastercard / Rupay)<br>
			If the order has to be left at the security gate, please continue to pay online via wallets, UPI, net banking, or cards as you are doing now.<br>
			If you choose COD as the payment method, you will need to pay our delivery executive in cash at the time of delivery.<br>
			To minimize contact, please give the executive the exact amount or the order total rounded up to the nearest hundred. For example, if your order value is Rs.1,235, please pay exactly this amount or Rs.1,300.
			The executive will not be able to return any change. Any balance due will be credited directly to your wallet which you can utilise in your next order.
		</p>
		<li>
			<h4>Are there any other charges or taxes in addition to the price shown? Is VAT added to the invoice?</h4>
		</li>
		<p>
			There is no VAT. However, GST will be applicable as per Government Regulizations.
		</p>
		<li>
			<h4>Is it safe to use my credit/ debit card on UpHealth?</h4>
		</li>
		<p>
			Yes it is absolutely safe to use your card on UpHealth. A recent directive from RBI makes it mandatory to have an additional authentication pass code verified by VISA (VBV) or MSC (Master Secure Code) which has to be entered by online shoppers while paying online using visa or master credit card. It means extra security for customers, thus making online shopping safer
		</p>
		<li>
			<h4>What is the meaning of cash on delivery?</h4>
		</li>
		<p>
			Cash on delivery means that you can pay for your order at the time of order delivery at your doorstep.
		</p>
	</ul>
	<h3 class="faq-heading">Delivery Related</h3>
	<ul class="faq-content">
		<li>
			<h4>When will I receive my order?</h4>
		</li>
		<p>
			Once you are done selecting your products and click on checkout you will be prompted to select delivery slot. Your order will be delivered to you on the day and slot selected by you. If we are unable to deliver the order during the specified time duration (this sometimes happens due to unforeseen situations).
		</p>
		<li>
			<h4>How are the fruits and herbs packaged?</h4>
		</li>
		<p>
			Fresh fruits and herbs are hand picked and hand cleaned. We ensure hygienic and careful handling of all our products.
		</p>
		<li>
			<h4>How are the fruits and herbs weighed?</h4>
		</li>
		<p>
			Every fruit and herb varies a little in size and weight. While you shop we show an estimated weight and price for everything priced by kilogram. At the time of delivery we weigh each item to determine final price. This could vary by 10% at maximum. Therefore if you have shopped for something that costs Rs. 100 per kg, and we delivery 1.5 kg of the product to you (eg apple, pineapple), you will still be charged a maximum of Rs. 110. In case the weight of the product is lesser than what you ordered, you will pay correspondingly less.
		</p>
		<li>
			<h4>What is the minimum order for delivery?</h4>
		</li>
		<p>
			There is no minimum order for delivery but we charge a nominal delivery fee.
		</p>
	</ul>
	<h3 class="faq-heading">Customer Related</h3>
	<ul class="faq-content">
		<li>
			<h4>How do I contact customer service?</h4>
		</li>
		<p>
			Our customer service team is available throughout the week, all seven days from 7 am to 10 pm. They can be reached at 18601231000 or via email at <a href="mailto:support@uphealth.com">support@uphealth.com</a>
		</p>
		<li>
			<h4>What are your timings to contact customer service?</h4>
		</li>
		<p>
			Our customer service team is available throughout the week, all seven days from 7 am to 10 pm.
		</p>
		<li>
			<h4>Return & Refund</h4>
		</li>
		<p>
			We have a "no questions asked return and refund policy" which entitles all our members to return the product at the time of delivery if due to some reason they are not satisfied with the quality or freshness of the product. We will take the returned product back with us and issue a credit note for the value of the return products which will be credited to your account on the Site. This can be used to pay your subsequent shopping bills<br><br>

			Return Policy - Time Limits:<br>
			1. Perishable goods: Within 48 hours from the delivery date<br>
			2. Other goods : Within 7 days from the delivery date.<br>
		</p>
	</ul>
	<h3 class="faq-heading">Others</h3>
	<ul class="faq-content">
		<li>
			<h4>Do you have offline stores?</h4>
		</li>
		<p>
			No we are a purely internet based company and do not have any brick and mortar stores.
		</p>
		<li>
			<h4>What do I do if an item is defective (broken, leaking, expired)?</h4>
		</li>
		<p>
			We have a no questions asked return policy. In case you are not satisfied with a product received you can return it to the delivery personnel at time of delivery or you can contact our customer support team and we will do the needful.
		</p>
		<li>
			<h4>How will I get my money back in case of a cancellation or return? What are the modes of refund?</h4>
		</li>
		<p>
			The amount will be refunded to your source(bank) account. In case of credit card payments we can also credit the money back to your credit card. Please contact customer support for any further assistance regarding this issue.
		</p>
		<li>
			<h4>I’d like to suggest some products. Who do I contact?</h4>
		</li>
		<p>
			If you are unable to find a product that you would like to shop for, please write to us at <a href="mailto: support@uphealth.com">support@uphealth.com</a> and we will try our best to make the product available to you.
		</p>
	</ul>
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
<!-- linuxcontainers.org
binaryplant.com -->
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