<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/classes.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/connect.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["check"];
        foreach ($sku as $evey_sku){
            $obj_products = new delete\Products($evey_sku);
            $obj_dvd = new delete\DVD($evey_sku);
            $obj_book = new delete\Book($evey_sku);
            $obj_furniture = new delete\Furniture($evey_sku);

            $sql1 = $obj_products->delete();
            $sql2 = $obj_dvd->delete();
            $sql3 = $obj_book->delete();
            $sql4 = $obj_furniture->delete();

            $obj_conn = new connect\Connect($connect);
            $obj_conn->connect($sql1, $sql2, $sql3, $sql4);
        }

        header("Location: /JuniorWebDeveloper/index");
    }