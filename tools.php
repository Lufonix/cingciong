<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styltools.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Cing Ciong</title>
</head>
<body>

    <div class="topbar">

            <div class="baton1">Użytkownicy</div>
            <div class="baton1">Filmy</div>
            <div class="baton1">Komentarze</div>
            <div class="baton1">Wyloguj</div>
            <div class="baton1">CingCiong</div>

    </div>

    
    <main>
    
    <iframe src="toolbox/users.php">
	    <a href="toolbox/users.php">Tekst alternatywny</a>
    </iframe>

    </main>

<script src="scripts/js2.js"></script>
</body>
</html>

