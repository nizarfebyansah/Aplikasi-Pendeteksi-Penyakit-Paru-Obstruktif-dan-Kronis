<?php
	include "daftar.php";
	include "koneksi.php"
	if (isset($_POST['SIMPAN'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "INSERT INTO users(username,password) VALUES ('$user','$pass')";
?>