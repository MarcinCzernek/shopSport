<?php
include "DB_connection.php";
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zmień hasło</title>
</head>
<body>

<form method="post" action="change_password_submit.php">

    <h1>Zmień hasło</h1>
    <?php
    if(isset($_GET["error"])){
        echo $_GET['error'];
    }
    ?>
    <input type="password" name="previouspassword" placeholder="Poprzednie hasło"><br>
    <input type="password" name="newpassword" placeholder="Nowe hasło"><br>
    <input type="password" name="renewpassword" placeholder="Wpisz ponownie nowe hasło"><br>
    <button>Zmień</button>
    <br><br><br>
    <a href="products.php">Powrót</a>

</form>

</body>
</html>