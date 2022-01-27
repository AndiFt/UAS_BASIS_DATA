<?php 
// koneksi database
include 'koneksi.php';
 

$brand = $_POST['brand'];
$feature = $_POST['feature'];
$harga = $_POST['harga'];
 if (!empty($brand) || !empty($feature) || !empty($harga)) {
// menginput data ke database
mysqli_query($koneksi,"insert into penjualan values('','$brand','$feature','$harga')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>