<!DOCTYPE html>
<html>
<head>
<title>SajanBasnet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    
    <style>

     @media only screen and (max-width: 768px) {
          
   		 #hello_wor{
				margin-top:30px;
				padding: 20px
    	}
    	#hello_wor>h1{
    		color: #ffd;
    		font-family: "Roboto Slab","Helvetica Neue",Helvetica,Arial,sans-serif;
    		font-size: 40px;
        	font-weight: 500;
    	}
    	#hello_wor>h2{
    		font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
    		font-size:22px;
    		color:#333;
   		 }

        #backgrounds{
        	background: url("images/saja.jpg") no-repeat fixed 0 0/cover;
    		background-blend-mode:soft-light;
        	min-height: 350px;
        }
        #nav_bar_mob{
        	background-color: #C9543B ;
        }
        #mob_icons{
    	width:18px;
    	height: 18px;
        }
        #me{
        	display: none;
        }
        #abt_me_p_m{
    	padding:0px 12px 2px 12px;
        }
        #about_me{
       padding: 10px 10px 10px 10px;
    }
    


   }
    .hello_world{
		margin-top:150px;
		padding: 20px
    }
    .hello_world>h1{
    	color: #ffd;
    	font-family: "Roboto Slab","Helvetica Neue",Helvetica,Arial,sans-serif;
    	font-size: 70px;
        font-weight: 560;
    }
    .hello_world>h2{
    	font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
    	font-size:40px;
    	color:#333;y
    }
    .background{
    	background: url("images/bk8.jpg") no-repeat fixed 0 0/cover;
    	background-blend-mode:soft-light;
        background-position-x: 50%;
        background-position-y: 77%;
        min-height: 650px;
        background-color: RGBA(109 ,189, 214, 0.1);
    }
    .my_imag{
    }
    #na-menu{
    	display: none;
    }
    .navbar-collapse>ul>li>a{
    	font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
    	font-weight:bolder;
    	font-size: 18px;
    	color: white;

    } 
    .icons{
    	width:20px;
    	height: 20px;
    }

    .about_me{
    	background-color: RGBA(109 ,189, 214, 0.1);
       font-family: "Roboto Slab","Helvetica Neue",Helvetica,Arial,sans-serif;
       padding: 10px 150px 10px 150px;
    }
    .abt_me_p{
    	padding:80px 12px 2px 12px;
    }

    </style>

</head>
<body>
<div class="container-fluid" style="background-color: RGBA(109 ,189, 214, 0.1);">	
 <div class="container background" id="backgrounds" style="border: 1px solid;">
   	   
  <nav class="navbar navbar-expand-lg navbar-light" style="">
  	<a class="navbar-brand" id="na-menu" href="#">Menu</a>
  	
  	<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="nav_bar_mob" >
    	<span class="navbar-toggler-icon"></span>
    </button>

  	<div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto nav-fill" style="">
      	<li class="nav-item active">
        <a class="nav-link" href="#"><span style="color:white;padding:12px">Home</span> <span class="sr-only">(current)</span></a>
      	</li>
      	<li class="nav-item">
        <a class="nav-link" href="#"><span style="color:white;padding:12px">About</span></a>
      	</li>
      	<li class="nav-item ">
        <a class="nav-link" href="#" ><span style="color:white;padding:12px">Qualification</span></a>
      	</li>
      	<li class="nav-item">
        <a class="nav-link" href="#"><span style="color:white;padding:12px">Work</span></a>
      	</li>
      	<li class="nav-item">
        <a class="nav-link" href="#"><span style="color:white;padding:12px">Contact</span></a>
      	</li>
      </ul>

      <ul class="nav" style="">
      	<li class="nav-item" style="padding:12px">
        	<a href="https://www.linkedin.com/in/sajan-basnet-b4b1b0148/" target="_blank"><img src="images/linkedin.png" class="icons" id="mob_icons"></a>
      	</li>
      	<li class="nav-item" style="padding:10px">
        	<a href="https://www.facebook.com/sajan.basnet.754" target="_blank"><img src="images/facebook.png" class="icons" id="mob_icons"></a>
      	</li>
      	<li class="nav-item" style="padding:10px">
        	<a href="https://twitter.com/sajanbasnet75" target="_blank"><img src="images/twitter.png" class="icons" id="mob_icons"></a>   
      	</li>
      	<li class="nav-item" style="padding:10px">
      		<a href="https://nl.pinterest.com/sajanbasnet75/" target="_blank"><img src="images/pinterest.png" class="icons" id="mob_icons"></a>
      	</li>
      	<li class="nav-item" style="padding:10px">
      		<a href="https://plus.google.com/u/0/101502552657747313370" target="_blank"><img src="images/google-plus.png" class="icons" id="mob_icons"></a>
      	</li>
      	<li class="nav-item" style="padding:10px">
        	<a href="https://github.com/sajanbasnet75" target="_blank"><img src="images/github.png" class="icons" id="mob_icons"></a>   
      	</li>
      	<li class="nav-item" style="padding:10px">
        	<a href="https://mail.google.com/mail/?view=cm&fs=1&to=sajanbasnet75@gmail.com&su=SUBJECT&body=BODY" target="_blank"><img src="images/gmail.png" class="icons"  id="mob_icons"></a>   
      	</li>
      </ul>
  </div>
</nav>
	<div class="container">
 		<div class="hello_world text-center " id="hello_wor" style=""> 
      			<h1>S<span style="border-bottom:1px solid #C9543B; ">AJA</span>N
      				<span class="text-center my_imag" id="me" style=" margin-top:0px;padding:3px;">
 			<img class="img-fluid img-responsive img-circle " style="padding:6px; display:inline; border-radius:100%; border-bottom:5px solid #C9543B;" src="images/sajanss.jpg" width="150" height="150">
 		</span>B<span style="border-bottom:1px solid #C9543B;">ASNE</span>T</h1>
 		</div>		
 		</div> 		
 	</div>

<!ABOUT-->	
<div class="container-fluid about_me" id="about_me">
<div class="row" style="padding:50px 12px 12px 12px;">
	<h2 class="col-12 text-center" style="padding:0px 12px 3px 12px;"><span style="border-bottom:4px solid #C9543B;">ABOUT ME</span></h2>
 	<div class="col-lg-6" style="padding:20px 2px 2px 0px;">
	  <img class="img-fluid img-responsive img-thumbnail" src="images/pp.jpg">
	</div> 
	<div class="col-lg-6 abt_me_p" id="abt_me_p_m" >
		<p class="text-center text-justify" style="">
	  	Hey there! I'm Sajan. Currently I am a Computer Engineering student living in Nepal,Kathmandu.
        <br><br>
        Right now i have not gained any professional career or worked anwhere particualr but i have some knowledge 
        on developing websites, desktop applications, databases , data analysis and others.
	  </p>
	</div>
</div>

<div class="row" style="padding:22px">
	<div class="col-lg-6 abt_me_p" id="abt_me_p_m" >
		<h4 class="text-center">MY SKILLS</h4>
	</div>
	<div class="col-lg-6" style="padding:2px 2px 2px 0px;">
	  <img class="img-fluid img-responsive img-thumbnail" src="images/pp.jpg">
	</div> 	
</div>

</div>
</div>
</body>
</html>