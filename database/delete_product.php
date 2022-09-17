<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/database/connect.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["check"];
        foreach ($sku as $check){ 
            $sql1 = "DELETE FROM product_list WHERE sku = '".$check."'";
            $sql2 = "DELETE FROM book WHERE sku = '".$check."'";
            $sql3 = "DELETE FROM dvd WHERE sku = '".$check."'";
            $sql4 = "DELETE FROM furniture WHERE sku = '".$check."'";

            $connect->query($sql1);
            $connect->query($sql2);
            $connect->query($sql3);
            $connect->query($sql4);
        }

        header("Location: /index");
    }