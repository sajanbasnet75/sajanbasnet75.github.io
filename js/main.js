$(document).ready(function(){
	let top_nav=$('.top-nav');
	let clicks=0;
  $(".icon").click(function(event) {
  	if(clicks==0){
  	 top_nav.slideDown(400);
       clicks=1;
       $(this).css({
 		color: '#47ad6d'
 	});
  	}
  	else{

  	top_nav.slideUp(400);
       clicks=0;
       $(this).css({
 		color: '#47ad6d'
 	});

  	}
  });
  
 });

