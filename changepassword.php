<?php include 'core/init.php';?>

<!docktype html>
<html>
<head>
	<link rel="stylesheet" href="css/change.css"/>
	<link rel="stylesheet" href="css/how.css"/>

</head>

<body>
<div id="surround">
<header style="background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;">
 <h2 id="heading"> CodeBox</h2>
 <div id="log"><a href="logout.php" id="logout">Logout</a></div>
 <div id="back"><a href="main.php">Back</a></div>
 </header>
 
<?php

	
if(empty($_POST)===false){
	$required_fields=array('current_password','password','password_again');
	foreach($_POST as $key => $value){
			if(empty($value) && in_array($key,$required_fields) === true){
				$error[]='Fields with the asterisk are required..';
				break 1;
			}
		}
		
			
			if(md5($_POST['current_password']) === $user_data['password']){
				if(trim($_POST['password'])!==trim($_POST['password_again'])){
					$error[]='your new passwords do not match';
				
			}
			else if(strlen($_POST['password']) < 6){
		        $error[]='Your password must be atleast 6 characters';
			}		

		}
		
		else{
		$error[]='Your current password do not match';
		}

		
}

?>
	<h2 id="changepasswordh">Change password</h2>
	
<?php
if(isset($_GET['success'])&&empty($_GET['success'])){
	echo 'Your password has been Successively changed';
}
else{
	if(empty($_POST)=== false && empty($error)===true){
	change_password($session_user_id,$_POST['password']);
	header('Location:changepassword.php?success');

}else if(empty($error)===false){
	echo output_error($error);
}

?>	
<div id="nav"> 
		<div id="hello">Hello <?php echo $user_data['firstname'];?></div>
		<ul>
			<a href="account.php"><li>Account settings</li></a>
			<a href="changepassword.php"><li>Change Password</li></a>
			
		</ul>
	</div>
	 <div id="changeit">   
            <form action="changepassword.php" method="post">
	<ul class="ulchangepassword">
	<li class='changepassword'>
		Current Password*:<br><br></li>
		<input type="password" name="current_password" class="changepassword1"/>
	</li>
	<li class='changepassword'>
	New password*:<br><br></li>
		<input type="password" name="password" class="changepassword1"/>
		
	<li class='changepassword'>
	New password again*:<br><br></li>
		<input type="password" name="password_again" class="changepassword1"/>
	
	<li><br><br>
		<input type="submit" value="Change Password" id="button1">
	</li>
	</ul>
</form>
</div>   
<div id="last">
	<ul>
		<li>Type the Password carefully.</li>
		<li>Please dont use any Spaces in between.</li>
	</ul>
</div>
<div id="upper_footer">
	
		<a href="about.php" id="about">About</a>
		<a href="about.php" id="faq">FAQ</a>
		<a href="about.php" id="security">Security</a>
		<a href="about.php" id="how">how to use?</a>
		<img src="css/sun.jpg" height="80" width="80" id="sun"/>
		<a href="http://www.facebook.com"><img src="css/download.jpg" height="40" width="40" id="facebook"/></a>
		<a href="http://www.in.linkedin.com"><img src="css/images.png" height="80" width="80" id="linkedin"/><a/>
		<a href="http://www.twiter.com"><img src="css/twitter.png" height="80" width="80" id="twitter"/></a>
        <a href="http://www.twiter.com"><img src="css/instagram.jpg" height="80" width="80" id="instagram"/></a>
		<a href="http://www.twiter.com"><img src="css/kat.jpg" height="80" width="80" id="kat"/></a>
			<HR style="position:relative;top:20px;left:320px;border:1px solid white;" SIZE="17" COLOR="green" WIDTH="30%">
			
	<!--	<h3>Connect with me Socially..</h3>
	
		<img src="css/images.png" height="80" width="80" id="linkedin"/>-->
	</div>
	
	<footer>
	
		<div id="lower_footer">Copyright@CodeBox.org.in</div>
	</footer>
</div>
<?php 
}

?>
</body>
</html>