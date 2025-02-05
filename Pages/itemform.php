<?php
require_once '../includes/dbh.inc.php';
$dish = "";
$dishError = "";
$country = "";
$countryError = "";
$cost = "";
$costError = "";
$duration = "";
$durationError = "";
$errorMessage = "";

if (isset($_POST['Submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['dish'])) {
        $dishError = "dish is required";
    } else {
        $dish = htmlspecialchars($_POST['dish']);
    }

    if (empty($_POST['country'])) {
        $countryError = "Country is required";
    } else {

        $country = htmlspecialchars($_POST['country']);
    }

    if (empty($_POST['cost'])) {
        $costError = "Cost is required";
    } else {
        if (!is_numeric($_POST['cost'])) {
            $costError = "Cost is not a number";
        } else {
            $cost = htmlspecialchars($_POST['cost']);
        }
    }

    if (empty($_POST['duration'])) {
        $durationError = "Duration is required";
    } else {
        $duration = htmlspecialchars($_POST['duration']);
    }

    // End brace to end the if statement's true block.
    $InsertTableStatement = "INSERT INTO recipes(Dish, Country, Duration, Cost) VALUES (?,?,?,?);";

    if (empty($DBConn)) {
        echo "Something went wrong";
    } else {

        $stmt = $DBConn->prepare($InsertTableStatement);
        $stmt->bind_param("ssss", $dish, $country, $duration, $cost);

        $QueryResults = $stmt->execute();
    }
    $DBConn->close();
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
<h3>Form Validation Test</h3>
<p><span class="error">* Required fields</span></p>
<p><b>Form For Items Page</b></p>
<form name="itemForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <!-- Dish Buttons-->
    Dish: <input type="text" id="dish" name="dish" value="<?php echo $dish?>">
    <span class="error">* <?php echo $dishError?></span><br><br>

    <!-- Country Buttons-->
    Country: <input type="text" id="country" name="country" value="<?php echo $country ?>"/>
    <span class="error"> * <?php echo $countryError; ?></span>
    <br>
    <br>

    <!-- Cost Buttons-->
    <label for="cost"> Cost: </label>
    <input type="text" id="cost" name="cost" placeholder="$1 - $30" value="<?php echo $cost ?>"/>
    <span class="error"> * <?php echo $costError; ?></span>


    <!-- Radio Buttons-->
    <p>Duration</p>
    <span class="error"><?php echo "$durationError <br>"?></span>
    <input type="radio" id="duration1" name="duration" value="90"/>
    <label for="duration1"> 90 mins </label>

    <br>
    <input type="radio" id="duration2" name="duration" value="30"/>
    <label for="duration2"> 30 mins </label>

    <br>
    <input type="radio" id="duration3" name="duration" value="150"/>
    <label for="duration3"> 150 mins </label>

    <br>
    <input type="radio" id="duration4" name="duration" value="120"/>
    <label for="duration4"> 120 mins </label>

    <!-- Submit Button -->
    <br><br>
    <input type="submit" name="Submit" value="Submit"/>
</form>

<?php
echo "Inputs:";

echo "Your form has been submitted. These are the Results";
echo "<br>";
echo "Dish: ". $dish;
echo "Country: " . $country;
echo "<br>";
echo "Cost: " . $cost;
echo "<br>";
echo "duration: " . $duration;

echo "<br>";
/*if ($QueryResults) {
    echo "Success";
} else {
    echo "Error: " . $QueryResults . "<br>" . $DBConn->error;
}*/
?>

</body>
</html>