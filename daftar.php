<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = trim($_POST['role']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $nama = trim($_POST['nama']);

    if ($role && $email && $password && $nama) {
        $baris = "$email,$password,$role,$nama\n";
        file_put_contents("user.txt", $baris, FILE_APPEND);

        // Redirect ke login.html setelah sukses
        header("Location: login.php");
        exit();
    } else {
        $pesan = "Data tidak lengkap. Silakan isi semua field.";
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Daftar</title>
  <link rel="stylesheet" href="styles.css">
  
</head>
<body class="bodylogin">

  <?php if ($pesan): ?>
    <div class="popup-overlay" id="popup">
      <div class="popup">
        <p><strong><?php echo $pesan; ?></strong></p>
        <button onclick="document.getElementById('popup').style.display='none'">Tutup</button>
      </div>
    </div>
  <?php endif; ?>

  <div class="kata_login">
    <h1>Gabung Sekarang</h1>
    <p>Isi form untuk membuat akun baru dan mulai menggunakan layanan kami sebagai User atau Admin.</p>
  </div>

  <div class="cardlogin">
    <div class="titlelogin">Form Pendaftaran</div>
    <form id="registerForm" method="post" action="">
      <div class="fieldlogin">
        <input type="text" id="text" placeholder="masukan nama anda" class="input-fieldlogin" name="nama" required>
      </div>

      <div class="fieldlogin">
        <input type="email" id="email" placeholder="Email" class="input-fieldlogin" name="email" required>
      </div>

      <div class="fieldlogin">
        <input type="password" id="password" placeholder="Password" class="input-fieldlogin" name="password" required>
      </div>

      <div class="fieldlogin">
        <select id="role" class="select-fieldlogin" name="role" required>
          <option value="">-- Pilih Peran --</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>

      <button type="submit" class="btnlogin">Daftar</button>
      <a href="login.php" class="btn-linklogin">Sudah punya akun? Login di sini</a>
    </form>
    <div id="error-message" class="error-message" style="display:none;"></div>

  </div>
<script src="daftar.js"></script>
</body>
</html>
