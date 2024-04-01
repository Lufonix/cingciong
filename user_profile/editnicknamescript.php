<?php
    $conn = mysqli_connect('localhost','root','','cingciong');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_nick = $_POST['newnickname'];

        $update_query = "UPDATE user SET login = '$new_nick' WHERE id = 1";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "Pseudonim został zmieniony pomyślnie!";
            header("Location: user_if_logged.php");
            exit;
        } else {
            echo "Wystąpił problem podczas aktualizacji pseudonimu.";
        }
    }

    mysqli_close($conn);
?>
