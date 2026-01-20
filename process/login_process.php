<?php
session_start();
require_once "../config/database.php";

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header("Location: ../auth/login.php?error=invalid");
    exit;
}

// Query user berdasarkan email (AMAN)
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user   = mysqli_fetch_assoc($result);

if (!$user) {
    header("Location: ../auth/login.php?error=invalid");
    exit;
}

// Cek password
if (password_verify($password, $user['password'])) {
    $_SESSION['login']   = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama']    = $user['nama'];
    $_SESSION['poin']    = $user['poin'];

    header("Location: ../private/dashboard.php");
    exit;
} else {
    header("Location: ../auth/login.php?error=invalid");
    exit;
}
