
<!docktype html>
<html>
<head>
		<link rel="stylesheet" href="css/account.css" />
       	<link rel="stylesheet" href="css/how.css" />
	
</head>

<body>
<div id="surround">
<header style="background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;">
 <h2 id="heading"> CodeBox</h2>
 <div id="log"><a href="logout.php" id="logout">Logout</a></div>
 <a href="main.php"><div id="back">Back</div></a>
 </header>
	<h2>Change your username:</h2>
	<form action="" method="post">
		<?php
			if(!empty($_POST['username'])&&!empty($_POST['new_username'])&&!empty($_POST['email'])){
				$username=$_POST['username'];
				$new_username=$_POST['new_username'];
				$email=$_POST['email'];
				
				if(user_exists($username)===false){
					echo 'the user doesnt exists';
				}
				if(email_exists($email)===true){
					echo 'the email doesnt exists';
				}
			}
		?>
		
		Username:<input type="text" name="username" /><br /><br />
		New Username<input type="text" name="new_username" /><br /><br />
		Email :<input type="text" name="email" /><br /><br /><br />
		<input type="submit" value="Change" />
	
	</form>
 
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
</body>
</html>