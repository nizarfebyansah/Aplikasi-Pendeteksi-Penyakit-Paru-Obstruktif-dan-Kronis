<script type="text/javascript" src="../nice/nicEdit.js"></script>
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>

<?php
include "../koneksi.php";
$menu = isset($_GET['menu'])?$_GET['menu']:"";
if ( $menu== 'index') {
	# code...
	$home = mysql_query("SELECT * FROM statis WHERE idstatis = '1'");
	$rhome = mysql_fetch_array($home);
	echo "<h2>Halaman Home</h2><hr><br>";
	echo "	<form action='' method='POST'>
				<textarea  cols=100 rows=15 name='isi'>$rhome[isi]</textarea>
				<input type='Submit' name='simpan' value='Simpan'>
			</form>
		";
	if (isset($_POST['simpan'])) {
		# code...
		$simpan = mysql_query("UPDATE statis SET isi = '$_POST[isi]' 
												WHERE idstatis = '1'");
		echo "<script>window.alert('Data berhasil disimpan.');
						window.location='index.php';</script>";
	}
}elseif ($menu == 'bantuan') {
	# code...
	$bantuan = mysql_query("SELECT * FROM statis WHERE idstatis = '2'");
	$rbantuan = mysql_fetch_array($bantuan);
	echo "<h2>Halaman Bantuan</h2><hr><br>";
	echo "	<form action='' method='POST'>
				<textarea  cols=100 rows=15 name='isi'>$rbantuan[isi]</textarea>
				<input type='Submit' name='simpan' value='Simpan'>
			</form>
		";
	if (isset($_POST['simpan'])) {
		# code...
		$simpan = mysql_query("UPDATE statis SET isi = '$_POST[isi]' 
												WHERE idstatis = '2'");
		echo "<script>window.alert('Data berhasil disimpan.');
						window.location='index.php';</script>";
	}
}elseif ($menu == 'info') {
	# code...
	$info = mysql_query("SELECT * FROM statis WHERE idstatis = '3'");
	$rinfo = mysql_fetch_array($info);
	echo "<h2>Halaman Info</h2><hr><br>";
	echo "	<form action='' method='POST'>
				<textarea  cols=100 rows=15 name='isi'>$rinfo[isi]</textarea>
				<input type='Submit' name='simpan' value='Simpan'>
			</form>
		";
	if (isset($_POST['simpan'])) {
		# code...
		$simpan = mysql_query("UPDATE statis SET isi = '$_POST[isi]' 
												WHERE idstatis = '3'");
		echo "<script>window.alert('Data berhasil disimpan.');
						window.location='index.php';</script>";
	}
}elseif ($menu == 'pertanyaan') {
	# code...
	include "pertanyaan.php";
}elseif ($menu == 'edit'){
	include "act_pertanyaan.php";
}elseif ($menu == 'penyakit'){
	include "penyakit.php";
}elseif($menu == 'penanganan'){
	include "penanganan.php";
}elseif ($menu == 'edit_penanganan'){
	include "act_penanganan.php";
}elseif($menu == 'kontak'){
	include "kontak.php";
}elseif ($menu == 'act_kontak'){
	include "act_kontak.php";
}

?>