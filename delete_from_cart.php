<?php
include "DB_connection.php";

if(isset($_GET['id']) && is_numeric($_GET['id'])){

    $itemId = $_GET['id'];
    $userId = $_SESSION['userId'];
    $query = "DELETE FROM selected_items WHERE itemId= '$itemId' and userId='$userId'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    header ("location: selected_items.php");
}
