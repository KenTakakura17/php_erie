<?php

include "../../config/include.php";

if (isset($_POST['user_id'])) {

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Address = $_POST['Address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userID = $_POST['user_id'];

    $result = updateUser($userID, $Name, $Age, $Address, $username, $password);

    if ($result) {
        echo "<script> window.location.href = '../retrievePage.php' </script>'";
    } else {
        echo "<script> window.location.href = '../viewPage.php?user_id='" . $userID . "' </script>'";
    }
} else {
    echo "<script> window.location.href = '../retrievePage.php' </script>'";
}
?>