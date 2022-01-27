<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$brand = $_POST['brand'];
$feature = $_POST['feature'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update penjualan set brand='$brand', feature='$feature', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>