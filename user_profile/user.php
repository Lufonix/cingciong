<DOCTYPE html!>
<html>
<head>
    <meta charset="UTF-8">
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'cingciong');
    ?>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .profil {
        height: 450px;
        background: lightgrey;
    }

    .imguser img {
        border-radius: 50%;
        border: 2px solid black;
        width: 150px;
        height: 150px;
        margin: 30px 0px 30px 960px;
    }

    .nickname {
        text-align: center;
        font-size: 30px;
    }

    .opis {
        text-align: center;
        font-size: 20px;
        margin: auto;
        margin-top: 20px;
        width: 250px;
        height: 150px;
    }

    .filmy {
        display: flex;
        flex-wrap: wrap;
        float: left;  
    }

    .filmy img {
        display: flex;
        flex-wrap: wrap;
        float: left;
        padding: 30px 30px 30px 20px;
        margin: 40px 30px 0 30px;
    }
</style>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost','root','','cingciong');

    $zapytanie1  = "SELECT user.login, user.description, video.url FROM user INNER JOIN video ON user.id = video.id WHERE user.id = 1 AND video.id = 1;"; //ZROBIC ZZEBY BRALO WSZYSTKIE VIDEO GDZE USER_ID: X
    $query1 = mysqli_query($conn, $zapytanie1);
    while($i = mysqli_fetch_row($query1)) {
        echo ("
            <div class='profil'>
                <div class='imguser'>
                    <img src='avatar-def.png'>
                </div>
                <div class='nickname'>
                    ".$i[0]."
                </div>
                <div class='opis'>
                    ".$i[1]."
                </div>
            </div>
            <div class='filmy'>
                ".$i[2]."
            </div>
        ");
    }

    mysqli_close($conn);
?>
</body>
</html>