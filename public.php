<?php  include 'core/init.php'; ?>

<!docktype html>
<html>
<head>
	<link rel="stylesheet" href="css/public.css"/>
	<link rel="stylesheet" href="css/how.css"/>

</head>

<body>
	<div id="surround">
	<header style='background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;'>
 <h2 id='heading'> CodeBox</h2>
 <div id='log'><a href='logout.php' id='logout'>Logout</a></div>
 <div id='back'><a href='main.php'>Back</a></div>
 </header>
		<h2 id="public_heading">Public repositories:</h2>
		
		<div id="first"><h3><p>List of Repositories</p><div id="first_inner">
			<div id="file_name">File name</div>
			<div id="list_of_files"> 
				<ul>
				<?php
				$names=scandir("public/");
				$email=$_POST['filename'];
				foreach($names as $name){
					
					$size=filesize($name);
					echo '<a href="#"><li>'.$name." ".$size.'</li></a>';
					?>
					<?php
				}
				?>
				
				</ul>
			</div>
		</div></h3></div>
		<div id="second"><h4><p>Input Box</p></h4><div id="second_inner">
			<form action="" method="post">
			<?php
				if(empty($_POST['repo_name'])===false){
					$name=$_POST['repo_name'];
						if(file_exists("public/$name")===false){
					$code=$_POST['code'];
					$filename=fopen("public/$name","w");
					fwrite($filename, $code);
					fclose($filename);
					echo 'The file is publicly uploaded'.'<br />';
				}else{
					echo 'The file name already exists'.'<br />';
				}
				}
			
			?>
			Repository Name:
			<input type="text" name="repo_name"/>
			<input type="hidden" name="filename" value="<?php echo $user_data['email'];?>"/>
			<p id="">Code:</p>
			<textarea name="code" rows="30" cols="46"></textarea><br />
			<input type="submit" value="Submit" />
			</form>
		</div></div>
		
		</div>
</body>
</html>