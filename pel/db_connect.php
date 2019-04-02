<?php

    $server = "localhost";
    $username = "user";
    $password = "password";
    $db = "testdb";

    $conn = mysqli_connect($server, $username, $password, $db);

    //přidat connection error handeling