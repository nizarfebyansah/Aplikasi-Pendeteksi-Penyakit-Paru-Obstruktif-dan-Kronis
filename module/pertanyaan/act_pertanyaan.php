<?php
session_start();
include "../ koneksi.php";
$query = mysql_query("SELECT * FROM pertanyaan");
$jum = mysql_num_rows($query);
$jumlah = $jum+1;
$select = $_POST['select'];
$cf = $_POST['cf'];
for ($i=0; $i < $jumlah; $i++) { 
			# code...
			
			if (isset($select[$i]) == "") {
				# code...

			}else{
				$g = explode(',', $select[$i]);
				$gejala = $g[0];
				$nilai = $g[1];
			mysql_query("INSERT INTO tmp_gejala (idgejala,
													cfu,
													user)
											VALUES ('$gejala',
													'$nilai',
													'$_SESSION[user]')");		
			} 
		}

//rule PPOK 
		$g1 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G001'"));
		$g2 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G002'"));
		$g3 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G003'"));
		$g4 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G004'"));
		$g5 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G005'"));
		$g6 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G006'"));
		$g7 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G007'"));
		$g8 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G008'"));
		$g9 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G009'"));
		$g10 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G010'"));
		$g11 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G011'"));
		$g12 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G012'"));
		$g13 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G013'"));
		$g14 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G014'"));
		$g15 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G015'"));
		$g16 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G016'"));
		$g17 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G017'"));
		$g18 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G018'"));
		$g19 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G019'"));
		$g20 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G020'"));
		
		$cfg1 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G001'"));
		$cfg2 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G002'"));
		$cfg3 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G003'"));
		$cfg4 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G004'"));
		$cfg5 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G005'"));
		$cfg6 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G006'"));
		$cfg7 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G007'"));
		$cfg8 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G008'"));
		$cfg9 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G009'"));
		$cfg10 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G010'"));
		$cfg11 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G011'"));
		$cfg12 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G012'"));
		$cfg13 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G013'"));
		$cfg14 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G014'"));
		$cfg15 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G015'"));
		$cfg16 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G016'"));
		$cfg17 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G017'"));
		$cfg18 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G018'"));
		$cfg19 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G019'"));
		$cfg20 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G020'"));

		//Brongkiektasis
		if (($g1 > 0) && ($g2 > 0)) {
		# code...
			$nilai11 = $cfg1['cfu'];
			$nilai12 = $cfg2['cfu'];
			$min1 = min($nilai11, $nilai12);
			$hasil1 = $min1*0.6;
		}else{
			$hasil1 = "";
		}

		
		//Brongkitis
		if (($g3 > 0) && ($g4 > 0)) {
		# code...
			$nilai21 = $cfg3['cfu'];
			$nilai22 = $cfg4['cfu'];
			$min2 = min($nilai21, $nilai22);
			$hasil2 = $min2*0.8;
		}else{
			$hasil2 = "";
		}


		//Brongkitis
		if (($g5 > 0) && ($g6 > 0)) {
		# code...
			$nilai31 = $cfg5['cfu'];
			$nilai32 = $cfg6['cfu'];
			$min3 = min($nilai31, $nilai32);
			$hasil3 = $min3*0.8;
		}else{
			$hasil3 = "";
		}

		
		//Brongkiektasis
		if (($g7 > 0) && ($g8 > 0)) {
		# code...
			$nilai41 = $cfg7['cfu'];
			$nilai42 = $cfg8['cfu'];
			$min4 = min($nilai41, $nilai42);
			$hasil4 = $min4*0.6;
		}else{
			$hasil4 = "";
		}


		//Emfisma Paru
		if (($g9 > 0) && ($g10 > 0)) {
		# code...
			$nilai51 = $cfg9['cfu'];
			$nilai52 = $cfg10['cfu'];
			$min5 = min($nilai51, $nilai52);
			$hasil5 = $min5*0.4;
		}else{
			$hasil5 = "";
		}

		//Brongkitis
		if (($g11 > 0) && ($g12 > 0)) {
		# code...
			$nilai61 = $cfg11['cfu'];
			$nilai62 = $cfg12['cfu'];
			$min6 = min($nilai61, $nilai62);
			$hasil6 = $min6*0.8;
		}else{
			$hasil6 = "";
		}

		
		//Brongkiektasis
		if (($g13 > 0) && ($g14 > 0)) {
		# code...
			$nilai71 = $cfg13['cfu'];
			$nilai72 = $cfg14['cfu'];
			$min7 = min($nilai71, $nilai72);
			$hasil7 = $min7*0.6;
		}else{
			$hasil7 = "";
		}

		//Brongkitis
		if (($g15 > 0) && ($g16 > 0)) {
		# code...
			$nilai81 = $cfg15['cfu'];
			$nilai82 = $cfg16['cfu'];
			$min8 = min($nilai81, $nilai82);
			$hasil8 = $min8*0.8;
		}else{
			$hasil8 = "";
		}
		
		//Brongkitis
		if (($g17 > 0) && ($g18 > 0)) {
		# code...
			$nilai91 = $cfg17['cfu'];
			$nilai92 = $cfg18['cfu'];
			$min9 = min($nilai91, $nilai92);
			$hasil9 = $min9*0.2;
		}else{
			$hasil9 = "";
		}
		
		//Brongkitis
		if (($g19 > 0) && ($g20 > 0)) {
		# code...
			$nilai101 = $cfg19['cfu'];
			$nilai102 = $cfg20['cfu'];
			$min101 = min($nilai101, $nilai102);
			$hasi102 = $min100*0.2;
		}else{
			$hasil8 = "";
		}
		
		
		//Hapus data temporari
	mysql_query("TRUNCATE tmp_gejala");
		echo "
			Rule  1 $hasil1<br> brongkiektasis
			Rule  2 $hasil2<br> brongkitis
			Rule  3 $hasil3<br> brongkitis
			Rule  4 $hasil4<br> brongkiektasis
			Rule  5 $hasil5<br> emfisma paru 
			Rule  6 $hasil6<br> brongkitis
			Rule  7 $hasil7<br> brongkiektasis
			Rule  8 $hasil8<br> brongkitis
			Rule  9 $hasil8<br> brongkitis
			Rule  10 $hasil8<br> brongktis
		"; 
		/* Gabungkan Rule */
		$hasil1 = isset($hasil1)?$hasil1:"";
		//Kecanduan Berat
		if(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb1 = min($hasil2, $hasil3, $hasil6, $hasil8);
			$berat = ($hasil2+$hasil3+$hasil6+$hasil8)*(1-$mb1);
		}elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0)){
			$mb2 = min($hasil2 , $hasil3, $hasil6);
			$berat = ($hasil2+$hasil3+$hasil6)*(1-$mb2);
		}elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil8 > 0)){
			$mb3 = min($hasil2 , $hasil3, $hasil8);
			$berat = ($hasil2+$hasil3+$hasil8)*(1-$mb3);
		}elseif(($hasil2 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb4 = min($hasil2, $hasil6, $hasil8);
			$berat = ($hasil2+$hasil6+$hasil8)*(1-$mb4);
		}elseif(($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb5 = min($hasil3 , $hasil6, $hasil8);
			$berat = ($hasil3+$hasil6+$hasil8)*(1-$mb5);
		}elseif(($hasil2 > 0) && ($hasil3 > 0)){
			$mb6 = min($hasil2 , $hasil3);
			$berat = ($hasil2+$hasil3)*(1-$mb6);
		}elseif(($hasil2 > 0) && ($hasil6 > 0)){
			$mb7 = min($hasil2 , $hasil6);
			$berat = ($hasil2+$hasil6)*(1-$mb7);
		}elseif(($hasil2 > 0) && ($hasil8 > 0)){
			$mb8 = min($hasil2 , $hasil8);
			$berat = ($hasil2+$hasil8)*(1-$mb8);
		}elseif(($hasil3 > 0) && ($hasil6 > 0)){
			$mb9 = min($hasil3 , $hasil6);
			$berat = ($hasil3+$hasil6)*(1-$mb9);
		}elseif(($hasil3 > 0) && ($hasil8 > 0)){
			$mb10 = min($hasil3 , $hasil8);
			$berat = ($hasil3+$hasil8)*(1-$mb10);
		}elseif(($hasil6 > 0) && ($hasil8 > 0)){
			$mb11 = min($hasil6 , $hasil8);
			$berat = ($hasil6+$hasil8)*(1-$mb11);
		}elseif($hasil2 > 0){
			$berat = $hasil2;
		}elseif($hasil3 > 0){
			$berat = $hasil3;
		}elseif($hasil6 > 0){
			$berat = $hasil6;
		}elseif($hasil8 > 0){
			$berat = $hasil8;
		}else{
			$berat = 0;
		}
		
		/* Gabungkan Rule */
		$hasil1 = isset($hasil1)?$hasil1:"";
		//Batuk Akut
		if($hasil1 > 0){
			$batuk_akut = $hasil1;
		}else{
			$batuk_akut = 0;
		}
		
		//Influenza
		if($hasil2 > 0){
			$influenza = $hasil2;
		}else{
			$influenza = 0;
		}
		
		//Demam
		if($hasil3 > 0){
			$demam = $hasil3;
		}else{
			$demam = 0;
		}
		
		//Sesak Nafas
		if($hasil4 > 0){
			$sesak = $hasil4;
		}else{
			$sesak = 0;
		}
		
		//Bronkitis Akut
		if($hasil5 > 0){
			$akut = $hasil5;
		}else{
			$akut = 0;
		}
		
		//Batuk Subakut
		if($hasil6 > 0){
			$batuk_subakut = $hasil6;
		}else{
			$batuk_subakut = 0;
		}
		
		//Bronkitis Kronis
		if($hasil7 > 0){
			$kronis = $hasil7;
		}else{
			$kronis = 0;
		}
		
			$hasil_akhir = max($berat, $ringan);
			if($hasil_akhir != 0){
				if($hasil_akhir == $berat){
					$brt = $berat*100;
					$berat = number_format($brt, 2, ',', '.');
					mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('P001',
													'$_SESSION[user]',
													'$berat')");
				}elseif($hasil_akhir == $ringan){
					$rng = $ringan*100;
					$ringan = number_format($rng, 2, ',' , '.');
					mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('P002',
													'$_SESSION[user]',
													'$ringan')");
					echo "Anda menderita penyakit <b>Influenza</b> dengan Hipotesis <b>$influenza%</b>";
				}
			}else{
				mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('',
													'$_SESSION[user]',
													'')");
			}
		
		
		
		
		echo "<script>window.location='../../index.php?menu=hasil';</script>";
	
?>

		
		
		//Hapus data temporari
	mysql_query("TRUNCATE tmp_gejala");
		echo "
			Rule  1 $hasil1<br> Asma
			Rule  2 $hasil2<br> Emfisma Paru
			Rule  3 $hasil3<br> Emfisma Paru
			Rule  4 $hasil4<br> brongkiektasis
			Rule  5 $hasil5<br> brongkiektasis 
			Rule  6 $hasil6<br> brongkiektasis
			Rule  7 $hasil7<br> brongkiektasis
			Rule  8 $hasil8<br> brongkitis
			Rule  9 $hasil8<br> brongkitis
			Rule  10 $hasil8<br> brongktis
		"; 
		/* Gabungkan Rule */
		$hasil1 = isset($hasil1)?$hasil1:"";
		//Kecanduan Berat
		if(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb1 = min($hasil2, $hasil3, $hasil6, $hasil8);
			$berat = ($hasil2+$hasil3+$hasil6+$hasil8)*(1-$mb1);
		}elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0)){
			$mb2 = min($hasil2 , $hasil3, $hasil6);
			$berat = ($hasil2+$hasil3+$hasil6)*(1-$mb2);
		}elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil8 > 0)){
			$mb3 = min($hasil2 , $hasil3, $hasil8);
			$berat = ($hasil2+$hasil3+$hasil8)*(1-$mb3);
		}elseif(($hasil2 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb4 = min($hasil2, $hasil6, $hasil8);
			$berat = ($hasil2+$hasil6+$hasil8)*(1-$mb4);
		}elseif(($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
			$mb5 = min($hasil3 , $hasil6, $hasil8);
			$berat = ($hasil3+$hasil6+$hasil8)*(1-$mb5);
		}elseif(($hasil2 > 0) && ($hasil3 > 0)){
			$mb6 = min($hasil2 , $hasil3);
			$berat = ($hasil2+$hasil3)*(1-$mb6);
		}elseif(($hasil2 > 0) && ($hasil6 > 0)){
			$mb7 = min($hasil2 , $hasil6);
			$berat = ($hasil2+$hasil6)*(1-$mb7);
		}elseif(($hasil2 > 0) && ($hasil8 > 0)){
			$mb8 = min($hasil2 , $hasil8);
			$berat = ($hasil2+$hasil8)*(1-$mb8);
		}elseif(($hasil3 > 0) && ($hasil6 > 0)){
			$mb9 = min($hasil3 , $hasil6);
			$berat = ($hasil3+$hasil6)*(1-$mb9);
		}elseif(($hasil3 > 0) && ($hasil8 > 0)){
			$mb10 = min($hasil3 , $hasil8);
			$berat = ($hasil3+$hasil8)*(1-$mb10);
		}elseif(($hasil6 > 0) && ($hasil8 > 0)){
			$mb11 = min($hasil6 , $hasil8);
			$berat = ($hasil6+$hasil8)*(1-$mb11);
		}elseif($hasil2 > 0){
			$berat = $hasil2;
		}elseif($hasil3 > 0){
			$berat = $hasil3;
		}elseif($hasil6 > 0){
			$berat = $hasil6;
		}elseif($hasil8 > 0){
			$berat = $hasil8;
		}else{
			$berat = 0;
		}
		
		
			$hasil_akhir = max($berat, $ringan);
			if($hasil_akhir != 0){
				if($hasil_akhir == $berat){
					$brt = $berat*100;
					$berat = number_format($brt, 2, ',', '.');
					mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('P001',
													'$_SESSION[user]',
													'$berat')");
				}elseif($hasil_akhir == $ringan){
					$rng = $ringan*100;
					$ringan = number_format($rng, 2, ',' , '.');
					mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('P002',
													'$_SESSION[user]',
													'$ringan')");
					echo "Anda menderita penyakit <b>Influenza</b> dengan Hipotesis <b>$influenza%</b>";
				}
			}else{
				mysql_query("INSERT INTO hipotesa (idpenyakit, 
													user,
													hasil)
											VALUES ('',
													'$_SESSION[user]',
													'')");
			}
		
		
		
		\
		echo "<script>window.location='../../index.php?menu=hasil';</script>";
	
?>
