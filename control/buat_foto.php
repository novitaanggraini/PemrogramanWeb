<?php

include 'config.php';

$foto=$_FILES['foto']['name'];
if(empty($foto)) {
	echo ("foto is required");
}
$target= "./img/". basename($foto);
if (!move_uploaded_file($_FILES ['foto'] ['tmp_name'], $target)){
	echo ("Failed to Upload image. Please to check file setting for your server");
}
$query=mysqli_query($conn, "INSERT INTO foto (id_foto,foto,tanggal) VALUES (null,'$foto',now())") ;

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>