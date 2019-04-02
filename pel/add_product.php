<?php

    include_once "db_connect.php";

    $product_name = $_POST["name"];
    $product_price = $_POST["price"];
    $product_img = $_POST["img"];
    $product_description = $_POST["description"];
    $product_category = $_POST["category"];

    $sql = "INSERT INTO eshop (name, price, img, description, category) VALUES ('$product_name', '$product_price', '$product_img', '$product_description', '$product_category')";

    if (mysqli_query($conn, $sql)) {
        echo "Product added to the database.";
    } else {
        echo "Can't add product to the database.";
    }

    mysqli_close($conn);