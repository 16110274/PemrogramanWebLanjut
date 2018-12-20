<?php
	require_once("koneksi.php");
?>

<html>
<head>
<style type="text/css">
<!--
-->
</style>
</head>

<body>
<h3>TABEL Berita</h3>
<table cellpadding="0" cellspacing="0" border="1px" class="table">
 <thead>
	<tr bgcolor="#000033">
		<th><center style="color:#ffffff">
		<span class="style1">ID</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Kategori</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Judul Berita</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Isi Berita</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Tanggal Berita</span>
		</th>
		<th colspan="2"><center style="color:#ffffff">
		<span class="style1">AKSI</span>
		</th>
	</tr>
 </thead>
 <tbody>
	<?php
		$query = mysqli_query($con,"SELECT * FROM berita b join kategori k on b.id_kategori=k.id_kategori");
		while($record = mysqli_fetch_array($query)){
	?>
	<tr class="active">
		<td><center style=""><?php echo $record['id_berita']; ?></td>
		<td><?php echo $record['nama_kategori']; ?></td>
		<td><?php echo $record['judul_berita']; ?></td>
		<td><?php echo $record['isi_berita']; ?></td>
		<td><?php echo $record['tanggal_berita']; ?></td>
		<td><center style="">
			<a href="updateberita.php?id_berita=<?php echo $record['id_berita'] ?>" class="btn btn-xs btn-success">Update</a>
			<a href="deleteberita.php?id_berita=<?php echo $record['id_berita'] ?>" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
		</td>
	</tr>
	<?php } ?>
 </tbody>
</table>
</body>
</html>
<?php
mysqli_close($con);
?>