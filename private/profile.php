<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Pengguna</title>
  <link rel="stylesheet" href="../assets/css/profile.css" />
</head>

<body>

<nav>
  <table width="100%">
    <tr>
      <td><img src="logo.png" width="60" /></td>
      <td align="right">
        <button id="hamburgerBtn">☰ Menu</button>
      </td>
    </tr>
  </table>
</nav>

<div id="overlay"></div>

<div id="sideMenu">
  <p><a href="dashboard.php">Home</a></p>
  <p><a href="tiket.php">Pesan Tiket</a></p>
  <p><a href="profile.php" class="active">Profile</a></p>
  <p><a href="exchange.php">Exchange</a></p>
  <p><a href="about.php">About</a></p>
  <p>
    <a id="konfirmasi-link" href="konfirmasi.php" style="display:none">
      Konfirmasi
    </a>
  </p>
</div>

<section>
  <table cellpadding="15">
    <tr>
      <td align="center">
        <img src="profile.jpg" width="140" height="140" style="border-radius:50%" />
        <br />
        <button onclick="gantiFoto()">Ganti Foto</button>
      </td>
      <td>
        <h2>Data Pengguna</h2>
        <table cellpadding="6">
          <tr><td><b>Nama</b></td><td>:</td><td id="p-nama">-</td></tr>
          <tr><td><b>Nomor</b></td><td>:</td><td id="p-telp">-</td></tr>
          <tr><td><b>Email</b></td><td>:</td><td id="p-email">-</td></tr>
          <tr><td><b>ID</b></td><td>:</td><td id="p-id">-</td></tr>
        </table>
        <button onclick="editProfile()">Edit Profil</button>
      </td>
    </tr>
  </table>
</section>

<footer>
  About • Help • Services • References
</footer>

<script src="../assets/js/script.js"></script>
</body>
</html>
