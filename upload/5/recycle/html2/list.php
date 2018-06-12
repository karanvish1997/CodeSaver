
			
			
			<?php include '../../../core/init.php';

	
?>
<!docktype html>
<html>
<head>
	<link rel='stylesheet' href='../../../css/common.css'/>
	<link rel='stylesheet' href='../../../css/how.css'/>
</head>

<body>
<div id='surround'>
<header style='background-image: url(../../../css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;'>
 <h2 id='heading'> CodeBox</h2>
 <div id='log'><a href='../../../logout.php' id='logout'>Logout</a></div>
 <div id='back'><a href='../../../main.php'>Back</a></div>
 </header>
 
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
<h2>html2/</h2><br /><br />	


<div id='aside'>
	
	<form action='../../../print.php' method='post'>
		<h4>Open File:</h4>
		<input type='text' name='filename' id='input_file'/><br />
		    <input type='hidden' name='myNumber' value='html2' />

		<input type='submit' value='Submit' id='button' />
	</form>
	
	<?php
		if(empty($_POST['deletename'])===false){
			$delete_file=$_POST['deletename'];
			unlink($delete_file);
		}
	?>
	<div id='delete_file'>
	<form action='' method='post'>
	<h4>Delete File:</h4>
		<input type='text' name='deletename' id='input_file'/><br />
		<input type='submit' value='Submit' id='button'/>
	</form>
	</div>
	</div>
	<div id='list_of_files'>
	<h3 id='repositories'>Repositories</h3>
	<div id='list_of_files_inside'>
	<?php
		$files1 = scandir("../../../upload/$session_user_id/html2");
				echo '<ul>';
					foreach($files1 as $p){
						if($p!='list.php'){
					echo '<a href=""><li>'.$p.'</li></a>';
					}
					}
					echo '</ul>';
				$filen="html2";
	?>
	</div>
	</div>
	<div id='main_code'>
	<form action='' method='post'>
	<div id='repo_name'>Repository Name:<input id='repo_file_name' type='text' name='name' /></div><br /><br />
	<div id='code_block'>Enter your code:<br /><textarea id='textarea' name='code' rows='40' cols='100'></textarea></div><br />
	<input id='repo_submit' type='submit' value='Submit' />
</form>
</div>
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
<div id='upper_footer'>
	
		<a href='about.php' id='about'>About</a>
		<a href='about.php' id='faq'>FAQ</a>
		<a href='about.php' id='security'>Security</a>
		<a href='about.php' id='how'>how to use?</a>
		<img src='../../../css/sun.jpg' height='80' width='80' id='sun'/>
		<a href='http://www.facebook.com'><img src='../../../css/download.jpg' height='40' width='40' id='facebook'/></a>
		<a href='http://www.in.linkedin.com'><img src='../../../css/images.png' height='80' width='80' id='linkedin'/><a/>
		<a href='http://www.twiter.com'><img src='../../../css/twitter.png' height='80' width='80' id='twitter'/></a>
        <a href='http://www.twiter.com'><img src='../../../css/instagram.jpg' height='80' width='80' id='instagram'/></a>
		<a href='http://www.twiter.com'><img src='../../../css/kat.jpg' height='80' width='80' id='kat'/></a>
			<HR style='position:relative;top:20px;left:320px;border:1px solid white;' SIZE='17' COLOR='blue' WIDTH='30%'>
			
	<!--	<h3>Connect with me Socially..</h3>
	
		<img src='css/images.png' height='80' width='80' id='linkedin'/>-->
	</div>
	
	<footer>
	
		<div id='lower_footer'>Copyright@CodeBox.org.in</div>
	</footer>
</div>
</body>

</html>