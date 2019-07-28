<?php
include "../koneksi.php";
$id 	= $_POST['id'];

$query = mysql_query("DELETE FROM users WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'tampilpasien.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php'</script>";	
}
?>