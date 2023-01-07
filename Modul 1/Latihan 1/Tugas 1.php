<!DOCTYPE html>

<head>
	<!-- membuat title di atas webnya -->
	<title>Tugas Pengganti Laporan</title>
	<!-- judul -->
	<h1>Tugas Pengganti Laporan Modul 1</h1>
</head>
<!-- Membuat tabel untuk identitas -->
<table bgcolor="white" border="1" height="10%" width="20%">
	<tr>
		<td>Nama</td>
		<td>:Richo Albert Tio</td>
	</tr>
	<tr>
		<td>Nim </td>
		<td>:203030503099</td>
	</tr>
	<tr>
		<td>Praktikum </td>
		<td>:Pemprograman Web & Mobile I</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:C</td>
	</tr>
</table>

<body bgcolor="yellowgreen">
	<br>
	<?php
	// mendeklarasiakan masukan data pada array
	$keluarga = array(
		array("Nama : ", "NIK : ", "TanggaLahir : ", "Jenis Kelamin : ", "Gol Darah : "),
		array("Richo Albert Tio", "6202041211750001", '16-07-2002', "Laki-laki", "O"),
		array("Ronald Lio Angueraha", "6202040309730002", '03-09-1997', "Laki-laki", "B"),
		array("Rusita", "6202040803040001", '21-07-1971', "Perempuan", "B"),
	);

	// mendeklarasikan data array kedalam variabel
	$r = $keluarga[1][2];
	$s = $keluarga[2][2];
	$t = $keluarga[3][2];

	// untuk  menghitung umur dari 3 data
	$tanggal = new DateTime($r);
	$today = new DateTime('today');
	$y1 = $today->diff($tanggal)->y;

	$tanggal = new DateTime($s);
	$today = new DateTime('today');
	$y2 = $today->diff($tanggal)->y;

	$tanggal = new DateTime($t);
	$today = new DateTime('today');
	$y3 = $today->diff($tanggal)->y;


	echo "<br> <br>";
	// menampilkan data-data yang ada di array
	echo " <b> Menampilkan Data Anggota Keluarga 1 : </b><br>";
	echo $keluarga[0][0] . $keluarga[1][0] . "<br>";
	echo $keluarga[0][1] . $keluarga[1][1] . "<br>";
	echo $keluarga[0][2] . $keluarga[1][2] . "<br>";
	echo "Umur : " . $y1 . "<br>";
	echo $keluarga[0][3] . $keluarga[1][3] . "<br>";
	echo $keluarga[0][4] . $keluarga[1][4] . "<br>";
	echo "<br>";

	echo "<b> Menampilkan Data Anggota Keluarga 2 </b>: <br>";
	echo $keluarga[0][0] . $keluarga[2][0] . "<br>";
	echo $keluarga[0][1] . $keluarga[2][1] . "<br>";
	echo $keluarga[0][2] . $keluarga[2][2] . "<br>";
	echo "Umur : " . $y2 . "<br>";
	echo $keluarga[0][3] . $keluarga[2][3] . "<br>";
	echo $keluarga[0][4] . $keluarga[2][4] . "<br>";
	echo "<br>";

	echo "<b> Menampilkan Data Anggota Keluarga 3 </b>: <br>";
	echo $keluarga[0][0] . $keluarga[3][0] . "<br>";
	echo $keluarga[0][1] . $keluarga[3][1] . "<br>";
	echo $keluarga[0][2] . $keluarga[3][2] . "<br>";
	echo "Umur : " . $y3 . "<br>";
	echo $keluarga[0][3] . $keluarga[3][3] . "<br>";
	echo $keluarga[0][4] . $keluarga[3][4] . "<br>";



	echo "<br>";
	// Menampilkan Kebalikan Kata
	echo "<b>Menampilkan Kebalikan Kata: </b><br>";
	for ($i = 1; $i < count($keluarga); $i++) {
		echo strrev($keluarga[$i][0]) . "<br>";
	}

	echo "<br> <br>";
	echo " <b> Menampilkan Jumlah Huruf Vokal dan Konsonan pada nama: </b><br>";
	// fungsi ini digunakan untuk menentukan huruf vokal dan konsonan  
	function test($str)
	{
		$vCount = 0;
		$cCount = 0;
		for ($i = 0; $i < strlen($str); $i++) {
			if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {
				$vCount++;
			} else if ($str[$i] >= 'a' && $str[$i] <= 'z') {
				$cCount++;
			}
		}
		echo "Jumlah huruf vokal : ", $vCount . ", ";
		echo "Jumlah huruf konsonan : ", $cCount;
		echo "<br>";
	}
	// menampilkan jumlah huruf vokal dan konsonan pada nama
	for ($i = 1; $i < count($keluarga); $i++) {
		print_r(test($keluarga[$i][0]));
	}


	echo "<br> <br>";
	// Menampilkan Urutan Umur dari Terbesar
	echo "<b>Menampilkan Urutan Umur dari Terbesar : </b><br>";
	$age = array($keluarga[1][0] => $y1, $keluarga[2][0] => $y2, $keluarga[3][0] => $y3);
	arsort($age);
	foreach ($age as $y => $x) {
		echo $y . ": " . $x;
		echo "<br>";
	}

	// menampilkan  jumlah kata dan huruf pada nama
	echo "<br>";
	echo "<b>Menampilkan jumlah kata dan huruf pada nama</b>";
	for ($i = 1; $i < count($keluarga); $i++) {
		echo "<br>" . $keluarga[$i][0] . "=" . strlen($keluarga[$i][0]) . " huruf, " . str_word_count($keluarga[$i][0]) . " kata ";
		echo " ";
	}
	?>
</body>
</html>

