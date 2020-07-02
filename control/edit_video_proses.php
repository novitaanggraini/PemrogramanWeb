<?php

include 'config.php';

$id = $_GET['id'];
$video=$_POST['video'];

if ($_FILES['video']['name']!="") {
	$query=mysqli_query($conn, "UPDATE video SET video = '$video' WHERE id_video='$id'") ;
}else{
	$query=mysqli_query($conn, "UPDATE video SET video = '$video' WHERE id_video='$id'") ;
}

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>
