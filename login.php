<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="styl1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Logowanie</header>

                <form action="login.php" method="post">
                    
                    <div class="field input-field">
                        <input type="text" placeholder="Nazwa użytkownika" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Hasło" class="haslo">
                        <i class='bx bx-hide pasico'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="pass-forgor">Zapomniałem hasła</a>
                    </div>

                    <div class="field button-field">
                        <button>Zaloguj</button>
                    </div>
                    
                    <?php

                        $con = mysqli_connect('localhost', 'root', '', 'cingciong');
                        
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            
                            @$username = $_POST['username'];
                            @$password = $_POST['password'];

                            $stmt = mysqli_prepare($con, "SELECT * FROM user_data WHERE login = ?");
                            mysqli_stmt_bind_param($stmt, "s", $username);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                        
                            
                            
                        }
                        mysqli_close($con);

                    ?>

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

        
        <!-- ---------------------------- Rejestracja ---------------------------- -->
        
        
        
    </section>

    <script src="scripts/js1.js" ></script>

</body>
</html>