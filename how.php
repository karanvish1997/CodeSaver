<!docktype html>

<html>
<head>	
	<link  rel="stylesheet" href="css/how.css"/>
		<link  rel="stylesheet" href="css/instruction.css"/>

</head>

<body>
	<div id="surround">
		<header style="background-image: url(css/lolo.jpg); height: 100px;margin-left:auto;margin-right:auto; border: 1px solid black; padding-right:auto;">
 <h2 id="heading"> CodeBox</h2>
 <div id="log"><a href="logout.php" id="logout">Logout</a></div>
 <div id="back"><a href="main.php">Back</a></div>
 </header>
 

	<div id="first">
			 <?php
				if(empty($_POST['mynumber'])===false){
				?>
					<div id="image1"><p id="first_head">Make folder</p><img src="css/folder.jpg" height="80" width="80"/></div>
					<div id="image2"><p id="first_head">Store Files</p><img src="css/store.jpg" height="80" width="80"/></div>
					<div id="image3"><p id="first_head">Be Systematic</p><img src="css/systematic.jpg" height="80" width="80"/></div>

		
			 <div id="test" class="first_section">Create Folders to pile up <br />common work systematically <br />in folders.Create and<br /> Delete the unwanted <br />folders when you want.</div>
			 <div id="test" class="second_section">Create Files in folders <br />for storing your code <br />for future use.<br /></div>
			 <div id="test" class="third_section">Be systematic in your <br />approach.Dont use a  <br />single file for storing.<br />big codes.</div>
				
				<div id="test" class="last">
					<p id="test" class="note">Note:</p>
				<ul><li> 1.Use public repositories to share file globally.</li>
								<li>2.Upload files publicly carefully.</li></ul></div>
			 <?php
				}
			?>
			
		

	</div>
	<form action="" method="post">
			<input type="hidden" name="mynumber" value="100" />
			<input id="button" type="submit" value="Start" />
		</form>
 </div>
</body>
</html>