<?php
function myTest()
{
    $x = 5; // Lingkup lokal
    echo "<p>Variabel x di dalam fungsi adalah : $x</p>";
}
myTest();
// Menggunakan x diluar fungsi akan menghasilkan error
echo "<p>Variabel x di luar fungsi adalah: $x</p>";
?>