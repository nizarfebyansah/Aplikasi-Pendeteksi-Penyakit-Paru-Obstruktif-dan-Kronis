<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$username   = $_POST['username'];
$password   = $_POST['password'];
// query SQL untuk insert data
$query="INSERT INTO users SET username='$username',password='$password'";
mysql_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>