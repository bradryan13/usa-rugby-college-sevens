
$(document).ready(function () {
  $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
    });
  $(".nav-item").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
  });

    
  
});