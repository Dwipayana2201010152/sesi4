<?php
    $usr = "";
    $ps = "";
    if(isset($GET["txUSER"])){
        $usr = $GET["txUSER"];
        $ps = $_GET["txPASKY"];
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method GET</title>
</head>
<body>
    <form method="GET" action="latihan01.php">
    <div>
        Username
        <input type="text" name="txUSER" required>
    </div>
    <div>
        Password
        <input type="password" name="txPASKY" required>
    </div>

    <div>
        <button>Login</button>
    </div>
</form>


    <div>
    Isi Dari Form:<br>
        1. Username: <?=$usr?>🔥<br>
        2. Password: <?=$ps?>🔥
    </div>
</body>
</html>