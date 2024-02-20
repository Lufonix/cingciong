<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: tyktolk.php");
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="styl1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Logowanie</header>
                <?php
                if(isset($_POST["submt"])){
                    $login = $_POST["username"];
                    $pass = $_POST["password"];
                    require_once "database.php";
                    $sql = "SELECT * FROM user_data WHERE login = '$login'";
                    $result = mysqli_query($con, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($user){
                        if(password_verify($pass, $user["password"])){
                            session_start();
                            $_SESSION["user"] = "Yes";
                            header("Location: tyktolk.php");
                            die();
                        }else{
                            echo("
                            <div class='alert alert-danger'>Nieprawidłowe hasło</div>
                        ");
                        }
                    }else{
                        echo("
                            <div class='alert alert-danger'>Nazwa użytkownika nie istnieje</div>
                        ");
                    }
                }
                ?>

                <form action="login.php" method="post">
                    
                    <div class="field input-field">
                        <input type="text" placeholder="Nazwa użytkownika" class="input" name="username">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Hasło" class="haslo" name="password">
                        <i class='bx bx-hide pasico'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="pass-forgor">Zapomniałem hasła</a>
                    </div>

                    <div class="field button-field">
                        <input name="submt" type="submit" value="ZALOGUJ" id="sbt">
                    </div>

                </form>

                <div class="form-link">
                    <span>Dołącz do nas <a href="regi.php" class="linki signup">Zarejestruj się!</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-login">
                <a href="#" class="field media-fb">
                <i class='bx bxl-facebook fb-icon' ></i>
                <span>Zaloguj sie za pomocą Facebooka</span>
                </a>
            </div>
            
            <div class="media-login">
                <a href="#" class="field media-ggl">
                <img src="images/google.png" alt="google" class="google-image">
                <span>Zaloguj sie za pomocą Google</span>
                </a>
            </div>
        </div>   
    </section>

    <script src="scripts/js1.js" ></script>

</body>
</html>