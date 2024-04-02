<?php
    session_start();
    include "database.php";
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
    <script src="scripts/jquery.js"></script>

    <script>
    $(document).ready(function(){
    var vid2 = "videos/vid0.mp4";
    var randomNumbers = [];
    var currentIndex = -1;

    $("#dul").click(function(){
        var vid;
        if (currentIndex >= 0 && currentIndex < randomNumbers.length - 1) {
            currentIndex++;
        } else {
            do {
                vid = Math.floor(Math.random() * 101);
            } while (randomNumbers.includes(vid)); // Check if the number is already in the array

            currentIndex = randomNumbers.length;
            randomNumbers.push(vid); // Add the number to the array
        }
        
        vid2 = "videos/vid" + randomNumbers[currentIndex] + ".mp4";

        $("#prawy").load("cingciongbet.php", {
            newvid: vid2
        });

        $("#tyktyk").load("cingciongbe.php", {
            newvid: vid2
        });
    });

    $("#gura").click(function(){
        if (currentIndex > 0) {
            currentIndex--;
            vid2 = "videos/vid" + randomNumbers[currentIndex] + ".mp4";

            $("#prawy").load("cingciongbet.php", {
                newvid: vid2
            });

            $("#tyktyk").load("cingciongbe.php", {
                newvid: vid2
            });
        }
    });
});
    </script>

</head>
<body>

    <div id="conter">
        
        <div id="lewy">

            <img src="images/strzalkagora.png" alt="gura" id="gura">
            <img src="images/strzalkadol.png" alt="dol" id="dul">
            
        </div>

        <div id='tyktyk'>
            
        <?php

        echo("
        <a href='Anaconda Customs/Strona_główna.html'><div id='tiki'>
        <video width='640' height='960' controls autoplay loop>
            <source src='videos/vid0.mp4' type='video/mp4'>
            Your browser does not support the video tag.
        </video>
        </div></a>
        ");

        ?>

        </div>
        

    <div id='prawy'>

    <?php  
    $vid2 = "videos/vid0.mp4";
    echo ("<div id='user_data'>");
    $kw = "SELECT video.url, user.login, video.title, video.description, comments.content, Users_comment.login FROM video JOIN user ON video.user_id = user.id LEFT JOIN comments ON video.id = comments.video_id LEFT JOIN user AS Users_comment ON comments.user_id = Users_comment.id WHERE video.url='$vid2';";
    $ress = mysqli_query($con, $kw);
    $res = mysqli_fetch_row($ress);
    echo("
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
                <div id='comments'>
                <form id='comment_form'>
                    <textarea id='comment_input' name='comment' placeholder='Napisz komentarz...'></textarea>
                    <button type='submit' id='comment_submit'>Dodaj komentarz</button>
                </form>
                ");
            $ress = mysqli_query($con, $kw);
            while ($res1 = mysqli_fetch_assoc($ress)){
            echo ("
            <div class='comment'>
                <div class='comment_name'>".$res1['login']."</div>
                <div class='comment_value'>".$res1['content']."</div>
            </div>
            ");
            }
        echo ("</div></div>");
?>
            
    <!-- <textarea id="comment_write" name="commentarz" cols="110" rows="7"></textarea> -->

</div>
        
    


</body>
</html>