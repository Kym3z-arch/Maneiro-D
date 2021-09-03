 
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