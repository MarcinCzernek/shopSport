<?php
include "DB_connection.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
      $itemId = $_GET['id'];
      $userId = $_GET['userId'];
      $query = "INSERT INTO selected_items()VALUES ('$userId', '$itemId', 'Dodano do koszyka')";
      mysqli_query($con,$query) or die(mysqli_error($con));
      header('location: products.php');
    }
?>