<?php
session_start();
// if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])){
// 	header("Location: login.php");
// 	exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/e6b6d419d1.js"></script>
    <link rel="stylesheet" href="./home.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> -->
	<title>Home page</title>
	<style>
		#catgry{
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<div>
    <nav>
		<button></button>
		<div class="logo"><h1>Uphealth</h1></div>
		<div class="men">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Aboutus.php">About</a></li>
				<li><a href="hospital.php">Hospitals</a></li>
			</ul>
			<ul>
			<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>&nbsp;<span id="cart-item" class="badge badge-danger"></span></a>	
                    
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
	 <div class="slider">
		  <figure>
			  <img src="https://inhabitat.com/wp-content/blogs.dir/1/files/2017/11/Vegetables-Carousel-889x309.jpg" alt="">
			  <img src="https://soliloquywp.com/wp-content/uploads/2019/04/nb_sss_8.jpg" alt="">
			  <img src="https://starbazarjapan.com/wp-content/uploads/2018/08/slider2.jpg" alt="">
			  <img src="https://dabbledoneright-production.s3.amazonaws.com/production/uploads/course/photo2/152013/carousel_chinese-herbs.png" alt="">
			  <img src="https://inhabitat.com/wp-content/blogs.dir/1/files/2017/11/Vegetables-Carousel-889x309.jpg" alt="">
		  </figure>
	  </div>
			<?php
			include 'config.php';
			if (isset($_GET["submit"])) {
				$str = $_GET["search"];
				$query = "SELECT * FROM product WHERE meta_keyword Like '%$str%' AND status='1'";
						$query_run = mysqli_query($conn,$query);
						$check_products = mysqli_num_rows($query_run)>0;
			?>
<div class="contain">
<div id="message"></div>
<h3 id="catgry"><?php echo mysqli_fetch_assoc($query_run)['meta_keyword'] ?></h3>
<div class="row mt-4">
<?php
			if($check_products)
			{
				while($row = mysqli_fetch_assoc($query_run))
				{
					?>
					
				<div class="rws col-lg-4 col-sm-6">	
      <div class="imeg">
         <img src="<?php echo './phpeCom/media/product/'.$row['image']?>"/>
         <div class="detail">
          <h2><span><?php echo $row['name'] ?></span></h2>
           <p><?php echo $row['short_desc'] ?></p>
            <div class="mor">
	           <!-- <a href="#" class="read-mor">View <span>Details</span></a> -->
			   <form class="form-submit">
			    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['code'] ?>">
				<button type="submit" class="addItemBtn">Add to Cart <i class="fa fa-shopping-cart"></i></button>
				</form>
	        <div class="prce">
		      <h3>Price: <i class="fa fa-inr"></i> <?php echo $row['price'] ?></h3>
	      </div>
       </div>
    </div>
  </div>
  </div>
<!--image card end-->
   
      <?php
				}

			}
			else{
				echo "No products found";
			}
		}
?>
</div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

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
	var menu = document.querySelector('.men');
	button.onclick = ()=>{
		menu.classList.toggle('expand-mobile');
		button.classList.toggle('expand-icon');

	}
</script>	
			
