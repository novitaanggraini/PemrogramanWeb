<?php

include 'config.php';

$video=$_POST['video'];

$query=mysqli_query($conn, "INSERT INTO video (id_video,video,tanggal) VALUES (null,'$video',now())") ;

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>