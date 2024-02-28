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
    <title>Użytkownicy</title>
</head>
<body>
<header>
    <div id="topbar">
            <div id="logo"><a href="cingciong.php"><img src="images/logo-alt.png" alt="logo-cingciong"></a></div>
            <h1>Użytkownicy</h1>
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
    <table>
        <tr><th>Nazwa użytkownika</th><th>E-mail</th><th>Hasło</th><th>Hasło</th></tr>
    <?php
        $connect  = mysqli_connect('localhost', 'root', '', 'cingciong');
        $sql = "SELECT *  FROM user";
        $result = mysqli_query($connect, $sql);
        while($x=mysqli_fetch_row($result)){
            echo "<tr><td>".$x[1]."</td><td>".$x[2]."</td><td>".$x[3]."</td><td>".$x[4]."</td></tr>";
        }
        mysqli_close($connect);
    ?>
    </table>
</main>
    <footer></footer>
    <script src="scripts/js2.js"></script>
</body>
</html>