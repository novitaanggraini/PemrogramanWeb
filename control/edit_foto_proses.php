<?php

include 'config.php';

$id = $_GET['id'];

if($_FILES['foto']['name']!="") {
	$foto=$_FILES['foto']['name'];
	$target= "./img/". basename($foto);
	if (!move_uploaded_file($_FILES ['foto'] ['tmp_name'], $target)){
		echo ("Failed to Upload image. Please to check file setting for your server");
	}
}

if ($_FILES['foto']['name']!="") {
	$query=mysqli_query($conn, "UPDATE foto SET foto = '$foto' WHERE id_foto='$id'") ;
}else{
	$query=mysqli_query($conn, "UPDATE foto SET foto = '$foto' WHERE id_post='$id'") ;
}

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>
