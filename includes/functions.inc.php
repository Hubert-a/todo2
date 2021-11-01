<?php
function invalidEmail($email){
$result;

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $result = true;
    }

else {
    $result=false;
}
return $result;
}


function pswdMatch($pswd, $cpswd){
$result;

if ($pswd !== $cpswd){
 $result= true;
}
else {
    $result=false;
}
 return $result;
}



function emailExists($conn, $email){
$sql = "SELECT * FROM users WHERE usersEmail =?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../views/signin.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)){
return $row;
}
else {
    $result =false;
    return $result;
}
mysqli_stmt_close($stmt);
}



function createUser($conn, $name, $email, $pswd){
$sql = "INSERT INTO users (usersName, usersEmail, usersPswd) VALUES (?,?,?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../views/signin.php?error=stmtfailed");
    exit();
}

$hashedpswd = password_hash($pswd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedpswd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ../views/signin.php?error=none");
    exit();
}

function LoginUser($conn, $email, $pswd){
    $emailExists = emailExists($conn, $email);

    if ($emailExists=== false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    $pswdHashed = $emailExists["usersPswd"];
    $checkpswd = password_verify($pswd, $pswdHashed);

    if ($checkpswd===false){
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    else if($checkpswd===true){
        session_start();
        $_SESSION["userid"] = $emailExists["usersId"];
        $_SESSION["useremail"] = $emailExists["usersEmail"];
        header("location: ../views/dashboard.php");
        exit();
    }
}