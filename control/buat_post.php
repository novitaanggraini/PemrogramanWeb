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
$judul=$_POST['judul'];
$body=$_POST['body'];
$query=mysqli_query($conn, "INSERT INTO posting (id_post,judul,foto,body,tanggal) VALUES (null,'$judul','$foto','$body',now())") ;

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>