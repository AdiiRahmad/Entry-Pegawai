<html>
	<head> </head>
	<body>
<?php
	echo " ";
?>	
	<h2><font color='red'> Form Master Pegawai </font></h2>
	<form method="POST" action="hasilpegawai.php" ENCTYPE="multipart/form-data">
	<table border="1">
	<br>
		<tr>
		<td><label>Nama Lengkap</label></td>
		<td><input type="text" name="nama"><br /></td>
		</tr>
		
		<tr>
		<td><label>Tempat Lahir</label></td>
		<td><input type="text" name="tempat"><br /></td>
		</tr>
		
		<tr>
		<td><label>Tanggal Lahir</label></td>
		<td><input type="text" name="tanggal"><br /></td>
		</tr>
		
		<tr>
		<td><label>Alamat</label></td>
		<td><textarea input type="text" name="alamat"></textarea><br /></td>
		</tr>
		
		<tr>
		<td><label>Jenis Kelamin</label></td>
		<td><input type="radio" name="jk" value="Pria">Pria
		<input type="radio" name="jk" value="Wanita">Wanita<br /></td>
		</tr>
		
		<tr>
		<td></label>Pendidikan Terakhir</label></td>
		<td><input type="radio" name="sklh" value="SMA">SMA<br />
			<input type="radio" name="sklh" value="D3">D3<br />
			<input type="radio" name="sklh" value="S1">S1<br /></td>
		</tr>
		
		<tr>
		<td><label>Jabatan</label></td>
		<td><select name="Direktur">
		<option value="Direktur"> Direktur</option>
		<option value="Kepala Bagian">Kepala Bagian</option>
		<option value="Staff">Staff</option></select></td>
		</tr>
		
		<tr>
		<td><label>Jumlah Anak</label></td>
		<td><input type="text" name="jml"><br /></td>
		</tr>
		
		<tr>
		<td><label>Foto</label></td>
		<td>
		<input type="file" name="Telusuri">
		</FORM></td>
		</tr>
		
		<tr>
		<td><label> </label></td>
		<td><input type="submit" name="Ayo" value="Simpan"></td>
		</tr>
		</table>
		
		
	</body>
</html>