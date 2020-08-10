
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Deluxe  A Hotel category Flat bootstrap Responsive  Website Template | News :: w3layouts</title>
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

window.print();
</script>
</head>
<body>

         <h3>Name of Hotel International</h3>
		 <h4>Booking Slip</h4>
		
		
		<table class="table table-hovered table-striped">
		
				 <?php
		 
		 
		 
include("config/connect.php");


function formPrepare($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}

$getId = formPrepare($_GET['id']);

$sqli = "SELECT * FROM booking WHERE Reg='$getId' ";
$query = mysqli_query($conn, $sqli);
$fech = mysqli_fetch_array($query);
	
	$fname = $fech["Surname"];
	$oname = $fech["Othernames"];
	$reg = $fech["Reg"];
	$days = $fech["Days"];
	$room = $fech["Room"];
	$price = $fech["Price"];
   $expire= $fech["Expiration"];
   

	
	echo "<tr><th>Surname<td>$fname</td></th></tr>";
	
	echo "<tr><th>Other Names:</th><td>$oname</td></tr>";
	echo "<tr><th>Reg Number:</th><td>$reg</td></tr>";
	echo "<tr><th>Days Rented</th><td>$days</td></tr>";
	echo "<tr><th>Room Number</th><td>$room</td></tr>";
	echo "<tr><th>Price</th><td>$price</td></tr>";
	echo "<tr><th>Expired Date</th><td>$expire</td></tr>";
	
		
		
		echo "</tr>";
		
		
	echo "</table>";
		
	?>
		 
		
		 </form>

  
</body>
</html>		