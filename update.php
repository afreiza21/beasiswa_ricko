<?php
include 'koneksi.php';

$beasiswaID = $_GET['beasiswaID'];
$status_ajuan = $_GET['status_ajuan'];

if ($status_ajuan == "Belum Diverifikasi") {
  $pesan = mysqli_query($conn, "UPDATE tb_beasiswa SET status_ajuan='Terverifikasi' WHERE beasiswaID='$beasiswaID'");
} else if ($status_ajuan == "Terverifikasi") {
  $pesan = mysqli_query($conn, "UPDATE tb_beasiswa SET status_ajuan='Belum Diverifikasi' WHERE beasiswaID='$beasiswaID'");
}

if ($pesan) {
  header("location:tabel.php");
} else {
  echo mysqli_error($conn);
}
