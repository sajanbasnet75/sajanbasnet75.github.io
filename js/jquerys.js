$(window)

.on('load',function(){
$(".loading").fadeOut(1800);
});



$(document).ready(function(){
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
