<?php
session_start();

// Jika sudah login → ke dashboard
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: ../TugasBesarWebsite/private/dashboard.php");
    exit;
}

// Jika belum login → ke halaman login
header("Location: ../TugasBesarWebsite/auth/login.php");
exit;
