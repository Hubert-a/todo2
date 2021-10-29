<?php


if(isset($_POST["sumit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    $cpswd = $_POST["cpswd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (invalidEmail($email)!==false){
    header("location: ../views/signin.php?error=invalidEmail");
    exit();
    }
    if (pswdMatch($pswd, $cpswd)!==false){
    header("location: ../views/signin.php?error=passwordsdontmatch");
    exit();
    }

    if (emailExists($conn, $email)!==false){
    header("location: ../views/signin.php?error=emailtaken");
    exit();
    }

    createUser($conn, $name, $email, $pswd);
}
else {
    header("location: ../views/signin.php");
}