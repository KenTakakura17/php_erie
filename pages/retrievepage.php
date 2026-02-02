<?php

// $list = ['Aegis', 'Luminosity', 'Pixelation', 'Sovereign:Frostveil', 'Equinox', 'Nyctophobia', 'Illusion'];

include "../config/include.php";
$list = retrieveAllUser();

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
                <td><a href="viewPage.php?user_id=<?= $item['user_id']?>">>VIEW</a></td>
            </tr>


        <?php

        }
        ?>
    </table>
</body>

</html>