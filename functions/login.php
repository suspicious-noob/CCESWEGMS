<?php

session_start();

include "function_lib.php";

$id = $_POST['id'];
$password = $_POST['password'];

if(verify($password, $id)){
	$set = cook_user($id);
	if($set['identifier'] == "Student"){
		$set = cook_user_spec($id,"Student");
		foreach ($set as $column => $value) {
			$_SESSION[$column] = $value;
		}
	}
	
	header("Location: ../admin/landing.php");
}else{
	header("Location: ../login.php?error=Incorect username or password");
}


