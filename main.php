<?php
$list='"list.php"';
$real='"$name"';
$real1='$name';
$assign='$filen=';
$text2='$files1 as $p';
$p='$p';
$link= "'<a href=\"\"><li>'.$p.'</li></a>'";
$path='$path';
$filenamek='$filename';
$name='$name';
$myfile='$myfile';
$code='$code';
$first='$_POST[\'name\']';
$second='$_POST[\'code\']';
$third='$_POST[\'filename\']';
$fourth='$_POST[\'deletename\']';
$dir_name='$dirname';$delete_file='$delete_file';
$nine='=$_POST[\'deletename\'];';
include 'core/init.php';
	
?>
<!docktype html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("submit").click(function(){
        $("#message").fadeIn("slow");
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
    });
});
</script>

	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<div id="surround">
<header style="background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;">
 <h2 id="heading"> CodeBox</h2>
 <div id="log"><a href="logout.php" id="logout">Logout</a></div>
 </header>
<?php
$filename="upload/$session_user_id";
$recycle="upload/$session_user_id/recycle";
if (file_exists($filename)===false) {
$dirPath = "upload/$session_user_id";
$result = mkdir($dirPath, 0755);
$result_recycle=mkdir($recycle,0755);
}
	?>
	<div id="section">
	<h3 id="create_folder">Create a Folder:</h3>
	
	<?php
	
?>
	<form action="" method="post">
		<?php
		if(empty($_POST['foldername'])===false){
				
				$name=$_POST['foldername'];
				if(file_exists("upload/$session_user_id/$name")===false){
				mail($user_data['email'],"Codebox Folder created","Your folder $name has been created..Start adding files and enjoy the systematic workk,");
				$filename="upload/$session_user_id/$name";
				$k=mkdir($filename);
			$filenaam=fopen("upload/$session_user_id/$name/list.php","w");
			$text='$files1 = scandir("../../../upload/$session_user_id/';
			$txt = "
			
			
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
	if(empty($first)===false){
		$real1=$first;
		$code=htmlentities($second);
		if(file_exists($real)===FALSE){
		$myfile=fopen($real,'w');
		fwrite($myfile,$code);
		fclose($myfile);
		}else{
			echo 'The File already exists.To overwrite it <a href=$list>Delete</a> the file first.';
		}
	}
	
?>
<h2>$name/</h2><br /><br />	


<div id='aside'>
	
	<form action='../../../print.php' method='post'>
		<h4>Open File:</h4>
		<input type='text' name='filename' id='input_file'/><br />
		    <input type='hidden' name='myNumber' value='$name' />

		<input type='submit' value='Submit' id='button' />
	</form>
	
	<?php
		if(empty($fourth)===false){
			$delete_file$nine
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
		$text$name\");
				echo '<ul>';
					foreach($text2){
						if($p!='list.php'){
					echo $link;
					}
					}
					echo '</ul>';
				$assign\"$name\";
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

	if(empty($third)===false){
		$real1=$third;
		$myfile = fopen($real, 'r') or die('Unable to open file!');
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

</html>";
			fwrite($filenaam, $txt);
			}else{
				echo 'The folder already exists';
			}
		}
		$files=scandir("upload/$session_user_id/");
		
		?>
	<?php
			if(empty($_POST['deletefold'])===false){
				
					$filename=$_POST['deletefold'];
					if(file_exists("upload/$session_user_id/$filename/list.php")===true){
					mkdir("upload/$session_user_id/recycle/$filename");
					$dir="upload/$session_user_id/$filename";
					$delete_file_names=scandir($dir);
					foreach($delete_file_names as $q){
						
						copy("upload/$session_user_id/$filename/$q","upload/$session_user_id/recycle/$filename/$q");
					}
						
					//rmdir("upload/$session_user_id/$filename");
				
					$names=scandir("upload/$session_user_id/$filename");
					foreach($names as $name){
						unlink("upload/$session_user_id/$filename/$name");
					}
					rmdir("upload/$session_user_id/$filename");
					}else{
						?> <p id="message">The file does'nt exists.</p><?php
					}
					}
		?>
		<div id="list_of_files">	Popular Repositories
		<form action="" method="post">
		
		Delete a Folder:
		<input type="text" name="deletefold" />
		<button type="submit" value="Delete">Submit</button>
	</form>
		<div id="list">
		
		<?php
		
		echo '<ul>';
		foreach($files as $p){
			if(file_exists("upload/$session_user_id/$p/list.php")){
				if($p!="recycle"){
			?><img src="css/folderimage.png" height="20" width="20"><?php
			echo "<a href='upload/$session_user_id/$p/list.php'><li>".$p."</li></a>";
			?><hr size="1"><?php
	}
	}
	}
		echo '</ul>';
		
		?>
		</div>
		<div id="folder_in">
		Folder Name:<br />
		<input type="text" name="foldername"/>
		<input type="submit" value="submit"/>
		</div>
	</form>
	
</div>
<!--
<div id="side">
<p>You  may search either by first or last name</p> 
	    <?php
			if(isset($_POST['search_name'])){
				$search_name=$_POST['search_name'];
				if(!empty($search_name)){
					$query="SELECT `username`,`email` FROM `name` WHERE `username` LIKE '%".mysql_real_escape_string($search_name)."%'";
					$query_run=mysql_query($query);                        
					
					if(mysql_num_rows($query_run)>=1){
						echo 'Results found:<br />';
						while($query_row =mysql_fetch_assoc($query_run)){
							echo $query_row['username']."      ".$query_row['email'].'<br />';
						}
					}
				}
			}
		?>
		<form  method="post" action="main.php"> 
		
      Name:<input  type="text" name="search_name"> <br/>
	      <input  type="submit" name="submit" value="Search"> 
    </form>
	</div>-->
	
	<div id="aside_wrap">
	<div id="aside_pb"><a href="public.php"><p id="public_heading">Public Repositories</p></a>
		<div id="wrap"><div id="second_pb"><img src="css/publicrepo.jpg" height="150px" width="150px" id=""></div></div>
	</div>
	<hr id="line">
	<div id="subscribe">
		<form id="" method="post">
		<?php
			if(empty($_POST['subscribe'])===false){
				$subscribe=$_POST['subscribe'];
			}
		?>
		<span id="sp1">Subscribe to the folders made by you...</span><input type="submit" name="subscribe" value="Subscribe" id="subscribe_button"/>
		<span id="sp1">Subscribe to the folders made by you...</span>
	</form>
	</div>
	</div>
	<div id="nav"> 
		<div id="hello">Hello <?php echo $user_data['firstname'];?></div>
		<ul>
			<a href="account.php"><li>Account settings</li></a>
			<a href="changepassword.php"><li>Change Password</li></a>
			
		</ul>
	</div>
	<div id="last">
			<div id="recycle_bin">
			<h3><a href="recycle.php">Recycle Bin</a></h3>
			<img src="css/recycle.jpg" height="70" width="70"/>
			<p>Retrieve your deleted folders any time</p>
	</div>
	<div id="how">
			<h3><a href="how.php">How to use??</a></h3>
			<img src="css/how.jpg" height="70" width="70"/>
			<p>Follow the instructions to make your life easy.</p>
	</div>
	</div>
	
	</div>
	
	<div id="upper_footer">
	
		<a href="about.php" id="about">About</a>
		<a href="faq.php" id="faq">FAQ</a>
		<a href="contact.php" id="security">Contact us</a>
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
