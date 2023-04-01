let email = document.getElementById("email");
let pass =document.getElementById("pass");

function check (){
    console.log(email.value)
    if (email.value == "admin@admin" && pass.value == "admin289")
    window.open("./Admin.html","_self");
}