<?php
$koneksi = new mysqli('localhost', 'root', '', 'yosua') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("INSERT INTO users (id, username, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $id, $username, $password, $role);
    $stmt->execute();

    header("location: pasien.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    header("location: pasien.php");
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Gunakan prepared statement untuk menghindari SQL Injection
    $stmt = $koneksi->prepare("UPDATE users SET username=?, password=?, role=? WHERE id=?");
    $stmt->bind_param("ssss", $username, $password, $role, $id);
    $stmt->execute();

    header("location: pasien.php");
}
?>
