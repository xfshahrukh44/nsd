function detectScroll(){$(window).scroll(function(e){var t=$(window).scrollTop(),n=document.getElementById("navbar"),l=document.getElementById("navbar").getElementsByClassName("logo");t>=100?(n.style.backgroundColor="black",l[0].style.flex="9%"):t<100&&(n.style.backgroundColor="transparent",l[0].style.flex="15%")}),$(document).ready(function(){let e=document.getElementById("footer"),t=window.innerHeight,n=window.innerWidth;1366==t&&1024==n&&(e.style.position="absolute",e.style.bottom="0px")})}function toggleMenu(){var e=document.getElementById("sideNav"),t=document.getElementById("sideMenu");"none"==e.style.display&&"-500px"==t.style.marginRight?(e.style.display="block",setTimeout(()=>{t.style.marginRight="0px"},10)):(t.style.marginRight="-500px",setTimeout(()=>{e.style.display="none"},500))}detectScroll();