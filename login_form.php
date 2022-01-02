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
<form class="loginTab" method="post" action="login_submit.php">
    <H3>ZALOGUJ SIĘ</H3>
    <p>Zaloguj się, aby dokonać zakupu<p>
    Email:<input type="text" name="email"><br>
    Hasło:<input type="password" name="password"><br><br>
<button>Zaloguj się</button>
</form>
<?php include ("includes/footer.php")?>
</body>
</html>