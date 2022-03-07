var bgColor = new Array();
bgColor[0] = "#C7FF9F";
bgColor[1] = "#99C5E4";
bgColor[2] = "#688B69";
bgColor[3] = "#F8FB60";
bgColor[4] = "#FFA176";
bgColor[5] = "#FFCBE9";
bgColor[6] = "#ADEFD1";
bgColor[7] = "#FFD1E0";
bgColor[8] = "#AEE2ED";
bgColor[9] = "#F8EC83";
bgColor[10] = "#1C6E8A";
bgColor[11] = "#F3866F";
bgColor[12] = "#D8BAFF";





var color = new Array();
color[0] = "#024FBA";
color[1] = "#EE5C6E";
color[2] = "#BEE97F";
color[3] = "#A77CC6";
color[4] = "#9F3402";
color[5] = "#FF0000";
color[6] = "#146F12";
color[7] = "#34939F";
color[8] = "#2D5E68";
color[9] = "#E56E00";
color[10] = "#F2F549";
color[11] = "#FEFCDB";
color[12] = "#5E1CB2";



var r = document.querySelector(':root');
// var svgElement = document.getElementById('svglogo');
var s = 1;

// function myFunction_set() {
//   r.style.setProperty('--blue', 'lightblue');
// }


function changeColor() {
  var randomColor = Math.floor(Math.random() * bgColor.length);
  // console.log(randomColor);
  // svgElement.style.fill = color[randomColor];
  r.style.setProperty('--bgColor', bgColor[randomColor]);
  r.style.setProperty('--bgColA', bgColor[randomColor]+'01');
  r.style.setProperty('--color', color[randomColor]);

  // svgElement.style.fill = color[s];
  // r.style.setProperty('--bgColor', bgColor[s]);
  // r.style.setProperty('--bgColA', bgColor[s]+'01');
  // r.style.setProperty('--color', color[s]);
};

changeColor(); // do this in window.onload !!  window.onload(changeColor)



// --------------click change----------------

var cir = document.getElementById('cir');

function clickChange() {
  var randomColor = Math.floor(Math.random() * bgColor.length);
  // console.log(randomColor);
  // svgElement.style.fill = color[randomColor];
  r.style.setProperty('--bgColor', bgColor[randomColor]);
  r.style.setProperty('--color', color[randomColor]);
}



// ---------------get height------------------
var header = document.querySelector('.header');
var footer = document.querySelector('.footer');
var headerheight = header.offsetHeight;
var footerheight = footer.offsetHeight;
var gal = document.querySelector('.gallery_container');
var i = document.querySelector('.img_link');
var m = document.querySelector('.mobile_gallery');

var width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

// gal.style.paddingTop = headerheight+"px";
// gal.style.paddingBottom = footerheight+"px";
// i.style.paddingTop = headerheight + "px";

if (gal !== null) {
  gal.style.marginTop = headerheight+0+"px";
  gal.style.marginBottom = footerheight+15+"px";
  console.log(headerheight);
} else if (i !== null) {
  i.style.paddingTop = headerheight+0+"px";
  console.log(headerheight);
}

if (m !== null) {
  m.style.marginTop = headerheight+"px";
  console.log(headerheight);
  console.log("small");
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
  var i = document.getElementById("inner_container");
  var a = document.getElementsByClassName("mobile_nav")[0];
  var t = document.getElementById("tiny_title");
  if (x.className === "topnav") {
    x.className += " responsive";
    c.className += " responsive";
    i.className += " responsive";
    t.style.display = "none";
    a.innerHTML="CLOSE";
  } else {
    x.className = "topnav";
    c.className = "container";
    i.classList.remove("responsive");
    t.style.display = "block";
    a.innerHTML="MENU";
  }
}


function check() {
  var c = document.getElementById("gift_check").checked;
  var g = document.getElementById("gift_address");

  if (c) {
    // document.body.style.background = "#ffffff";
    g.style.display = "block";
    g.style.visibility = "visible";
  } else if (!c){
    // document.body.style.background = "#BACF6B";
    g.style.display = "none";
    g.style.visibility = "hidden";
  }

}


// --------- mobile excerpt

var e = document.querySelector('excerpt');


// -------------- external links
