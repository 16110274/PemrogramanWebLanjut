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
<h3>TABEL Kategori</h3>
<table cellpadding="0" cellspacing="0" border="1px" class="table">
 <thead>
	<tr bgcolor="#000033">
		<th><center style="color:#ffffff">
		<span class="style1">ID Kategori</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Kategori</span>
		</th>
	</tr>
 </thead>
 <tbody>
	<?php
		$query = mysqli_query($con,"SELECT * FROM kategori");
		while($record = mysqli_fetch_array($query)){
	?>
	<tr class="active">
		<td><center style=""><?php echo $record['id_kategori']; ?></td>
		<td><?php echo $record['nama_kategori']; ?></td>
	</tr>
	<?php } ?>
 </tbody>
</table>
</body>
</html>
<?php
mysqli_close($con);
?>