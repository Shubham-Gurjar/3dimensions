<?php
$error="";
$connection = mysqli_connect("localhost", "dimensio_user", "user1432!","dimensio_3d");  // Establishing Connection with Server
//$db = mysqli_select_db("companylog", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];
date_default_timezone_set("Asia/Calcutta");
$ldate=date('y-m-d');
$ltime=date('H:i:s');

//Insert Query of SQL
$query = mysqli_query($connection,"insert into contact(name,email,number,msg,date,time) values ('$name', '$email', '$number','$msg','$ldate','$ltime')");
if($query)
		$error = "Your message has been successfully sent!";
else
		$error = "Message not sent due to some error.Please Retry !";
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="3dimensions is an architectural Visualization Studio, which provides 3D exterior rendering , 3D Interior Designing, Isometric View and many more. ">
        <meta name="keywords" content="3dimensions, 3D Rendering, 3D Architectural Rendering Studio, Isometric Views, Bungalow Rendering, 3D Visualization, 3D Visualization Company, 3D Interior Design, Interior 3D Rendering, 3D Interior Designing Company, Elevation Rendering, Elevation Designing, 3D Rendering Company In India, 3D Rendering Company In Nagpur, 3D Architectural Visualization, Architectural 3D Rendering, 3D Visualization Company In India, 3D Architectural India"/>
        <meta name="author" content="3 Dimensions">

        <meta name="Title" content="3D Rendering -3D Architectural Rendering - 3D Visualization Studio - 3 Dimensions"/>
        <meta name="author" content="3 Dimensions">
        <meta name="copyright" content="3 Dimensions">
        <meta name="Distribution" content="GLOBAL"/>
        <META NAME="robots" CONTENT="index, follow"/>
        <META NAME="GOOGLEBOT" CONTENT="INDEX, FOLLOW"/>
        <META NAME="Language" CONTENT="English">
        <meta name="Format" content="text/html" />  
        <meta name="publisher" content="http://www.3dimensions.co.in">
    <title> 3dimensions | Architectural Visualization Studio</title>

    


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/compiled.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <link href="css/loader.css" rel="stylesheet">
	<script>
 function validateForm() {
	
	var flag=0;
		
	if ((/[a-z,A-Z]+$/).test(myForm.name.value)==false ){
				
					flag=1;
       				document.getElementById('hh1').innerHTML="Name should be alphabets";
						
					}

	if ((/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9.-]+/i).test(myForm.email.value)==false ){
					flag=1;
       				document.getElementById('hh3').innerHTML="Enter Email Correctly i.e abc@xyz.etc";
					}

	if ((/^[0-9]{10,10}$/).test(myForm.number.value)==false ){
					flag=1;
       				document.getElementById('hh4').innerHTML="Enter Number Correctly i.e 10 digit number";
					}
				
	if ( myForm.name.value== ""  || myForm.email.value== "" ||myForm.number.value== "" ) {
					
			
					if (myForm.name.value== ""){
					
       				document.getElementById('hh1').innerHTML="Enter First Name";
					}
				
					if (myForm.number.value== "") {
       		       					document.getElementById('hh4').innerHTML="Enter Mobile Number";
						}

					
					
					if (myForm.email.value== "") {
       					document.getElementById('hh3').innerHTML="Enter Email id";

        					}
					
					flag=1;
				}
					
				
			if (flag==0){	
							
							return true;
			}else{			
				
						$('#myModal').modal('show');
							return false;
			}
		}

</script>
    <style rel="stylesheet">
	
	body{
	 background-image:url("iandv/31.jpg");
	 background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
            background-attachment: fixed;
}
         TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body,
        .view {
            height: 100%;
            width: 100%;
        }
       .navbar1{
	padding: 7px 40px 7px 55px;
	}
	.navbar2{
	padding: 7px 40px 7px 280px;
	}
     
        
        footer.page-footer {
            background-color: #532a3c;
            margin-top: 0;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #532a3c;
            }
        }
        
		/*Contact section*/
        
        #contact .fa {
            font-size: 2rem;
            color: #1C2331;
        }

    </style>
</head>

<body class="indigo-skin">
  <div id="preloader">
  <div id="status" class="cssload-tetrominos">
	<div class="cssload-tetromino cssload-box1"></div>
	<div class="cssload-tetromino cssload-box2"></div>
	<div class="cssload-tetromino cssload-box3"></div>
	<div class="cssload-tetromino cssload-box4"></div>
	<div id="load"><h2 class="h2-responsive">Loading....</h2> </div>
   </div>
