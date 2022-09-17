<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/database/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/database/classes.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $type = $_POST["type"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $width = $_POST["width"];
        $length = $_POST["length"];


        $obj_products = new add\Products($sku, $type);
        $obj_dvd = new add\DVD($sku, $type, $name, $price, $size);
        $obj_book = new add\Book($sku, $type, $name, $price, $weight);
        $obj_furniture = new add\Furniture($sku, $type, $name, $price, $height, $width, $length);
        $sql1 = $obj_products->set();
        $sql2 = $obj_dvd->set();
        $sql3 = $obj_book->set();
        $sql4 = $obj_furniture->set();

        $obj_con = new connect\Connect($connect);
        $obj_con->connect($sql1, $sql2, $sql3, $sql4);
		
        header("Location: /index");
    }
