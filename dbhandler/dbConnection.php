<?php

     $serverName="database-1.creuqsiegvba.ap-south-1.rds.amazonaws.com";
     $port=3315;
     $userName="admin";
     $password="#Admin2023";
     $dbName="tuqb_db";
    // Create connection
    $conn = new mysqli($serverName,$userName, $password, $dbName,$port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
