<?php 
$dbs = mysqli_connect("localhost","root","","testlogin");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
