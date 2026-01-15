<?php

if (isset($_POST['usernames']) && isset($_POST['password'])) {

    $usernames = $_POST['usernames'];
    $Password = $_POST['password'];

    $my_user = "tung tung sahur";
    $my_pass = "67";
    $user_name = "Chaff Latreel Mark Amad Gian Ray Jimkurt";

    if ($usernames == $my_user && $Password == $my_pass) {
        echo "<script> window.location.href = '../dashboard.php?name=" . $user_name . "'</script>";
    } else {
        echo "<script> window.location.href = '../login.php?status=false'</script>";
    }

    echo "Your username is " .  $usernames . " and your password is " . $Password;
}
