<?php
	include 'core/init.php';
?>
<!docktype html>
</html>

<head>
	<link rel="stylesheet" href="css/how.css"/> 
</head>

<body>
<header style="background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;">
 <h2 id="heading"> CodeBox</h2>
 <div id="log"><a href="logout.php" id="logout">Logout</a></div>
 <div id="back"><a href="main.php">Back</a></div>
 </header>

<a href="main.php"> Back</a>
<?php

		
		
		
		
	function listFolderFiles($dir){
    $ffs = scandir($dir);
    echo '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<a href=""><li>'.$ff.'</a>';
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ol>';
}

listFolderFiles("upload/$session_user_id/recycle/");
		
		
		
		

?>

<form action="" method="post">
	
		<?php
		if(empty($_POST['file_name'])===false){
			$filename=$_POST['file_name'];
			if(file_exists("upload/$session_user_id/recycle/$filename")){
			$myfile=fopen("upload/$session_user_id/recycle/$filename","r");
			
			while(!feof($myfile)) {
			echo fgets($myfile) . '<br>';
		}
		fclose($myfile);
		}
		}
		
		?>
	Open a file:<br />
	<input type="text" name="file_name"/>
</form>
</body>

</html>