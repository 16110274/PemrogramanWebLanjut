<pre>
<?php
print_r($_POST);

if(isset($_POST["simpan"])){
	echo "button simpan di klik";
	echo "<br/>",$_POST["txtNama"]," adalah ",$_POST["jk"];
}else{
	echo "button save di klik";
	echo "<br/>",$_POST["txtPassword"];
}
?>
</pre>