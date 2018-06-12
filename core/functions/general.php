<?php
function email($to,$subject,$body){
	mail($to,$subject,$body,'From:karan.vish17@gmail.com');
}
function logged_in_redirect(){
	if(logged()===true){
		header('Location:main.php');
		exit();
	}
}

function protect_page(){
	
	if(logged()===false){
	
	header('Location: protected.php');
	exit();
	}
	
}
function array_sanitize($item){
	$item=htmlentities(strip_tags(mysql_real_escape_string($item)));
}
function sanitize($data){
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}

function output_error($error){
	
	return '<ul><li>'.implode('</li><li>',$error).'</li></ul>';
	
}

?>