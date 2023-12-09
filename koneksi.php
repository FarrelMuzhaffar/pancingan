<?php
$host ="127.0.0.1";
$user ="root";
$pass ="";
$db ="pancingan";

$conn = mysqli_connect($host,$user,$pass,$db);
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi

// // mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
//mysqli_close($conn);
?>