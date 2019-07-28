<?php
	error_reporting(0);
	include "../../koneksi/koneksi.php";
	if($_GET['act'] == 'daftar'){
		
		$pass = md5($_POST['pass']);
		$input=mysql_query("INSERT INTO users (username,
												password,
												nama,
												jk,
												alamat,
												notlp)
										VALUES ('$_POST[user]',
												'$pass',
												'$_POST[nama]',
												'$_POST[jk]',
												'$_POST[alamat]',
												'$_POST[notlp]')");
		
		if($input){
			echo "
				<script>window.alert('Pendaftaran berhasil dilakukan');
						window.location='../admin/index.php';</script>
			";
		}else{
			echo "
				<script>window.alert('Pendaftaran gagal, hubungi administrator');
						window.location='../admin/index.php';</script>
			";
		}
	}elseif($_GET['act'] == 'masuk'){
		$pass = md5($_POST['pass']);
		$masuk = mysql_query("SELECT * FROM users WHERE username = '$_POST[user]' 
													AND password = '$pass'");
		
		if($r = mysql_num_rows($masuk)){
			session_start();
			$data = mysql_fetch_array($masuk);
			$_SESSION['user'] = $data['username'];
			$_SESSION['pass'] = $data['password'];
			
			echo "<script>window.alert('Anda berhasil login');
							window.location='../../index.php';</script>";
		}else{
			echo "<script>window.alert('Anda gagal login,');
							window.location='../../index.php?menu=login';</script>";
		}
	}
?>