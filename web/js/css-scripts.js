$(document).ready(function(){
  $(".navIcon").click(function(openNav) {
    document.getElementById("mainNav").style.width = "100%";
  })
  $(".closebtn").click(function(closeNav) {
    document.getElementById("mainNav").style.width = "0%";
  })
})
