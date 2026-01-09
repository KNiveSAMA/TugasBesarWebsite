<?php
require_once "../config/auth_check.php";
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Tiket</title>
</head>
<body>

<h2>Pesan Tiket Kereta</h2>

<form method="POST" action="../process/tiket_add.php">

    <label>Rute</label>
    <input type="text" name="rute" required><br><br>

    <label>Waktu</label>
    <input type="text" name="waktu" required><br><br>

    <label>Stasiun Naik</label>
    <input type="text" name="naik" required><br><br>

    <label>Stasiun Turun</label>
    <input type="text" name="turun" required><br><br>

    <label>Harga</label>
    <input type="number" name="harga" required><br><br>

    <button type="submit">Pesan</button>

</form>

<br>
<a href="dashboard.php">⬅ Kembali</a>

</body>
</html>
