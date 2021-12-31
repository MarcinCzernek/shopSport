<?php
include "DB_connection.php";

if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$previouspassword = $_POST['previouspassword'];
$previouspassword = mysqli_real_escape_string($con, $previouspassword);

$newpassword = $_POST['newpassword'];
$newpassword = mysqli_real_escape_string($con, $newpassword);

$renewpassword = $_POST['renewpassword'];
$renewpassword = mysqli_real_escape_string($con,$renewpassword);

$query = "SELECT email,password FROM users WHERE email = '" . $_SESSION['email']. "'";
$result = mysqli_query($con, $query) or die ($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

if($newpassword != $renewpassword){
    header('location: change_password.php?error=The two passwords don\'t match.');
}else{
    if($previouspassword == $orig_pass){
        $query = "UPDATE users SET password = '" . $newpassword . "' WHERE email= '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: change_password.php?error=Hasło zmienione sukcesem');
    }else{
        header('location: change_password?error=Niewłaściwe poprzednie hasło');
    }
}
?>