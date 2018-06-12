<?php include '../../../core/init.php';

	
?>
<?php
	if(empty($_POST['name'])===false){
		$name=$_POST['name'];
		$code=htmlentities($_POST['code']);
		if(file_exists("$name")===FALSE){
		$myfile=fopen("$name",'w');
		fwrite($myfile,$code);
		fclose($myfile);
		}else{
			echo 'The File already exists.To overwrite it <a href="list.php">Delete</a> the file first.';
		}
	}
	
?>
<?php

	if(empty($_POST['filename'])===false){
		$name=$_POST['filename'];
		$myfile = fopen("$name", 'r') or die('Unable to open file!');
		?><div id='code'><?php
		while(!feof($myfile)) {
			echo fgets($myfile) . '<br>';
		}
		?></div><?php
		fclose($myfile);
	}
?>
<!docktype html>
<html>
<head>
</head>

<body>
	<h2>cobol/</h2><br /><br />
	<form action='' method='post'>
		Name of the File Opened:
		<input type='text' name='filename'/>
		<input type='submit' value='Submit' />
	</form>
	
	<?php
		if(empty($_POST['deletename'])===false){
			$filename=$_POST['deletename'];
			$path='$filename';
			if (file_exists($path)===true) {
					$p=unlink($path);
					if($p==1){
						echo 'File successfully deleted.<br />';
					}else{
						echo 'File not successfully deleted <br />';
					}
			}else{
				echo 'not exists';
			}
				
			
		}
	?>
	<form action='' method='post'>
	Name of the File to be deleted:
		<input type='text' name='deletename'/>
		<input type='submit' value='Submit' />
	</form>
	<?php
		$files1 = scandir("../../../upload/$session_user_id/cobol");
				echo '<ul>';
					foreach($files1 as $p){
						if($p!='list.php'){
					echo '<a href="#"><li>'.$p.'</li></a>';
					}
					}
					echo '</ul>';
				$filen="cobol";
	?>
	
	
	<a href='../../../main.php'>Back</a>
	
	<form action='' method='post'>
	Name:<input type='text' name='name' /><br /><br />
	Code:<br /><textarea name='code' rows='10' cols='20'></textarea><br />
	<input type='submit' value='Submit' />
</form>
</body>

</html>