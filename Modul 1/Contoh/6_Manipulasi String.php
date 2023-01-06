<?php
// berfungsi menghitung panjang dari string.
echo strlen('Hello world!');

// panjang dari string “Hello world!” yaitu 12 karakter.
echo str_word_count('Hello world!');

// fungsi yang bisa digunakan untuk membalikkan susunan string,
echo strrev('Hello world!');

// fungsi untuk menemukan teks yang spesifik didalam sebuah string
echo strpos('Hello world!', 'world');

// fungsi untuk mengganti teks didalam string, yaitu dengan menggunakan fungsi str_replace(). Contoh berikut adalah kode program yang digunakan untuk mengganti teks “world” pada string “Hello world!” dengan teks “Dolly”.
echo str_replace('world', 'Dolly', 'Hello world!');
?>