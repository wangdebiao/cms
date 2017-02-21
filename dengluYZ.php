<?php
	session_start();
include "db.php";
$username=$_POST["username"];
$password=md5($_POST["password"]);
$result=$db->query("select * from user");
while($row=$result->fetch_assoc()){
	if($row["username"]==$username){
		if($row["password"]==$password){
			$message = "登录成功";
        	$url = "main.php";
        	$_SESSION["is_login"]="ok";
        	include "tiaozhuan.php";
        	exit;
		}
	}
}
$message = "登录失败";
$url = "denglu.php";
include "tiaozhuan.php";
?>