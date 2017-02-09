$(document).ready(function() {
    $("#title").hide().fadeIn(3200);
  });

$(document).ready(function() {
    $(".btn1").hide().delay(1200).fadeIn(2000);
  });

$(document).ready(function() {
    $(".btn2").hide().delay(2000).fadeIn(2000);
  });

$(document).ready(function(){
    $(".flex1").on("mouseenter", "li", function(){						
        $(this).find('.myhover').fadeIn(400);
    })	
});