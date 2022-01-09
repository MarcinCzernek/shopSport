<?php
require ("DB_connection.php");

if(isset($_SESSION['email'])){
    header('location: products.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css"/>
    <title>Zaloguj się na swoje konto</title>
</head>
<body>
<?php include ("includes/header.php")?>
<br><br><br><br>
<center>
<form class="headset" method="post" action="login_submit.php">
    <H2>Zaloguj się</H2>
    <p>Zaloguj się, aby dokonać zakupu<p><br>
    <input type="text" class="form-control" name="email" placeholder="Email"><br>
    <input type="password" class="form-control" name="password" placeholder="Hasło"><br><br>
        <button class="btn btn-primary">Zaloguj się</button>
</form>
    <center>
        <br><br><br><br>
<?php include ("includes/footer.php")?>
</body>
</html>