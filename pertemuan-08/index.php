<?php
$tahun = date("Y");
$namaWebsite = "ElsFashion";
$pesanKonfirmasi = "Terima kasih telah mengunjungi website kami!, silakan datang kembali.";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    ENT_QUOTES,
    "UTF-8";

    $pesan = htmlspecialchars($_POST["pesan"]);
    ENT_QUOTES,
    "UTF-8";
    $pesanKonfirmasi = "Terima kasih telah mengunjungi website kami!, silakan datang kembali.";
}
<!DOCTYPE html>
<html>
<head>
    <title>Profil ElsFashion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <img src="baju3.jpeg" width="50">
    <span>Web ElsFashion</span>
</div>
<nav>
     <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#buku-tamu">Buku Tamu</a></li>
     </ul>
</nav>

<main class="main-content">
    <section id="home" class="home-section">
        <div class="hero"></div>
        <div class="hero-text"></div>
        <p class="eyebrow">A</p>
        <h2>Selamat Datang di Website ElsFashion</h2>
    </section>

    <section id="profile">
        <h2>Profil Usaha</h2>
        <p>ElsFashion adalah usaha yang bergerak di bidang fashion, menyediakan berbagai macam pakaian dan aksesoris.</p>
        <section id="profile" class="profile-section">
            <div class="section-heading">
                <p class="eyebrow">Profil</p>
                </div>
            <h2>Profil Usaha</h2>
            <p>ElsFashion adalah usaha yang bergerak di bidang fashion, menyediakan berbagai macam pakaian dan aksesoris.</p>
    </section>

    <section id="buku-tamu">
        <h2>Buku Tamu</h2>
        <form action="#" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="pesan">Pesan:</label><br>
            <textarea id="pesan" name="pesan"></textarea><br>
            <input type="submit" value="Kirim">
        </form>
    </section>
<div class="container">
    <div class="sidebar">
    <a href="index.html">Home</a>
    <a href="profil.html">Profil</a>
    <a href="buku_tamu.html">Buku Tamu</a>
    </ul>
</div>
    <div class="content">
        <div class="content" style="text-align: center;">
         <h3>Biodata Usaha</h3>
         <<img src="baju1.jpeg" alt="foto elisa" width="150" /> 
    </section> 
         <p style="font-size: 14px;line-height: 25px;">
         Nama Usaha : ElsFashion<br>
         Pemilik : Elisa<br>
         Tempat Tgl Lahir : Sungailiat 15 -April -2009<br>
         Jenis Usaha : Fashion<br>
         Alamat : Sungailiat
        </p>
    </div>
</div>
<div class="footer">Els_Fashion</div>
<scpript src="script.js"></script>
</body>
</html>