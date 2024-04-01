<?php
    $conn = mysqli_connect('localhost','root','','cingciong');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $new_description = $_POST['newdescription'];

        $update_query = "UPDATE user SET description = '$new_description' WHERE id = 1";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "Opis został zmieniony pomyślnie!";
            header("Location: user_if_logged.php");
            exit;
        } else {
            echo "Wystąpił problem podczas aktualizacji opisu.";
        }
    }

    mysqli_close($conn);
?>
