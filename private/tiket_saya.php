<?php
require_once "../config/auth_check.php";
require_once "../config/database.php";

$user_id = $_SESSION['user_id'];

$data = mysqli_query($conn, "SELECT * FROM tickets WHERE user_id='$user_id'");
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tiket Saya</title>
</head>
<body>

<h2>Tiket Saya</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode</th>
        <th>Rute</th>
        <th>Waktu</th>
        <th>Naik</th>
        <th>Turun</th>
        <th>Harga</th>
        <th>Status</th>
    </tr>

<?php while ($t = mysqli_fetch_assoc($data)) : ?>
<tr>
    <td><?= $t['kode_tiket']; ?></td>
    <td><?= $t['rute']; ?></td>
    <td><?= $t['waktu']; ?></td>
    <td><?= $t['naik']; ?></td>
    <td><?= $t['turun']; ?></td>
    <td><?= number_format($t['harga']); ?></td>
    <td><?= $t['status']; ?></td>
</tr>
<?php endwhile; ?>

</table>

<br>
<a href="../process/tiket_delete.php?id=<?= $t['id']; ?>"
   onclick="return confirm('Yakin refund tiket ini?')">
   Refund
</a>

<a href="dashboard.php">⬅ Dashboard</a>

</body>
</html>
