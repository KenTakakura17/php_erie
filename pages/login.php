<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('Username and Password is incorrect') </script>";
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
    <form action="functions/loginfunction.php" method="POST">
        <h1 class="login">Login</h1>
            <label for="usernames" class="Username">Username</label>
            <input type="text" id="usernames" class="username" name="usernames">
            <label for="password" class="Password">Password</label>
            <input type="Password" id="password" class="password" name="password">
            <button type="submit" class="submit">Submit</button>
    </form>
</body>

</html>