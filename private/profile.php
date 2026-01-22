<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Pengguna</title>
  <link rel="stylesheet" href="../assets/css/profile.css"/>
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

<section class="profile-wrapper">

  <div class="profile-card">

    <div class="profile-left">
      <img src="profile.jpg" class="profile-img" />
      <button class="btn btn-photo" onclick="gantiFoto()">Ganti Foto</button>
    </div>

    <div class="profile-right">
      <h2>Data Pengguna</h2>

      <div class="profile-info">
        <p><span>Nama</span> : <b id="p-nama">-</b></p>
        <p><span>Nomor</span> : <b id="p-telp">-</b></p>
        <p><span>Email</span> : <b id="p-email">-</b></p>
        <p><span>ID</span> : <b id="p-id">-</b></p>
      </div>

      <button class="btn btn-edit" onclick="editProfile()">Edit Profil</button>
    </div>

  </div>

</section>


<footer>
  About • Help • Services • References
</footer>

<script src="../assets/js/script.js"></script>
</body>
</html>
