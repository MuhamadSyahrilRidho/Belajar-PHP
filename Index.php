<?php
include 'Config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <!-- NavBar -->
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>CV</h1>
      <a class="navbar-brand" href="admin.php">Update</a>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Gambar -->
  <div class="text-center">
  <img src="<?php echo $data['Poto_Path']; ?>" class="rounded mx-auto d-block img-fluid" alt="Foto_Profil">
  </div>
  <!-- Gambar -->

  <!-- Table -->
  <div>
  <table  border= "2" cellspacing="2" cellpadding="5" align= "center";  width="800">
    <tr align="center" bgcolor= "#1fe5d5">
      <td width="200">Data Diri</td>
      <td width="400">Keterangan</td>
    </tr>
    <tr>
      <td>Nama</td>
      <td class="card-title"><?php echo $data['Nama']; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td class="card-text"><?php echo $data['Alamat']; ?></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td class="card-text"><?php echo $data['Telepon']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td class="card-text"><?php echo $data['Email']; ?></td>
    </tr>
    <tr>
      <td>Web</td>
      <td class="card-text"><?php echo $data['Web']; ?></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td class="card-text"><?php echo $data['Pendidikan']; ?></td>
    </tr>
    <tr>
      <td>Pengalaman Kerja</td>
      <td class="card-text"><?php echo $data['Pengalaman_Kerja']; ?></td>
    </tr>
    <tr>
      <td>Keterampilan</td>
      <td class="card-text"><?php echo $data['Keterampilan']; ?></td>
    </tr>
  </table>
  </div>
  <!-- Table -->

</body>
</html>