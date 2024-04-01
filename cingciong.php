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

        <a href='tools.php'><button>Panel</button></a><br>
            <img src="images/strzalkagora.png" alt="gura">
            <img src="images/strzalkadol.png" alt="dol">
        
            
        </div>

        <?php

        require_once "database.php";
        $vid = rand(1,100);
        $vid2 = "videos/vid".$vid.".mp4";
        $kw = "SELECT video.url, user.login, video.title, video.description, comments.content, Users_comment.login FROM video JOIN user ON video.user_id = user.id LEFT JOIN comments ON video.id = comments.video_id LEFT JOIN user AS Users_comment ON comments.user_id = Users_comment.id;";
        $ress = mysqli_query($con, $kw);
        $res = mysqli_fetch_row($ress);
        echo ("
        <div id='tyktyk'>
            
            <p>$vid2</p>
        </div>

        <div id='prawy'>
            
            <div id='user_data'>
                
                <div class='user_avatar'>
                    <img src='images/avatar-def.png' alt='Avatar'>
                </div>
            
                <div class='user_name'>
                    <h3> 	&#9830; $res[1]</h3>
                </div>
                
            </div>

        <div class='video_info'>

            <div class='video_title'>
                <p>$res[2]</p>
            </div>
            
            <div class='video_description'>
                <p>$res[3]</p>
            </div>
            
        </div>
            
            <div class='comments'>
            
                <div class='comments_title'>Komentarze</div>
                ");
                while ($res1 = mysqli_fetch_row($ress)){
                    echo ("
                    <div class='comment'>
                        <div class='comment_name'>$res1[5]</div>
                        <div class='comment_value'>
                            $res1[4]
                        </div>
                    </div>

           
                ");
            }
            ?>
            </div>
            <!-- <textarea id="comment_write" name="commentarz" cols="110" rows="7"></textarea> -->
            
        </div>
    </div>
    

</body>
</html>