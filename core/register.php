<!docktype html>
<html>
<head>
<link rel="stylesheet" href="css/register.css"/>
</head>

<body>
<div id="container">
  <div class="mask">
  </div>
</div>

<div class="parent">
  <div class="centered">
  <div id="surround">
		<h1 id="register">Register</h1>
		
		<?php 
include "core/init.php" ;
//logged_in_redirect();

	
	if(empty($_POST)===false){
		$required_fields=array('username','password','password_again','first_name','email');
		foreach($_POST as $key=>$value){
			if(empty($value) && in_array($key,$required_fields) === true){
				$error[]='Fields with the asterisk are required..';
				break 1;
			}
		}
		
	}
	if(empty($error)===true){
		if(isset($_POST['username'])&&isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(user_exists($username)=== true){
			$error[]='Sorry,the username \''.$_POST['username'].'\'is already registered.<br>';
		}
	if(preg_match('/\\s/',$_POST['username'])==true){
		$error[]='your user name must not contain any spaces<br>';
	}
	if(strlen($_POST['password'])<6){
		$error[]='Your password much be atleast '.strlen($_POST['password']).' characters';
	}
	if($_POST['password']!==$_POST['password_again']){
		$error[]='Your password do not match';
	}
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false){
		$error[]='Valid email address is required';
}
	if(email_exists($_POST['email'])===true){
		$error[]='Sorry ,the email\''.$_POST['email'].'\'is already in use';
	}
	}
	}
?>
<?php

if(isset($_GET['success'])&&empty($_GET['success'])){
	echo 'You have been registered successfully... Please check your email to activate your account.';
}else{
	
		if(empty($_POST)=== false && empty($error)===true){	
			
			$register_data=array(
				'username'  =>$_POST['username'],
				'password'  =>$_POST['password'],
				'firstname'=>$_POST['first_name'],
				'email'     =>$_POST['email'],
				'active'    =>1,
                              
			);
			
			register_user($register_data);
	
			header('Location: register.php?success');
			
		}else if(empty($error)===false){
			echo output_error($error);
		
		}
	
		?>
		
		
		<div id="test">
		<form action="" method="post">
		<h3 id="main" class="username">Username:</h3><input type="text" name="username" id="main" class="input_username"/>
		<h3 id="main" class="password">Password:</h3><input type="password" name="password" id="main" class="input_password"/>
		<h3 id="main" class="password_again">Password Again:</h3><input type="password" name="password_again" id="main" class="input_password_again"/>
		<h3 id="main" class="firstname">First Name</h3><input type="text" name="first_name" id="main" class="input_firstname"/>
		<h3 id="main" class="email">Email Id:</h3><input type="text" name="email" id="main" class="input_email"/>
		<input type="submit" value="Register" name="submit" id="main" class="rbutton"/>
	
		</form>
		</div>
	</div>
   </div>
</div>
</body>
</html>
<?php

} //'email_code'=>md5($_POST['username']+microtime())
?> 