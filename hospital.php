<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/e6b6d419d1.js"></script>
	<link rel="stylesheet" href="./hospital.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
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
			
			</div>
			<form method="get" action="search_products.php">
			<input type="text" id="search" name="search" placeholder="Search here...">
			<input type="submit" name="submit">
			<i class="fa fa-search"></i>
			<i class="fa fa-times"></i>
		</form>
		</nav>
	
	<div class="section">
		<div class="contain"> <!--change to contain-->
			<!--image row start-->
			<div class="rws"> <!-- changed it to rws -->
			  <!--image card start-->
			  <div class="image">
				<img src="https://www.vaidam.com/sites/default/files/hospitals/help-desk-min_2.jpg" alt="">
				<div class="details">
				  <h2><span>Raheja Hospital</span></h2>
				  <p>S.L Raheja Hospital is located in the suburb of Mahim in Mumbai. It is one of the best multispecialty hospitals in Mumbai</p>
				  <div class="more">
					<a href="https://www.rahejahospital.com/" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://contactinformation.in/wp-content/uploads/2018/08/Lilavati-Hospital-Mumbai.jpg" alt="">
				<div class="details">
				  <h2><span>Lilavati Hospital</span></h2>
				  <p>It is a premier multi-specialty tertiary care hospital of India and have been acknowledged globally as the centre of medical excellence.We believe in ‘Sarvetra Sukhinah:Santu, Sarve Santu Niramaya:’ which means ‘Let all be blissful, Let all stay healthy’</p>
				  <div class="more">
					<a href="https://www.lilavatihospital.com" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://www.nanavatihospital.org/images/about-us.jpg" alt="">
				<div class="details">
				  <h2><span>Nanavati Hospital</span></h2>
				  <p>The iconic healthcare institution of Mumbai, Dr. Balabhai Nanavati Hospital, blessed by Mahatma Gandhi and inaugurated in 1950 by India’s first Prime Minister Jawaharlal Nehru, is now reintroduced as Nanavati Super Speciality Hospital.</p>
				  <div class="more">
					<a href="https://www.nanavatihospital.org" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			</div>
			<!--image row end-->
			<!--image row start-->
			<div class="rws">
			  <!--image card start-->
			  <div class="image">
				<img src="https://image3.mouthshut.com/images/imagesp/925048634s.jpg" alt="">
				<div class="details">
				  <h2><span>Hiranandani Hospital</span></h2>
				  <p>Dr L H Hiranandani Hospital, founded in honour of the legend, Padma Bhushan Dr L H Hiranandani, came into existence in February 2004.</p>
				  <div class="more">
					<a href="https://www.hiranandanihospital.org" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://content3.jdmagicbox.com/comp/mumbai/x0/022pxx22.xx22.160108115044.i2x0/catalogue/dr-mahesh-singh-kohinoor-hospital--kurla-west-mumbai-cardiothoracic-surgeons-sgchaK6ftE.jpg?clr=442222" alt="">
				<div class="details">
				  <h2><span>Kohinoor Hospital</span></h2>
				  <p>Kohinoor Hospital is located within KOHINOOR CITY, which is an integrated township situated off LBS Marg at a 10 minutes walk from Vidyavihar Railway Station.</p>
				  <div class="more">
					<a href="http://www.kohinoorhospitals.in" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://english.cdn.zeenews.com/sites/default/files/styles/zm_700x400/public/2017/12/16/647587-fortis.jpg" alt="">
				<div class="details">
				  <h2><span>Fortis Hospital</span></h2>
				  <p>Fortis Healthcare Limited is a leading integrated healthcare delivery service provider in India. The healthcare verticals of the company primarily comprise hospitals, diagnostics and day care specialty facilities.</p>
				  <div class="more">
					<a href="http://fortishospital.in" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			</div>
			<!--image row end-->
			<div class="rws">
			  <!--image card start-->
			  <div class="image">
				<img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period2/2018/06/01/Photos/Processed/sevenhillshospital-kZtC--621x414@LiveMint.jpg" alt="">
				<div class="details">
				  <h2><span>Sevenhills Hospital</span></h2>
				  <p>We, at SevenHills Hospital, offer excellence in in-patient and out-patient facilities, focusing on the comfort and safety of our patients and their loved ones. Our modern infrastructure and facilities match international standards.</p>
				  <div class="more">
					<a href="https://www.sevenhillshospital.com" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://www.thehealthsite.com/wp-content/uploads/2014/02/2943-kokilaben-hospital1.jpg" alt="">
				<div class="details">
				  <h2><span>Kokilaben Hospital</span></h2>
				  <p>" We aim to be a global healthcare institution that combines the best in medical treatment with strong ethical principles and a culture of care and compassion. "<br>
				  - Late Shri. Dhirubhai Ambani</p>
				  <div class="more">
					<a href="http://www.kokilabenhospital.com" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			  <!--image card start-->
			  <div class="image">
				<img src="https://www.vaidam.com/sites/default/files/srcc_childrens_hospital_mumbai.jpg" alt="">
				<div class="details">
				  <h2><span>SRCC Children’s Hospital </span></h2>
				  <p>At NH, children are held very close to the heart. The group currently offers paediatric care facilities in various areas of specialization.</p>
				  <div class="more">
					<a href="https://www.narayanahealth.org/hospitals/mumbai/srcc-childrens-hospital" class="read-more" target="_blank">View <span>Details</span></a>
				  </div>
				</div>
			  </div>
			  <!--image card end-->
			</div>
			<!--image row end-->
		  </div>
		  <!--image card layout end-->
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

</div>
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



</body>
</html>