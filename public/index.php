<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Kereta Argo Cianjur JesgeJes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <p>Welcome</p>
    </header>

    <nav>
        <img src="../assets/img/logo.png" style="max-width:70px;">
        <div class="hamburger" id="hamburgerBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div id="sideMenu" class="side-menu">
        <a href="umum.php">Home</a>
		<a href="index.php">Pesan Tiket</a>
        <a href="profile.php">Profile</a>
		<a href="exchange.php">Exchange</a>
        <a href="about.php">About</a>
		<a id="konfirmasi-link" href="konfirmasi.php" style="display:none;">Konfirmasi</a>
    </div>

    <div id="overlay"></div>

    <div class="grid-layout">
        <aside>
            <h3>Jadwal Keberangkatan</h3>
            <ul>
                <li>07:00 - Rute 1</li>
                <li>08:15 - Rute 2</li>
                <li>09:30 - Rute 3</li>
                <li>10:45 - Rute 4</li>
                <li>12:00 - Rute 5</li>
                <li>13:15 - Rute 6</li>
                <li>14:30 - Rute 7</li>
                <li>16:00 - Rute 8</li>
                <li>17:15 - Rute 9</li>
                <li>19:00 - Rute 10</li>
            </ul>
        </aside>

        <article class="article1">
            <h2>Form Pemesanan Tiket</h2>

            <form id="form-pesanan">
                <label>Pilih Rute:</label>
                <select id="rute">
                    <option value="">-- Pilih Rute --</option>
                    <option value="1">Rute 1</option>
                    <option value="2">Rute 2</option>
                    <option value="3">Rute 3</option>
                    <option value="4">Rute 4</option>
                    <option value="5">Rute 5</option>
                    <option value="6">Rute 6</option>
                    <option value="7">Rute 7</option>
                    <option value="8">Rute 8</option>
                    <option value="9">Rute 9</option>
                    <option value="10">Rute 10</option>
                </select>
                <br><br>

                <label>Waktu Keberangkatan:</label>
                <select id="waktu" disabled>
                    <option value="">-- Pilih Waktu --</option>
                    <option value="07:00">07:00</option>
                    <option value="08:15">08:15</option>
                    <option value="09:30">09:30</option>
                    <option value="10:45">10:45</option>
                    <option value="12:00">12:00</option>
                    <option value="13:15">13:15</option>
                    <option value="14:30">14:30</option>
                    <option value="16:00">16:00</option>
                    <option value="17:15">17:15</option>
                    <option value="19:00">19:00</option>
                </select>
                <br><br>

                <label>Titik Naik:</label>
                <select id="naik" disabled>
                    <option value="">-- Pilih Titik Naik --</option>
                </select>
                <br><br>

                <label>Titik Turun:</label>
                <select id="turun" disabled>
                    <option value="">-- Pilih Titik Turun --</option>

                </select>
                <br><br>

                <label>Total Harga:</label>
                <input id="harga" type="text" readonly>
                <br><br>

                <button id="btn-pesan" type="button">Pesan</button>
            </form>
        </article>

        <article class="article2">
            <h1 style="text-align:center">Gambar Rute</h1>
            <img src="../assets/img/rute.png" style="width:100%;">
        </article>
    </div>

    <footer>
    <a href="../public/about.php">About</a> •
    <a href="../public/help.php">Help</a> •
    <!--<a href="services.html">Services</a> •
    <a href="references.html">References</a>-->
</footer>


    <script src="../assets/js/script.js"></script>
</body>
</html>
