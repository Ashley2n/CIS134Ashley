<?php
$host = "localhost";
$userName = "root";
$password = "";
$db = 'aadatabase1';
$DBConn = null;

// create a connection

// check connection
try{
    $DBConn = new mysqli($host, $userName, $password, $db);
    if ($DBConn->connect_error) {
        die("connection failed ". $DBConn->connect_errno."
        ".$DBConn->connect_error);
    }
    else {
        echo "Connected successfully";
        echo "<br> MySQL server version: " . $DBConn->server_version;
        echo "<br> MySQL client version: " . $DBConn->client_version;
        echo "<br><br>";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}



