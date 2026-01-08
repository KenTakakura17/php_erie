<?php 

    $name = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navigator.css">
</head>
<body>
    <nav class="mwep">
        <div class="b">
            <h1> <span class="c">G</span>I<span class="e">A</span>N'S <span class="h">POR</span><span
                    class="i">TFO</span><span class="j">LIO</span><span class="f"
                    onclick="window.location.href = 'Index.html'">HOME</span><span class="g"
                    onclick="window.location.href = '/html/PORTFOLIO1.html'">ABOUT ME</span><span class="g"
                    onclick="window.location.href = '/html/PORTFOLIO2.html'">INFO</span>
                <span class="d">CONTACT</span>
            </h1>
        </div>
    </nav>
    <h1>welcome <?= $name ?> Have a nice day</h1>
</body>
</html>