<div id="ld">
<div class="daftar">
<form action="module/login/act.php?act=daftar" method="POST">
<center>
<table align="center">
	<tr>
		<th height="40" colspan="2">Registrasi</th>
	</tr>
	<tr>
		<td height="40" width="100">Username</td>
		<td><input type="text" name="user" /></td>
	</tr>
	<tr>
		<td height="40">Password</td>
		<td><input type="text" name="pass" /></td>
	</tr>
	<tr>
		<td height="40">Nama Lengkap</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td height="40">Jenis Kelamin</td>
		<td>
			<input type="radio" name="jk" value="L" />Laki-Laki
			<input type="radio" name="jk" value="P" />Perempuan
		</td>
	</tr>
	<tr>
		<td height="40" valign="top">Alamat</td>
		<td><textarea name="alamat" cols="40" rows="5"></textarea></td>
	</tr>
	<tr>
		<td height="40">No. Telepon</td>
		<td><input type="text" name="notlp" /></td>
	</tr>
	<tr>
		<td height="40" colspan="2" align="center"><input type="submit" value="Daftar" /></td>
	</tr>
</table>
</center>
</form>
</div>

<div class="masuk">
<form action="module/login/act.php?act=masuk" method="POST">
<center>
<table align="center">
	<tr>
		<th height="40" colspan="2">Login</th>
	</tr>
	<tr>
		<td height="40" width="100">Username</td>
		<td><input type="text" name="user" /></td>
	</tr>
	<tr>
		<td height="40">Password</td>
		<td><input type="text" name="pass" /></td>
	</tr>
	<tr>
		<td height="40" colspan="2" align="center"><input type="submit" value="Masuk" /></td>
	</tr>
</table>
</center>
</form>
</div>
</div>
