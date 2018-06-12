	&lt;input type='submit' value='Submit' id='button'/&gt;
	&lt;/form&gt;
	&lt;/div&gt;
	&lt;div id='list_of_files'&gt;
	&lt;h3 id='repositories'&gt;Repositories&lt;/h3&gt;
	&lt;div id='list_of_files_inside'&gt;
	&lt;?php
		$text$name\&quot;);
				echo '&lt;ul&gt;';
					foreach($text2){
						if($p!='list.php'){
					echo $link;
					}
					}
					echo '&lt;/ul&gt;';
				$assign\&quot;$name\&quot;;
	?&gt;
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;div id='main_code'&gt;
	&lt;form action='' method='post'&gt;
	&lt;div id='repo_name'&gt;Repository Name:&lt;input id='repo_file_name' type='text' name='name' /&gt;&lt;/div&gt;&lt;br /&gt;&lt;br /&gt;
	&lt;div id='code_block'&gt;Enter your code:&lt;br /&gt;&lt;textarea id='textarea' name='code' rows='40' cols='100'&gt;&lt;/textarea&gt;&lt;/div&gt;&lt;br /&gt;
	&lt;input id='repo_submit' type='submit' value='Submit' /&gt;
&lt;/form&gt;
&lt;/div&gt;
&lt;?php

	if(empty($third)===false){
		$real1=$third;
		$myfile = fopen($real, 'r') or die('Unable to open file!');
		?&gt;&lt;div id='code'&gt;&lt;?php
		while(!feof($myfile)) {
			echo fgets($myfile) . '&lt;br&gt;';
		}
		?&gt;&lt;/div&gt;&lt;?php
		fclose($myfile);
	}
?&gt;
&lt;div id='upper_footer'&gt;
	
		&lt;a href='about.php' id='about'&gt;About&lt;/a&gt;
		&lt;a href='about.php' id='faq'&gt;FAQ&lt;/a&gt;
		&lt;a href='about.php' id='security'&gt;Security&lt;/a&gt;
		&lt;a href='about.php' id='how'&gt;how to use?&lt;/a&gt;
		&lt;img src='../../../css/sun.jpg' height='80' width='80' id='sun'/&gt;
		&lt;a href='http://www.facebook.com'&gt;&lt;img src='../../../css/download.jpg' height='40' width='40' id='facebook'/&gt;&lt;/a&gt;
		&lt;a href='http://www.in.linkedin.com'&gt;&lt;img src='../../../css/images.png' height='80' width='80' id='linkedin'/&gt;&lt;a/&gt;
		&lt;a href='http://www.twiter.com'&gt;&lt;img src='../../../css/twitter.png' height='80' width='80' id='twitter'/&gt;&lt;/a&gt;
        &lt;a href='http://www.twiter.com'&gt;&lt;img src='../../../css/instagram.jpg' height='80' width='80' id='instagram'/&gt;&lt;/a&gt;
		&lt;a href='http://www.twiter.com'&gt;&lt;img src='../../../css/kat.jpg' height='80' width='80' id='kat'/&gt;&lt;/a&gt;
			&lt;HR style='position:relative;top:20px;left:320px;border:1px solid white;' SIZE='17' COLOR='blue' WIDTH='30%'&gt;
			
	&lt;!--	&lt;h3&gt;Connect with me Socially..&lt;/h3&gt;
	
		&lt;img src='css/images.png' height='80' width='80' id='linkedin'/&gt;--&gt;
	&lt;/div&gt;
	
	&lt;footer&gt;
	
		&lt;div id='lower_footer'&gt;Copyright@CodeBox.org.in&lt;/div&gt;
	&lt;/footer&gt;
&lt;/div&gt;
&lt;/body&gt;

&lt;/html&gt;&quot;;
			fwrite($filenaam, $txt);
			}else{
				echo 'The folder already exists';
			}
		}
		$files=scandir(&quot;upload/$session_user_id/&quot;);
		
		?&gt;
	&lt;?php
			if(empty($_POST['deletefold'])===false){
				
					$filename=$_POST['deletefold'];
					if(file_exists(&quot;upload/$session_user_id/$filename/list.php&quot;)===true){
					mkdir(&quot;upload/$session_user_id/recycle/$filename&quot;);
					$dir=&quot;upload/$session_user_id/$filename&quot;;
					$delete_file_names=scandir($dir);
					foreach($delete_file_names as $q){
						
						copy(&quot;upload/$session_user_id/$filename/$q&quot;,&quot;upload/$session_user_id/recycle/$filename/$q&quot;);
					}
						
					//rmdir(&quot;upload/$session_user_id/$filename&quot;);
				
					$names=scandir(&quot;upload/$session_user_id/$filename&quot;);
					foreach($names as $name){
						unlink(&quot;upload/$session_user_id/$filename/$name&quot;);
					}
					rmdir(&quot;upload/$session_user_id/$filename&quot;);
					}else{
						?&gt; &lt;p id=&quot;message&quot;&gt;The file does'nt exists.&lt;/p&gt;&lt;?php
					}
					}
		?&gt;
		&lt;div id=&quot;list_of_files&quot;&gt;	Popular Repositories
		&lt;form action=&quot;&quot; method=&quot;post&quot;&gt;
		
		Delete a Folder:
		&lt;input type=&quot;text&quot; name=&quot;deletefold&quot; /&gt;
		&lt;button type=&quot;submit&quot; value=&quot;Delete&quot;&gt;Submit&lt;/button&gt;
	&lt;/form&gt;
		&lt;div id=&quot;list&quot;&gt;
		