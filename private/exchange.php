<?php
require_once "../config/auth_check.php";
require_once "../config/database.php";

$user_poin = $_SESSION['poin'];
$data = mysqli_query($conn, "SELECT * FROM discounts");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exchange Poin</title>
  <link rel="stylesheet" href="../assets/css/exchange.css">
</head>

<body>
    <?php
    include "../layout/header.php";
    include "../layout/navbar.php";
    ?>

<div id="overlay"></div>

<div class="grid-layout">

  <article class="article1">
    <h2>Penukaran Poin</h2>

    <p>
      Total Poin Anda:
        <strong>
            <span id="user-poin">
            <?= $user_poin ?>
            </span> poin
    </p>

    <div style="
      margin-top:20px;
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(160px, 1fr));
      gap:15px;
    ">

      <?php
      $diskon = [
        ["Diskon 5%", 50, "diskon5.php"],
        ["Diskon 12%", 120, "diskon12.php"],
        ["Diskon 25%", 250, "diskon25.php"],
        ["Diskon 30%", 300, "diskon30.php"],
        ["Diskon 50%", 500, "diskon50.php"],
      ];

      foreach ($diskon as [$judul, $poin, $link]):
      ?>
        <div class="card-diskon">
          <h3><?= $judul ?></h3>
          <p>Poin yang dibutuhkan: <?= $poin ?></p>

            <?php if ($user_poin >= $poin): ?>
            <button onclick="location.href='<?= $link ?>'">Tukar</button>
          <?php else: ?>
            <button disabled style="opacity:0.5;cursor:not-allowed">
              Poin Kurang
            </button>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </article>

  <article class="article2">
    <h1 style="text-align:center">Informasi Poin</h1>
    <p>Poin dapat ditukarkan menjadi potongan harga tiket.</p>
    <p>Semakin besar diskon, semakin banyak poin yang dibutuhkan.</p>
  </article>

</div>

<footer>
  About • Help • Services • References
</footer>

<script src="../assets/js/script.js"></script>
</body>