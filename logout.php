<?php

if(!isset($_SESSION['email'])){
    header('location: login_form.php');
}
session_destroy();
header('location: logout.php');

?>