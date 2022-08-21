<?php
	require_once("database_connect.php");

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$sku=$_POST["sku"];
		$name=$_POST["name"];
		$price=$_POST["price"];
		$type=$_POST["type"];
		$size=$_POST["size"];
		$weight=$_POST["weight"];
		$height=$_POST["height"];
		$width=$_POST["width"];
		$length=$_POST["length"];


		abstract class Data {
			public $sku;
			public $name;
			public $price;
			public $type;
			public $size;
			public $weight;
			public $height;
			public $width;
			public $length;
		}

		class Products extends Data {
			public function __construct($sku,$type) {
				$this->sku = $sku;
				$this->type = $type;
			}
			function set() {
				return "Insert Into product_list (sku,type)	Values ('$this->sku','$this->type')";
			}
		}

		class DVD extends Data {
			public function __construct($sku,$type,$name,$price,$size) {
				$this->sku = $sku;
				$this->type = $type;
				$this->name = $name;
				$this->price = $price;
				$this->size = $size;
			}
			function set() {
				return "Insert Into dvd (sku,type,name,price,size)	Values ('$this->sku','$this->type','$this->name','$this->price','$this->size')";
			}
		}

		class Book extends Data {
			public function __construct($sku,$type,$name,$price,$weight) {
				$this->sku = $sku;
				$this->type = $type;
				$this->name = $name;
				$this->price = $price;
				$this->weight = $weight;
			}
			function set() {
				return "Insert Into book (sku,type,name,price,weight)	Values ('$this->sku','$this->type','$this->name','$this->price','$this->weight')";
			}
		}

		class Furniture extends Data {
			public function __construct($sku,$type,$name,$price,$height,$width,$length) {
				$this->sku = $sku;
				$this->type = $type;
				$this->name = $name;
				$this->price = $price;
				$this->height = $height;
				$this->width = $width;
				$this->length = $length;
			}
			function set() {
				return "Insert Into furniture (sku,type,name,price,height,width,length)	Values ('$this->sku','$this->type','$this->name','$this->price','$this->height','$this->width','$this->length')";
			}
		}

		$sql="Select sku from product_list where sku='".$sku."'";
		$result=$connect->query($sql);
		$row=$result->fetch_assoc();

		if ($row==Null){
			$obj_products = new Products($sku,$type);
			$obj_dvd = new DVD($sku,$type,$name,$price,$size);
			$obj_book = new Book($sku,$type,$name,$price,$weight);
			$obj_furniture = new Furniture($sku,$type,$name,$price,$height,$width,$length);
			$sql1=$obj_products->set();
			$sql2=$obj_dvd->set();
			$sql3=$obj_book->set();
			$sql4=$obj_furniture->set();
		
			$connect->query($sql1);
			$connect->query($sql2);
			$connect->query($sql3);
			$connect->query($sql4);
		
			header("Location: index.php");
		}
		else {
			header("Location: addproduct.php");
		}
	}
?>
