<?php
session_start();

// Jika sudah login → ke dashboard
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: private/dashboard.php");
    exit;
}

// Jika belum login → ke halaman login
header("Location: auth/login.php");
exit;
