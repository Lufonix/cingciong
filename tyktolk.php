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
    <link rel="stylesheet" href="styl2.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Cing Ciong</title>
</head>
<body>
<header>
    <div id="topbar">
            <div id="logo" onclick="wys(6);"><img src="images/logo-alt.png" alt="logo-cingciong"></div>
            <h1>Panel zarządzania</h1>
            <a id="logout" href="logout.php">Wyloguj</a>
    </div>
</header>
    
<aside>
    <button onclick="wys(1);">Cokolwiek</button>
    <button onclick="wys(2);">coś innego</button>
    <button onclick="wys(3);">penis</button>
    <button onclick="wys(4);">ciekawe co w nim napiszesz</button>
    <button onclick="wys(5);">asdfghjklz</button>
</aside>
<main id="man">
    cipa
</main>
    <footer></footer>
    <script src="scripts/js2.js"></script>
</body>
</html>