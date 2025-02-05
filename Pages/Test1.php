
<?php
require_once '../includes/dbh.inc.php';
$countryError = "";
$QueryResult = null;
$row = null;

if($_SERVER['REQUEST_METHOD'] == 'Post'){

    // Checks if the Country is not empty
    if(empty($_POST['Country'])){
        $countryError = "Country is required";
    }else{
        $country = htmlspecialchars($_POST['Country']);
    }

    // Select Statement
    if(!empty($DBConn)){
        $selectStatement = "SELECT * FROM country WHERE country = '{$country}'";
        $QueryResult = @$DBConn->query($selectStatement);

        echo "Successfully connected to database";

        while(($row = $QueryResult->fetch_assoc())!== NULL){
            echo "<br> Country : {$row['country']}";
            echo "<br> Dish: {$row['dish']}";
            echo "<br> Cost: {$row['cost']}";
            echo "<br> Duration: {$row['duration']}";
        }
    }
    else{
        echo "Failed to connect to database";
    }

}
else{
    echo "Page not found";
    header('Location: ../include/itemdisplay.php');
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title>Inputs</title>
</head>
<body>
<form action="" name="Search Form" method="Post">

    <!-- Country Input -->
    Country: <input type="text" name="Country"><br><br>
    <span class="error"><?php echo $countryError?></span>

    <!-- Button Input -->
    <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>