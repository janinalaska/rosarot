var bgColor = new Array();
bgColor[0] = "#AEF27E";
bgColor[1] = "#C18DD9";
bgColor[2] = "#5C9060";
bgColor[3] = "#F2F549";
bgColor[4] = "#FFA176";
bgColor[5] = "#FFCBE9";
bgColor[6] = "#ADEFD1";
bgColor[7] = "#FFD1E0";




var color = new Array();
color[0] = "#024FBA";
color[1] = "#42EDB7";
color[2] = "#FFB6E1";
color[3] = "#987DAB";
color[4] = "#9F3402";
color[5] = "#FF0000";
color[6] = "#146F12";
color[7] = "#34939F";

var r = document.querySelector(':root');
var svgElement = document.getElementById('svglogo');
var s = 6;

// function myFunction_set() {
//   r.style.setProperty('--blue', 'lightblue');
// }


function changeColor() {
  var randomColor = Math.floor(Math.random() * bgColor.length);
  console.log(randomColor);
  svgElement.style.fill = color[randomColor];
  r.style.setProperty('--bgColor', bgColor[randomColor]);
  r.style.setProperty('--color', color[randomColor]);

  // svgElement.style.fill = color[s];
  // r.style.setProperty('--bgColor', bgColor[s]);
  // r.style.setProperty('--color', color[s]);
};

changeColor(); // do this in window.onload !!  window.onload(changeColor)



// --------------click change----------------

var cir = document.getElementById('cir');

function clickChange() {
  var randomColor = Math.floor(Math.random() * bgColor.length);
  console.log(randomColor);
  svgElement.style.fill = color[randomColor];
  r.style.setProperty('--bgColor', bgColor[randomColor]);
  r.style.setProperty('--color', color[randomColor]);
}



// ---------------get height------------------
function test() {
  var t = document.getElementById('test');
  t.style.color = "#FF0000";
  console.log('success');
}


var header = document.querySelector('.header');
var footer = document.querySelector('.footer');
var headerheight = header.offsetHeight;
var footerheight = footer.offsetHeight;
var gal = document.querySelector('.gallery_container');
var i = document.querySelector('.img_link');

// gal.style.paddingTop = headerheight+"px";
// gal.style.paddingBottom = footerheight+"px";
// i.style.paddingTop = headerheight + "px";

if (gal !== null) {
  gal.style.paddingTop = headerheight+20+"px";
  gal.style.paddingBottom = footerheight+20+"px";
} else if (i !== null) {
  i.style.paddingTop = headerheight+15+ "px";
}



// if (document.URL.includes('call')) {
//   console.log('call');
// } else {
//   console.log('abo');
// }

// var pathname = window.location.pathname;
// switch(pathname) {
//    case "/" :
//        console.log("home");
//        i.style.paddingTop = headerheight + "px";
//        break;
//    case "/home" :
//        console.log("home");
//        gal.style.paddingTop = headerheight+"px";
//        gal.style.paddingBottom = footerheight+"px";
//        break;
// }


// var header = document.querySelector('.header');
// var footer = document.querySelector('.footer');
// var headerheight = header.offsetHeight;
// var footerheight = footer.offsetHeight;
// var gal = document.querySelector('.gallery_container');
//
// gal.style.padding = "headerheight 0 footerheight 0";

// function galleryheight() {
//   r.style.setProperty('--marg_top', headerheight);
//   r.style.setProperty('--marg_bottom', footerheight);
//   console.log(headerheight);
// }



// ------------- responsive nav ---------------

function myFunction() {
  var x = document.getElementById("myTopnav");
  var c = document.getElementById("container");
  var a = document.getElementsByClassName("mobile_nav")[0];
  if (x.className === "topnav") {
    x.className += " responsive";
    c.className += " responsive";
    a.innerHTML="CLOSE";
  } else {
    x.className = "topnav";
    c.className = "container";
    a.innerHTML="MENU";
  }
}
