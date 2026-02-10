<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php"
?>

<body>
    <?php
    include "resources/navigation.php"
    ?>

    <div class="crtprod">
        <h1>Create User</h1>
        <form action="functions/createUser.php" method="POST">
            <label for="" class="Meganame">Name</label>
            <input type="text" name="user_name">
            <label for="">Age</label>
            <input type="number" name="user_age">
            <label for="">Adress</label>
            <input type="text" name="user_address">
            <button>Submit</button>
        </form>
    </div>
    <div class="crtprod">
        <h1>Create Products</h1>
        <form action="functions/createProduct.php" method="POST">
            <label for="">prod_name</label>
            <input type="text" name="prod_name">
            <label for="">prod_quantity</label>
            <input type="number" name="prod_quantity">
            <label for="">prod_type</label>
            <input type="text" name="prod_type">
            <label for="">prod_price</label>
            <input type="number" name="prod_price">
            <label for="">prod_date_added</label>
            <input type="date" name="prod_date_added">
            <button>Submit</button>
        </form>
    </div>
</body>

</html>