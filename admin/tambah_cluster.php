<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$Desa = $_POST['Desa'];
$Potensi = $_POST['Potensi'];
$Program_Pembangunan = $_POST['Program_Pembangunan'];
$Pasar = $_POST['Pasar'];
$Tenaga_Kerja = $_POST['Tenaga_Kerja'];
$Peluang_Usaha = $_POST['Peluang_Usaha'];
$Modal_Usaha = $_POST['Modal_Usaha'];
$Keterampilan_Masyarakat = $_POST['Keterampilan_Masyarakat'];
$Infrastuktur_JalanRaya = $_POST['Infrastuktur_JalanRaya'];
$Transportasi = $_POST['Transportasi'];
$Aksebilitas = $_POST['Aksebilitas'];
$Teknologi = $_POST['Teknologi'];
$TIK = $_POST['TIK'];
$Internet = $_POST['Internet'];
$Air_Bersih = $_POST['Air_Bersih'];
$Bobot = $_POST['Bobot'];


// menginput data ke database
mysqli_query($koneksi, "insert into cluster values('','$Desa', '$Potensi', '$Program_Pembangunan', '$Pasar', '$Tenaga_Kerja', '$Peluang_Usaha',  '$Modal_Usaha',  '$Keterampilan_Masyarakat', '$Infrastuktur_JalanRaya', '$Transportasi', '$Aksebilitas', '$Teknologi', '$TIK', '$Internet', '$Air_Bersih', '$Bobot' )");

// mengalihkan halaman kembali ke index.php
header("location:tampil_peta.php");