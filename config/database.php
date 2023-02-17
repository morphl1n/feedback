<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'legolas');
    define('DB_PASSWORD', '654321');
    define('DB_NAME', 'feedback');

    //create connection

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //check connection

    if($connect->connect_error){
        die('Connection Failure' . $connect->connect_error);
    }



?>