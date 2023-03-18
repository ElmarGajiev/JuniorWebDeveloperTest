<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/classes.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sku = $_POST["sku"];

        $obj_sku = new check\SKU($sku);
        $sql = $obj_sku->check();

        /*
            I tried to use the following code here as I have used for adding and deleting products:
                $obj_con = new connect\Connect($connect);
                $result = $obj_con->connect($sql);
            However, it didn't work.
        */
        $result = $connect->query($sql);

        if ($result->num_rows == 0){
            echo "valid";
        }
        else {
            echo "invalid";
        }
    }