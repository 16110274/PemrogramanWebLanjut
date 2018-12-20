<?php
	require_once ("koneksi.php");
	$queryU = mysqli_query($con, "SELECT * FROM berita b join kategori k on b.id_kategori=k.id_kategori where id_berita='".$_GET['id_berita']."' ");
	while ($record = mysqli_fetch_array($queryU)){
	?>
	<html>
	<head>
		<style type = "text/css">
		</style>
	</head>
	
	<body>
	<h3>Update Admin</h3>
	<form action ="" method = "post">
	<table width ="200" border="0">
		<tr>
			<td>Id</td>
			<td><input name = "id_berita" type = "text" value = "<?php echo $record['id_berita']?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input name = "nama_kategori" type = "text" value = "<?php echo $record['nama_kategori']?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td>Judul Berita</td>
			<td><input name = "judul_berita" type = "text" value = "<?php echo $record['judul_berita']?>"></td>
		</tr>
		<tr>
			<td>Isi Berita</td>
			<td><input name = "isi_berita" type = "text" value = "<?php echo $record['isi_berita']?>"></td>
		</tr>
		<tr>
			<td>Tanggal Berita</td>
			<td><input name = "tanggal_berita" type = "text" value = "<?php echo $record['tanggal_berita']?>"></td>
		</tr>
		<tr>
			<td colspan = "2"><input name = "update" type = "submit" value = "Update" id = "update"></td>
		</tr>
	</table>
	<?php } ?>
	</form>
	</body>
	
	</html>
	<?php
	if (isset($_POST['update'])){
		$query="UPDATE berita SET 
		judul_berita = '".$_POST['judul_berita']."',
		isi_berita = '".$_POST['isi_berita']."',
		tanggal_berita = '".$_POST['tanggal_berita']."'
		WHERE id_berita = '".$_POST['id_berita']."';";
		$hasil = mysqli_query($con, $query) or die (mysqli_error());
	?>
	<script>
	alert("data sukses Diupdate");
	window.location='databerita.php';</script>
	<?php
	}
?>