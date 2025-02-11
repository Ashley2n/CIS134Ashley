<?php
session_start();
var_dump($_SESSION['loggedIn']);
try{
    if(!$_SESSION['loggedIn']){
        echo "You are not logged in";
    }else{
        echo "Welcome " . $_COOKIE['user'];
    }
}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

