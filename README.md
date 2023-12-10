1.Mobil.php

![image](https://github.com/azzamsauqi2004/lab10_php_oop/assets/116098921/d9b77671-7e15-4f80-bcd9-36d2460d31cf)

<?php


class Mobil
{
private $warna;
private $merk;
private $harga;
public function __construct()
{
$this->warna = "Biru";
$this->merk = "BMW";
$this->harga = "10000000";
}
public function gantiWarna ($warnaBaru)
{
$this->warna = $warnaBaru;
}
public function tampilWarna ()
{
echo "Warna mobilnya : " . $this->warna;
}
}
// membuat objek mobil
$a = new Mobil();
$b = new Mobil();
// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");

$a->tampilWarna();
// memanggil objek
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>


2.form_input.php
