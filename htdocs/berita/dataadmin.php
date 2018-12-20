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
<h3>TABEL ADMIN</h3>

<form name="tambahadmin" action="tambahadmin.php" method="post">
<input type="submit" class="btn btn-lg btn-primary" value="Button Tambah Tabel Database">
</form>

<table cellpadding="0" cellspacing="0" border="1px" class="table">
 <thead>
	<tr bgcolor="#000033">
		<th><center style="color:#ffffff">
		<span class="style1">ID Admin</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Username</span>
		</th>
		<th><center style="color:#ffffff">
		<span class="style1">Password</span>
		</th>
		<th colspan="2"><center style="color:#ffffff">
		<span class="style1">AKSI</span>
		</th>
	</tr>
 </thead>
 <tbody>
	<?php
		$query = mysqli_query($con,"SELECT * FROM admin");
		while($record = mysqli_fetch_array($query)){
	?>
	<tr class="active">
		<td><center style=""><?php echo $record['id_admin']; ?></td>
		<td><?php echo $record['username']; ?></td>
		<td><?php echo $record['password']; ?></td>
		<td><center style="">
			<a href="updateadmin.php?id_admin=<?php echo $record['id_admin'] ?>" class="btn btn-xs btn-success">Update</a>
			<a href="deleteadmin.php?id_admin=<?php echo $record['id_admin'] ?>" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
		</td>
	</tr>
	<?php } ?>
 </tbody>
</table>

<a href="tambahadmin.php">Link Tambah Data</a>

</body>
</html>
<?php
mysqli_close($con);
?>