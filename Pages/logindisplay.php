<?php
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
    echo "Password: " . $password;
}
else
{
    header('Location: loginform.php');

}