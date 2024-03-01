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

    
        <div class="baty1">
            <div class="baton1">Użytkownicy</div>
            <div class="baton1">Filmy</div>
            <div class="baton1">Komentarze</div>
            <div class="baton1">Wyloguj</div>
            <div class="baton1"></div>
        </div>
            


    </div>

    
    <main>
    <div class="wybuzy">
        Wybierz użytkownika<br>

    <form action="" method="post">
                <select name="seluser" id="topsel">
                    <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'cingciong');
                        $sql =  "SELECT login FROM user";
                        $result = mysqli_query($connect, $sql);
                        while($x = mysqli_fetch_row($result)){
                            echo "<option value='".$x[0]."'>". $x[0]."</option>";
                        }
                        mysqli_close($connect);
                    ?>
                </select>
                <input type="submit" value="Wybierz">
                </form>
    </div>
    </main>

<script src="scripts/js2.js"></script>
</body>
</html>

