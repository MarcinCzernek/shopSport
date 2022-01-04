<?php
require "DB_connection.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css">
    <title>Wybrany towar</title>
</head>
<body>
<?php include "includes/header.php"?>
<br><br><br>
<table >
<?php
$sum = 0;
$userId = $_SESSION['userId'];
$query = "SELECT items.price AS Price, items.id, items.item AS Name FROM selected_items JOIN items ON selected_items.itemId = items.id WHERE selected_items.userId='$userId' and status='Dodano do koszyka'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
if(mysqli_num_rows($result) >= 1){

?>

    <thead>
    <tr>
        <th>Numer przedmiotu</th>
        <th>Nazwa przedmiotu</th>
        <th>Cena</th>
        <th></th>
    </tr>
    </thead>

<tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>" . $row["Price"] . " zł</td>
                                              <td><a href='delete_from_cart.php?id={$row['id']}' class='remove_item_link'> Usuń </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Całość zamówienia</td>
                                          <td>" . $sum . " zł</td>
                                          <td><a href='ordered.php?itemsid=".$id."'class='btn btn-primary'>Zatwierdź zamówienie</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2><br>Najpierw wybierz towar!</h2><p><a href='products.php'>kliknij tutaj</a> aby przejrzeć produkty</p></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
<?php
include 'includes/footer.php';
?>
</body>
</html>

