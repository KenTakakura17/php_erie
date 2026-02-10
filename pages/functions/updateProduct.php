<?php

include "../../config/include.php";

if (isset($_POST['prod_id'])) {

    $prod_name = $_POST['prod_name'];
    $prod_quantity = $_POST['prod_quantity'];
    $prod_type = $_POST['prod_type'];
    $prod_price = $_POST['prod_price'];
    $prod_date_added = $_POST['prod_date_added'];
    $prod_id = $_POST['prod_id'];

    $result = updateProduct($prod_name, $prod_quantity, $prod_type, $prod_price, $prod_date_added, $prod_id);

    if ($result) {
        echo "<script> window.location.href = '../retrievePage.php' </script>'";
    } else {
        echo "<script> window.location.href = '../viewPage.php?user_id='" . $prod_id . "' </script>'";
    }
} else {
    echo "<script> window.location.href = '../retrievePage.php' </script>'";
}
?>