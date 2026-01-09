<?php
session_start();
require_once "../config/database.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$disc_id = $_GET['id'] ?? '';

$d = mysqli_query($conn, "SELECT * FROM discounts WHERE id='$disc_id'");
$diskon = mysqli_fetch_assoc($d);

if (!$diskon || $_SESSION['poin'] < $diskon['poin_dibutuhkan']) {
    header("Location: ../private/exchange.php");
    exit;
}

mysqli_query(
    $conn,
    "UPDATE users SET poin = poin - {$diskon['poin_dibutuhkan']} WHERE id='$user_id'"
);

$_SESSION['poin'] -= $diskon['poin_dibutuhkan'];

$_SESSION['diskon'] = $diskon['nilai_diskon'];

header("Location: ../private/dashboard.php");
exit;
