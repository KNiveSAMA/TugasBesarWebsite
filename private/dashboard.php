<?php
require_once "../config/auth_check.php";

$title  = "Dashboard Pengguna";
$header = "Dashboard";

include "../layout/header.php";
include "../layout/navbar.php";
?>

<link rel="stylesheet" href="../assets/css/dashboard.css">

<div class="grid-layout">

    <article class="article1">
        <h2 id="greeting">
            Selamat datang, <?= htmlspecialchars($_SESSION['nama']) ?>
        </h2>

        <p>
            Total Poin Anda:
            <strong>
                <span id="user-poin">
                    <?= $_SESSION['poin'] ?>    
                </span> poin
            </strong>
        </p>

        <h3 style="margin-top:20px; color:#ffe599;">Menu Cepat</h3>

        <div style="
            margin-top:15px;
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(160px, 1fr));
            gap:15px;
        ">

            <div class="card-diskon"
                 onclick="location.href='profile.php'"
                 style="cursor:pointer;">
                <h3>Profile</h3>
                <p>Lihat data pengguna</p>
            </div>

            <div class="card-diskon"
                 onclick="location.href='exchange.php'"
                 style="cursor:pointer;">
                <h3>Exchange</h3>
                <p>Tukar poin Anda</p>
            </div>

            <div class="card-diskon"
                 onclick="location.href='tiket.php'"
                 style="cursor:pointer;">
                <h3>Pemesanan Tiket</h3>
                <p>Pesan tiket kereta</p>
            </div>

            <div class="card-diskon"
                 onclick="location.href='../public/about.php'"
                 style="cursor:pointer;">
                <h3>Tentang</h3>
                <p>Informasi website</p>
            </div>

        </div>
    </article>

    <article class="aside">
        <h1 style="text-align:center;">Jadwal Keberangkatan</h1>
        <ul style="margin-left:20px; line-height:1.6; margin-top:10px;">
            <li>07:00 – Rute 1</li>
            <li>08:15 – Rute 2</li>
            <li>09:30 – Rute 3</li>
            <li>10:45 – Rute 4</li>
            <li>12:00 – Rute 5</li>
            <li>13:15 – Rute 6</li>
            <li>14:30 – Rute 7</li>
            <li>16:00 – Rute 8</li>
            <li>17:15 – Rute 9</li>
            <li>19:00 – Rute 10</li>
        </ul>
    </article>

    <article class="article2">
        <h1 style="text-align:center">Gambar Rute</h1>
        <img src="../assets/img/rute.png" style="width:100%;">
    </article>

</div>

<?php include "../layout/footer.php"; ?>

<script src="../assets/js/script.js"></script>

