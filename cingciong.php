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
    <link rel="stylesheet" href="styl3.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Cing Ciong</title>
</head>
<body>

    <div id="conter">
        <div id="lewy">
            <img src="images/ad.png" alt="Reklama">
        </div>

        <div id="tyktyk">
            Jakieś gówno co ci spierze banie 
            I zniszczy twoje życie
        </div>

        <div id="prawy">
            <img src="images/avatar-def.png" alt="Avatar">
            User data<br>
            title<br>
            description<br>
            Comments<br>
            Com1<br>
            Com2<br>
            Com3<br>
            Com4<br>
            textarea Comment    |   submit

        </div>
    </div>
    

</body>
</html>