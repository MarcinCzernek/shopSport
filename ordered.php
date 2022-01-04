
<?php
require "DB_connection.php";
if(!isset($_SESSION['email'])){
header('index.php');
}
$userId = $_SESSION['userId'];


$query= "UPDATE selected_items SET status='Potwierdzono' where userId='. $userId . 'and status='Dodano do koszyka'";
mysqli_query($con,$query) or die($mysqli_error($con));
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css">
    <title>Zamówione</title>
</head>
<body>
<center>
    <h2><b>Twoje zamówienie jest potwierdzone. Zamówienie zostanie dostarczone jak najszybciej. Dziękujemy za zakupy w naszym sklepie. </b></h2>
</center>
<hr>
<center>
    <p>Przejdż <a href="products.php">tutaj</a> aby kupić inny towar.</p>
</center>
<?php include "includes/footer.php"?>
</body>
</html>