<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "business db";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if ($conn){
        echo "You are connected";
    }
    else{
        echo "could not connect!";
    }
?>