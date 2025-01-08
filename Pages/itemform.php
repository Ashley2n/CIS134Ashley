<!DOCTYPE html>
<html lang="en">
<head>
    <!-- loginForm Created 1-7-2025 by Ashley A -->
    <!-- This page is an example of form input. -->
    <title>Second Form for Item page</title>
</head>
<body>
<?php

/*function validateNumber($cost){
    global $errorCount;
    if(empty($cost)){
        echo "Cost is required ";
        echo "<br>";
        $errorCount++;
        $retrieval = "";
        header("location: itemform.php");
    }
    else{ // if it isn't empty check or numeric
        $cost = trim($cost);
        if (is_numeric($cost)) {
            $retrieval = $cost;
        }
        else{
            echo "This is not a number";
            echo "<br>";
            $retrieval = "";
        }
    }
    return $retrieval;
}*/

$countryError = "";
$costError = "";
$durationError = "";

    if (isset($_POST['Submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(empty($_POST['country'])){
            $countryError = "Country is required";
        }
        else{
            $country = htmlspecialchars($_POST['country']);
        }

        if(empty($_POST['cost'])){
            $costError = "Cost is required";
        }
        else{
            if(!is_numeric($_POST['cost'])) {
                $costError = "Cost is not a number";
            }
            else {
                $cost = htmlspecialchars($_POST['cost']);
            }
        }

        $duration = htmlspecialchars($_POST['duration']);

        // This is the form handling code.
        /*
            $country = htmlspecialchars($_POST['country']);
            $cost = htmlspecialchars($_POST['cost']);
            $duration = $_POST['duration'];
        */
        echo "Your form has been submitted. These are the Results";
        echo "<br>";
        echo "Country: ". $country;
        echo "<br>";
        echo "Cost: ". $cost;
        echo "<br>";
        echo "duration: ". $duration;


    } // End brace to end the if statement's true block.
    else
{
?>
<p><b>Form For Items Page</b></p>
<form name="itemForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    Country: <input type="text" id="country" name="country" value="" />
    <span class="error"> * <?php echo $countryError;?></span>
    <br>
    <br>
    <label for="cost"> Cost: </label>
    <input type="text" id="cost" name="cost" placeholder="$1 - $30" />
    <span class="error"> * <?php echo $costError;?></span>


    <!-- Radio Bottoms-->
    <p>Duration</p>
    <input type="radio" id="duration1" name="duration" value="90" />
    <label for="duration1"> 90 mins </label>

    <br>
    <input type="radio" id="duration2" name="duration" value="30" />
    <label for="duration2"> 30 mins </label>

    <br>
    <input type="radio" id="duration3" name="duration" value="150" />
    <label for="duration3"> 150 mins </label>

    <br>
    <input type="radio" id="duration4" name="duration" value="120" />
    <label for="duration4"> 120 mins </label>

    <!-- Bottom -->
    <br><br>
    <input type="submit" name="Submit" value="Submit" />
    <?php
    }
    ?>
</form>

</body>
</html>