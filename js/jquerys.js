
$(document).ready(function(){
 
$(".loading").fadeOut(3400);
 if($(window).width()<=768){
   $('#mob_jq2').insertBefore('#mob_jq')
 }

$(".nav_list").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});
});
