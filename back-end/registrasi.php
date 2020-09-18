<?php 
include "config/koneksi.php";
$inputs = file_get_contents("php://input");
parse_str($inputs,$post);
$nama  = mysqli_escape_string($dbs,trim($post['nama']));
$pass1 = mysqli_escape_string($dbs,$post['pass1']);

$strheader = "insert into login (nama,pass1) 
VALUES ('".$nama."','".$pass1."')";
if ($dbs->query($strheader) === TRUE) {
    echo "Data Customer baru berhasil disimpan";
} else {
    echo "Error: " . $strheader . "<br>" . $dbs->error;}
?>