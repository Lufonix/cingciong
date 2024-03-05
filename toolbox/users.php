<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    
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
        <input type="submit" value="Wybierz" name="wyslij">
        </form>
        <table>
            
        <?php
            if(isset($_POST['wyslij'])) {
                $y = $_POST['seluser'];
                $connect= mysqli_connect('localhost', 'root','','cingciong') ;
                $sql = "SELECT * from user where login = $y";
                $z = mysqli_query($connect,$sql) ;
                while($res = mysqli_fetch_row($z)){
                    echo "<tr><td>".$res[1]."</td> <td>".$res[2]."</td><td>".$res[3]."</td> <td>".$res[4]."</td></tr>" ;
                }
                    
            }
        ?>
</div>
</body>
</html>