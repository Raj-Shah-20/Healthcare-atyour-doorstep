
<?php
$server="sql204.epizy.com";
$username="epiz_27486915";
$password="jT8nup31K0T6yi0";
$db_name="epiz_27486915_ecom";
	$conn = new mysqli('localhost','root','','ecom');
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>