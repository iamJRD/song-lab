$(document).ready(function(){
  $(".navIcon").click(function(openNav) {
    document.getElementById("mainNav").style.width = "100%";
  });
  $(".closebtn").click(function(closeNav) {
    document.getElementById("mainNav").style.width = "0%";
  });
  // var v = document.getElementsByTagName("video")[0];
  // v.play();
  // alert(document.readyState);
  // var vid = document.getElementById("headerVid");
  $(".headerVid").on('ended', function(){
    alert("lkadhsflahsdf");
  });

  setInterval(function(){
    $(".guitarVideo").html("<video class='headerVid' id='headerVid' muted='true' autoplay='autoplay' loop='true'>" +
        "<source src='img/guitar-video.mp4' type='video/mp4'>" +
      "</video>") }, 15000 )

    });


$(document).ready(function() {
  $('select').material_select();
});
