<?php 
 include '../koneksi.php';

$username           = $_POST['username'];
$password           = $_POST['password'];
$nama               = $_POST['nama'];
$agama              = $_POST['agama'];
$jenkel             = $_POST['jenkel'];
$email           = $_POST['email'];
 $query = mysql_query("INSERT INTO users (id, username, password,nama,agama,jenkel,email) VALUES ('', '$username', '$password', '$nama', '$agama', '$jenkel', '$email')");
   
    if ($query){
  echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'tampilpasien.php'</script>"; 
} else {
  echo "<script>alert('Data  Gagal dimasukan!'); window.location = 'daftar.php'</script>";  
}

 ?>