<?php
session_start();
require_once "../config/database.php";

$nama     = trim($_POST['nama'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telp     = trim($_POST['telp'] ?? '');
$password = $_POST['password'] ?? '';

if ($nama === '' || $email === '' || $telp === '' || $password === '') {
    header("Location: ../auth/register.php?error=empty");
    exit;
}

$cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: ../auth/register.php?error=email");
    exit;
}

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn, "
    INSERT INTO users (nama, username, password, poin)
    VALUES ('$nama', '$username', '$password', 0)
");

if (!mysqli_query($conn, $query)) {
    die("Gagal mendaftar: " . mysqli_error($conn));
}

$user_id = mysqli_insert_id($conn);

// buat session login
$_SESSION['login']   = true;
$_SESSION['user_id'] = $user_id;
$_SESSION['nama']    = $nama;
$_SESSION['email']   = $email;

header("Location: ../private/dashboard.php");
exit;

