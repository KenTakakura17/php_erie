<?php
include "../config/include.php";

$getUser = null;
$getProd = null;

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $getUser = getUser($user_id);
}

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];
    $getProd = getProduct($prod_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "resources/header.php"; ?>

<body>
<?php include "resources/navigation.php"; ?>

<?php if ($getUser) { ?>

    <form action="" method="POST">
        <label for="user_name">Name</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['Name'] ?>">
        <label for="user_name">Age</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['Age'] ?>">
        <label for="user_name">Address</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['Address'] ?>">
        <label for="user_name">username</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['username'] ?>">
        <label for="user_name">password</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['password'] ?>">

        <button>EDIT</button>
    </form>
<?php } ?>

<?php if ($getProd) { ?>
    <hr>
    <h2>PRODUCT DETAILS</h2>
    <h1>Name: <?= $getProd[0]['prod_name'] ?></h1>
    <h4>Quantity: <?= $getProd[0]['prod_quantity'] ?></h4>
    <h4>Type: <?= $getProd[0]['prod_type'] ?></h4>
    <h4>Price: <?= $getProd[0]['prod_price'] ?></h4>
    <h4>Date Added: <?= $getProd[0]['prod_date_added'] ?></h4>
    <a href="">EDIT</a>
<?php } ?>

</body>
</html>