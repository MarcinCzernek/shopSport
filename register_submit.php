<?php
require ("DB_connection.php");

$username = $_POST['name'];
$username = mysqli_real_escape_string($con,$username);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);


$regexEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query) or die ($mysqli_error($con));
$num = mysqli_num_rows($result);


if($num != 0){
 $m = "<span class='red'>Email już istnieje</span>";
 header('location: register_form.php?m1=' . $m);
}elseif(!preg_match($regexEmail, $email)) {
 $m = "<span class='red'>Nieprawidłowe id emaila</span>";
 header('location: register_form.php?m1=' . $m);
}else{
 $query = "INSERT INTO users(name, email, password)VALUES('" . $username . "','" . $email . "','" . $password . "')";
 mysqli_query($con, $query) or die(mysqli_error($con));
 $user_id = mysqli_insert_id($con);
 $_SESSION['email'] = $email;
 $_SESSION['user_id'] = $user_id;
header('location: products.php');
}
?>


//}elseif(!isset($_POST['regulamin'])){
//  $m = "<span class='red'>Potwierdź akceptację regulaminu</span>";
//header('location: register_form.php?m1=' . $m);

