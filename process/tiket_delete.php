<?php
session_start();
require_once "../config/database.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

$user_id  = $_SESSION['user_id'];
$tiket_id = $_GET['id'] ?? '';

$data = mysqli_query(
    $conn,
    "SELECT harga FROM tickets WHERE id='$tiket_id' AND user_id='$user_id'"
);

$tiket = mysqli_fetch_assoc($data);
if (!$tiket) {
    header("Location: ../private/tiket_saya.php");
    exit;
}

$poin_kurang = floor($tiket['harga'] / 10000);

mysqli_query(
    $conn,
    "DELETE FROM tickets WHERE id='$tiket_id' AND user_id='$user_id'"
);

mysqli_query(
    $conn,
    "UPDATE users SET poin = poin - $poin_kurang WHERE id='$user_id'"
);

$_SESSION['poin'] -= $poin_kurang;

header("Location: ../private/tiket_saya.php");
exit;
