<nav>
    <img src="../assets/img/logo.png" style="max-width:70px;">
    <div class="hamburger" id="hamburgerBtn">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<div id="sideMenu" class="side-menu">

<?php if (isset($_SESSION['login'])): ?>

    <a href="../private/dashboard.php">Dashboard</a>
    <a href="../private/tiket.php">Pesan Tiket</a>
    <a href="../private/profile.php">Profile</a>
    <a href="../private/exchange.php">Exchange</a>
    <a href="../auth/logout.php">Logout</a>

<?php else: ?>

    <a href="../public/index.php">Home</a>
    <a href="../public/about.php">About</a>
    <a href="../auth/login.php">Login</a>
    <a href="../auth/register.php">Register</a>

<?php endif; ?>

</div>

<div id="overlay"></div>
