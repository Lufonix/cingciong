document.getElementById('dul').addEventListener("click",getSmth());
    function getSmth(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'cingciongbet.php', true);

    xhr.onload = function(){
        console.log(this.responseText);
        
    }
    xhr.send();
    }