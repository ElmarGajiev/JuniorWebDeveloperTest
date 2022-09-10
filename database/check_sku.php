<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/public/database/connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["sku"];
        $sql = "Select sku from product_list where sku = '".$sku."'";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

        if ($row == null){
            echo "valid";
        } else {
            echo "invalid";
        }
    }