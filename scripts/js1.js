const forms = document.querySelector(".forms");
const pokahaslo = document.querySelectorAll(".pasico");
const linki = document.querySelectorAll(".linki");

pokahaslo.forEach(okoico => {
    okoico.addEventListener("click", function () {
        let passfields = okoico.parentElement.parentElement.querySelectorAll(".haslo");

        passfields.forEach(haslo => {
            if(haslo.type === "password"){
                haslo.type = "text";
                okoico.classList.replace("bx-hide", "bx-show");
                return;
            }
            else{
                haslo.type = "password";
                okoico.classList.replace("bx-show", "bx-hide");
            }
        })

    });
})
