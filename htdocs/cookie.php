<?php
	$user=$_POST["username"];
	$pass=$_POST["password"];
	setcookie("user",$user,time()+3600);
	setcookie("pass",$pass,time()+36);
	echo "cookie dibentuk<br>";
	echo $_COOKIE["user"],"<br>";
	echo $_COOKIE["pass"],"<br>";
?>