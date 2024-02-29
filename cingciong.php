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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Cing Ciong</title>
</head>
<body>

    <div id="conter">
        
        <div id="lewy">

            <table>
            <tr>
                <td><img src="images/ad1.png" alt="ad1"></td>
                <td><img src="images/ad2.png" alt="ad2"></td>
            </tr>
            <tr>
                <td><img src="images/ad3.png" alt="ad3"></td>
                <td><img src="images/ad4.png" alt="ad4"></td>
            </tr>
            <tr>
                <td><img src="images/ad5.png" alt="ad5"></td>
                <td><img src="images/ad6.png" alt="ad6"></td>
            </tr>
            </table>

        </div>

        <div id="tyktyk">
            <a href="tools.php"><button>Panel</button></a>
        </div>

        <div id="prawy">
            
            <div id="user_data">
                
                <div class="user_avatar">
                    <img src="images/avatar-def.png" alt="Avatar">
                </div>
            
                <div class="user_name">
                    <h3> 	&#9830; Andrzej</h3>
                </div>
                
            </div>

        <div class="video_info">

            <div class="video_title">
                <p>10000000 KOLOROWYCH PIŁEK W WANNIE MOJEJ ZMARŁEJ BABCI BOŻENKI</p>
            </div>
            
            <div class="video_description">
                <p>#pilka#wanna#babcia#rak#bozena#mamzamiarpopelnicsamobojstwo#dajserduszko</p>
            </div>
            
        </div>
            
            <div class="comments">

                <div class="comments_title">Komentarze</div>

                    <div class="comment">
                        <div class="comment_name">PolJulecqua2011</div>
                        <div class="comment_value">
                            Te kolorowe piłki som super i wgl super filmik! Moja babcia terz zmarzła na raka płuc ale miała na imnie Tadeusz.   
                        </div>
                    </div>

                    <div class="comment">
                        <div class="comment_name">Adamoooo1278</div>
                        <div class="comment_value">
                            Mam nadzieje ze Julcia bendzie wrzucana do tego basenu w nastepnym CingCiongu. Mam nadzieie ze bendzie w samych majtach. ps muj pies ma na imie gustaw   
                        </div>
                    </div>

            </div>
            
            <!-- <textarea id="comment_write" name="commentarz" cols="110" rows="7"></textarea> -->
            
        </div>
    </div>
    

</body>
</html>