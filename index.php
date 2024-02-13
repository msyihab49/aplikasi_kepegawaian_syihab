<?php 
include"config/koneksi.php";
session_start();

if (isset($_POST['login'])){

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' AND status ='aktif'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);

if(mysqli_num_rows($result) > 0){
  $_SESSION['username'] = $data['username'];
  $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
  $_SESSION['id_admin'] = $data['id_admin'];
  $_SESSION['status'] = $data['status'];
  echo "
  <script>
  alert('Anda Berhasil Login');
  window.location = 'admin/home.php';
  </script>
  ";

}else{
  echo "
  <script>
  alert('Username atau Password Salah');
  window.location = 'index.php';
  </script>
  ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INVENTORI PEGAWAI</title>
  <!-- Menambahkan CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="../assets2/img/clients/logo_unikom_kuning.png" rel="icon">
  <style>
    body {
      background-color: #d3d3d0;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 50px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .login-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container .form-group {
      margin-bottom: 20px;
    }

    .login-container .btn-login {
      width: 100%;
    }

    .login-container .btn-forgot {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <center>
      <img src="assets2/img/clients/logo_unikom_kuning.png" alt="" width="80">
      </center>
      <p align="center" class="mt-2">Masukan Username dan Password</p>
      <form method='post' class="shadow p-3 mb-5 bg-white rounded">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" name='login' value='login' class="btn btn-primary btn-login">Masuk</button>
        <!-- <p class="text-center btn-forgot">Belum punya akun?<a href="form_pendaftaran.php"> Daftar</a></p> -->
      </form>
    </div>
  </div>

  <!-- Menambahkan script Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
