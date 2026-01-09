<?php
require_once "../config/auth_check.php";
require_once "../config/database.php";

$id = $_GET['id'] ?? '';
$user_id = $_SESSION['user_id'];

/* ambil tiket */
$q = mysqli_query($conn,
    "SELECT * FROM tickets WHERE id='$id' AND user_id='$user_id'"
);

$tiket = mysqli_fetch_assoc($q);
if (!$tiket) {
    header("Location: ../private/tiket_list.php");
    exit;
}

/* simpan ke history */
mysqli_query($conn, "
    INSERT INTO ticket_history
    (user_id, nama_penumpang, rute, tanggal, harga, status, created_at, deleted_at)
    VALUES (
        '{$tiket['user_id']}',
        '{$tiket['nama_penumpang']}',
        '{$tiket['rute']}',
        '{$tiket['tanggal']}',
        '{$tiket['harga']}',
        'refund',
        '{$tiket['created_at']}',
        NOW()
    )
");

/* delete tiket aktif */
mysqli_query($conn, "DELETE FROM tickets WHERE id='$id'");

header("Location: ../private/tiket_list.php");
exit;
