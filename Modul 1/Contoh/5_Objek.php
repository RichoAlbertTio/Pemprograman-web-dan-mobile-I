<?php
class Car
{
    function Car()
    {
        $this->model = 'VW';
    }
}
// membuat sebuah objek
$herbie = new Car();
// Menunjukkan isi dari objek
echo $herbie->model;
?>