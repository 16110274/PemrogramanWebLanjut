<?php
	require_once ("koneksi.php");
	
	if($_GET['id_admin'] !="");
	{mysqli_query($con, "DELETE FROM admin where id_admin='".$_GET['id_admin']."' ");
	
	echo"<script>alert('data berhasil dihapus')</script>";
	echo"<meta http-equiv='refresh'content='0;url=dataadmin.php'>";
	}
?>