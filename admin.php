<?php
include 'config.php';

function getCVData()
{
  global $conn;
  $query = "SELECT * FROM cv_data WHERE id = 1"; 
  $result = mysqli_query($conn, $query);
  return mysqli_fetch_array($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $Nama = htmlspecialchars($_POST['Nama']);
  $Alamat = htmlspecialchars($_POST['Alamat']);
  $Telepon = htmlspecialchars($_POST['Telepon']);
  $Email = htmlspecialchars($_POST['Email']);
  $Web = htmlspecialchars($_POST['Web']);
  $Pendidikan = htmlspecialchars($_POST['Pendidikan']);
  $Pengalaman_Kerja = htmlspecialchars($_POST['Pengalaman_Kerja']);
  $Keterampilan = htmlspecialchars($_POST['Keterampilan']);
  $Foto_Path = htmlspecialchars($_POST['Foto_Path']);

  $query = "UPDATE cv_data SET 
        Nama = ?, 
        Alamat = ?, 
        Telepon = ?, 
        Email = ?, 
        Web = ?, 
        Pendidikan = ?, 
        Pengalaman_Kerja = ?, 
        Keterampilan = ?, 
        Foto_Path = ? 
        WHERE id = 1"; 

  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "sssssssss", $Nama, $Alamat, $Telepon, $Email, $Web, $Pendidikan, $Pengalaman_Kerja, $Keterampilan, $Foto_Path);

  if (mysqli_stmt_execute($stmt)) {
    echo 'Data berhasil diperbarui';
   
    header('Location: admin.php');
    exit();
  } else {
    echo 'Terjadi kesalahan saat memperbarui data';
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

$data = getCVData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Update CV Data</title>
</head>

<body class="p-3">
    <nav class="navbar sticky-top bg-body-tertiary biru">
        <div class="container-fluid">
            <h1>Update CV</h1>
            <a class="navbar-brand" href="/cv">View</a>
        </div>
    </nav>
    <div class="card">
        <div class="p-3">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input class="form-control" id="Nama" type="text" name="Nama" value="<?php echo $data['Nama']; ?>" placeholder="Nama" required>
                        <label for="Alamat" class="form-label">Alamat</label>
                        <input class="form-control" id="Alamat" type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>" placeholder="Alamat" required>
                        <label for="Telepon" class="form-label">Telepon</label>
                        <input class="form-control" id="Telepon" type="text" name="Telepon" value="<?php echo $data['Telepon']; ?>" placeholder="Telepon" required>
                        <label for="Email" class "form-label">Email</label>
                        <input class="form-control" id="Email" type="Email" name="Email" value="<?php echo $data['Email']; ?>" placeholder="Email" required>
                        <label for="Web" class="form-label">Web</label>
                        <input class="form-control" id="Web" type="text" name="Web" value="<?php echo $data['Web']; ?>" placeholder="Web" required>
                        <label for="Pendidikan" class="form-label">Pendidikan</label>
                        <textarea class="form-control" id="Pendidikan" name="Pendidikan" rows="3" placeholder="Pendidikan" required><?php echo $data['Pendidikan']; ?></textarea>
                        <label for="Pengalaman_Kerja" class="form-label">Pengalaman Kerja</label>
                        <textarea class="form-control" id="Pengalaman_Kerja" name="Pengalaman_Kerja" rows="3" placeholder="Pengalaman Kerja" required><?php echo $data['Pengalaman_Kerja']; ?></textarea>
                        <label for="Keterampilan" class="form-label">Keterampilan</label>
                        <textarea class="form-control" id="Keterampilan" name="Keterampilan" rows="3" placeholder="Keterampilan" required><?php echo $data['Keterampilan']; ?></textarea>
                        <label for="Foto_Path" class="form-label">Foto Path</label>
                        <input class="form-control" id="Foto_Path" type="text" name="Foto_Path" value="<?php echo $data['Foto_Path']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>