<?php
session_start();

if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])){
      header("Location: login.php");
      exit();
  }
?>

<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
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
  <title>Checkout</title>
</head>

<body>
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
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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
<!-- added this script -->
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