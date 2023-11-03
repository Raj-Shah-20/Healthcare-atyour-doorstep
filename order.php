<?php
require('top.inc.php');

$sql="select * from orders";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order </h4>
				   				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile No</th>
							   <th>Address</th>
							   <th>Mode</th>
							   <th>Products</th>
							   <th>Price</th>
							</tr>
						 </thead>
						 <tbody>
						 	<?php
							while($row = mysqli_fetch_assoc($res))
							{	?>
							<tr>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['phone']?></td>
							   <td><?php echo $row['address']?></td>
							   <td><?php echo $row['pmode']?></td>
							   <td><?php echo $row['products']?></td>
							   <td><?php echo $row['amount_paid']?></td>
							 
							</tr>
						<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>