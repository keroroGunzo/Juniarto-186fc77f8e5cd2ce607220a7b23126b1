<?php 
include "config/koneksi.php";
$inputs = file_get_contents("php://input");
parse_str($inputs,$post);
$nama  = mysqli_escape_string($dbs,trim($post['nama']));
$pass1 = mysqli_escape_string($dbs,$post['pass1']);

$login = mysqli_query($dbs,"select * from login where nama = '$nama'");
$cek = mysqli_num_rows($login);

if($cek>0){
    //list($username, $password, $nama)
    $data = mysqli_fetch_assoc($login);
    var_dump($data);
        //header("location:home.php");
}
?>