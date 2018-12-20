<?php
	session_start();
	require_once("koneksi.php");
	
	//print_r($_POST);
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE username='".$myusername."' AND username='".$mypassword."' ";
	$result = mysqli_query($con, $sql);
	
	$count=mysqli_num_rows($result);
		
	if($count==1){
		$_SESSION['username']=$myusername;
		$_SESSION['password']=$mypassword;
		header('location:index.php');
	}else{
?>	
	<script type="text/javascript">
		alert('Username dan Password Salah');
		document.location='login.php';
	</script>
<?php
	}
?>