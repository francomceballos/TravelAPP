<?php
try {
    //host
    define("HOST", "localhost");
    //dbname
    define("DBNAME", "travelapp");
    //username
    define("USER", "root");
    //password
    define("PASSWORD", "");

    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME."", USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 
catch( PDOException $Exception ) {
        echo $Exception->getMessage();
}