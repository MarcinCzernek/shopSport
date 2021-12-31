<?php 

require("DB_connection.php");

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

$query = "SELECT id, email FROM users WHERE email='". $email . "'AND password='". $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

 if($num == 0){
$error = $_GET['error'];
$error = "<span class='red'>Podaj prawidłową kombinację hasło i emaila</span>";
header('location: login_form.php?error='.$error);

}else{

	$row = mysqli_fetch_array($result);
	$_SESSION['email'] =$row['email'];
	$_SESSION['userId'] = $row['id'];
	header('location: index.php');
}
?>