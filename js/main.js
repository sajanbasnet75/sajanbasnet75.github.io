$(document).ready(function(){
	let loading = $(".loading");
loading.delay(loading.attr("delay-hide")).fadeOut();	
let top_nav=$('.top-nav');
let clicks=0;
let search_click=0;
$('#search-box').hide();
$(".icon").click(function(event) {
if(clicks==0){
top_nav.slideDown(400);

$('.headings').css('margin-top', '10px');
clicks=1;
$(this).css({
color: '#47ad6d'
});
}
else{
top_nav.slideUp(400);

$('.headings').css('margin-top', '150px');
clicks=0;
$(this).css({
color: '#47ad6d'
});
}
});
$("#search-btn").click(function(event){
$('#search-box').addClass('form-control')
if(search_click==0){
$('#search-box').slideDown(400);
search_click=1;
}
else{
$('#search-box').slideUp(400);
search_click=0;
}
});

});