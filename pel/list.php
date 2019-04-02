<?php

    include_once "db_connect.php";

    // you can set $category in your file
    if ($category != "") {
        $sql = "SELECT id, name, price, img, description, category FROM eshop WHERE category='$category'";
    } else {
        $sql = "SELECT id, name, price, img, description, category FROM eshop";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            include "components/product_list.php";
        }
    } else {
        echo "No products found in the database.";
    }

    mysqli_close($conn);