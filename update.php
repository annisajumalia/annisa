<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$merek = $_POST['merek'];
$size = $_POST['size'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update sendal set merek='$merek', size='$size', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>