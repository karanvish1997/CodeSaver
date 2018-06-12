<?php
include 'core/init.php';
?>
<!docktype html>
<html>
<head>
	
</head>
<body>
<?php
$log_directory = "upload/$session_user_id";
$results_array = array();
if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                }
                closedir($handle);
        }
}
$num=1;
//Output findings


foreach($results_array as $value)
{		$size=@filesize("upload/$session_user_id/$value");
?>
		<?php echo $num.'.';?><a href="#"><?php echo $value;?></a>		
<?php
	echo $size."     &nbsp;    &nbsp;&nbsp;              ";
	echo date(DATE_RFC2822).'<br />
	
	
	
	';
	$num++;
}
?>
<form action="list.php" method="post">
<?php
	if(empty($_POST)===false){
		$name=$_POST['filename'];
		$myfile = fopen("upload/$session_user_id/$name", "r") or die("Unable to open file!");
		?><div id="code"><?php
		while(!feof($myfile)) {
			echo fgets($myfile) . "<br>";
		}
		?></div><?php
		//echo fread($myfile,filesize("upload/$session_user_id/$name"));
		fclose($myfile);
	}
?>
	Enter the File Name:<br />
	<input type="text" name="filename" />
	<input type="submit" value="open" />
	
	
</form>

<form action="" method="get">
	<?php
		if(empty($_GET)===false){
			$filename=$_GET['delete'];
			$path="upload/$session_user_id/$filename";
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
		
	Delete a File:<br />
	<input type="text" name="delete" /><br />
	<input type="submit" value="Submit" />
</form>

<a href="main.php">Back</a>
</body>
</html>