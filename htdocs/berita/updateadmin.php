<?php
	require_once ("koneksi.php");
	$queryU = mysqli_query($con, "SELECT * FROM admin where id_admin='".$_GET['id_admin']."' ");
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
			<td><input name = "id" type = "text" value = "<?php echo $record['id_admin']?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td>username</td>
			<td><input name = "username" type = "text" value = "<?php echo $record['username']?>"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input name = "password" type = "text" value = "<?php echo $record['password']?>"></td>
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
		$query="UPDATE admin SET username = '".$_POST['username']."',
		password = '".$_POST['password']."' WHERE admin.id_admin = '".$_POST['id']."';";
		$hasil = mysqli_query($con, $query) or die (mysqli_error());
	?>
	<script>
	alert("data sukses Diupdate");
	window.location='dataadmin.php';</script>
	<?php
	}
?>