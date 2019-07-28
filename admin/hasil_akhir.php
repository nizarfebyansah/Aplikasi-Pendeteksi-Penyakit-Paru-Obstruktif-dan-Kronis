
<?php
include '../koneksi.php';
$hasil = mysql_query("SELECT idpenyakit, hasil FROM hipotesa WHERE user = '$_SESSION[user]' ORDER BY idhipotesa DESC LIMIT 1");
if ($hasil === FALSE) {
    			die(mysql_error());
				}
$r = mysql_fetch_array($hasil);
$idpenyakit = $r['idpenyakit']; 
if($idpenyakit == 'P001'){
	$nilai = $r['hasil'];
	if($nilai > 100){
		$ha = 100;
	}else{
		$ha = number_format($nilai, 2, ',' , '.');
	}
	echo "Anda menderita penyakit <b><u><a href='index.php'>Asma</a></u></b>, dengan Hipotesis <b>$ha%</b>.<hr><br>";
	echo "Untuk penanganan, lakukan langkah-langkah berikut ini :<br>";
	$no = 1;
	$p1 = mysql_query("SELECT * FROM penanganan, gab_solusi WHERE penanganan.idpenanganan=gab_solusi.idpenanganan AND idpenyakit = 'P001'");
	while($rp1 = mysql_fetch_array($p1)){
		echo "$no. $rp1[penanganan]<br>";
	$no++;
	}
	
}elseif($idpenyakit == 'P002'){
	$nilai = $r['hasil'];
	if($nilai > 100){
		$ha = 100;
	}else{
		$ha = number_format($nilai, 2, ',' , '.');
	}
	echo "Anda menderita penyakit <b><u><a href='index.php'>Emfisma Paru</a></u></b>, dengan Hipotesis <b>$ha%</b>.<hr><br>";
	echo "Untuk penanganan, lakukan langkah-langkah berikut ini :<br>";
	$no = 1;
	$p2 = mysql_query("SELECT * FROM penanganan, gab_solusi WHERE penanganan.idpenanganan=gab_solusi.idpenanganan AND idpenyakit = 'P002'");
	while($rp2 = mysql_fetch_array($p2)){
		echo "$no. $rp2[penanganan]<br>";
	$no++;
	}
	
}elseif($idpenyakit == 'P003'){
	$nilai = $r['hasil'];
	if($nilai > 100){
		$ha = 100;
	}else{
		$ha = number_format($nilai, 3, ',' , '.');
	}
	echo "Anda menderita penyakit <b><u><a href='index.php'>Brongkieiktasis</a></u></b>, dengan Hipotesis <b>$ha%</b>.<hr><br>";
	echo "Untuk penanganan, lakukan langkah-langkah berikut ini :<br>";
	$no = 1;
	$p2 = mysql_query("SELECT * FROM penanganan, gab_solusi WHERE penanganan.idpenanganan=gab_solusi.idpenanganan AND idpenyakit = 'P003'");
	while($rp2 = mysql_fetch_array($p2)){
		echo "$no. $rp2[penanganan]<br>";
	$no++;
	}

}elseif($idpenyakit == 'P004'){
	$nilai = $r['hasil'];
	if($nilai > 100){
		$ha = 100;
	}else{
		$ha = number_format($nilai, 4, ',' , '.');
	}
	echo "Anda menderita penyakit <b><u><a href='index.php'>Brongkitis</a></u></b>, dengan Hipotesis <b>$ha%</b>.<hr><br>";
	echo "Untuk penanganan, lakukan langkah-langkah berikut ini :<br>";
	$no = 1;
	$p2 = mysql_query("SELECT * FROM penanganan, gab_solusi WHERE penanganan.idpenanganan=gab_solusi.idpenanganan AND idpenyakit = 'P004'");
	while($rp2 = mysql_fetch_array($p2)){
		echo "$no. $rp2[penanganan]<br>";
	$no++;
	}

}elseif($idpenyakit == ''){
	echo "<h4><a href='index.php'>Penyakit tidak dapat di diagnosa, silahkan hubungi dokter.</a></h4>";
}

?>
