<html>
	<head>
	</head>
	<body>
	<?php 
	echo "<b> Hasil Inputan Form </b>";
	if (isset($_POST['Ayo'])) {
	$dir_upload = "foto/";
	$nama_file = $_FILES['Telusuri']['name'];
	echo "<br><img src='./foto/".$nama_file."'><br>";
	echo "<br> Nama Lengkap: ".$_POST['nama'];
	echo "<br> Tempat Tanggal Lahir : ".$_POST['tempat'];
	echo "<br> Tanggal Lahir : ".$_POST['tanggal'];
	echo "<br> Jenis Kelamin : ".$_POST['jk'];
	echo "<br> Pendidikan Terakhir : ".$_POST['sklh'];
	echo "<br> Jabatan : ".$_POST['Direktur'];
	echo "<br> Jumlah Anak : ".$_POST['jml'];
	echo "<br>";
	
	if (is_uploaded_file($_FILES['Telusuri']['tmp_name'])) {
		
			$cek = move_uploaded_file($_FILES['Telusuri']['tmp_name'],
			$dir_upload.$nama_file);
		
	}
	echo "<br> <b> Perhitungan Gaji </b>";
	echo "<br> <br>";

	$jabatan=$_POST['Direktur'];
	$sekolah=$_POST['sklh'];
	$jumlah=$_POST['jml'];
	$gp;	$tp;	$tk;
	$gk;	$pajak; $gb;
	
	//harga gaji pokok
	if ($jabatan=='Direktur'){
		$gp="1500000";
		echo "Gaji Pokok= Rp. $gp";
	}
	elseif ($jabatan=='Kepala Bagian'){
		$gp="1000000";
		echo "Gaji Pokok= Rp. $gp";
	}
	elseif($jabatan=='Staff'){
		$gp="750000";
		echo "Gaji Pokok= Rp. $gp";
	}
	else {
		echo "Bukan Pegawai";
	}

	//harga tunjangan pendidikan
	if ($sekolah=='SMA'){
		$tp="0";
		echo "<br>";
		echo "Tunjangan Pendidikan= Rp. $tp";
	}
	elseif ($sekolah=='D3'){
		$tp="250000";
		echo "<br>";
		echo "Tunjangan Pendidikan= Rp. $tp";
	}
	elseif($sekolah=='S1'){
		$tp="500000";
		echo "<br>";
		echo "Tunjangan Pendidikan= Rp. $tp";
	}
	else {
		echo "<br>";
		echo "Tidak ada Tunjangan";
	}

	//harga tunjangan keluarga
	if ($jumlah== 0){
		$tk="0";
		echo "<br>";
		echo "Tunjangan Keluarga= Rp. $tk";
	}
	elseif ($jumlah== 1){
		$tk="100000";
		echo "<br>";
		echo "Tunjangan Keluarga= Rp. $tk";
	}
	elseif($jumlah== 2){
		$tk="200000";
		echo "<br>";
		echo "Tunjangan Keluarga= Rp. $tk";
	}
	else {
		$tk="300000";
		echo "<br>";
		echo "Tunjangan Keluarga= Rp. $tk";
	}

	//harga gaji kotor
	$gk=($gp+$tp+$tk);
	echo "<br> Gaji Kotor= Rp. $gk";

	//harga pajak
	if ($gk<1000000){
		$pajak= 0;
	}
	elseif ($gk>=1000000 && $gk<=2000000){
		$pajak=((10*$gk)/100);
		echo "<br> Pajak = Rp. $pajak";
	}
	elseif ($gk>2000000){
		$pajak=((15*$gk)/100);
		echo "<br> Pajak= Rp. $pajak";
	}
	else{
		echo "<br>";
	}

	//harga gaji bersih
	$gb=($gk-$pajak);
	echo "<br> Gaji Bersih= Rp. $gb";

}
	
	?>
	</body>
</html>