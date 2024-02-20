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
    <title>Rejestracja</title>
    <link rel="stylesheet" href="styl1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
<section class="container forms">
    <div class="form signup">
            <div class="form-content">
                <header>Rejestracja</header>
                <?php
                if (isset($_POST["submt"])){
                    
                    $login = $_POST['login'];
                    $pass1 = $_POST['paswd1'];
                    $pass2 = $_POST['paswd2'];
                    $mail = $_POST['mail'];
                    $errors = array();
                    $pashash = password_hash($pass1, PASSWORD_DEFAULT);


                    if(empty($login) OR  empty($pass1) OR empty($mail) OR empty($pass2)) { 
                        array_push($errors, "Wszystkie pola muszą być wypełnione");
                    }
                    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Nieprawidłowy adres e-mail");
                    }
                    if(strlen($pass1) < 8){
                        array_push($errors, "Hasło musi mieć co najmniej 8 znaków");
                    }
                    if($pass1 !== $pass2){
                        array_push($errors, "Podane hasła różnią się");
                    }
                    
                    require_once "database.php";
                    $sql = "SELECT * FROM user_data  WHERE email='$mail'";
                    $result = mysqli_query($con,$sql);
                    $numrows = mysqli_num_rows($result);
                    if( $numrows > 0 ) {
                        array_push($errors, "Ten e-mail jest już zajęty");
                    }

                    $sql1 = "SELECT * FROM user_data  WHERE login='$login'";
                    $result1 = mysqli_query($con,$sql1);
                    $numrows1 = mysqli_num_rows($result);
                    if( $numrows1 > 0 ) {
                        array_push($errors, "Ten login jest już zajęty");
                    }

                    if(count($errors) > 0){
                        foreach($errors as $error){
                            echo ("
                            <div class='alert alert-danger'>$error</div>
                            ");
                        }
                    }else{
                        $sql = "INSERT INTO user_data (login, email, password, pastome) VALUES ( ?, ?, ?, ? )";
                        $stmt = mysqli_stmt_init($con);
                        $prepare = mysqli_stmt_prepare($stmt,$sql);
                        if($prepare){
                            mysqli_stmt_bind_param( $stmt, 'ssss', $login, $mail, $pashash, $pass2 );
                            mysqli_stmt_execute($stmt);
                            echo ("
                            <div class='alert alert-success'>Zarejestrowano Pomyślnie!</div>
                            ");
                        }else{
                            die("Ups! Coś poszło nie tak.");
                        }
                    }
                }
                ?>
                <form action="regi.php" method="post" onsubmit="checkform();">

                    <div class="field input-field">
                        <input type="mail" name="mail" placeholder="E-mail" class="input">
                    </div>
                    
                    <div class="field input-field">
                        <input type="text" name="login" placeholder="Nazwa użytkownika" class="input">
                    </div>
                    
                    <div class="field input-field">
                        <input type="password" name="paswd1" placeholder="Hasło" class="haslo">
                    </div>

                    <div class="field input-field">
                        <input type="password" name="paswd2" placeholder="Potwierdź hasło" class="haslo">
                        <i class='bx bx-hide pasico'></i>
                    </div>
                    
                    <div class="field button-field">
                        <input type="submit" value="ZAREJESTRUJ" name="submt" id="sbt">
                    </div>

                </form>
                

                <div class="form-link">
                    <span>Masz już konto? <a href="login.php" class="linki login">Zaloguj się</a></span>
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
<script src="scripts/js1.js"></script>
</body>
</html>