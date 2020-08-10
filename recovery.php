<?php
session_start();

?>

<?php
include('config/connect.php');
function formPrepare($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
if(isset($_POST['login'])){
	
	$userId = formPrepare($_POST['user']);	
	$passId = formPrepare($_POST['pass']);
	$log = "SELECT * FROM managers WHERE (Username='$userId' AND Password='$passId')";
	$log_query =mysqli_query($conn, $log);
	$final = @mysqli_num_rows($log_query);
   
	if($final >0){
		 $_SESSION['user']=$userId;
		 header("location:manager.php");
	}
	else{echo "<script>alert('Incorroct username and password combination. Please try again')</script>";}
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Trust Resort | Makurdi</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="index.php">Home</a></li>
						    	<li><a href="booking.php">Booking</a></li>
								<li ><a href="rooms.php">Rooms</a></li>
								<li><a href="gallery.php">Gallery</a></li>
						    	
						    	
						    	<li><a href="blog.php">Blog</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form action="search.php" method="get" >
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png">
					  
					  <?php
					  if(!isset($_SESSION['user'])){
					  
					 echo " <span>Login</span>";
					  
					  }else{
						  $userId = $_SESSION['user'];
						  
						  echo "<a href='logout.php'><span>Logout</span></a><span style='color:#ff8a22;font-weight:bold'> [  $userId ]</span> <a href='manager.php'><span> Manage Portal </span></a>";}
					  
					  
					 ?> 
					  
					  
					  </a>
						    
							
							
							
							
							
							
							
							<div id="loginBox">                
						        <form id="loginForm" action="" method="post">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Username</label>
						                          <input type="text" name="user" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="pass" id="password">
						                     </fieldset>
						                    <input type="submit" name="login" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						                 <span><a href="recovery.php">Forgot your password?</a></span>
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
    </div>
   
   
   
   
   
   
   
   
   
   
     <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="rooms.php">Latest</a></li> 
					<li><a href="#">Directoins >></a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown" >    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Makurdi</option>	
						
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Benue State</option>	
						
		        </select>
		       </div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   
   
   
   
   
   
   
   
   
   
     <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a href="#">Recommended</a></li> 
					<li><a href="rooms.php">Latest</a></li> 
					<li><a href="#">Directoins >></a></li> 
				</ul>
			</div>
		</div>
		<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown" >    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Makurdi</option>	
						
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Benue State</option>	
						
		        </select>
		       </div>
		</div>
		<div class="col-md-4 filter_grid">
			<ul class="filter">
				<li class="fil">Filter :</li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon2"> </i> </a></li>
				<li><a href=""> <i class="icon3"> </i> </a></li>
				<li><a href=""> <i class="icon1"> </i> </a></li>
				<li><a href=""> <i class="icon5"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   <div class="living_bottom">
   	  <div class="container">
	  
	  
   	  	<h2 class="title block-title">Latest Posts</h2>
		
		
   	  	 <?php
		 
		 
		 
include("config/connect.php");

$sqli = "SELECT * From blog order by Id Desc Limit 2";
$query = mysqli_query($conn, $sqli);
while($fech = mysqli_fetch_array($query)){

	
	
	$date = $fech["Date"];
	$id = $fech["Id"];
	$img = $fech['Photo'];
        $sub= $fech['Body'];
       $limit=200;
       $msg = substr($sub, 0, $limit);
	
	echo "<div class='col-md-6 post_left wow fadeInLeft' data-wow-delay='0.4s'>
   	  		<div class='mask1'><img src='$img' alt='image' style='max-height:150px; min-width:600px' class='img-responsive zoom-img' /></div>
   	  	    <p>$msg   <a href='single.php?id=$id'>More</a></p>
   	  	    <div class='divider'></div>
   	  	    <p class='field-content'>$date</span></p>
   	  	</div> ";
		 
		 

}
	?>
	




		
		
		
   	  	
		
		
		
   	  </div>
   </div>
   
   
   
   
   <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Subscribe to our newsletter</h3>
   	   <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Supports</h4>
			<ul class="list1">
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#">Terms and condition</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">About us</a></li>
				
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quick info</h4>
			<ul class="list1">
				<li><a href="#">Location</a></li>
				<li><a href="#">Security</a></li>
				<li><a href="#">Booking </a></li>
				<li><a href="#">Our services</a></li>
			
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy wow fadeInRight" data-wow-delay="0.4s">
			 <p> &copy; 2018 Trust Resort. All rights reserved | Design by <a href="http://facebook.com/angwamoses">Sarowap Technologies</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
</body>
</html>		