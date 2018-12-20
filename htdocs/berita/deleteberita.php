<?php
	require_once ("koneksi.php");
	
	if($_GET['id_berita'] !="");
	{mysqli_query($con, "DELETE FROM berita where id_berita='".$_GET['id_berita']."' ");
	
	echo"<script>alert('data berhasil dihapus')</script>";
	echo"<meta http-equiv='refresh'content='0;url=databerita.php'>";
	}
?>