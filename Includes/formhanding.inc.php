<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        require_once('dbh.inc.php');
    }catch (Exception $e){
        die("Query failed ".$e->getMessage());
    }
}
else{
    header("location: ../index.php");
}
