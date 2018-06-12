<?php include 'core/init.php';
?>

<!docktype html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div id="container">
  <div class="mask">
  </div>
</div>

<div class="parent">
  <div class="centered">
    <h1 id="head">Sign In to CodeBox</h1>
	<div id="message"><?php include'login.php'?></div>
	<form action="" method="post">
	<input type="text" placeholder="Username" name="username" id="username"/>
	<input type="password" placeholder="Password" name="password" id="password"/>
		<input type="submit" value="login" name="submit" />
	</form>
	
	<hr id="line">
	<p id="register"><a href="register.php">Register now</a></p>
	<!--<div id="loginbutton"><a href="http://www.google.com"><img src="css/loginbutton.png"/></a></div>-->
   </div>
</div>
</body>
</html>
