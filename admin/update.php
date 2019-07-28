<?php
include "../koneksi.php";
$id                 = $_POST['id'];
$username           = $_POST['username'];
$password           = $_POST['password'];
$nama               = $_POST['nama'];
$agama              = $_POST['agama'];
$jenkel             = $_POST['jenkel'];
$email           	= $_POST['email'];

$query1 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='16'");
$query2 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='13'");
$query1 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='1'");
$query2 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='2'");
$query3 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='3'");
$query4 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='4'");
$query5 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='5'");
$query6 = mysql_query("UPDATE users SET username='$username',password='$password',nama='$nama', agama='$agama', jenkel='$jenkel', email='$email' WHERE id='6'");
if ($query1 || $query2 || $query3 || $query4 || $query5 || $query6)
{
		echo "<script>alert('Data Pasien berhasil diubah!'); window.location = 'tampilpasien.php</script>";
}	
 else 
 	{
		echo "<script>alert('Data Pasien Gagal diubah!'); window.location = 'tampilpasien.php</script>";
    }
?>