<?php
    $connect = mysqli_connect('localhost', 'root', '', 'cingciong');
    $selectedUser = $_POST['selectedUser'];

    $sql = "SELECT * FROM user WHERE login = '$selectedUser'";
    $result = mysqli_query($connect, $sql);

    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Email</th>
                <th>Hasło</th>
                <th>PASTA</th>
                <th>Admin</th>
                <th>URL Strony</th>
                <th>Opis</th>
            </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['login'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['pastome'] . "</td>";
        echo "<td>" . $row['isadmin'] . "</td>";
        echo "<td>" . $row['user_url'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    mysqli_close($connect);
?>