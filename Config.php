<?php
$host = 'localhost';
$db = 'if22';
$user = 'if22';
$pwd = '12345';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
