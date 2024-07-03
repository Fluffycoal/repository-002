<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "businessdb";

    try{
    $conn = new mysqli($servername, $username, $password, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }
    /*if($conn){
    echo "You are connected";
    }*/
?>