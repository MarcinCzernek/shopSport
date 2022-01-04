<?php
include "DB_connection.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css">
    <title>Produkty</title>
</head>
<body>
<?php include "includes/header.php";
include "includes/check.php";

echo "Witaj " . $_SESSION['email'];
?>
<br><br>
<div class="description">
    <img src="images/item1.png"height="300" width="350">
    <h3>Buty męskie Pro Touch Rebel</h3>
    <p>Cena:77.99</p>
    <?php

    if (check_if_added_to_cart(1)) {
        echo '<a href="#" class="btn btn-block btn-success" disabled>Dodano do koszyka</a>';
    } else {
        ?>
        <a href="add.php?id=1" name="add" value="add">Dodaj do koszyka</a>
        <?php
    }
    ?>

    <br><br>

<div class="description">
    <img src="images/item2.png"height="300" width="350">
    <h3>Skakanka z licznikiem Crossfit regulacja 250cm</h3>
    <p>Cena:9.00</p>
    <?php

    if (check_if_added_to_cart(2)) {
        echo '<a href="#" class="btn btn-block btn-success" disabled>Dodano do koszyka</a>';
    } else {
        ?>
        <a href="add.php?id=2" name="add" value="add">Dodaj do koszyka</a>
        <?php
    }
    ?>

</div>

    <br><br>

<div class="description">
    <img src="images/item3.png"height="300" width="350">
    <h3>Mata do Ćwiczeń Jogi Antypoślizgowa gruba 1,5 cm</h3>
    <p>Cena: 54.99</p>
    <?php
    if(check_if_added_to_cart(3)){
        echo '<a href="add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Dodaj do koszyka</a>';
    }else{
        ?>
        <a href="add.php?id=3" name="add" value="add">Dodaj do koszyka</a>
    <?php
    }
    ?>

</div>

<br><br>

<div class="description">
    <img src="images/item4.png" height="300" width="350">
    <h3>KFD Vitapak-witaminy i minerały organiczne-</h3>
    <p>Cena: 24.99</p>
    <?php
    if(check_if_added_to_cart(4)) {
        echo '<a href="add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Dodaj do koszyka</a>';
    }else{
        ?>
        <a href="add.php?id=4" name="add" value="add">Dodaj do koszyka</a>
        <?php
    }
   ?>
</div>

<?php include "includes/footer.php"; ?>
</body>
</html>