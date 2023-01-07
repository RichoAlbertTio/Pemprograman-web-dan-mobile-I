<?php
// komentar 1 baris 

/* 
  banyak baris
*/

// Menampilkan data bisa pake echo / print 
echo "Nama : Richo Albert Tio<br>";
print "Nim : 2030305003099";

// campuran html
echo "<h1>Pemprograman mobile dan web I</h1>";

// print_r untuk array tahap debugging

// var_dump untuk mengetahui isi dari tipe data
var_dump(12);

echo "<br>";
// nama variabel ini tidak boleh di awali dengan angka tapi boleh menggandung angka 
$nama = "Nama Kamu";
echo $nama."<br>";


/* variabel mengandung angka
     $nama_1 = "ara ara"; / $nama1
   Error 
   $1nama ="ara ara";
*/


echo "Richo albert tio adalah " .$nama;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>

<body>
  <!-- php di dalam html -->
  <P>selamat malam, <?php echo $nama;?></P>
</body>

</html>