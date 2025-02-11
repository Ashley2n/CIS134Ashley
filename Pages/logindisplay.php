<?php
session_start();
setcookie('user', $_POST['username'], time() + (86400 * 30), "/");
$_SESSION['usernameErr'] = "";
$_SESSION['passwordErr'] = "";


// This if statement should be with all redirected pages to make sure
// the user are getting into the pages in correct way
if (isset($_POST["Submit"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){
    // htmlspecialchars() this transform the data the user
    // types in as a html entity allowing for a safe website
    // it prevents the people from hacking to the website.
    $_SESSION['loggedIn'] = false;

    $username = null;
    $password = null;

    // Checks Username feild
    if (empty($_POST["username"])) {
        $_SESSION['usernameErr'] = 'Username is Required';
        $_SESSION['loggedIn'] = false;
        header("location: loginform.php");
    } else {
        $username = htmlspecialchars(trim($_POST["username"]));
    }

    // Checks Password field
    if (empty($_POST["password"])) {
        $_SESSION['passwordErr'] = 'Password is Required';
        $_SESSION['loggedIn'] = false;
        header("location: loginform.php");
    } else {
        $password = htmlspecialchars(trim($_POST["password"]));
    }

// Checks if the buttom was clicked or any actions

// Hard coded array
    $userInfo = array(
        // Finding a way to read the file into here
        ["username" => "user1", "password" => "Thisisthefirstpassword"],
        ["username" => "user2", "password" => "GoodPasswords_123"],
        ["username" => "user3", "password" => "IsthisaGoodpassword"],
        ["username" => "user4", "password" => "HiHowareyou"],
        ["username" => "user5", "password" => "Goodnight@10"],
    );

// Function that searches for the password
    searchPasswordFile($username, $password, $userInfo);
    var_dump($_SESSION['loggedIn']);

// Outputted message
    echo "Input data \n";
    echo "<br><br>";
    echo "Username: " . $username;
    echo "<br>";
    echo "Password:  " . $password;
    echo "<br><br><br>";
}


//Array that will be used for checking the password


function searchPasswordFile($username, $password, $userInfo)
{
    echo "<h3>This is Password Search Function</h3>";
    global $isLogin;

    foreach ($userInfo as $user) {
        if ($username == $user["username"] && $password == $user["password"]) {
            $_SESSION['loggedIn'] = true;
            $isLogin = true;
            break;
        }
    }

    if ($isLogin) {
        echo "<h3>Welcome $username</h3>";
    } else {
        echo "<h3>Login Failed</h3>";
    }
}

if (isset($_POST["Create"]) && ($_SERVER["REQUEST_METHOD"] == "POST")) {

    // getting the username and password

    // Checks Username field
    if(empty($_POST["username"])) {
        $_SESSION['usernameErr'] = 'Username is Required';
        header("location: loginform.php");
    } else {
        $newUsername = htmlspecialchars(trim($_POST["username"]));
    }

// Checks Password field
    if (empty($_POST["password"])) {
        $_SESSION['passwordErr'] = 'Password is Required';
        header("location: loginform.php");
    } else {
        $newPassword = htmlspecialchars(trim($_POST["password"]));
    }



    addingUserAndPass($newUsername, $newPassword);

}

function addingUserAndPass($newUsername, $newPassword, $userInfo)
{
    ;
    if(true){
        try {
            $userInfo += ["username" => $newUsername, "password" => $newPassword];
            var_dump($userInfo);
        }catch(Exception $e){
            echo "Something is Wrong with the Password: " . $e->getMessage();
        }
    }



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
