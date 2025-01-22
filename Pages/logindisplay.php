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

    $userInfo = array(
        // Finding a way to read the file into here
        ["username" => "user1", "password" => "Thisisthefirstpassword"],
        ["username" => "user2", "password" => "GoodPasswords_123"],
        ["username" => "user3", "password" => "IsthisaGoodpassword"],
        ["username" => "user4", "password" => "HiHowareyou"],
        ["username" => "user5", "password" => "Goodnight@10"],
    );


    searchPasswordFile($username, $password, $userInfo);
}
else
{
    header('Location: loginform.php');
}

//Array that will be used for checking the password




function searchPasswordFile($username, $password, $userInfo){
    echo "<h3>This is Password Search Function</h3>";
    global $isLogin;

    foreach($userInfo as $user){
        if($username == $user["username"] && $password == $user["password"]){
            $isLogin = true;
            break;
        }
    }

    if ($isLogin) {
        echo "<h3>Welcome $username</h3>";
    }
    else{
        echo "<h3>Login Failed</h3>";
    }
}

 if (isset($_POST["username"]) && (isset($_POST["password"])) && (isset($_POST["Create"]))){
     // getting the username and password
     $newUsername = htmlspecialchars(trim($_POST["username"]));
     $newPassword = htmlspecialchars(trim($_POST["password"]));


     if(!empty($newUsername) && !empty($newPassword)){
         $_SESSION['users'][] = ["username" => $newUsername, "password" => $newPassword];
         $message = "<h4 style='background:lightgreen;'>New user added!</h4>";
     }
     else{
         $message = "<h4 style='background:lightcoral;'>Input data failed!</h4>";
     }
     // addingUserAndPass($newUsername, $newPassword);

 }


/*function addingUserAndPass($newUsername, $newPassword){

}*/

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
