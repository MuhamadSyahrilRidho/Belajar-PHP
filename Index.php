<?php
//gunakan file config.php
include_once("Config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE Id = 1");
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>CV_Data Mahasiswa</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top bg-body-tertiary biru">
        <div class="container-fluid">
            <h1>CV Data</h1>
            <ul class="d-flex justify-content-center nav-menu"> <!-- Add the 'nav-menu' class for custom styling -->
                <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Data</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CV</a></li>
            </ul>
            <a class="navbar-brand" href="admin.php">Update</a>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Dalamnya -->
    <div class="card">
    <div class="p-3">
      <img src="<?php echo $data['Foto_Path']; ?>" alt="Foto Profil">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['Nama']; ?></h1>
        <p class="card-text"><?php echo $data['Alamat']; ?></p>
        <p class="card-text"><?php echo $data['Telepon']; ?></p>
        <p class="card-text"><?php echo $data['Email']; ?></p>
        <p class="card-text"><?php echo $data['Web']; ?></p>
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['Pendidikan']; ?></p>
        <h2>Pengalaman_Kerja</h2>
        <p class="card-text"><?php echo $data['Pengalaman_Kerja']; ?></p>
        <h2>Keterampilan</h2>
        <p class="card-text"><?php echo $data['Keterampilan']; ?></p>
      </div>
    </div>
  </div>
    <!-- Dalamnya -->
</body>
</html>