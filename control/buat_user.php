<?php

include 'config.php';

$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$query=mysqli_query($conn, "INSERT INTO users (id,name,username,email,password) VALUES (null,'$name','$username','$email','$password')") ;

echo "
<script>
alert('Berhasil');
window.location.href='admin.php';
</script>
";

?>
