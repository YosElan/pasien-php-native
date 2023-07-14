<?php
$koneksi = new mysqli('localhost', 'root', '', 'yosua') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $idPasien, $nmPasien, $jk, $alamat);
    $stmt->execute();

    header("location: pasien.php");
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("DELETE FROM pasien WHERE idPasien = ?");
    $stmt->bind_param("s", $idPasien);
    $stmt->execute();

    header("location: pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("UPDATE pasien SET nmPasien=?, jk=?, alamat=? WHERE idPasien=?");
    $stmt->bind_param("ssss", $nmPasien, $jk, $alamat, $idPasien);
    $stmt->execute();

    header("location: pasien.php");
}
?>
