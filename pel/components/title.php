<?php

    include_once "db_connect.php";

    $id = $_GET["id"];
    if ($id != "") {
        $sql = "SELECT name FROM eshop WHERE id='$id'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {         // vždycky ukazuje No product find with this ID
        $row = mysqli_fetch_assoc($result);     // potřeba opravit, zatím nechat
        echo $row["name"];                      // vypnuto
    } else {
        echo "No products with this ID";
    }

    mysqli_close($conn);