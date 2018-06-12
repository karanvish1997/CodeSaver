

<?php
	
if(empty($_POST)===false){
		$required_fields=array('repo','language','code');
		foreach($_POST as $key=>$value){
			if(empty($value) && in_array($key,$required_fields) === true){
				$error[]='Fields with the asterisk are required..';
				break 1;
			}
		}
		
	}

	if(empty($error)===true){
		//if(isset($repo)&&isset($lang)&&isset($code)){
		//$repo=$_POST['repo_name'];
		//$lang=$_POST['language'];
		//$code=$_POST['code'];
			if(strlen($_POST['repo'])>20){
				$error[]='Repository name should be less than 20 characters';
			}
		//}		
	}
	if(empty($error)===false){	
		echo output_error($error);
	}else{
		if(empty($_POST)=== false && empty($error)===true){
			$register_code=array(
				'user_id'  =>$session_user_id,
				'repo'     =>$_POST['repo'],
				'language' =>$_POST['language'],
				'code'     =>$_POST['code']
                              
			);
			register_code($register_code);
			}		
	}
?>
<form action="" method="post">
			<?php echo output_error($error);?>
			<br />Repository Name:<br />
			<input type="text" name="repo"/><br /><br />
			Language Name:<br />
			<input type="text" name="language"/><br />
			Enter the code Here:<br />
			<textarea cols="40" rows="20" name="code"></textarea><br /><br />
			<input type="submit" value="Submit" name="submit" />
		</form>
