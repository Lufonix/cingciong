<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts/jquery.js"></script>
    <title>Użytkownicy</title>
</head>
<body>
    
<div class="wybuzy">
  <form action="" method="post" onsubmit="return false;">
    <select name="seluser" id="seluser">
      <?php
      $connect = mysqli_connect('localhost', 'root', '', 'cingciong');
      $sql = "SELECT login FROM user";
      $result = mysqli_query($connect, $sql);
      while ($x = mysqli_fetch_row($result)) {
        echo "<option value='" . $x[0] . "'>" . $x[0] . "</option>";
      }
      mysqli_close($connect);
      ?>
    </select>
    <input type="button" value="Pobierz dane" id="getDataButton">
  </form>
</div>   

<div id="poka">

</div>
        <script>
        $(document).ready(function() {
          $("#getDataButton").click(function() {
            var selectedUser = $("#seluser").val();
        
            // Wyślij żądanie AJAX do pliku PHP
            $.ajax({
              type: "POST",
              url: "get_user_data.php",
              data: { selectedUser: selectedUser },
              success: function(data) {
                // Zamień zawartość div na otrzymaną odpowiedź
                $("#poka").html(data);
              },
              error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
            });
          });
        });
        </script>

</body>
</html>