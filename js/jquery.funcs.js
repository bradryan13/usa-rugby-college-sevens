
$(document).ready(function () {

  $('#content').videoBG({
    position:"fixed",
    zIndex:1,
    mp4:'wp-content/themes/usa-rugby-college-sevens/vid/video-bg.mp4',
    ogv:'wp-content/themes/usa-rugby-college-sevens/vid/video-bg.ogv',
    webm:'wp-content/themes/usa-rugby-college-sevens/vid/video-bg.webm',
    poster:'wp-content/themes/usa-rugby-college-sevens/vid/christmas_snow.jpg',
    opacity:1,
    fullscreen:true,
  });
  

  $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
    });
  $(".nav-item").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
  });
});