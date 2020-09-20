<?php

        $db_host = "cilsydb.ct6gyzehincn.ap-southeast-1.rds.amazonaws.com";
        $db_user = "root";
        $db_pass = "Admin123";
        $db_name = "pesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
