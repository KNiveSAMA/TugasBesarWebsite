<?php
session_start();
require_once "../config/database.php";

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header("Location: ../auth/login.php?error=invalid");
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user  = mysqli_fetch_assoc($query);

if (!$user) {
    header("Location: ../auth/login.php?error=invalid");
    exit;
}

$q = mysqli_query($conn,
    "SELECT * FROM users WHERE username='$username'"
);

$user = mysqli_fetch_assoc($q);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['poin'] = $user['poin'];
    header("Location: ../private/dashboard.php");
    exit;
}
