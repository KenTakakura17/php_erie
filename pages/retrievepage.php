<?php

// $list = ['Aegis', 'Luminosity', 'Pixelation', 'Sovereign:Frostveil', 'Equinox', 'Nyctophobia', 'Illusion'];

include "../config/include.php";
$list = retrieveAllUser();
$lest = retrieveAllProducts();

if(isset($_GET['status'])){

if($_GET['status'] == 'ok'){
    echo '<script> alert("Deletion Successful")</script>';
}else if($_GET['status'] = 'no'){
    '<script> alert("Deletion Unsuccessful")</script>';
}
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

    <h1>This is retrieve page</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Username</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($list as $item) {
        ?>
            <tr>
                <td><?= $item["Name"] ?></td>
                <td><?= $item["Age"] ?></td>
                <td><?= $item["Address"] ?></td>
                <td><?= $item["username"] ?></td>
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">>VIEW</a> <a href="functions/deleteFunction.php?deleteFrom=user&id=<?= $item['user_id'] ?>">Delete</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <table class="leftside">
        <tr>
            <th>prod_name</th>
            <th>prod_quantity</th>
            <th>prod_type</th>
            <th>prod_price</th>
            <th>prod_date_added</th>
        </tr>

        <?php
        foreach ($lest as $prod) {
        ?>
            <tr>
                <td><?= $prod["prod_name"] ?></td>
                <td><?= $prod["prod_quantity"] ?></td>
                <td><?= $prod["prod_type"] ?></td>
                <td><?= $prod["prod_price"] ?></td>
                <td><?= $prod["prod_date_added"] ?></td>
                <td><a href="viewPage.php?prod_id=<?= $prod['prod_id'] ?>">>VIEW</a> 
                <a href="functions/deleteFunction.php?deleteFrom=product&id=<?= $prod['prod_id']?>">Delete</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>