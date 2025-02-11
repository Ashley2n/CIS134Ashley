<?php
session_start();
if(!isset($_COOKIE["username"])){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- loginForm Created 1-7-2025 by Ashley A -->
    <!-- This page is an example of form input. -->
    <style>
        .error{
            color: #FF0000;
        }
    </style>
    <title>Two Part Login Form P.1</title>
</head>
<body>
<p><b>Form For Input</b></p>
<form name="Login" action="logindisplay.php" method="post">
    <!-- User Name -->
    <label for="username"> Username: </label>
    <input type="text" id="username" name="username" value="" />
    <span class="error"> * <?php echo $_SESSION['usernameErr']?></span>

    <br>
    <br>

    <!-- Passwords-->
    <label for="password"> Passwords: </label>
    <input type="text" id="password" name="password" value="" size="5" />
    <span class="error"> * <?php echo $_SESSION['passwordErr']?></span>

    <!-- Button -->
    <br><br>
    <input type="submit" name="Submit" value="Send Form" />

    <input type="button" name="Create" value="Create Login">
    <?php
    if(!isset($_POST['Submit'])){
        $_SESSION['loggedIn'] = false;
    }
    var_dump($_SESSION['loggedIn']);
    ?>
</form>
</body>
</html>