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

    <form action="functions/updateUser.php" method="POST">
        <label for="user_name">Name</label>
        <input name="Name" type="text" value="<?= $getUser[0]['Name'] ?>">

        <label for="Age">Age</label>
        <input name="Age" type="text" value="<?= $getUser[0]['Age'] ?>">

        <label for="Address">Address</label>
        <input name="Address" type="text" value="<?= $getUser[0]['Address'] ?>">
        
        <label for="username">username</label>
        <input name="username" type="text" value="<?= $getUser[0]['username'] ?>">

        <label for="password">password</label>
        <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">


        <input type="text" name="user_id" value="<?= $getUser[0]['user_id'] ?>" hidden>

        <button>SUBMIT</button>
    </form>
<?php } ?>

<?php if ($getProd) { ?>

    <form action="functions/updateProduct.php" method="POST">
        <label for="prod_name">prodname</label>
        <input name="prod_name" type="text" value="<?= $getProd[0]['prod_name'] ?>">

        <label for="prod_quantity">prodquantity</label>
        <input name="prod_quantity" type="text" value="<?= $getProd[0]['prod_quantity'] ?>">

        <label for="prod_type">prodtype</label>
        <input name="prod_type" type="text" value="<?= $getProd[0]['prod_type'] ?>">
        
        <label for="prod_price">prodprice</label>
        <input name="prod_price" type="text" value="<?= $getProd[0]['prod_price'] ?>">

        <label for="prod_date_added">proddateadded</label>
        <input name="prod_date_added" type="date" value="<?= $getProd[0]['prod_date_added'] ?>">


        <input type="text" name="prod_id" value="<?= $getProd[0]['prod_id'] ?>" hidden>

        <button type="submit">SUBMIT</button>
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