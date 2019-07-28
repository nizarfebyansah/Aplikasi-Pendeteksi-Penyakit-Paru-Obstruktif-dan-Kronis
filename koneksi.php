<?php
 
    $host ="localhost";
	$user ="root";
	$pass ="root";
	$dbnm ="ai";
	$conn =mysql_connect($host,$user,$pass,$dbnm);
	if($conn){
	$buka=mysql_select_db($dbnm);
	if(!$buka){
	die("Database tidak dapat dibuka");
	}
	}else{
		die ("server mysql tidak terhubung");
	}

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
