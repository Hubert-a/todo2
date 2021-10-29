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
$sql = "SELECT * FROM register WHERE userEmail =?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../views/signin.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row=mysqli_fetch_assoc($resultData)){
return $row;
}
else {
    $result =false;
    return $result;
}
mysqli_stmt_close($stmt);
}



function createUser($conn, $name, $email, $pswd){
$sql = "INSERT INTO register (userName, userEmail, userpswd) VALUES (?,?,?,?);";
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