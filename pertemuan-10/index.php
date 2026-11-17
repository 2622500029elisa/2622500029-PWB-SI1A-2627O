<?php
#kode setelah
session_start();
require_once("fungsi.php"); #Penggunaan require_once() memastikan berkas tersebut tersedia dan tidak
dimuat berulang kali.
// P9: Memproses data formulir dan menyimpannya ke dalam session.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$nama = trim((string) ($_POST["nama"] ?? ""));
$email = trim((string) ($_POST["email"] ?? ""));
$semesterForm = trim((string) ($_POST["semester"] ?? ""));
$tanggal = trim((string) ($_POST["tanggal"] ?? ""));
$jenisPesan = trim((string) ($_POST["jenis_pesan"] ?? ""));
$minat = $_POST["minat"] ?? [];
$prodi = trim((string) ($_POST["prodi"] ?? ""));
$pesan = trim((string) ($_POST["pesan"] ?? ""));
// Checkbox dapat mengirimkan lebih dari satu nilai.
if (!is_array($minat)) {
$minat = [];
}
// Menyimpan semua data formulir ke dalam satu larik asosiatif di session.
$_SESSION["form_data"] = [
"nama" => $nama,
"email" => $email,
"semester" => $semesterForm,
"tanggal" => $tanggal,
"jenis_pesan" => $jenisPesan,
"minat" => $minat,
"prodi" => $prodi,
"pesan" => $pesan,
];
// PRG: mengarahkan kembali ke halaman sebelum menghasilkan keluaran HTML.
header("Location: index.php#contact");
exit;
}
// P6: PHP dasar dan pemrograman sisi peladen
// Bagian 1: Variabel dan konstanta
$nim = "2622500029";
$namaMahasiswa = "Elisa Putri";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 1;
$ipk = -;
$statusAktif = true;