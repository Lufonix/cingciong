<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    include 'database.php';
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styltools.css">
    <script src="scripts/jquery.js"></script>
    
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Cing Ciong</title>
</head>
<body>

    <div class="topbar">

            <button id="uzy" class="baton1">Użytkownicy</button>
            <button id="film" class="baton1">Filmy</button>
            <button id="kom" class="baton1">Komentarze</button>
            <button class="baton1"><a href="logout.php">Wyloguj</a></button>
            <button class="baton1"><a href="cingciong.php">CingCiong</a></button>

    </div>

    <div>

    Wybierz użytkownika
    <div id="tut">
    


    </div>
    </div>
    <script src="scripts/ajax.js"></script>

</body>
</html>

