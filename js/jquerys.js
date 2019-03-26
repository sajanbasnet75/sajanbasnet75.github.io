$(window)
.on('load',function(){
});
$(document).ready(function(){

$(".loading").fadeOut(2800);
let clicks=0;
$('#nav_bar_mob').click(function(event){
console.log(clicks);
if(clicks==0){
$('#hello_wor>h1').css('margin-top','20px');
clicks=1;
}
else{
$('#hello_wor>h1').css('margin-top','120px');
clicks=0;
}
});
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