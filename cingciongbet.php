<?php  
    include "database.php";
    $newvideo = $_POST['newvid'];
    echo ("<div id='user_data'>");
    $kw = "SELECT video.url, user.login, video.title, video.description, comments.content, Users_comment.login FROM video JOIN user ON video.user_id = user.id LEFT JOIN comments ON video.id = comments.video_id LEFT JOIN user AS Users_comment ON comments.user_id = Users_comment.id WHERE video.url='$newvideo';";
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
            echo ("</div>");

?>