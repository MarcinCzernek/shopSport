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
    <title>Sport Shop</title>
</head>
<body>
<?php include ("includes/header.php"); ?>

<img src="images/crossfit.jpg" title="Sport" header="Title image" width="400" height="300" align="bottom" >
    <h2>Witaj w naszym sklepie!</h2>
<h3>Mamy najlepsze wyposażenie sportowe dla osób pasjonujących się sportem</h3>
<ul>
    <li>Odzież</li>
    <li>Buty na siłownię</li>
    <li>Suplementy i odżywki</li>
    <li>Trening fitness</li>
    <li>Trening siłowy</li>
</ul>

<?php include ("includes/footer.php"); ?>
</body>
</html>