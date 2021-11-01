<?php

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (invalidEmail($email)!==false){
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    LoginUser($conn, $email, $pswd); 
}
else {
    header("location: ../index.php?error=invalidemail");
        exit();
}