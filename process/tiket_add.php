<?php
session_start();
require_once "../config/database.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$diskon = $_SESSION['diskon'] ?? 0;
$harga_final = max(0, $harga - $diskon);
$_SESSION['diskon'] = 0; // diskon sekali pakai


$rute  = trim($_POST['rute'] ?? '');
$waktu = trim($_POST['waktu'] ?? '');
$naik  = trim($_POST['naik'] ?? '');
$turun = trim($_POST['turun'] ?? '');
$harga = (int) ($_POST['harga'] ?? 0);

if ($rute === '' || $waktu === '' || $naik === '' || $turun === '' || $harga <= 0) {
    header("Location: ../private/tiket.php");
    exit;
}

$kode = "TKT-" . rand(10000, 99999);

$query = "INSERT INTO tickets 
(user_id, kode_tiket, rute, waktu, naik, turun, harga)
VALUES
('$user_id', '$kode', '$rute', '$waktu', '$naik', '$turun', '$harga')";

mysqli_query($conn, $query);

$poin = floor($harga / 10000);

mysqli_query(
    $conn,
    "UPDATE users SET poin = poin + $poin WHERE id='$user_id'"
);

header("Location: ../private/tiket_saya.php");
exit;
