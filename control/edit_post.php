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
$judul=$_POST['judul'];
$body=$_POST['body'];

if ($_FILES['foto']['name']!="") {
	$query=mysqli_query($conn, "UPDATE posting SET judul='$judul', foto = '$foto', body='$body' WHERE id_post='$id'") ;
}else{
	$query=mysqli_query($conn, "UPDATE posting SET judul='$judul', body='$body' WHERE id_post='$id'") ;
}

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>
