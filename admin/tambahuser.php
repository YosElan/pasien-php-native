<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Pasien</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h3>Tambah User</h3>
        <form action="koneksi_user.php" method="POST">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control mb-3" name="id" placeholder="ID Pasien">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control mb-3" name="username" placeholder="Nama Pasien">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control mb-3" name="role" placeholder="Role">
          </div>
          <div class="form-group">
            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
