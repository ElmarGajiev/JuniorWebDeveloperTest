<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/classes.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["check"];
        foreach ($sku as $check){ 
            $sql1 = "DELETE FROM product_list WHERE sku = '".$check."'";
            $sql2 = "DELETE FROM book WHERE sku = '".$check."'";
            $sql3 = "DELETE FROM dvd WHERE sku = '".$check."'";
            $sql4 = "DELETE FROM furniture WHERE sku = '".$check."'";

            $obj_conn = new connect\Connect($connect);
            $obj_conn->connect($sql1, $sql2, $sql3, $sql4);
        }

        header("Location: /JuniorWebDeveloper/index");
    }