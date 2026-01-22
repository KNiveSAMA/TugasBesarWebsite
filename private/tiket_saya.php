<?php
require_once "../config/auth_check.php";

$title  = "Tiket Saya";
$header = "Tiket Saya";

require_once "../config/database.php";
include "../layout/header.php";
include "../layout/navbar.php";

$title  = "Pesan Tiket";
$header = "Tiket Saya";

$user_id = $_SESSION['user_id'];
$data = mysqli_query($conn, "SELECT * FROM tickets WHERE user_id='$user_id'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tiket Saya</title>
  <link rel="stylesheet" href="../assets/css/tiket_saya.css">
</head>

<body>

<h2 class="title-page">Tiket Saya</h2>

<div class="table-wrapper">
<table class="ticket-table">
  <thead>
    <tr>
      <th>Kode</th>
      <th>Rute</th>
      <th>Waktu</th>
      <th>Naik</th>
      <th>Turun</th>
      <th>Harga</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

<?php while ($t = mysqli_fetch_assoc($data)) : ?>
<tr>
  <td><?= $t['kode_tiket']; ?></td>
  <td><?= $t['rute']; ?></td>
  <td><?= $t['waktu']; ?></td>
  <td><?= $t['naik']; ?></td>
  <td><?= $t['turun']; ?></td>
  <td><?= number_format($t['harga']); ?></td>
  <td class="status aktif"><?= $t['status']; ?></td>
  <td>
    <a href="../process/tiket_delete.php?id=<?= $t['id']; ?>"
       class="btn-table-refund"
       onclick="return confirm('Yakin refund tiket ini?')">
       Refund
    </a>
  </td>
</tr>
<?php endwhile; ?>

  </tbody>
</table>
</div>

</body>
</html>

<script src="../assets/js/script.js"></script>
