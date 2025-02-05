<?php
require_once '../includes/dbh.inc.php';
$country = "";
$countryError = "";
$QueryResult = null;
$row = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Checks if the Country is not empty
    if(empty($_POST['Country'])){
        $countryError = "Country is required";
    }else{
        $country = htmlspecialchars($_POST['Country']);
    }

    // Select Statement
    if(!empty($DBConn)){
        if ($DBConn->connect_error) {
            die("Connection failed: " . $DBConn->error);
        }
        $selectStatement = "SELECT * FROM recipes WHERE Country = '$country'";
        $QueryResult = @$DBConn->query($selectStatement);
        echo "Number of rows selected was ", $QueryResult->num_rows;

        while(($row = $QueryResult->fetch_assoc())!== NULL){
            echo "<br> Country : {$row['Country']}";
            echo "<br> Dish: {$row['Dish']}";
            echo "<br> Cost: {$row['Cost']}";
            echo "<br> Duration: {$row['Duration']}<br><br>";
        }
    }
    $DBConn->close();


}
else{
    echo "Page not found";
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="Search Form" method="POST">

            <!-- Country Input -->
            Country: <input type="text" name="Country"><br><br>
            <span class="error"><?php echo $countryError?></span>

            <!-- Button Input -->
            <input type="submit" name="Submit" value="Submit">
        </form>
    </body>
</html>