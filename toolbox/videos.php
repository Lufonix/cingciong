<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmy</title>
</head>
<body>
    
</body>
</html>

<div class="wybuzy">
        Wybierz użytkownika
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
        <?php
            if(isset($_POST['wyslij'])) {
                
                    
            }
        ?>
        <input type="submit" value="Wybierz" name="wyslij">
        </form>
</div>