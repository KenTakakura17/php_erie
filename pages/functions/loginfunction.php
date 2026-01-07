<?php

if (isset($_POST['usernames']) && isset($_POST['Password'])) {

    $usernames = $_POST['usernames'];
    $Password = $_POST['Password'];

    $my_user = "tung tung sahur";
    $my_pass = "67";

    if($usernames == $my_user && $Password == $my_pass){
        echo "<script> window.location.href = '../dashboard.php'</script>";
    }else{
        echo "<script> window.location.href = '../login.php'</script>";
    }

    echo "Your username is " .  $usernames . " and your password is " . $Password;
}