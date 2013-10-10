
$(document).ready(function () {

  $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
    });

  $("input").keyup(function(event){
    if(event.keyCode == 13){
        $(".wpgmaps_get_directions").click();
    }
});

  $(".nav-item").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
  });
});


