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
            <img src="images/ad1.png" alt="Reklama">
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
                    <h3>Andrzej</h3>
                </div>
                
            </div>

            <div class="video_title">
                <p>10000000 KOLOROWYCH PIŁEK W WANNIE MOJEJ ZMARŁEJ BABCI BOŻENKI</p>
            </div>
            
            <div class="video_description">#pilka#wanna#babcia#rak#bozena#mamzamiarpopelnicsamobojstwo#dividnull</div>
            
            
            
            <div class="comments">

                <div class="comments_title"><hr/>Komentarze<hr/></div>

                    <div class="comment">
                        <div class="comment_name">PolJulecqua2011</div>
                        <div class="comment_value">
                            Te kolorowe piłki som super i wgl super filmik! Moja babcia terz zmarzła na raka płuc ale miała na imnie Tadeusz.   
                        </div>
                    </div>

            </div>
            
            <!-- <textarea id="comment_write" name="commentarz" cols="110" rows="7"></textarea> -->
            
        </div>
    </div>
    

</body>
</html>