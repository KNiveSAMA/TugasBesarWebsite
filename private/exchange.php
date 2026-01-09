<?php
require_once "../config/auth_check.php";
require_once "../config/database.php";

$user_poin = $_SESSION['poin'];
$data = mysqli_query($conn, "SELECT * FROM discounts");
?>

<html>
<head>
    <title>Exchange Poin</title>
</head>
<body>

<h2>Exchange Poin</h2>
<p>Poin Anda: <b><?= $user_poin ?></b></p>

<table border="1" cellpadding="8">
<tr>
    <th>Poin</th>
    <th>Diskon</th>
    <th>Aksi</th>
</tr>

<?php while ($d = mysqli_fetch_assoc($data)): ?>
<tr>
    <td><?= $d['poin_dibutuhkan'] ?></td>
    <td>Rp<?= number_format($d['nilai_diskon']) ?></td>
    <td>
        <?php if ($user_poin >= $d['poin_dibutuhkan']): ?>
            <a href="../process/exchange_process.php?id=<?= $d['id'] ?>">
                Tukar
            </a>
        <?php else: ?>
            Poin kurang
        <?php endif; ?>
    </td>
</tr>
<?php endwhile; ?>
</table>

<br>
<a href="dashboard.php">⬅ Dashboard</a>

</body>
</html>
