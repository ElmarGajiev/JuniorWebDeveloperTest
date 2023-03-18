<?php
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/JuniorWebDeveloper/database/classes.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET"){

        $obj_dvd = new show\DVD();
        $obj_book = new show\Book();
        $obj_furniture = new show\Furniture();
        $sql1 = $obj_dvd->get();
        $sql2 = $obj_book->get();
        $sql3 = $obj_furniture->get();
		
        $result1 = $connect->query($sql1);
        $result2 = $connect->query($sql2);
        $result3 = $connect->query($sql3);
        $row1 = $result1->fetch_all();
        $row2 = $result2->fetch_all();
        $row3 = $result3->fetch_all();

        $rows = array_merge($row1, $row2, $row3);

        usort($rows, function($a, $b) {
            return $a[1] <=> $b[1];
        });

        echo json_encode($rows);
    }