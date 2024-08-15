<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$ID = $_POST['ID'];
$Desa = $_POST['Desa'];
$Potensi = $_POST['Potensi'];
$Program_Pembangunan = $_POST['Program_Pembangunan'];
$Pasar = $_POST['Pasar'];
$Tenaga_Kerja = $_POST['Tenaga_Kerja'];
$Peluang_Usaha = $_POST['Peluang_Usaha'];
$Modal_Usaha = $_POST['Modal_Usaha'];
$Keterampilan_Masyarakat = $_POST['Keterampilan_Masyarakat'];
$Infrastruktur_JalanRaya = $_POST['Infrastruktur_JalanRaya'];
$Transportasi = $_POST['Transportasi'];
$Aksebilitas= $_POST['Aksebilitas'];
$Teknologi = $_POST['Teknologi'];
$TIK = $_POST['TIK'];
$Internet = $_POST['Internet'];
$Air_Bersih = $_POST['Air_Bersih'];
$Bobot = $_POST['Bobot'];

// update data ke database
mysqli_query($koneksi, "update cluster set Desa='$Desa', Program_Pembangunan='$Program_Pembangunan', Pasar='$Pasar', Tenaga_Kerja='$Tenaga_Kerja', Peluang_Usaha='$Peluang_Usaha', Keterampilan_Masyarakat='$Keterampilan_Masyarakat', Infrastruktur_JalanRaya='$Infrastuktur_JalanRaya', Transportasi='$Transportasi', Aksebilitas='$Aksebilitas', Teknologi='$Teknologi', TIK='$TIK', Internet='$Internet', Air_Bersih='$Air_Bersih', Bobot='$Bobot' where ID='$ID'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_peta.php");
