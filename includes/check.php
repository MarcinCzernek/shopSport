<?php

function check_if_added_to_cart($itemId) {
    $userId = $_SESSION['userId'];
    require("DB_connection.php");


    $query = "SELECT * FROM selected_items WHERE itemId='$itemId' AND userId ='$userId' and status='Dodano do koszyka'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));


    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
