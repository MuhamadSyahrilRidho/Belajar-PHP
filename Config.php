<?php
$host = 'localhost';
$db = 'cv_data';
$user = 'CV_Data';
$pwd = '12345';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
?>