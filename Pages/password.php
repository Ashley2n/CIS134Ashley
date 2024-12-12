<?php

    function checkPasswords(array $passwords){
        foreach ($passwords as $password) {
            if (strlen($password) >= 12) {
                if (preg_match('/[0-9]/', $password)) {
                    if (preg_match('/[A-Z]+/', $password)) {
                        if (preg_match('/[a-z]+/', $password)) {
                            if (preg_match('/\S/', $password)) {
                                if (preg_match('/\W+|_/', $password)) {
                                    echo " {$password} is a Good Password </br>";
                                } else
                                    echo "{$password} Password does not have special characters</br>";
                            } else
                                echo "{$password} Password shouldn't have spaces</br>";
                        } else
                            echo "{$password} Password should have at least 1 lowercase letter</br>";
                    } else
                        echo "{$password} Password should have at least 1 uppercase letter</br>";
                } else
                    echo "{$password} Password should have at least 1 number</br>";
            } else
                echo "{$password} Password should have at least 12 character</br>";
        }
    }

/*            foreach ($testPatterns as $tPattern){
                if (preg_match($tPattern['pattern'], $test)==1){
                    $displayPattern = $tPattern['pattern'];
                    echo "The password $test contains the correct pattern for pattern $displayPattern.</br>";
                    $goodPassword = true;
                    echo $goodPassword."</br>";
                    break;
                }
            }
            if (!$goodPassword){
                $error = $testPatterns['description'];
                echo "The password $test is missing $error.\n";
            }*/
    $testPass = array (
        "Talk2You_Lawsy",
        "Wrap-it#1wrap",
    );
    $passwords = array("goodpassword1",
                        "badPassword1",
                        "OkayPassword",
                        "Good1stfirst!",
                        "$8Deodorant",
                        "$10Chinesefood",
                        "Talk2YouLawsy",
                        "Wrap-it#1wrap",
                        "822-335-9221",
                        "GoodPassword1");


    $patterns = array (
        [
            "pattern" => '/.{^12,}/i',
            "description" => "12 or more characters"
        ],
        [
            "pattern" => "/[^0-9]+/",
            "description" => "One or more numbers"
        ],
        [
            "pattern" => "/[a-z]+/",
            "description" => "One or more lowercase letters"
        ],
        [
            "pattern" => "/[A-Z]+/",
            "description" => "One or more uppercase letters"
        ],
        [
            "pattern" => "/\S+/",
            "description" => "No Spaces in the program"
        ],
        [
            "pattern" => "/\W/",
            "description" => "At least one special character"
        ]
    );

    checkPasswords($passwords);


/*    $pass = "goodPassword#1";
    $pattern = "/.{12,}/i";
    if(preg_match($pattern, $pass) ==1)
        echo "$pass Good Password<br/>";
    else
        echo "Must have 12 characters<br/>";

$pattern = "/[0-9]+/";
    if(preg_match($pattern, $pass) ==1)
        echo "Good password <br/>";
    else
        echo "Password must have a digit<br/>";

    $pattern = "/[A-Z]/";
    if(preg_match($pattern, $pass) ==1)
        echo "Good password <br/>";
    else
        echo "Password must have a Capital<br/>";

    $pattern = "/[a-z]/";
    if(preg_match($pattern, $pass) ==1)
        echo "Good password <br/>";
    else
        echo "Password must have a lowercase<br/>";

    $pattern = "//";
    if(preg_match($pattern, $pass) ==1)
        echo "Good password <br/>";
    else
        echo "Password must have a special character<br/>";
*/