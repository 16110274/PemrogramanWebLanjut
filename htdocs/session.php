<?php
	session_start();
	
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$_SESSION["user"] = $user;
	$_SESSION["password"] = $pass;
	
	$akun_user = "admin";
	$akun_pass = "rahasia";
	
	if (($_SESSION["user"]) == $akun_user && ($_SESSION["password"]) == $akun_pass){
		echo "anda ". $_SESSION["user"];
		echo " dengan password ". $_SESSION["password"];
		echo " oke";
		header ('location: berhasil.php');
		;
	}else{
		echo "anda ". $_SESSION["user"];
		echo " dengan password ". $_SESSION["password"];
		echo " balik bos";
		echo("<script>alert('LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK DITEMUKAN');
		window.location = 'login.php';
		</script>;");
	}
?>