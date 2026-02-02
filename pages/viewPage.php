<?php 
include "../config/include.php";

if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
}else{
    echo "<script> window.location.href = 'retrievepage.php </script>";

}
?>




<!DOCTYPE html>
<html lang="en">
    <?php
        include "resources/header.php"
    ?>
<body>
    <?php
        include "resources/navigation.php"
    ?>
    
    <h1>Name: <?=  $getUser[0]['Name'] ?> ?></h1>
    <h4>Age: <?=  $getUser[0]['Age'] ?> ?></h4>
    <h4>Address: <?=  $getUser[0]['Address'] ?> ?></h4>
    <h4>username: <?=  $getUser[0]['username'] ?> ?></h4>

    <a href="">EDIT</a>
</body>
</html>