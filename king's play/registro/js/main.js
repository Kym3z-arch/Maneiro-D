function validation() {
    var form = document.getElementById("form");
    var email = document.getElementById("emailCheck").value;
    var span = document.getElementById("check");

    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

     if (email.match(pattern)) {
 form.classList.add("valid");
    form.classList.remove("invalid");
  span.innerHTML = "Email Valido <img src='img/checkV.png' width='20' style='position: relative; top: 5px;'>";
span.style.color = "lime";
 
     } else {
  form.classList.remove("valid");
form.classList.add("invalid");
  span.innerHTML = "Email Invalido <img src='img/checkIn.png' width='20' style='position: relative; top: 5px;'>";
 span.style.color = "#f00";
     }
}
 
var count = 0;
 var nav = document.getElementById("nav");
var options = document.getElementById("options");
 var efCont = document.getElementById("efCont");
nav.addEventListener('click', showMenu);

 function showMenu() {
     if (count == 0) {
          count = 1;
        nav.style.height = "100vh";
       options.style.opacity = "1";
       efCont.style.filter = "blur(5px)";
     } else {
    count = 0;
        nav.style.height = "55px";
       options.style.opacity = "0";
       nav.style.top = "0";
       efCont.style.filter = "blur(0px)";
     }
 }