

<?php
	//logged_in_redirect();	
		//ALL THE TESTING IS HERE

	if(empty($_POST)===false)
	{	$username=$_POST['username'];
		$password=$_POST['password'];
		
		if(empty($username)===true ||empty($password)=== true)
		{                    
			$error[]="You need to enter a username and Password";          //If the username is empty
		}
		else if(user_exists($username)===false)
		{
			$error[]="username can\'t be found .Have you Registered.";     //Have you registered
		}
		else if(user_active($username)===false)
		{
			$error[]="you havent activated your account";                  //If the active number  is there
		}
		else{
			
			if(strlen($password)>32)
			{
				$error[]='password is too long..';
			}
			$login=login($username,$password);
		
			if($login===false){
				$error[]="username/Password combination is incorrect";
			}
			else{

				$_SESSION['user_id']=$login;
				
				header('Location:main.php');
				
				exit();
			}
		
		}
		
	}

	if(empty($error)==false)
	{
	?>
		
	<?php
	echo output_error($error);
	
	}

?>

<!--
<form action="" method="post">
<aside class="callout">
<div id="boxing">
       <h3 id="username">Email Id:</h3>
	   <input type="text" name="username" placeholder="Username" id="usertext"/>
	   <h3 id="password">Password:</h3>
	   <input type="password" name="password" placeholder="Password" id="passtext"/>
	   <input type="submit" name="login" value="Login" id="login"/>
	     </div>
  </aside>
  
  </form>

	-->				