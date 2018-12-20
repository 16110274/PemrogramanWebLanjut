<?php
require_once ("koneksi.php");
?>

<h3>Tambah Admin</h3>
<form action="" method="post">
	<table width="200" border="0">
		<tr>
			<td>username</td>
			<td><input name="username" type="text"></td>
		</tr>
			<tr>
			<td>password</td>
			<td><input name="password" type="password" id="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input name="submit" type="submit" value="Insert"></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST['submit'])){
	$query="insert into admin (id_admin,username,password) values 
	('','".$_POST['username']."','".$_POST['password']."')";
	//echo $query;
	$hasil=mysqli_query($con,$query) or die (mysqli_error());
?>
	<script>
	alert("data sukses ditambahkan");
	window.location='dataadmin.php';
	</script>
<?php
	}
?>