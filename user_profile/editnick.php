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

    .menu {
        height: 20px;
        width: 1920px;
    }

    .zmianapseudonimu, .zmianaopisu {
        background-color: black;
    }

    .zmianapseudonimu input, .zmianaopisu input {
        background-color: black;
        color: white;
        float: left;
        height: 40px;
        width: 50%;
        border: none;
        font-size: 25px;
    }

    .formularz {
        margin: 30px 300px 0px 300px;
    }

    .formularz p {
        margin: 40px;
        text-align: center;
        font-size: 30px;
    }

    .formularz textarea {
        border: 2px solid black;
        padding: 30px;
        font-size: 15px;
    }

    .formularz input {
        border: 2px solid black;
        width: 250px;
        height: 80px;
        padding: 20px;
        font-size: 20px;
    }

    .wpiszopis {
        font-size: 20px;
        text-align: center;
    }

    .przycisk {
        margin-top: 70px;
        text-align: center;
    }

    .przycisk input {
        border: 2px solid black;
        background-color: lightblue;
        width: 250px;
        height: 80px;
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
            </div class='menu'>
                <div class='zmianapseudonimu'>
                    <a href='editdescription.php'><input type='button' value='| Zmień opis profilu |'></a>
                </div>
                <div class='zmianaopisu'>
                    <a href='user_if_logged.php'><input type='button' value='| Wróć do swojego profilu |'></a>
                </div>
            </div>
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
            <div class='formularz'>
                <form action='editnicknamescript.php' method='post'>
                    <p><i>Zmień pseudonim swojego profilu</i></p>
                        <div class='wpiszopis'>
                            Wpisz nowy nickname który będzie się wyświetlał na Twoim profilu:<br>
                            (WAŻNE: Za pomocą tej nazwy będziesz się teraz logować)<br><br>
                            <textarea name='newnickname' rows='5' cols='30'></textarea><br>
                        </div>      
            <br>
                <div class='przycisk'>    
                    <input type='submit' value='Zatwierdź zmiany' name='wyslij'><br>
                </div>
            </form> 
            </div>
        ");
    }

    mysqli_close($conn);
?>
</body>
</html>