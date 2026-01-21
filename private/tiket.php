<?php
require_once "../config/auth_check.php";

$title  = "Pesan Tiket";
$header = "Pemesanan Tiket";

include "../layout/header.php";
include "../layout/navbar.php";
?>

<link rel="stylesheet" href="../assets/css/tiket.css">

<div class="grid-layout">

    <article class="article1">

        <h2>Pesan Tiket Kereta</h2>

        <form method="POST" action="../process/tiket_add.php" class="tiket-form">

            <div class="form-group">
                <label>Rute</label>
                <input type="text" name="rute" required>
            </div>

            <div class="form-group">
                <label>Waktu</label>
                <input type="text" name="waktu" required>
            </div>

            <div class="form-group">
                <label>Stasiun Naik</label>
                <input type="text" name="naik" required>
            </div>

            <div class="form-group">
                <label>Stasiun Turun</label>
                <input type="text" name="turun" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" required>
            </div>

            <button type="submit">Pesan Tiket</button>

        </form>

    </article>

</div>

<?php include "../layout/footer.php"; ?>
<script src="../assets/js/script.js"></script>