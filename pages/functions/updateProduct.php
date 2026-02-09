<?php

include "../../config/include.php";

if (isset($_POST['prod_id'])) {

    $prname = $_POST['prod_name'];
    $quantity = $_POST['prod_quantity'];
    $type = $_POST['prod_type'];
    $price = $_POST['prod_price'];
    $date_added = $_POST['prod_date_added'];
    $prod_ids = $_POST['prod_id'];

    $result = updateProduct($prname, $quantity, $type, $price, $date_added, $prod_ids);

    if ($result) {
        echo "<script> window.location.href = '../retrievePage.php' </script>'";
    } else {
        echo "<script> window.location.href = '../viewPage.php?user_id='" .$prod_ids. "' </script>'";
    }
} else {
    echo "<script> window.location.href = '../retrievePage.php' </script>'";
}