<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$merk = $_POST['merk'];
 if (!empty($nama) || !empty($nomor) || !empty($merk)) {
// menginput data ke database
mysqli_query($koneksi,"insert into kendaraan values('','$nama','$nomor','$merk')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>