<?php
include "DB_connection.php";

if(!isset($_SESSION['email'])){
    header("location: index.php");
}

$query = "DELETE FROM users WHERE email= '" . $_SESSION['email'] . "'";
$result = mysqli_query($con,$query);
session_destroy();
header('location: index.php');
?>