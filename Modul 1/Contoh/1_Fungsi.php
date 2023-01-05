<?php
$x = 5; // lingkup global
function myTest($x)
{
    //menggunakan x didalam fungsi ini akan menghasilkan error.
    echo "<p>Variabel x di dalam fungsi adalah : $x</p>";
}
myTest($x);
// echo "<p>Variabel x di luar fungsi adalah : $x</p>";
?>