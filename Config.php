<?php
$host = 'localhost';
$db = 'CV_Data';
$user = 'CV_Data';
$pwd = 'gtpridho.ke123';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}else{
  echo"sukses";
}
?>