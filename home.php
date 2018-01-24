<html>
	<head> 
		<title> Home </title>
	</head> 

	<body>
	<h1> 
		<font color='red'> Selamat Datang di Website ini </font></h1>
		
	</body>
	<?php
		date_default_timezone_set('Asia/Jakarta');
		echo "<br>waktu saat ini menunjukkan tanggal ". date("j F Y"). " jam ". date("H:i:s");
	$nim=1411500257;
	$nama= "Lin Karlina";
		echo "<br> <br>NIM : <font color='blue'> $nim </br></br></font>" ;
		echo "Nama : <font color='blue'> $nama </font>" ;
		echo "<br><br >silahkan klik 
		<a href='pegawai.php' title='Master Pegawai'>
			disini
		</a> untuk masuk ke halaman input master pegawai</br></br>";
		
	?>
</html>