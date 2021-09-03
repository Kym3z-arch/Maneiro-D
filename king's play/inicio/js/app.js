var itensOptions = document.querySelector('#itensOptions');
 var menuBtn = document.querySelector('#menuBtn');
var click = false;

menuBtn.addEventListener('click', showMenu);

 function showMenu() {
     if (click == false) {
        click = true;
        itensOptions.style.display = "inline";
        menuBtn.style.right = "-1%";
        itensOptions.style.zIndex = "1";
        bgMenu.style.right = "-15%";
     } else {
        itensOptions.style.display = "none";
        itensOptions.style.flexDirection = "row";
        itensOptions.style.right = "3%";
        click = false;
        menuBtn.style.right = "2.9%";
     }
 }
