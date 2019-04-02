<?php

    include_once "db_connect.php";

    $id = $_GET["id"];
    if ($id != "") {
        $sql = "SELECT id, name, price, img, description, category FROM eshop WHERE id='$id'";
    } else {
        die("You must enter some ID.");
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        include_once "components/product_page.php";
    } else {
        echo "No products found with this ID.";
    }

    mysqli_close($conn);