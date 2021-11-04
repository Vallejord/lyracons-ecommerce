// Filter collapsable menu
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


// cambio de color de titulo de categoria 
const hoverTrigger = document.getElementById("trigger");
const colorTarget = document.getElementById("colortarget");

hoverTrigger.addEventListener("mouseover", mouseOver);
hoverTrigger.addEventListener("mouseout", mouseOut);

function mouseOver() {
  colorTarget.style.color = "red";
}

function mouseOut() {
  colorTarget.style.color = "black";
}


// Open modal 
const logIn = document.getElementById("log-in");

const mainProductGrid = document.getElementById("main-product-grid");       

logIn.addEventListener("click", changeDisplay);

function changeDisplay() {
  mainProductGrid.classList.toggle("hide");
}


// switch to hambuger menu

const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
       }

const addButton = document.getElementById("add-button");