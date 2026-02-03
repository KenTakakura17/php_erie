<?php

include '../../config/include.php';

if (isset($_POST['usernames']) && isset($_POST['password'])) {

    $usernames = $_POST['usernames'];
    $Passwords = $_POST['password'];

    $result = loginAuth($usernames, $Passwords);

    if ($result == true) {
        echo "<script> window.location.href = '../dashboard.php'</script>";
    } else {
        echo "<script> window.location.href = '../login.php?status=false'</script>";
    }

    // echo "Your username is " .  $username . " and your password is " . $Password;
}
?>