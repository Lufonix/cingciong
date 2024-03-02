<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentarze</title>
</head>
<body>
<div class="wybuzy">
        Wybierz użytkownika

    <form action="" method="post">
        <select name="seluser" id="topsel">
        <?php
                $connect = mysqli_connect('localhost', 'root', '', 'cingciong');
                $sql1 =  "SELECT login FROM user";
                $result = mysqli_query($connect, $sql1);
                while($x = mysqli_fetch_row($result)){
                    echo "<option value='".$x[0]."'>". $x[0]."</option>";
                }
                
            ?>
        </select>

        <input type="submit" value="Wybierz" name="wyslij">
        </form>
        <table>
                    <tr>
                        <th>ID filmu</th>
                        <th>Tytuł filmu</th>
                        <th>ID komentarza</th>
                        <th>Komentarz</th>
                        <th>Usuń</th>
                    </tr>
        <?php
            if(isset($_POST['wyslij'])) {
                $selected_user = $_POST['seluser'];
                echo ("
                <h2>@".$selected_user."</h2>
                ");
                $sql2 = "SELECT video.id, video.title ,comments.content, comments.id FROM comments JOIN user on user.id = comments.user_id JOIN video on comments.video_id = video.id WHERE user.login = '$selected_user'";
                $result = mysqli_query($connect, $sql2);
                while($x = mysqli_fetch_row($result)){
                    echo("
                
                    <tr>
                        <td>".$x[0]."</td>
                        <td>".$x[1]."</td>
                        <td>".$x[3]."</td>
                        <td>".$x[2]."</td>
                        <td><form action='' method='post'><input type='hidden' name='comment_id' value='" . $x[3] . "'><input type='submit' name='delbut' value='Usuń'></form></td>
                        </tr>
                    ");
                }
                if (isset($_POST['delbut'])) {
                    $comment_id = $_POST['comment_id'];
                    echo 'ID komentarza do usunięcia: ' . $_POST['comment_id'] . '<br>';
                    $sql3 = "DELETE FROM comments WHERE id = $comment_id";
                    mysqli_query($connect, $sql3);
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                    if (!mysqli_query($connect, $sql3)) {
                        echo 'Błąd: ' . mysqli_error($connect) . '<br>';
                    }
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    header('Location: comments.php');
                    exit;
                }
            }    
            mysqli_close($connect);
        ?>
        </table>
</div>
</body>
</html>