</div>
<header>

 <nav class="navbar fixed-top navbar-dark">
				
                <div class="navbar-desktop navbar1">
				<div class="row mx-auto">
				<a class="navbar-brand" href="index.html">
				<img src="iandv/website_small/cover page 2.jpg"  alt="." height="32" width="32"></img>
                    <strong>3dimensions</strong>
                </a> 
               <a class="nav-link" href="index.html">Home</a>   
			   <a class="nav-link" href="index.html#services">Services</a>
			   <a class="nav-link" href="aboutu.html">About us</a>
			     <a class="nav-link" href="gallery.html">Gallery</a>
				  <a class="nav-link" href="contact.php">Contact Us</a>
                 
                   
                    <ul class="navbar-nav nav-flex-icons navbar2 pull-xs-right">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/sumeetgurjar9404315433/"><i class="fa fa-facebook"></i> &nbsp;&nbsp;</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
					</div>
                </div>
				  <!-- Content for mobile devices-->
    <div class="navbar-mobile hidden-lg-up">
	<div class="d-flex justify-content-start">
		<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars white-text"></i></a>
				<a class="navbar-brand" href="index.html">
				<img src="iandv/website_small/cover page 2.jpg"  alt="." height="32" width="32"></img>
                    <strong>3dimensions</strong>
                </a> 
		</div>
        <ul class="side-nav" id="mobile-menu">
            <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutu.html">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar-->
    </header>
	<br><br><br><br>
	<div class="white-text d-flex justify-content-center elegant-color-dark"> <?php echo $error; ?> </div>
	<br><br><br>
	<main>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                
                    
                
            </div>
            <!--Body-->
			<div class="modal-body">
           
	 <h5 id="hh1"> </h5>
	 <h5 id="hh2"> </h5>
	 <h5 id="hh3"> </h5>
	 <h5 id="hh4"> </h5>
	 
			</div>
            <!--Footer-->
			
            <div class="modal-footer">
               
				 <a id="btnEmpty" class="btn red" data-dismiss="modal">Close</a>
                
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
			
	<!-- Small modal -->
	
		<div class="container col-lg-4 col-sm-10" >
		
		<div class="card  white-text">
		<div class="form-header unique-color-dark">
				
        <center><strong><font size="6px">Contact us</font></strong></center>
		</div>
		<div class="card-block" id="contact">
			<form method="post" name="myForm" action="">
				<div class="md-form">
				<i class="fa fa-user prefix"></i>
            <input type="text" id="name" class="form-group" name="name">
            <label for="myForm">Name</label>
				</div>
		
				<div class="md-form">
				  <i class="fa fa-envelope prefix"></i>
            <input type="text"  id="email"  class="form-group" name="email">
             <label for="myForm">Email Id</label>
				</div>
				<div class="md-form">
				<i class="fa fa-mobile-phone prefix "></i>
			   <input type="text" id="number"  class="form-group" name="number">
            <label for="myForm">Mobile Number</label>
				</div>
				<div class="md-form">
     <i class="fa fa-pencil prefix"></i>
        <textarea type="text" id="form8" class="md-textarea" name="msg"></textarea>
        <label for="form8">Message</label>
    </div>
	
				<div class="md-form">
				<center><button type="submit" value="submit" name="submit" class="btn btn-cyan" onclick=" return validateForm();">Submit</button>
				<button type="reset" value="reset" class="btn btn-cyan">Reset</button>
				<center>
				</div>
			</form>	
		</div>	
		
		<div class="card-data unique-color-dark">
		<h4 class="white-text h4-responsive">
		   <i class="fa fa-envelope prefix "></i> Email: <a href="mailto:sumeet_3dimensions@gmail">sumeet@3dimensions.co.in</a>
		</h4>
		  </div>
		</div>
		
		</div>
		
</main>

   

<br><br><br><br><br><br><br><br>
<!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 offset-lg-1">
                    <h5 class="title">Contact</h5>
                    <p><a href="tel:+91 9404315433"><i class="fa fa-phone teal-text"></i> +91 9404315433</a></p>
					<p><i class="fa fa-envelope teal-text"></i> sumeet@3dimensions.co.in</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title"><u>Links</u></h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutu.html">About us</a></li>
						 <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.php">Contact us</a></li>
						 
                        
                    </ul>
                </div>
                <!--/.Second column-->


                

                

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>


        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               <a href="" rel="nofollow"> @ 3dimensions.co.in</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
<div class="" style="position:fixed; bottom: 5px; right: 20px;">
  <!--/ <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#indexModal">
    Contact us -->
	   <a class="btn-floating btn-large red" href="tel:+91 9404315433">
			<i class="fa fa-phone fa-5x "></i>
		</a>

</div>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

	 <script type="text/javascript" src="js/compiled.min.js"></script>
<script>
   
$(".button-collapse").sideNav();

    </script>
  <script type="text/javascript">
        Waves.attach('.navbar li', ['waves-light']);
        Waves.init();
    </script>

<script>
			
$('#myModal').on('hidden.bs.modal', function (e) {
		var idname;
					for(var j=1;j<5;j++){
						idname='hh'+j;
						document.getElementById(idname).innerHTML="";
					}
});
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut('slow'); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
});

			</script>


</body>

</html>