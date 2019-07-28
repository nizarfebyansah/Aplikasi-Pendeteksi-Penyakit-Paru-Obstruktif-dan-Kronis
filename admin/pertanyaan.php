<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
	if(($_SESSION['$username']) && ($_SESSION['$password']))
	{}
else{
	
	$query = mysql_query("SELECT * FROM pertanyaan ORDER BY idpertanyaan ASC");
	$no = 1;
	echo "<h4>Jawablah pertanyaan berikut ini :</h4>
			<hr><br>";
			if ($query === FALSE) {
    			die(mysql_error());
				}
	while($data = mysql_fetch_array($query)){
		echo "
			<form action='act_pertanyaan.php' method='POST'>
				<b>$no</b>. $data[pertanyaan]<br>
				<table width='400'>
					<tr>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 0'>Sangat Tidak Yakin</td>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 0.6'>Cukup Yakin</td>
					</tr>
					<tr>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 0.2'>Tidak Yakin</td>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 0.8'>Yakin</td>
					</tr>
					<tr>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 0.4'>Kurang Yakin</td>
						<td><input type='radio' name='select[$no]' value='$data[idgejala], 1'>Sangat Yakin</td>
					</tr>
				</table>
				<br>
			
		";
		$no++;
	} 
		$jumlah = mysql_num_rows($query);
		echo "<br><br><input type='Submit' name='proses' value='Proses'>";
		echo "</form>";

		
	}
	//if (isset($_POST['proses'])) {
		# code...
		
	//}
?>