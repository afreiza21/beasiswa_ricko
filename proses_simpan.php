<?php
//koneksi ke database
include 'koneksi.php';

//ambil data post
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$semester = $_POST['semester'];
$pilihan = $_POST['pilihan'];
$status_ajuan = "Belum Diverifikasi";

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "berkas/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

// query insert data
$pesan = mysqli_query($conn, "INSERT INTO tb_beasiswa VALUES ('', '$nama','$email','$nohp','$semester', '$namaFile', '$pilihan', '$status_ajuan')");

// cek apakah data berhasil disimpan
if ($pesan) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
  $last_id = mysqli_insert_id($conn);
  header("refresh:0;hasil.php?beasiswaID=" . $last_id);
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($conn);
}
