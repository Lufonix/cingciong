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
<header>
    <div id="topbar">
            <div id="logo" onclick="wys(6);"><img src="images/logo-alt.png" alt="logo-cingciong"></div>
            <h1>Panel zarządzania</h1>
            <a id="logout" href="logout.php">Wyloguj</a>
    </div>
</header>
    
<aside>
    <button onclick="wys(1);">Użytkownicy</button>
    <button onclick="wys(2);">Posty</button>
    <button onclick="wys(3);">Narzędzia administracyjne</button>
    <button onclick="wys(4);">[...]</button>
    <button onclick="wys(5);">[...]</button>
</aside>
<main id="man">
    Usuń użytkownika<br>
    <form action="deluser.php" method="post">
    <select name="deluser">
    <?php 
        $connect = mysqli_connect('localhost', 'root', '', 'cingciong');
        $sql =  "SELECT login FROM user_data";
        $result = mysqli_query($connect, $sql);
        while($x = mysqli_fetch_row($result)){
            echo "<option value='".$x[0]."'>". $x[0]."</option>";
        }
        mysqli_close($connect);
    ?>
    </select>
    <input type="submit" value="Potwierdź usunięcie">
    </form>
</main>
    <footer></footer>
    <script src="scripts/js2.js"></script>
</body>
</html>