// LOAD UŻYTKOWNICY

$("tools.php").ready(function(){
    $("#uzy").click(function(){
        $("#tut").load("toolbox/users.php");
    });
    // LOAD FILMY
    $("#film").click(function() {
        $("#tut").load("toolbox/videos.php");
    });

    // LOAD KOMENTARZE
    $("#kom").click(function() {
        $("#tut").load("toolbox/comments.php");
    });
});

