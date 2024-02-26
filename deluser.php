<?php
    $user=$_POST['deluser'];
    $connect=mysqli_connect( "localhost", "root","", "cingciong");
    $sql= "ALTER TABLE DELETE FROM users_data where login= '$user'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
?>