<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika pengguna belum login, arahkan ke halaman login.php
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyApp | Halaman Utama</title>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">MyApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row mt-3">
      <div class="col">
        <h3>Tabel Pasien</h3>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Pasien</th>
              <th>Nama Pasien</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $hasil = $koneksi->query("SELECT * FROM pasien");
            while ($row = $hasil->fetch_assoc()) {
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['idPasien']; ?></td>
              <td><?= $row['nmPasien']; ?></td> 
              <td><?= $row['jk']; ?></td>
              <td><?= $row['alamat']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
