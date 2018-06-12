<?php
	include 'core/init.php';
?>

<!docktype html>
<html>

	<head>
		<link rel="stylesheet" href="css/how.css"/>
		<link rel="stylesheet" href="css/contact.css"/>
	
	<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
		</head>
	
	<body>
		<div id="surround">
		<header style='background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;'>
 <h2 id='heading'> CodeBox</h2>
 <div id='log'><a href='logout.php' id='logout'>Logout</a></div>
 <div id='back'><a href='main.php'>Back</a></div>
 </header>
 <div id="main_div">
	<h1 id="heading">Contact us:</h1>
	
	<div id="inside">
	<?php
		if(empty($_POST)===false){
			
			$name=htmlentities($_POST['name']);
			$email=htmlentities($_POST['email']);
			$subject=htmlentities($_POST['subject']);
			$message=htmlentities($_POST['message']);
			if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
			
			$sql="INSERT INTO `contact`(`name`,`subject`,`message`,`email`) VALUES('$name','$subject','$message','$email')";
			mysql_query($sql);
			echo 'Your query will be solved soon..';
			}else{
				echo 'Please fill in all the fields';
			}
		}
	
	?>
	<form action="" method="post">
	<h3 id="first">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="cpmmon_input" type="text" name="name" /></h3>
		<h3 id="first">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="cpmmon_input" type="text" name="email" /></h3>
		<h3 id="first">Subject:&nbsp;&nbsp;&nbsp;<input class="cpmmon_input" type="text" name="subject" /></h3>
	<h3 id="first">Message:<div style="position:relative;font-family: 'Franklin Gothic Medium', 'Franklin Gothic', 'ITC Franklin Gothic', Arial, sans-serif;"><textarea rows="10" cols="40" name="message" ></textarea></div></h3>
	<p> <input type="submit" value="Submit" id="button"/></p>
	</form>
	</div>
 <div id="googleMap" style="width:500px;height:380px;"></div>
		</div>
		</div>
		
	</body>

</html>