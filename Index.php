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
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Curriculum Vitae</h1>
      <a class="navbar-brand" href="admin.php">Update</a>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['Poto_Path']; ?>" alt="Foto_Profil">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['Nama']; ?></h1>
        <p class="card-text"><?php echo $data['Alamat']; ?></p>
        <p class="card-text"><?php echo $data['Telepon']; ?></p>
        <p class="card-text"><?php echo $data['Email']; ?></p>
        <p class="card-text"><?php echo $data['Web']; ?></p>
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['Pendidikan']; ?></p>
        <h2>Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['Pengalaman_Kerja']; ?></p>
        <h2>Keterampilan</h2>
        <p class="card-text"><?php echo $data['Keterampilan']; ?></p>
      </div>
    </div>
  </div>
</body>
</html>