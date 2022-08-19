<?php
	$servername="localhost";
	$username="id19440460_product";
	$password="Elmar-12345678";
	$dbname="id19440460_products";
	$connect=new mysqli($servername, $username, $password, $dbname);

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$sku=$_POST["sku"];
		$sql = "Select sku from product_list where sku='".$sku."'";;
		$result=$connect->query($sql);
		$row=$result->fetch_assoc();

		if($row==Null){
			echo "valid";
		}
		else {
			echo "invalid";
		}
	}
?>