<?php
require("DB_connection.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shop</title>
</head>
<body>
<img src="Zrzut%20ekranu%202021-12-10%20235856.png" alt="php">
<h1>Hello!</h1>
<?php include ("includes/header.php")?>
<?php include ("includes/footer.php")?>
</body>
</html>