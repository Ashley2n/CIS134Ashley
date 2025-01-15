<?php
$isLogin = false;
// This if statement should be with all redirected pages to make sure
// the user are getting into the pages in correct way
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars() this transform the data the user
    // types in as a html entity allowing for a safe website
    // it prevents the people from hacking to the website.
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);


    echo "Input data \n";
    echo "<br>";
    echo "Username: " . $username;
    echo "<br>";
    echo "Password: <br>" . $password;
    echo "<br><br><br>";

    searchPasswordFile($username, $password);
}
else
{
    header('Location: loginform.php');

}
if (isset($_POST["Create"])){
    addingUserAndPass($username, $password);

}

    function searchPasswordFile($username, $password){
    echo"<h3>This is Password Search Function</h3>";
    global $isLogin;
    $passwordPage = "C:\Users\awind\OneDrive\Documents\PHP\password.txt";
    $fp = fopen($passwordPage, "r");
    $username1 = trim(fgets($fp));
    $password1 = trim(fgets($fp));
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br><br>";

    while(!$isLogin) {
        if (!feof($fp)) {
            if(strcmp($username, $username1) == 0) {
                echo "Username: " . $username . "Is a match<br>";
            }else{
                echo "Wrong Username<br>";
                $username1 = trim(fgets($fp));
            }
            if(strcmp($password, $password1) == 0) {
                echo "Password: " . $password . "is a match<br>";

            }else{
                echo "Wrong Password<br>";
                $password1 = trim(fgets($fp));
            }


        }
        $isLogin = true;
        fclose($fp);

    }



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
