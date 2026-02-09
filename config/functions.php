
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

function updateUser($userID, $Name, $Age, $Address, $usernames, $passwords)
{
    include "connection.php";

    $sql = "UPDATE users SET 
        Name = :name,
        Age = :age,
        Address = :address,
        username = :username,
        password = :password
        WHERE
        user_id= :user_id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
            "name" => $Name,
            "age" => $Age,
            "address" => $Address,
            "username" => $usernames,
            "password" => $passwords,
            "user_id" => $userID
    ]);

    return $stmnt;

}

function updateProduct($prname, $quantity, $type, $price, $date_added, $prod_ids)
{
    include "connection.php";

    $sql = "UPDATE users SET 
        prod_name = :prod_name,
        prod_quantity = :prod_quantity,
        prod_type = :prod_type,
        prod_price = :prod_price,
        prod_date_added = :prod_date_added
        WHERE
        prod_id= :prod_id";
    $stmnt = $conn->prepare($sql);
    $stmnt -> execute([
            "prod_name" => $prname,
            "prod_quantity" => $quantity,
            "prod_type" => $type,
            "prod_price" => $price,
            "prod_date_added" => $date_added,
            "prod_id" => $prod_ids
    ]);

    return $stmnt;

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