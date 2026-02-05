
<?php

function retrieveAllUser()
{
    include "connection.php";

    $sql = "SELECT * FROM users";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllProducts()
{
    include "connection.php";

    $sql = "SELECT * FROM products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}



function loginAuth($usernames, $passwords)
{
    include "connection.php";

    $sql = "SELECT * FROM users WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt -> rowCount();

    return $count;

}


function getUser($user_id)
{
    include "connection.php";

    $sql = "SELECT * FROM users WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $user_id

    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function updateUser($user_id)
{
    include "connection.php";

    $sql = "SELECT * FROM users WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $user_id

    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function getProduct($prod_id)
{
    include "connection.php";

    $sql = "SELECT * FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
        "id" => $prod_id

    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}
?>