<?php
require ("DB_connection.php");

if(isset($_SESSION['email'])){
    header("location: products.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> SIGN UP </h1>
<form action="register_submit.php" method="POST">
        <input type="text"  class="form-control" placeholder="Name" name="name"  required>
        <input type="email"  class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        <?php
        if(isset($_GET["m1"])){
            echo $_GET['m1'];
        }
        ?>
        <input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
    <button class="btn btn-primary">Submit</button>
</form>
</body>
</html>