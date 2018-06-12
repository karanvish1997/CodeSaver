<?php

session_start();
error_reporting(0);

require "database/connect.php";
require "functions/users.php";
require "functions/general.php";

if(logged()===true){

$session_user_id=$_SESSION['user_id'];
$user_data=user_data($session_user_id,'user_id','username','password','firstname','email');
	
	
	if(user_active($user_data['username'])===false){
	
		session_destroy();
		header('Location:logout.php');        
		exit();
	}
}
$message=array();
$error= array();
$categories=array();
?>