<?php
session_start();
//require_once ("koneksi.php");
// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
if(isset($myusername) or isset($mypassword))
{
if($myusername == "" or $mypassword== "")
{?>
<script type="text/javascript">
alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK
BOLEH KOSONG");
window.location = 'login.php';
</script>
<script language="JavaScript">alert('Selamat, Login Anda
Sukses!!');
document.location='main.php'</script> <?php
}
else{
?>
<script type="text/javascript">
alert("LOGIN SALAH, USERNAME ATAU PASSWORD TIDAK
DITEMUKAN");
window.location = 'login.php';
</script>
<?php
}
?>