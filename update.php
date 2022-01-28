<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$merk = $_POST['merk'];
 
// update data ke database
mysqli_query($koneksi,"update kendaraan set nama='$nama', nomor='$nomor', merk='$merk' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>