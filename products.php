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
    <title>Document</title>
</head>
<body>
<?php include "includes/header.php";
include "includes/check.php";

echo "Witaj " . $_SESSION['email'];
?>
<div class="description">
    <img src="">
    <h3>Item 1</h3>
    <p>Opis:</p>
    <p>Cena:</p>
    <?php

    if (check_if_added_to_cart(1)) {
        echo '<a href="#" class="btn btn-block btn-success" disabled>Dodano do koszyka</a>';
    } else {
        ?>
        <a href="add.php?id=1" name="add" value="add">Dodaj do koszyka</a>
        <?php
    }
    ?>

<div class="description">
    <img src="">
    <h3>Item 2</h3>
    <p>Opis:</p>
    <p>Cena:</p>
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

<div class="description">
    <img src="">
    <h3>Item 3</h3>
    <p>Opis:</p>
    <a href="add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Dodaj do koszyka</a>
</div>

<div class="description">
    <img src="">
    <h3>Item 4</h3>
    <p>Opis:</p>
    <a href="add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Dodaj do koszyka</a>
</div>

<?php include "includes/footer.php"; ?>
</body>
</html>