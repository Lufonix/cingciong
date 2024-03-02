
function ajaxon(){


fetch('coments.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        huj: 1
    })
})
.then(response => response.json())
.then(data => {
    console.log(data.nie);
})
.catch(error => console.error('Error:', error));
}
ajaxon();