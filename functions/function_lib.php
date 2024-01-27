<?php
//Database connection;
$servername = "localhost";
$id = "root";
$password = "";
$dbname = "schooldb";

$Connect = new mysqli($servername, $id, $password, $dbname);
define("Connect", $Connect);

if ($Connect->connect_error) {
	die("Connetion Failed: " . $Connect->connect_error);
}

function shake()
{
	$salt = random_bytes(32);
	return $salt;
}

function bake($salt, $bread, $flavor)
{
	$mixture = $salt . $bread;
	$cake = hash($flavor, $mixture);
	return $cake;
}

function conjure($id, $password, $identifier)
{
	$salt = shake();
	$password = bake($salt, $password, "sha256");
	$salt = base64_encode($salt);
	$sql = Connect->prepare("INSERT INTO master_id (`id`,`password`,`salt`,`identifier`) VALUES (?,?,?,?)");
	$sql->bind_param("ssss", $id, $password, $salt, $identifier);
	$sql->execute();
}

function verify($password, $user)
{
	$set = cook_user($user);
	if ($set == NULL) {
		echo "No user found <br>";
		return false;
	} else {
		$password = bake(base64_decode($set['salt']), $password, "sha256");
		if ($password == $set['password']) {
			return true;
		} else {
			echo "Wrong creds<br>";
			return false;
		}
	}
}

function cook_user($id)
{
	$value = NULL;
	$stmt = "SELECT * FROM master_id WHERE BINARY `id` = ?";
	$sql = Connect->prepare($stmt);
	$sql->bind_param("s", $id);
	$sql->execute();
	$result = $sql->get_result();
	$value = mysqli_fetch_assoc($result);
	return $value;
}

function cook_user_spec($id,$identifier)
{
	if($identifier == "Student"){
		$value = NULL;
		$stmt = "SELECT * FROM student_list WHERE BINARY `id` = ?";
		$sql = Connect->prepare($stmt);
		$sql->bind_param("s", $id);
		$sql->execute();
		$result = $sql->get_result();
		$value = mysqli_fetch_assoc($result);
		return $value;
	}else{
		$value = NULL;
		$stmt = "SELECT * FROM master_id WHERE BINARY `id` = ?";
		$sql = Connect->prepare($stmt);
		$sql->bind_param("s", $id);
		$sql->execute();
		$result = $sql->get_result();
		$value = mysqli_fetch_assoc($result);
		return $value;
	}
	
}
