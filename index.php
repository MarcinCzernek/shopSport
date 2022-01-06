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
    <link rel="stylesheet" href="includes/style.css"/>
    <link rel="stylesheet" href="includes/style/bootstrap.min.css">
    <title>Sport Shop</title>
</head>
<body>
<?php include ("includes/header.php"); ?>
<main class="container">
    <div class="content" style='padding: 0;'>
<div style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('images/sport.jpg'); background-color: black; height: 804px; width: 100%;">

<div style='color: white; text-align: center; padding: 20px; margin-top: 90px; opacity: 0.9'>
    <h1>Witaj w naszym sklepie!</h1>
<p style='max-width: 100%'>Mamy najlepsze wyposażenie sportowe dla osób pasjonujących się sportem</p>
<ul>
    <li style= "font-size:20px; margin-bottom:20px">Odzież</li>
    <li style= "font-size:20px; margin-bottom:20px">Buty na siłownię</li>
    <li style= "font-size:20px; margin-bottom:20px">Suplementy i odżywki</li>
    <li style= "font-size:20px; margin-bottom:20px">Trening fitness</li>
    <li style= "font-size:20px; margin-bottom:20px">Trening siłowy</li>
</ul>
</div>
</div>


</div>
</main>

<?php include ("includes/footer.php"); ?>
</body>
</html>