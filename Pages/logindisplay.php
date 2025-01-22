<?php
session_start();
$isLogin = false;
// This if statement should be with all redirected pages to make sure
// the user are getting into the pages in correct way
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars() this transform the data the user
    // types in as a html entity allowing for a safe website
    // it prevents the people from hacking to the website.
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));


    echo "Input data \n";
    echo "<br><br>";
    echo "Username: " . $username;
    echo "<br>";
    echo "Password:  " . $password;
    echo "<br><br><br>";

    searchPasswordFile($username, $password);
}
else
{
    header('Location: loginform.php');
}

//Array that will be used for checking the password

$LoginInfo = array(
    // Finding a way to read the file into here
);



function searchPasswordFile($username, $password){
        echo "<h3>This is Password Search Function</h3>";
        global $isLogin;
        // Program setting the location
        $fileSource = "C:\Users\awind\OneDrive\Documents\PHP\password.txt";

        // reading the passwords page
        $fp = fopen($fileSource, "r");

        // Loop check for if the passwords and username match
        while(!$isLogin){
        while (($line = trim(fgets($fp))) != false) {
            // check if the loop hit end of the file that its reading

                // Getting username and password
                if(list($username1, $password1) = explode(",", $line)){
                    echo "<h3>Read User and Pass </h3>";
                    echo "Username: $username1 <br>";
                    echo "Passwor: $password1 <br>";
                }


                // Checking id the input matches the username and password
                if($username === $username1 && $password === $password1){
                    echo "<h3>Match</h3>";
                    echo "$username1 and $username1 match<br>";
                    echo "$password1 and $password1 match<br>";
                    $isLogin = true;
                    break;
                }
                /*else{
                    $_SESSION["ErrorMessage"] = "Username or Password is invalid";
                    header('Location: loginform.php');
                    echo "Error" . $_SESSION["ErrorMessage"] . "<br>";
                }*/

            }
            fclose($fp);

        }


        if ($isLogin) {
            echo "<h3>Welcome $username</h3>";
        }
        else{
            echo "<h3>Login Failed</h3>";
        }
}

 if (isset($_POST["Create"])){
     // getting the username and password
     $username = htmlspecialchars($_POST["username"]);
     $password = htmlspecialchars($_POST["password"]);

     addingUserAndPass($username, $password);

 }


function addingUserAndPass($username, $password){
    $passwordPage = "C:\Users\awind\OneDrive\Documents\PHP\password.txt";
    $fp = fopen($passwordPage, "a");
    fwrite($fp, $username);
    fwrite($fp, $password);

}

/*    while (!feof($fp)) {
        if(strcmp($username, $username1) == 0){
            echo"Username: " . $username . "  Is a match<br>";
            break;
        }
        $username1 = trim(fgets($fp));
        if(feof($fp)){
            echo"No User found";
        }
    }

    while (!feof($fp)) {
        if(strcmp($password, $password1) == 0){
            echo"Password: " . $password . "  Is a match<br>";
        }
        $password1 = trim(fgets($fp));
        if(feof($fp)){
            echo"No Password found";
        }
    }

    if(!feof($fp)) {
        $isLogin = true;
    }

    fclose($fp);
}*/
/*while($isLogin){
        $line = trim(fgets($fp));
        if(strcmp($line, $username) == 0){
            echo"This worked <br>";
            echo "Username: " . $username . "<br>";
            $isLogin = false;
        }
        else{
            echo "This Name could not be found <br>";
        }
        if(strcmp($line, $password) == 0){
            echo"This worked<br>";
            echo "Password: " . $password . "<br>";
            $isLogin = false;
        }
        else{
            echo "This password could not be found <br>";
        }*/
