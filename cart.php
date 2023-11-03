<?php
  session_start();
  if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://use.fontawesome.com/e6b6d419d1.js"></script> <!--added-->
  <link rel="stylesheet" href="./cart.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> -->
  <title>Cart</title>
</head>

<body>
  <div>
<nav>
		<button></button>
		<div class="logo"><h1>Uphealth</h1></div>
		<div class="menu"> <!--changed it to menu-->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Aboutus.php">About</a></li>
        <li><a href="hospital.php">Hospitals</a></li>
      </ul>
      <ul>
                <a href="cart.php"><li><i class="fa fa-shopping-cart"></i>&nbsp;<span id="cart-item" class="badge badge-danger"></span></a> 
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

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= './phpeCom/media/product/'.$row['image'] ?>" width="50"></td>
                <td><?= $row['name'] ?></td>
                <td>
                  <i class="fa fa-inr"></i>&nbsp;&nbsp;<?= number_format($row['price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fa fa-inr"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="index.php" class="btn btn-success"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fa fa-inr"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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
	var menu = document.querySelector('.menu');
	button.onclick = ()=>{
		menu.classList.toggle('expand-mobile');
		button.classList.toggle('expand-icon');

	}
</script>