<?php

include 'core/init.php';
?>
<!docktype html>
<html>
<head>
	<link rel="stylesheet" href="css/print.css"/>
	<link rel="stylesheet" href="css/how.css"/>

</head>

<body>
<div id="surround">
	<header style='background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;'>
 <h2 id='heading'> CodeBox</h2>
 <div id='log'><a href='logout.php' id='logout'>Logout</a></div>
 <div id='back'><a href='main.php'>Back</a></div>
 </header>
	<h3><?php
	$name=$_POST['myNumber'];
	$filename=$_POST['filename'];
	echo "$name/$filename"; ?></h3>
	<?php
	/*	
		if(empty($_POST['textarea_text'])===false){
			
			$code=$_POST['textarea_text'];
	
			$file=fopen("upload/$session_user_id/$name/$filename","w");
		 fwrite($file,$code);
			
			$dir="upload/$session_user_id/$name/$filename";
		$myfile=fopen($dir,"r");
		while(!feof($myfile)){
			echo fgets($myfile);
		}
		fclose($myfile);
		die();
		}
		*/
		?>
	<form action="" method="post">
	
	<textarea name="textarea_text" rows="40" cols="88">
	<?php
		
		$dir="upload/$session_user_id/$name/$filename";
		$myfile=fopen($dir,"r");
		while(!feof($myfile)){
			echo fgets($myfile);
		}
		fclose($myfile);
	
?>
	</textarea>
	</form>
	</div>
</body>
</html>