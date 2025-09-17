<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah $a dan $b : {$hasilTambah} <br>";
echo "Hasil Kurang $a dan $b : {$hasilKurang} <br>";
echo "Hasil Kali $a dan $b : {$hasilKali} <br>";
echo "Hasil Bagi $a dan $b : {$hasilBagi} <br>";
echo "Sisa Bagi $a dan $b : {$sisaBagi} <br>";
echo "Hasil Pangkat $a dan $b : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSamaDengan = $a <= $b;
$hasilLebihBesarSamaDengan = $a >= $b;

echo "<br> Hasil Sama $a dan $b : {$hasilSama} <br>";
echo "Hasil Tidak Sama $a dan $b : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil $a dan $b : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar $a dan $b : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama Dengan $a dan $b : {$hasilLebihKecilSamaDengan} <br>";
echo "Hasil Lebih Besar Sama Dengan $a dan $b : {$hasilLebihBesarSamaDengan} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br> Hasil AND $a dan $b : {$hasilAnd} <br>";
echo "Hasil OR $a dan $b : {$hasilOr} <br>";    
echo "Hasil NOT $a : {$hasilNotA} <br>";
echo "Hasil NOT $b : {$hasilNotB} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br> Hasil Identik $a dan $b : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik $a dan $b : {$hasilTidakIdentik} <br>";