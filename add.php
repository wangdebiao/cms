<?php
	include "db.php";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$db->query("insert into user (username,password) values ('{$username}','{$password}')");
	if($db->affected_rows>0){
		$message = "注册成功，请登录";
		$url="denglu.php";
		include "tiaozhuan.php";
	};
?>