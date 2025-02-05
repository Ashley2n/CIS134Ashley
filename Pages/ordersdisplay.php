<?php
require_once "../includes/dbh.inc.php";

if(!empty($DBConn)){
    if($DBConn -> connect_errno){
        die("Failed to connect to MySQL: " . $DBConn -> connect_error);
    }

    $SELECTSTATEMENT = "SELECT  orderinfo.OrderID, recipes.Country, orderinfo.Cost, 
        recipes.Dish, orderinfo.Quantity, orderinfo.Date
     FROM orderinfo
     INNER JOIN recipes ON orderinfo.DishID = recipes.DishID";
    $QueryResult = $DBConn -> query($SELECTSTATEMENT);

    if($QueryResult -> num_rows > 0){
        while($row = $QueryResult -> fetch_assoc()){
            echo "Country: " . $row["Country"] . "<br>";
            echo "Cost: " . $row["Cost"] . "<br>";
            echo "Dish: " . $row["Dish"] . "<br>";
            echo "Quantity " . $row["Quantity"] . "<br>";
            echo "Date: " . $row["Date"] . "<br><br>";
        }
    }
    else{
        echo "0 results";
    }
    $DBConn -> close();
}