<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="styl1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="container forms">
    <div class="form signup">
            <div class="form-content">
                <header>Rejestracja</header>
                
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
                        <button type="submit">Zarejestruj</button>
                    </div>

                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'cingciong');
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $email = $_POST['mail'];
                        $login = $_POST['login'];
                        $password1 = $_POST['paswd1'];
                        $password2 = $_POST['paswd2'];

                        if(($email && $login && $password1 && $password2)!=NULL) { 
                        $stmt = mysqli_prepare($con, "INSERT INTO user_data (`email`, `login`, `passwd`) VALUES (?, ?, ?)");
                        mysqli_stmt_bind_param($stmt, "sss", $email, $login, $password1);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_close($stmt);

                        mysqli_close($con);

                        header('Location: tyktolk.php');
                        }   else    {
                        echo '<p style="color:red;text-align:center;">Wypełnij wszystkie pola!</p>';
                        }
                    }
                    ?>
                    
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

<script src="scripts/js1.js" ></script>

</body>
</html>