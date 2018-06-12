<?php
	function register_code($register_code){
	array_walk($register_code,'array_sanitize');
	//$register_code['password']=md5($register_code['password']);
	$fields='`'.implode('`,`',array_keys($register_code)).'`';
	
	$data='\''.implode('\',\'',$register_code).'\'';
	$query="INSERT INTO `files` ($fields) VALUES ($data)";

	mysql_query($query);
	
}
function get($email){
		
		//$query=mysql_query("SELECT `diary` FROM `diary` WHERE `email`='$email'");
		$query=mysql_query("SELECT `diary` FROM `diary` WHERE `email`='$email'");
		while($row=mysql_fetch_assoc($query)){
			$categories[]=$row['diary'];
		
		}
		return $categories;
	}
function get_categories($id = null){
		$categories=array();
		$query=mysql_query("SELECT `id`,`name` FROM `categories`");
		while($row=mysql_fetch_assoc($query)){
			$categories[]=$row;
			print_r($categories);
		}
		return $categories;
	}
function update_matter($matter,$email){
	$matter=sanitize($matter);
	 mysql_query("INSERT INTO `diary` (`diary`,`email`) VALUES ('$matter','$email') ");
	//mysql_query("INSERT INTO `diary` (user_id,diary) VALUES ('$id','$matter')");
}
function delete_matter($id,$matter){
	$matter=sanitize($matter);
	 mysql_query("DELETE `diary` FROM `diary`  WHERE `user_id` = '$id'");
	
}
function recover($mode,$email){
        $mode=sanitize($mode);
        $email=sanitize($email);

        $user_data=user_data(user_id_from_email($email),'user_id','first_name','username');

        if($mode=='username'){
              email($email,'Your username',"Hello".$user_data['first_name']." \n\nYour username is:".$user_data['username']."\n\n-Comet.com");
       }else if($mode=='password'){
           $generated_password=substr(md5(rand(999,999999)),0,8);
           change_password($user_data['user_id'],$generated_password);
            email($email,'Your password Recovery:',"Hello".$user_data['first_name']." \n\nYour password is:".$generated_password."\n\n-Comet.com");
    }
 }
function update_user($update_data){
         global $session_user_id;
        $update=array();
	array_walk($update_data,'array_sanitize');
	foreach($update_data as $field=>$data){
            $update[]='`'.$field.'`=\''.$data.'\'';

         }
     	mysql_query("UPDATE `name` SET ".implode(', ',$update)." WHERE `user_id` = $session_user_id") or die(mysql_error());
}
function activate($email,$email_code){
        $email      =mysql_real_escape_string($email);
         $email_code   =mysql_real_escape_string($email_code);

         if(mysql_result(mysql_query("SELECT COUNT('user_id') FROM name WHERE `email`='$email' AND `email_code`='$email_code' AND `active`=0"),0)==1){
               mysql_query("UPDATE name SET `active`=1 WHERE `email`='$email'");
           return true;
         }else{
          return false;
        }
}
function change_password($user_id,$password){

	$user_id=(int)$user_id;
	$password=md5($password);
	
	mysql_query("UPDATE name SET `password` ='$password' WHERE `user_id`=$user_id");
}
function register_user($register_data){
	array_walk($register_data,'array_sanitize');
	$register_data['password']=md5($register_data['password']);
	$fields='`'.implode('`,`',array_keys($register_data)).'`';
	
	$data='\''.implode('\',\'',$register_data).'\'';
	
	mysql_query("INSERT INTO `name` ($fields) VALUES ($data)");
	
}
function user_count(){
			return mysql_result(mysql_query("SELECT COUNT('user_id') FROM name WHERE `active`=1"),0);
	}
function user_data($user_id){
	$data=array();
	$user_id=(int)$user_id;  
	$func_num_args=func_num_args();
	$func_get_args=func_get_args();
	if($func_num_args>1){
		unset($func_get_args[0]);
		
		$fields = '('.implode('),(', $func_get_args).')';
	
		$query="SELECT $fields  FROM `name` WHERE `user_id` = $user_id";
		
		$data=mysql_fetch_assoc(mysql_query($query));
		return $data;
		
	}
	
	
}

function logged(){
	return(isset($_SESSION['user_id'])) ? true:false;
}

function user_exists($username){                     //Checks only username
    $username=sanitize($username);
	$query=mysql_query("SELECT COUNT('user_id') FROM name WHERE `username`='$username' ");
	return(mysql_result($query,0) == 1) ? true : false; 
	
	}
function email_exists($email){                     //Checks only email
    $email=sanitize($email);
	$query=mysql_query("SELECT COUNT('user_id') FROM name WHERE `email`='$email' ");
	return(mysql_result($query,0) == 1) ? true : false; 
	
	}
function user_active($username){                    //Checks the active number
    $username=sanitize($username);
	$query=mysql_query("SELECT COUNT('user_id') FROM name WHERE `username`='$username' AND active=1");
	return(mysql_result($query,0) == 1) ? true : false; 
	
	}
	
function user_id_from_username($username){
	$username=sanitize($username);
	//$query=mysql_query("SELECT COUNT('user_id') FROM user WHERE username='$username'");
	//echo "SELECT `user_id` FROM `name` WHERE `username`='$username'";
	return mysql_result(mysql_query("SELECT `user_id` FROM `name` WHERE `username`='$username'"),0,'user_id');
}
function user_id_from_email($username){
	$username=sanitize($username);
	//$query=mysql_query("SELECT COUNT('user_id') FROM user WHERE username='$username'");
	//echo "SELECT `user_id` FROM `name` WHERE `username`='$username'";
	return mysql_result(mysql_query("SELECT `user_id` FROM `name` WHERE `username`='$username'"),0,'user_id');
}

function login($username,$password){
	$user_id=user_id_from_username($username);
	$username=sanitize($username);
	$password=md5($password);
	
	//$query=mysql_query("SELECT COUNT('user_id') FROM user WHERE username='$username' AND password='$password'");
	return(mysql_result(mysql_query("SELECT COUNT('user_id') FROM `name` WHERE `username`='$username' AND `password`='$password'"),0) == 1) ? $user_id : false;
}
function email_exists($email){
	 $email=sanitize($email);
	 $query=mysql_query("SELECT `user_id` FROM `name` WHERE `email`='$email'");
	 return(mysql_result($query,0) == 1) ? true : false; 
}
?>