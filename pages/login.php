<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('User and Pass Incorrect') </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAFF GPT</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>

<body class="body">
    <div class="loginborder">
        <form action="functions/loginfunction.php" method="POST">
            <h1 class="login">Login</h1>
            <label for="username" class="Username">Username</label>
            <input type="text" id="username" class="matik" name="username">
            <label for="password" class="Password">Password</label>
            <input type="Password" id="password" class="Matik" name="password">
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</body>

</html>