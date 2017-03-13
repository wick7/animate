$(document).ready(function() {
    $(".first_con h1").hide().fadeIn(2700);
  });

$(document).ready(function() {
    $(".first_con p").hide().delay(900).fadeIn(2700);
  });

$(document).ready(function() {
    $(".btn1").hide().delay(2300).fadeIn(1500);
  });

$(document).ready(function() {
    $(".btn2").hide().delay(3100).fadeIn(2000);
  });

$(document).ready(function(){
    $(".flex1").on("mouseenter", "li", function(){						
        $(this).find('.myhover').fadeIn(400);
    })	
});