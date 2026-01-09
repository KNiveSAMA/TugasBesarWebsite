<?php
require_once "../config/auth_check.php";
require_once "../config/database.php";

$user_id = $_SESSION['user_id'];

$data = mysqli_query($conn, "
    SELECT * FROM ticket_history
    WHERE user_id='$user_id'
    ORDER BY deleted_at DESC
");
?>

<?php
$title = "Riwayat Tiket";
$header = "Riwayat Pembelian";
include "../layout/header.php";
include "../layout/navbar.php";
?>

<div class="grid-layout">
<article class="article1">

<h2>Riwayat Tiket</h2>

<table border="1" cellpadding="8" width="100%">
<tr>
    <th>Nama</th>
    <th>Rute</th>
    <th>Tanggal</th>
    <th>Harga</th>
    <th>Status</th>
</tr>

<?php while ($r = mysqli_fetch_assoc($data)): ?>
<tr>
    <td><?= $r['nama_penumpang'] ?></td>
    <td><?= $r['rute'] ?></td>
    <td><?= $r['tanggal'] ?></td>
    <td>Rp<?= number_format($r['harga']) ?></td>
    <td><?= strtoupper($r['status']) ?></td>
</tr>
<?php endwhile; ?>

</table>

</article>
</div>

<?php include "../layout/footer.php"; ?>
