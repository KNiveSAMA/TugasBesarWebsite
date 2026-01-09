<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: ../private/dashboard.php");
    exit;
}
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="auth-container">
    <div class="auth-card">
        <h2>Register</h2>

        <form method="post" action="../process/register_process.php">
            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Daftar</button>
        </form>

        <div class="auth-link">
            Sudah punya akun?
            <a href="login.php">Login</a>
        </div>
    </div>
</div>

</body>
</html>

